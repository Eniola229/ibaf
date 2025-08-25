<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DonationController extends Controller
{
    // Show donation form
    public function index()
    {
        return view('donate');
    }

    // Initialize Paystack Payment
    public function payWithPaystack(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'amount' => 'required|numeric|min:100',
        ]);

        $donation = Donation::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'amount' => $validated['amount'],
            'payment_method' => 'paystack',
        ]);

        $amountKobo = $donation->amount * 100;

        $response = Http::withToken(env('PAYSTACK_SECRET_KEY'))
            ->post('https://api.paystack.co/transaction/initialize', [
                'email' => $donation->email,
                'amount' => $amountKobo,
                'callback_url' => route('paystack.callback'),
                'metadata' => ['donation_id' => $donation->id]
            ]);

        return redirect($response->json()['data']['authorization_url']);
    }

    // Paystack callback
    public function paystackCallback(Request $request)
    {
        $reference = $request->reference;
        $response = Http::withToken(env('PAYSTACK_SECRET_KEY'))
            ->get("https://api.paystack.co/transaction/verify/{$reference}");

        if ($response->json()['data']['status'] === 'success') {
            $donationId = $response->json()['data']['metadata']['donation_id'];
            $donation = Donation::find($donationId);
            $donation->update([
                'payment_reference' => $reference,
                'status' => 'success'
            ]);
            return redirect()->route('donate')->with('success', 'Donation successful!');
        }
        return redirect()->route('donate')->with('error', 'Payment failed.');
    }

    // Initialize Korapay Payment
    public function payWithKora(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'amount' => 'required|numeric|min:100',
        ]);

        $donation = Donation::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'amount' => $validated['amount'],
            'payment_method' => 'korapay',
        ]);

        $response = Http::withToken(env('KORAPAY_SECRET_KEY'))
            ->post('https://api.korapay.com/merchant/api/v1/charges/initialize', [
                'reference' => uniqid(),
                'amount' => $donation->amount,
                'currency' => 'NGN',
                'customer' => [
                    'name' => $donation->name,
                    'email' => $donation->email
                ],
                'redirect_url' => route('kora.callback'),
                'metadata' => ['donation_id' => $donation->id]
            ]);

        return redirect($response->json()['data']['checkout_url']);
    }

    // Kora callback
    public function koraCallback(Request $request)
    {
        // In production, verify with Kora API
        return redirect()->route('donate')->with('success', 'Donation successful via Korapay!');
    }
}

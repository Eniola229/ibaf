    <!-- START Header-nav -->
    @include('components.nav')
    <!-- END header-nav -->
    
    
    <div class="hero-wrap" style="background-image: url('https://res.cloudinary.com/dldkoa0wg/image/upload/v1755250933/african-children-enjoying-life_d9ylbf.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{ url('/') }}">Home</a></span> <span>Donate</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Donate</h1>
          </div>
        </div>
      </div>
    </div>
  <section class="ftco-section contact-section ftco-degree-bg">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12 mb-4 text-center">
          <h2 class="h4">Make a Donation</h2>
          <p>Your contribution helps us support education, training, and empowerment programs for vulnerable communities.</p>
        </div>
      </div>

      @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
      @endif
      @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
      @endif

      <div class="row block-9 justify-content-center">
        <div class="col-md-6">
          <form method="POST" action="" id="donationForm">
            @csrf
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Your Email" required>
            </div>
            <div class="form-group">
              <input type="number" name="amount" class="form-control" placeholder="Donation Amount (₦)" required>
            </div>

            <div class="form-group text-center">
              <button type="submit" formaction="{{ route('paystack.pay') }}" class="btn btn-primary py-3 px-5" style="background-color: #f3035c;">Donate with Paystack</button>
              <button type="submit" formaction="{{ route('kora.pay') }}" class="btn btn-success py-3 px-5" style="border: none;">Donate with Kora</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

    </section>
<section class="ftco-section-3 img" style="background-image: url(https://res.cloudinary.com/dldkoa0wg/image/upload/v1755261352/main-slider-2-3_zredqi.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex">
            <div class="col-md-6 d-flex ftco-animate">
                <div class="img img-2 align-self-stretch" style="background-image: url(https://res.cloudinary.com/dldkoa0wg/image/upload/v1755261352/main-slider-2-3_zredqi.jpg);"></div>
            </div>
            <div class="col-md-6 volunteer pl-md-5 ftco-animate">
                <h3 class="mb-3">Join our team</h3>
                <form action="#" class="volunter-form">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-white py-3 px-5">
            </div>
          </form>
            </div>              
            </div>
        </div>
    </section>

<!-- Paystack Script -->
<script src="https://js.paystack.co/v1/inline.js"></script>

<script>
  function payWithPaystack() {
    let form = document.getElementById('donationForm');
    let name = form.name.value;
    let email = form.email.value;
    let amount = form.amount.value * 100; // convert to kobo

    var handler = PaystackPop.setup({
      key: 'YOUR_PAYSTACK_PUBLIC_KEY',
      email: email,
      amount: amount,
      currency: 'NGN',
      ref: 'DON_' + Math.floor((Math.random() * 1000000000) + 1),
      callback: function(response) {
        // Send payment info to backend to save in DB
        fetch('/save-donation', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({
            name: name,
            email: email,
            amount: amount / 100,
            payment_ref: response.reference,
            payment_gateway: 'Paystack'
          })
        }).then(res => res.json()).then(data => {
          alert("Thank you for your donation!");
        });
      },
      onClose: function() {
        alert('Payment window closed.');
      }
    });
    handler.openIframe();
  }

  function payWithKora() {
    alert('Kora payment integration will go here.');
    // Similar setup for Kora API
  }
</script>

 @include('components.footer')

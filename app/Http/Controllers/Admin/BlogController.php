<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('admin.blogs', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'content'     => 'required',
            'cover_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $slug = \Str::slug($request->title);

        // Upload new image to Cloudinary if provided
        $imageUrl = null;
        if ($request->hasFile('cover_image')) {
            $uploadCloudinary = cloudinary()->uploadApi()->upload(
                $request->file('cover_image')->getRealPath(),
                [
                    'folder' => 'ibaf/blogs',
                    'resource_type' => 'auto',
                    'transformation' => [
                        'quality' => 'auto',
                        'fetch_format' => 'auto'
                    ]
                ]
            );
            $imageUrl = $uploadCloudinary['secure_url'];
        }

        Blog::create([
            'title'       => $request->title,
            'slug'        => $slug,
            'content'     => $request->content,
            'cover_image' => $imageUrl,
            'status'      => 'draft',
        ]);

        return redirect()->to('admin/blogs')->with('success', 'Blog created successfully!');
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs-edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'content'     => 'required',
            'cover_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $slug = \Str::slug($request->title);

        if ($request->hasFile('cover_image')) {
            $uploadCloudinary = cloudinary()->uploadApi()->upload(
                $request->file('cover_image')->getRealPath(),
                [
                    'folder' => 'ibaf/blogs',
                    'resource_type' => 'auto',
                    'transformation' => [
                        'quality' => 'auto',
                        'fetch_format' => 'auto'
                    ]
                ]
            );
            $imageUrl = $uploadCloudinary['secure_url'];
        } else {
            $imageUrl = $blog->cover_image;
        }

        $blog->update([
            'title'       => $request->title,
            'slug'        => $slug,
            'content'     => $request->content,
            'cover_image' => $imageUrl,
            'status'      => $request->status ?? $blog->status,
        ]);

        return redirect()->to('admin/blogs')->with('success', 'Blog updated successfully!');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return back()->with('success', 'Blog deleted successfully!');
    }
}

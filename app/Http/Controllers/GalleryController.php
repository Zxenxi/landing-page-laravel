<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\Terverifikasi;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    // Display the gallery page with all gallery items
    public function index()
    {
        $galleries = Gallery::all();
        return view('gallery.index', ['galleries' => $galleries]);
    }
    

    public function showGallery()
    {
        $galleries = Gallery::all(); // Fetch all gallery items from the database
      // Fetch testimonials if needed
        
        // Ensure you return the view with the necessary data
        return view('gallery', compact('galleries')); // Pass both variables to the view
    }

    // Show the form to create a new gallery item
    public function create()
    {
        return view('gallery.create');
    }

    // Store a new gallery item
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        // Store the uploaded image
        $imagePath = $request->file('image')->store('images', 'public');

        Gallery::create([
            'title' => $request->input('title'),
            'image_path' => $imagePath,
        ]);

        return redirect()->route('gallery.index')->with('success', 'Image uploaded successfully.');
    }

    // Show the form for editing a gallery item
    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('gallery.edit', ['gallery' => $gallery]);
    }

    // Update a gallery item
    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Store the new uploaded image
            $imagePath = $request->file('image')->store('images', 'public');
            $gallery->image_path = $imagePath;
        }

        $gallery->title = $request->input('title');
        $gallery->save();

        return redirect()->route('gallery.index')->with('success', 'Gallery updated successfully.');
    }

    // Delete a gallery item
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        // Optionally delete the image from storage
        Storage::disk('public')->delete($gallery->image_path);
        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'Gallery item deleted successfully.');
    }
}
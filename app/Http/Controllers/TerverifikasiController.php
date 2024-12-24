<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Terverifikasi;
use Illuminate\Routing\Controller;

class TerverifikasiController extends Controller
{
    public function index()
    {
        $terverifikasis = Terverifikasi::all();
        return view('terverifikasi', ['terverifikasis' => $terverifikasis]);
    }
    public function showGallery()
    {
        $galleries = Gallery::all(); // Fetch all gallery items from the database
      // Fetch testimonials if needed
        
        // Ensure you return the view with the necessary data
        return view('gallery', compact('galleries')); // Pass both variables to the view
    }

}
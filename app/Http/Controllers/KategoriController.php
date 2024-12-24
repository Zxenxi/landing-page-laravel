<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    // Method to show the marching band category
    public function marchingband()
    {
        return view('kategori.marchingband');
    }

    // Method to show the gamelan category
    public function gamelan()
    {
        return view('kategori.gamelan');
    }

    // Method to show the "lihat semua kategori" page
    public function drumb()
    {
        return view('kategori.drumb');
    }
    public function hadroh()
    {
        return view('kategori.hadroh');
    }

    // Method to show the gamelan category
    public function kolintang()
    {
        return view('kategori.kolintang');
    }

    // Method to show the "lihat semua kategori" page
    public function kategori()
    {
        return view('kategori.kategori');
    }
    public function angklung()
    {
        return view('kategori.angklung');
    }
}
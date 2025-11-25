<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewUserData extends Controller
{
    public function index()
    {
        // Data produk statis (tanpa database)
        $produk = [
            ['id' => 1, 'nama' => 'Rumah', 'harga' => 1000000000],
            ['id' => 2, 'nama' => 'Apartement', 'harga' => 500000000],
            ['id' => 3, 'nama' => 'Kost', 'harga' => 1500000],
        ];

        // Mengirim data ke view
        return view('Data', ['produk' => $produk]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        echo "Nim: 2041723008";
        echo "<br>";
        echo "Nama: Firman Nugroho";
    }

    public function aboutview(){
        return view('praktikum1.about-us', ['link' => 'about-us']);
    }
}

<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    public function hello()
    {
        return view("hello");
    }

    public function hii($nama)
    {
        return view("hii")->with("nama", $nama);
    }

    public function apaKabar($gelar, $nama)
    {
        return "Hii $gelar $nama";
    }
}

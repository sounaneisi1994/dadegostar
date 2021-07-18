<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

//use Illuminate\View\View;

class MainController extends Controller
{
    //
    public function index()
    {
       return view('search');
    }

    public function search(Request $request)
    {
        $url = "https://www.digikala.com/product/".$request->product;

        try {
            $html = file_get_contents($url);

        } catch (\Exception $e) {
            return $e->getMessage();
        }

        $htmlWithImage = str_replace('data-src', 'src', $html);
        $htmlWithSrc = str_replace('href="', 'href="https://www.digikala.com', $htmlWithImage);
        echo str_replace('data-src', 'src', $htmlWithSrc);



//        return view('product');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Portfolio;
use App\Service;
use App\Coder;

class IndexController extends Controller
{
    //
    public function execute(Request $request)
    {
        $pages=Page::all();
        $portfolios=Portfolio::all();
        $services=Service::all();
        $coders=Coder::all();


        return view('site.index');
    }



}

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

        $menu=array();
        foreach ($pages as $page)
        {
            $item=array('title'=>$page->name, 'alias'=>$page->alias);
            array_push($menu,$item);
        }

        $item=array('title'=>'Works', 'alias'=>'work');
        array_push($menu,$item);
        $item=array('title'=>'Team', 'alias'=>'about');
        array_push($menu,$item);
        $item=array('title'=>'Services', 'alias'=>'hire');
        array_push($menu,$item);

        return view('site.index', array(
                                                'menu'=>$menu,
                                                'pages'=>$pages,
                                                'portfolios'=>$portfolios,
                                                'services'=>$services,
                                                'coders'=>$coders
        ));
    }



}

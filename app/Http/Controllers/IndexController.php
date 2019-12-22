<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Portfolio;
use App\Service;
use App\Coder;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    //
    public function execute(Request $request)
    {
        /*
        if ($request->isMethod('post')){

            $messages = [
                'requred'=> 'поле обязательно к заполнению',
                'email'=> 'поле должно соответствовать email адресу'
            ];
            $this->validate($request, [
                'name' => 'required|max:255',
                'email' => 'required|email'

            ], $messages);

            /
            $data = $request->all();
            $result=Mail::send('site.email',[$data=>'data'], function ($message) use ($data) {
                $mail_admin=env('MAIL_ADMIN');
                $message->from($data['email'], $data['name']);
                $message->to($mail_admin, 'to Admin')->subject('question');
            });

            if ($result) {
                return redirect()->route('home')->with('status', 'Email is send' );
            }

        }
        */
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

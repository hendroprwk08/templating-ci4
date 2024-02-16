<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function faqs(): string
    {
        $data = [
            'data_faqs' => array(
                array( 'question' => 'apakah 1' , 'answer' => 'jawab 1' ),
                array( 'question' => 'apakah 2' , 'answer' => 'jawab 2' ),
                array( 'question' => 'apakah 3' , 'answer' => 'jawab 3' )
        )];
        
        return view('faqs', $data);
    }

    public function about(): string
    {
        return view('about');
    }

    public function contact(): string
    {
        return view('contact', [ 'name'=> 'Hendro Purwoko' ]);
    }

    public function partial(): string
    {
        // setiap modul terpisah
        return view('partial');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        $profile =  DB::table('profil-website')->where('id',1)->first();
        $service = DB::table('services')->get();
        $faq = DB::table('faq')->get();
        $promo = DB::table('promos')->get();
        // dd($profile);
        return view('index',[
                'profiles'=>$profile,
                'services'=>$service,
                'faqs'=>$faq,
                'promos'=>$promo
            ]);
    }

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'		=> 'bail|required', 
			'email'		=> 'bail|required|email', 
			'phone'	    => 'bail|required|numeric',
			'subject'	=> 'bail|required',
			'message'	=> 'bail|required',
            'g-recaptcha-response' => 'required|recaptchav3:register,0.5'
        ]);
   
        dd('done');
    }
}

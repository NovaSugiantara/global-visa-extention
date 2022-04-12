<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Appsetting;


class AppSettingController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function index()
    {
        $profile =  DB::table('profil-website')->where('id',1)->first();
        $data = [
            'count_data' => DB::table('profil-website')->count(),
            'menu'       => 'admin.menu.v_menu_admin',
            'content'    => 'admin.content.view_app_settings',
            'title'    => 'App Settings',
            'profiles' => $profile
        ];
        return view('admin.layouts.v_template',$data);
    }

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function store(Request $request)
    {
        
    }

    public function update(Request $request, $id){
        $profile            = Appsetting::find($id);
        $profile->phone     = $request->phone;
        $profile->email     = $request->email;
        $profile->alamat    = $request->alamat;
        $profile->descriptions    = $request->descriptions;
        $profile->save();
    
        return redirect('/admin/app_settings')->with('success','Item updated successfully!');
    }
}

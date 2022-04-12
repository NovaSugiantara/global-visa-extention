<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Regulations;


class RegulationsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function index()
    {
        $regulation =  DB::table('regulations')->where('id',1)->first();
        $data = [
            'count_data' => DB::table('regulations')->count(),
            'menu'       => 'admin.menu.v_menu_admin',
            'content'    => 'admin.content.view_regulations',
            'title'    => 'Regulations',
            'regulations' => $regulation
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
        $regulation                     = Regulations::find($id);
        $regulation->descriptions       = $request->descriptions;
        $regulation->save();
    
        return redirect('/admin/regulations')->with('success','Item updated successfully!');
    }
}

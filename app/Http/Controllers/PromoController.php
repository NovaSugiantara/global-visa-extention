<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Models\Promo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class PromoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function index(Request $request)
    {
        $data = [
            'count_data' => DB::table('promos')->count(),
            'menu'       => 'admin.menu.v_menu_admin',
            'content'    => 'admin.content.view_package',
            'title'    => 'Table Promo',
            'promos'    => DB::table('promos')->get()
        ];

        // if ($request->ajax()) {
        //     $q_promo = Promo::all();
        //     return Datatables::of($q_promo)
        //             ->addIndexColumn()
        //             ->addColumn('action', function($row){
     
        //                 $btn = '<div data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="btn btn-sm btn-icon btn-outline-success btn-circle mr-2 edit editUser"><i class=" fi-rr-edit"></i></div>';
        //                 $btn = $btn.' <div data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-sm btn-icon btn-outline-danger btn-circle mr-2 deleteUser"><i class="fi-rr-trash"></i></div>';
 
        //                  return $btn;
        //             })
        //             ->rawColumns(['action'])
        //             ->make(true);
        // }
        return view('admin.layouts.v_template',$data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Promo::updateOrCreate(['id' => $request->id],
                [
                 'name' => $request->name,
                 'currency' => $request->currency,
                 'price'=> $request->price,
                'extras_id' => $request->extras_id
                ]);        

        return response()->json(['success'=>'Promo saved successfully!']);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $Promo = Promo::findOrfail($id);
        // return response()->json($Promo,200);
        $data = [
            'count_data' => DB::table('promos')->count(),
            'menu'       => 'admin.menu.v_menu_admin',
            'content'    => 'admin.content.view_promoEdit',
            'title'    => 'Edit Promo',
            'promos'    => $Promo
        ];
        
        return view('admin.layouts.v_template',$data);

    }

    public function update(Request $request, $id)
    {
        //
        $promo = Promo::find($id)->update($request->all()); 
        return redirect('/admin/promo')->with('success','Item updated successfully!');
    }

    public function destroy($id)
    {
        Promo::find($id)->delete();

        // return response()->json(['success'=>'Prommo deleted!']);
        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Models\Services;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function index(Request $request)
    {
        $data = [
            'count_data' => DB::table('services')->count(),
            'menu'       => 'admin.menu.v_menu_admin',
            'content'    => 'admin.content.view_service',
            'title'    => 'Table List Service',
            'service'    => DB::table('services')->get()
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
        // Service::updateOrCreate(['id' => $request->id],
        //         [
        //          'name' => $request->name,
        //          'currency' => $request->currency,
        //          'price'=> $request->price,
        //         'extras_id' => $request->extras_id
        //         ]);        

        // return response()->json(['success'=>'Promo saved successfully!']);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $service = DB::table('services')->find($id);
        // return response()->json($Promo,200);
        $data = [
            'count_data' => DB::table('services')->count(),
            'menu'       => 'admin.menu.v_menu_admin',
            'content'    => 'admin.content.view_serviceEdit',
            'title'    => 'Edit Service',
            'services'    => $service
        ];
        
        return view('admin.layouts.v_template',$data);

    }

    public function update(Request $request, $id)
    {
        //
        $services            = Services::find($id);
        $services->name      = $request->name;
        $services->detail    = $request->description;
        $services->save();
        return redirect('/admin/service')->with('success','Item updated successfully!');
    }

    public function destroy($id)
    {
        Services::find($id)->delete();

        // return response()->json(['success'=>'Prommo deleted!']);
        
    }
}

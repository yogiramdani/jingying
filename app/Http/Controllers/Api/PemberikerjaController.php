<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// model
use App\Models\Client;
use App\Models\Category;

class PemberikerjaController extends Controller
{
    public function index(){
        $data = Client::where('deleted',0);
        
        return response()->json([
            'data' => $data->get(),
            'recordsTotal'=>$data->count(),
            'recordsFiltered'=>$data->count(),
            'message' => 'Users retrieved successfully.',
        ], 200);
    }

    public function soft_delete($id){
        $data = Client::where('id',$id)->update(['deleted'=>1]);
        
        return response()->json([
            'error'=>false,
            'message' => 'Users retrieved successfully.',
        ], 200);
    }

    public function create_category(Request $request){
        $judul = $request->input('judul');

        $insertId = Category::insertGetId(['judul' => $judul]);

        $data=[];
        if($insertId){
            $data = Category::find($insertId);
        }
        
        return response()->json([
            'error'=>false,
            'data'=>$data,
            'message' => $insertId,
        ], 200);
    }
}

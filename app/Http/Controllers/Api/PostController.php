<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $data=Post::select("posts.*","clients.nama_perusahaan")->join("clients","clients.id","=","posts.id_client")->get();

        return response()->json([
            'error'=>false,
            'records'=>$data,
            'message' => 'Users retrieved successfully.',
        ], 200);
    } 

    public function soft_delete($id){
        $data = Post::where('id',$id)->delete();
        
        return response()->json([
            'error'=>false,
            'message' => 'Users retrieved successfully.',
        ], 200);
    }
}

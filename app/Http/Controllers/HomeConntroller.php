<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Category;

class HomeConntroller extends Controller
{
    public function index(){
        $session =session('locale')?session('locale'):"en";
        $job = Post::select("posts.*","clients.nama_perusahaan")->join("clients","clients.id","=","posts.id_client")
                    ->where("content_lang",$session)
                    ->limit(9)
                    ->get();
        if(!empty($job)){
            foreach($job as $row){
                $filter=[];
                if(!empty($row->category)){
                    foreach(json_decode($row->category) as $key=>$val){
                        $filter[]=$val;
                    }
                }
                $category = Category::whereIn('id',$filter)->get();
                $row->category = json_encode($category);
            }
        }

        $data['job'] = $job;
        return view('home',$data);
    }

    public function contact_us(){
        $data=[];
        return view('contact',$data);
    }

    public function open_jobs(){
        $column = DB::select('SHOW COLUMNS FROM clients');

        $label = [];
        foreach ($column as $row) {
            if ($row->Field != 'id' && $row->Field != 'created_at' && $row->Field != 'updated_at' && $row->Field != 'deleted') {
                $label[] = [
                    "label" => strtoupper(str_replace('_', ' ', $row->Field)),
                    "name" => $row->Field
                ];
            }
        }


        $data['label']=$label;

        return view('pemberi_kerja.form',$data);
    }
}

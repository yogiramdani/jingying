<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelamar;
class DashboardController extends Controller
{
    public function index(){    
        $data['pelamar']=Pelamar::select("pelamars.*",
                                         "posts.judul",
                                         "clients.nama_perusahaan")
                                ->join("posts","posts.unix_code","=","pelamars.post_id")
                                ->join("clients","clients.id","=","posts.id_client")
                                ->where("posts.content_lang","id")
                                ->get();
        return view('dashboard',$data);
    }
}

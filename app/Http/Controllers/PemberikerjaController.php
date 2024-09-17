<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Client;
use App\Models\Category;
use App\Models\Post;
class PemberikerjaController extends Controller
{
    public function index(){

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

        return view('pemberi_kerja.index',$data);
    }

    public function detail($id){

        $data["record"]= Client::where('id',$id)->first();
        $data["category"] = Category::all();
        return view('pemberi_kerja.post',$data);
    }

    public function store(Request $request){
        $data= $request->all();

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

        if (!empty($data)) {
            $insert = [];
            foreach ($column as $row) {
                // Ensure the key exists in the $data array before assigning
                if (isset($data[$row->Field])) {
                    $insert[$row->Field] = $data[$row->Field];
                }
            }

    
            // Insert data into the 'clients' table
            Client::insert($insert);

            return redirect()->route('pemberi-kerja')->with('status', 'Operation successful!');

        }
        
    }

    public function front_store(Request $request){
        $data= $request->all();

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

        if (!empty($data)) {
            $insert = [];
            foreach ($column as $row) {
                // Ensure the key exists in the $data array before assigning
                if (isset($data[$row->Field])) {
                    $insert[$row->Field] = $data[$row->Field];
                }
            }

    
            // Insert data into the 'clients' table
            Client::insert($insert);

            return redirect()->route('home')->with('status', 'Operation successful!');

        }
        
    }

    public function job_posting(Request $request){
        $data = $request->all();

        $insert = [
            "judul" => $data['judul'],
            "category" => json_encode($data['category']),
            "deskripsi" => $data['deskripsi'],
            "gaji" => $data['gaji'],
            "id_client" => $data['id_client'],
            "created_at" => now(),  // Add timestamps if necessary
            "updated_at" => now(),
            "content_lang"=>"id"
        ];

        // Use insertGetId to get the inserted ID
        $id = DB::table('posts')->insertGetId($insert);
        if(!empty($id)){
            Post::where('id',$id)->update(["unix_code"=>"A-{$id}"]);
        }
        

        return redirect()->route('post')->with('status', 'Operation successful!');
    }

    
}

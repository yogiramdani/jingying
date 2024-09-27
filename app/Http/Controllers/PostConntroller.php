<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
class PostConntroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data["records"]=Post::select("posts.*","clients.nama_perusahaan")
                                ->join("clients","clients.id","=","posts.id_client")
                                ->where("content_lang","id")
                                ->get();
        if(!empty($data["records"])){
            foreach($data["records"] as $row){
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

        return view('post.index',$data);
    }

    public function all_jobs(Request $request)
    {
        $job = Post::select("posts.*","clients.nama_perusahaan")->join("clients","clients.id","=","posts.id_client")->get();
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

        return view('post.list_jobs',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $job = Post::select("posts.*", "clients.nama_perusahaan","clients.lokasi")
            ->join("clients", "clients.id", "=", "posts.id_client")
            ->where('posts.id', $id)
            ->first();

        if (!empty($job)) {
            $categoryIds = json_decode($job->category, true); // Decode the JSON string to an array

            if (!empty($categoryIds) && is_array($categoryIds)) {
                $categories = Category::whereIn('id', $categoryIds)->get();
                $job->category = json_encode($categories); // Encode the categories collection as JSON
            } else {
                $job->category = json_encode([]); // Set to an empty JSON array if no valid category IDs
            }
        }

        $data['job'] = $job;

        return view('post.detail',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $job = Post::select("posts.*", "clients.nama_perusahaan","clients.lokasi")
            ->join("clients", "clients.id", "=", "posts.id_client")
            ->where('posts.id', $id)
            ->first();

        if (!empty($job)) {
            $categoryIds = json_decode($job->category, true); // Decode the JSON string to an array

            if (!empty($categoryIds) && is_array($categoryIds)) {
                $categories = Category::whereIn('id', $categoryIds)->get();
                $job->category = json_encode($categories); // Encode the categories collection as JSON
            } else {
                $job->category = json_encode([]); // Set to an empty JSON array if no valid category IDs
            }
        }

        $data['record'] = $job;
        $data["category"] = Category::all();

        return view('post.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = $request->all();

        if (isset($data['poster']) && $data['poster']->isValid()) {
            // Save the file in the 'public/posters' directory and get the filename
            $posterFileName = $data['poster']->store('posters', 'public');
        } else {
            $posterFileName = null; // Handle the case where no file is uploaded
        }

        $insert = [
            "judul" => $data['judul'],
            "category" => json_encode($data['category']),
            "deskripsi" => $data['deskripsi'],
            "gaji" => $data['gaji'],
            "created_at" => now(),  // Add timestamps if necessary
            "updated_at" => now(),
            "poster" => $posterFileName,
            "content_lang"=>"id"
        ];

        // Use insertGetId to get the inserted ID
        $id = DB::table('posts')->where('id',$data['id'])->update($insert);
        
        

        return redirect()->route('post')->with('status', 'Operation successful!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pelamar;

class PencarikerjaController extends Controller
{
    public function save_pelamar(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'post_id' => 'required',
            'nama_lengkap' => 'required|string|max:255',
            'alamat' => 'required|string',
            'nomor_wa' => 'required|string|max:20',
            'we_chat' => 'nullable|string|max:50',
            'kelulusan' => 'required|string|max:4',
            'gaji_permintaan' => 'required|integer',
            'mandarin_level' => 'required|integer|min:0|max:100',
            'file_cv' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2048', // Restrict file type and size
        ]);

        // Handle file upload
        if ($request->hasFile('file_cv')) {
            $file = $request->file('file_cv');
            $filePath = $file->store('uploads/cv', 'public'); // Store the file in the 'public/uploads/cv' directory
            $validatedData['file_cv'] = $filePath; // Save the file path to the validated data array
        }

        $validatedData['created_at']=date('Y-m-d');
        // Use insert to save the validated data to the database
        Pelamar::insert($validatedData);

        return response()->json([
            'data' => $validatedData,
            'message' => 'Application submitted successfully.',
            'success'=>true
        ], 200);
    }
}

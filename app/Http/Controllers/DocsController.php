<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocsController extends Controller
{
    public function index($docs){
        $markdownContent = file_get_contents(resource_path('views/manual/auth/login.md'));
        $htmlContent = convertMarkdownToHtml($markdownContent);

        return view('docs', ['content' => $htmlContent]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index(Request $request)
    {
    	$file = $request->file('filepond');
    	return $file->store('images');
    }
}

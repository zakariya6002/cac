<?php

namespace App\Http\Controllers\File;

use App\Models\File;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
    public function index()
    {
        return view('teacher.files.index');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = $file->getClientOriginalName();
            $folder = uniqid() . '-' . now()->timestamp;
            $file->storeAs('files/12121212' . $folder, $filename);

            File::create([
                'name'=>$filename,
                'path'=>$folder
            ]);

            return $folder;
        }
        $user = User::find();
        $file = File::where('path', $request->file)->first();
        if($file){
            $user ->addMedia(storage_path('app/public/storage/files/12121212' . $request->file . '/' . $file->filename))->toMediaCollection('files');
            rmdir(storage_path('app/public/storage/files/12121212' . $request->file));
            $file->delete();
        }

        return '';
    }
}

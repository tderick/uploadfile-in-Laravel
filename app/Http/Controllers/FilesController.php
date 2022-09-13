<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Files;

class FilesController extends Controller
{
    public function index()
    {
        return view('upload');
    }

    public function upload(Request $request)
    {
        $files = $request->file('files');
        foreach ($files as $file) {
            $filename = $file->getClientOriginalName();
            $path = $file->store("documents", 'local');

            $upload = new Files;
            $upload->filename = $filename;
            $upload->path = $path;
            $upload->save();
        }

        return redirect('/');
    }

    public function listfiles(Request $request)
    {
        $files = Files::all();
        return view("listfiles", compact("files"));
    }

    public function downloadfile($id)
    {
        $file = Files::findOrFail($id);
        return Storage::download($file->path, $file->filename);
    }

    public function deletefiles($id)
    {
        $file = Files::findOrFail($id);
        Storage::disk('local')->delete($file->path);
        $file->delete();
        return redirect('/list-files');
    }
}

<?php
namespace App\Http\Controllers;
use App\Jobs\ResizeImage;
use Illuminate\Http\Request;
class ImageController extends Controller
{
    public function create()
    {
        return view('image.create');
    }
    public function store(Request $request)
    {
        $uploadedFile = $request->file('file');
        $file = $uploadedFile->move(public_path('uploads'), $uploadedFile->getClientOriginalName());
        dispatch(new ResizeImage($file));
        return view('image.create');
    }
}

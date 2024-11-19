<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use DateTime;

class ImageController extends Controller
{
     function upload(Request $request)
    {
        // Validate the file to ensure it's uploaded correctly
        $request->validate([
            'file' => 'required|file|mimes:jpg,jpeg,png,gif|max:2048' // Example validation
        ]);

        // Store the file in the 'public/images' directory
        $path = $request->file('file')->store('images', 'public');

        // Extract the file name from the path
        $pathArray = explode("/", $path);
        $imagPath = array_pop($pathArray);

        // Create a new Image instance
        $img = new Image();
        $img->path = $imagPath;

        if ($img->save()) {
            return redirect("imageList");
        } else {
           return "error ! try after sometime";
        }

    }

    function imageList(){
        $images = Image::all();
        return view('display',['images'=>$images]);
    }


}

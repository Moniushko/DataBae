<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Recipe;

use Illuminate\Http\Request;

class GalleriesController extends Controller
{
    public function destroy($id)
    {
		$gallery = Gallery::find($id);
		$recipe = Recipe::find($gallery->recipe_id);
		$this->authorize('update', $recipe);
		
		// delete the gallery photo from the folder
		$filename = public_path().'/storage/gallery/'.$recipe->id.'/'.$gallery->filename;
		if($gallery->filename != 'user.jpg') {
		if(\File::exists($filename)) 
			unlink($filename);
		}
		
		$gallery->delete();				
    	return back();
    }
}

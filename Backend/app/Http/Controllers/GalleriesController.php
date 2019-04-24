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
		$gallery->delete();
    	return back();
    }
}

@extends('layouts.app')

@section('content')
<body style="background: url(/img/background-board-chillies-1435895.jpg);margin: 0;background-position: center;background-repeat: no-repeat;background-size: cover;" >
<div class="border rounded-0 bg-light shadow container my-4">
<div class="py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"> <a href="/home">Home</a> </li>
			  <li class="breadcrumb-item"> <a href="/recipes">Recipes</a> </li>
			  <li class="breadcrumb-item"> <a href="{{ $recipe->path() }}">{{ $recipe->title }}</a> </li>
              <li class="breadcrumb-item active">Edit</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
<!-- Forms -->
<div class="container" style="max-width: 600px;">

@if (count($errors) > 0)
<div class="card-body">
	<div class="row">
						<div class="alert alert-danger">

							<button type="button" class="close" data-dismiss="alert">&#215</button>

							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			@endif

	<form class="form-horizontal" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="form group">
			<label for="inputTitle">Title</label>
			<textarea class="form-control mb-4" name="title" id="inputTitle" rows="3">{{ $recipe->title }}</textarea>
			<label for="inputTitle">Category</label>
			<div class="form-row align-items-center mb-4">
			<div class="col-auto my-1">
			<select class="custom-select mr-sm-2" name="category" id="category">
			@if ($recipe->category == "Breakfast")
			<option value="Breakfast" selected="selected">Breakfast</option>
			@else
			<option value="Breakfast">Breakfast</option>
			@endif
			
			@if ($recipe->category == "Lunch")
			<option value="Lunch" selected="selected">Lunch</option>
			@else
			<option value="Lunch">Lunch</option>
			@endif
			
			@if ($recipe->category == "Dinner")
			<option value="Dinner" selected="selected">Dinner</option>
			@else
			<option value="Dinner">Dinner</option>
			@endif
			
			@if ($recipe->category == "Dessert")
			<option value="Dessert" selected="selected">Dessert</option>
			@else
			<option value="Dessert">Dessert</option>
			@endif
			
			@if ($recipe->category == "Appetizer/Snacks")
			<option value="Appetizer/Snacks" selected="selected">Appetizer/Snacks</option>
			@else
			<option value="Appetizer/Snacks">Appetizer/Snacks</option>
			@endif
			
			@if ($recipe->category == "Drinks")
			<option value="Drinks" selected="selected">Drinks</option>
			@else
			<option value="Drinks">Drinks</option>
			@endif
			</select>
			</div>
		</div>
			<label for="inputTag">Tags (optional)</label>
			<textarea class="form-control mb-4" name="tag" id="inputTag" rows="3">{{ $recipe->tag }}</textarea>
			
			<label for="exampleTextarea">Recipe Description</label>
			<textarea class="form-control mb-4" name="recipeDescription" id="recipeDescription" rows="3">{{ $recipe->description }}</textarea>
			
			<label for="exampleTextarea">Cook Time</label>
			<textarea class="form-control mb-4" name="cookTime" id="inputCookTime" rows="3">{{ $recipe->cookTime }}</textarea>
			
			<label for="exampleTextarea">Prep Time</label>
			<textarea class="form-control mb-4" name="prepTime" id="inputPrepTime" rows="3">{{ $recipe->prepTime }}</textarea>
			
			<label for="exampleTextarea">Footnotes (optional)</label>
			<textarea class="form-control mb-4" name="footnotes" id="recipeFootNotes" rows="3">{{ $recipe->footnotes }}</textarea>
			
			<label for="exampleTextarea">Recipe Ingredients</label>
			<textarea class="form-control mb-4" name="ingredients" id="recipeIngredients" rows="3" placeholder="{{ $recipe->ingredients }}">{{ $recipe->ingredients }}</textarea>

			<label for="exampleTextarea">Recipe Steps</label>
			<textarea class="form-control mb-4" name="recipe_steps" placeholder="{{ $recipe->recipe_steps }}" id="recipeSteps" rows="3">{{ $recipe->recipe_steps }}</textarea>

			<label for="exampleInputFile">Change Cover image</label>
			<img class="d-block img-fluid w-50 mb-3" src="/storage/recipes/{{ $recipe->picture }}">
			@csrf
			<input type="file" class="form-control-file" name="picture" id="pictureFile" aria-describedby="fileHelp">
			<small id="fileHelp" class="form-text text-muted mb-4">Please upload a valid image file. Size of image should not be more than 10MB.</small>
			
			<label for="exampleInputFile">Add Gallery Pictures (optional)</label>
			 <div class="input-group control-group increment" >
          <input type="file" name="gallery[]" class="form-control">
          <div class="input-group-btn"> 
            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
          </div>
        </div>
        <div class="clone hide">
          <div class="control-group input-group mt-4" style="margin-top:10px">
            <input type="file" name="gallery[]" class="form-control">
            <div class="input-group-btn">
              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
          </div>
        </div>

			<button type="submit" class="btn btn-primary mt-4 mb-4">
									Save Changes
								</button>
		</div>
	</form>
		<div class="row">
			<label for="exampleInputFile">Remove Gallery Pictures</label>
    <div class='list-group gallery'>


            @if ($recipe->galleryExists())
                @foreach($galleries as $gallery)
                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" href="/storage/gallery/{{ $recipe->id }}/{{ $gallery->filename }}">
						<img class="img-responsive w-50 mb-5" alt="" src="/storage/gallery/{{ $recipe->id }}/{{ $gallery->filename }}" />
                    </a>
					 <form action="{{ url('edit/galleries',$gallery->id) }}" method="POST">
                    <input type="hidden" name="_method" value="delete">
                    {!! csrf_field() !!}
                    <button type="submit" class="close-icon btn btn-danger"><i class="fas fa-minus-circle"></i></button>
                    </form>
                </div> <!-- col-6 / end -->
                @endforeach
            @endif


        </div> <!-- list-group / end -->
    </div> <!-- row / end -->
	<script type="text/javascript">

    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script>

</div>
</div>
</body>
@endsection

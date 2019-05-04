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
              <li class="breadcrumb-item active">Profile</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
       <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="px-lg-5 d-flex flex-column justify-content-center col-lg-6">
			 <div class="row">
						@if ($message = Session::get('success'))

						<div class="alert alert-success alert-block">

							<button type="button" class="close" data-dismiss="alert">&times;</button>

							<strong>{{ $message }}</strong>

						</div>

						@endif
						
						@if ($message = Session::get('fail'))

						<div class="alert alert-danger alert-block">

							<button type="button" class="close" data-dismiss="alert">&times;</button>

							<strong>{{ $message }}</strong>

						</div>

						@endif
						@if (count($errors) > 0)
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							
							<strong>Whoops!</strong> There were some problems with sending your message:<br><br>
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
						@endif
					</div>
          <h1>{{ $user->username }}</h1>
          <p class="mb-3 lead">{{ $user->first_name }} {{ $user->last_name }}<br><br>Total amount of rating recipes:<b> {{ $user->totalRatings() }} </b><br><br>Average Ratings:<b> {{ $user->totalAverageRatings() }} out of 5 stars </b></p>
        </div>
		<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
	  <form class="form-horizontal" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
    <div class="modal-content">
      <div class="modal-header text-center">
		<h4 class="modal-title w-100 font-weight-bold">Write to {{ $user->username }}</h4>
		<input type="hidden" id="recipients" name="recipients" value="{{ $user->id }}" class="form-control validate">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-2">
          <i class="fas fa-tag prefix grey-text"></i>
          <input type="text" id="subject" name="subject" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form32">Subject</label>
        </div>

        <div class="md-form">
          <i class="fas fa-pencil prefix grey-text"></i>
          <textarea type="text" id="message" name="message" class="md-textarea form-control" rows="4"></textarea>
          <label data-error="wrong" data-success="right" for="form8">Your message</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-primary">Send<i class="fas fa-paper-plane-o ml-1"></i></button>
      </div>
	  </form>
    </div>
  </div>
</div>

		<div class="col-lg-6"> <img class="img-fluid d-block" width="50%" height="75%" src="/storage/avatars/{{ $user->avatar }}">@if (auth()->check() && $user->id != auth()->user()->id)<a class="btn btn-secondary mt-3" href="#" data-toggle="modal" data-target="#modalContactForm">Message</a>@endif
	</div>
      </div>
    </div>
  </div>
<div class="py-5 border-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center">Top recipes</h1>
        </div>
      </div>
      <div class="row">
	@foreach($user->getTopRatings() as $recipe)
	<div class="col-md-4 col-6 p-3">
        <a href="/recipes/{{$recipe->id}}" class="card" style="max-width: 369px;color: inherit; text-decoration: inherit;z-index: 1;">
			<img class="card-img-top" width="369px" height="247px" src="/storage/recipes/{{ $recipe->picture }}" alt="{{ $recipe->title }}">
			<div class="card-body">
				<h5 class="card-title">{{ $recipe->title }}</h5>
				@if($recipe->hasRatings())<p class="card-text">@for($i=0; $i < round($recipe->getRating()); $i++) <span class="fa fa-star checked"></span>@endfor @for($i2 = 0; $i2< 5-round($recipe->getRating()); $i2++) <span class="fa fa-star"></span>@endfor</p>
				@else <p class="card-text"><small class="text-muted">It has yet to be rated!</small></p>
				@endif
				<p class="card-text">{{ str_limit($recipe->body, $limit = 150, $end = '...') }}</p>
				<p class="card-text"><small class="text-muted">{{ number_format($recipe->views) }} {{ str_plural('view', number_format($recipe->views)) }} {{ number_format($recipe->replies_count) }} {{ str_plural('comment', number_format($recipe->replies_count)) }}</small></p>
				<p class="card-text"><small class="text-muted">Last updated {{ $recipe->updated_at->diffForHumans() }}</small></p>
			</div>
			</a>
			</div>
		@if($loop->iteration == 3) @php break; @endphp @endif
		@endforeach
  </div>
</div>
@endsection

@section('bottomcontent')
  <div class="py-3 border-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1>All Recipes</h1>
        </div>
      </div>
      <div class="row justify-content-center">
	@foreach($user->recipes() as $recipe)
	<div class="col-md-4 col-6 p-3">
        <a href="/recipes/{{$recipe->id}}" class="card" style="max-width: 330px;color: inherit; text-decoration: inherit;z-index: 1;">
			<img class="card-img-top" width="369px" height="247px" src="/storage/recipes/{{ $recipe->picture }}" alt="{{ $recipe->title }}">
			<div class="card-body">
				<h5 class="card-title">{{ $recipe->title }}</h5>
				@if($recipe->hasRatings())<p class="card-text">@for($i=0; $i < round($recipe->getRating()); $i++) <span class="fa fa-star checked"></span>@endfor @for($i2 = 0; $i2< 5-round($recipe->getRating()); $i2++) <span class="fa fa-star"></span>@endfor</p>
				@else <p class="card-text"><small class="text-muted">It has yet to be rated!</small></p>
				@endif
				<p class="card-text">{{ str_limit($recipe->body, $limit = 150, $end = '...') }}</p>
				<p class="card-text"><small class="text-muted">{{ number_format($recipe->views) }} {{ str_plural('view', number_format($recipe->views)) }} {{ number_format($recipe->replies_count) }} {{ str_plural('comment', number_format($recipe->replies_count)) }}</small></p>
				<p class="card-text"><small class="text-muted">Last updated {{ $recipe->updated_at->diffForHumans() }}</small></p>
			</div>
			</a>
			</div>
		@if($loop->iteration % 3 == 0) </div><div class="row"> @endif
		@endforeach
       </div>
	<div class="row justify-content-center mt-3"> {{ $user->recipes()->links() }} </div>
    </div>
  </div>
  </div>
  </body>
@endsection

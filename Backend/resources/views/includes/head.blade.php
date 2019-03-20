<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('Databae', 'Databae') }}</title>

<!-- Scripts -->
<script src="{{ asset('/js/app.js') }}" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="/js/typeahead.bundle.min.js"></script>
<script src="/js/search.js"></script>


<!-- Fonts -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
<link rel="stylesheet" href="/css/signin.css">

<!-- Styles -->
<link rel="stylesheet" href="/css/bootstrap.css">
<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
<link href="{{ asset('/css/stars.css') }}" rel="stylesheet">
<link href="{{ asset('/css/search.css') }}" rel="stylesheet">

<!-- Favicon -->
<link rel="shortcut icon" href="/img/favicon2.ico" />

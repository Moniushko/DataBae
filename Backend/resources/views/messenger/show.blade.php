@extends('layouts.master')

@section('content')
	<div class="col-md-6" style="margin: auto; width: 50%; padding: 10px; text-align: center;">
		<h1 style="margin: auto; width: 50%; padding: 10px; text-align: center;">{{ $thread->subject }}</h1>
        @each('messenger.partials.messages', $thread->messages, 'message')

        @include('messenger.partials.form-message')
    </div>
@stop

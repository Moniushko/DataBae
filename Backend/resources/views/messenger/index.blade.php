@extends('layouts.master')

@section('content')
<div class="border rounded-0 bg-light shadow container my-4">
    @include('messenger.partials.flash')

    @each('messenger.partials.thread', $threads, 'thread', 'messenger.partials.no-threads')
	</div>
@stop

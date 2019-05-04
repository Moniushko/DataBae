<?php $count = Auth::user()->newThreadsCount(); ?>
@if($count > 0)
    <span class="counter">{{ $count }}</span>
@endif
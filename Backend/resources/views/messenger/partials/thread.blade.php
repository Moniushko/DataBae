<?php $class = $thread->isUnread(Auth::id()) ? 'alert-info' : ''; ?>

<div class="mt-2 media alert {{ $class }}" style="margin: auto; width: 50%; padding: 10px; text-align: center;">
	<h4 class="media-heading" style="margin: auto; width: 50%; padding: 10px; text-align: center;">
		<a href="{{ route('messages.show', $thread->id) }}" style="margin: auto; width: 50%; padding: 10px; text-align: center;">{{ $thread->subject }}</a>
        ({{ $thread->userUnreadMessagesCount(Auth::id()) }} unread)</h4>
	<p style="margin: auto; width: 50%; padding: 10px; text-align: center;">
        {{ $thread->latestMessage->body }}
    </p>
	<p style="margin: auto; width: 50%; padding: 10px; text-align: center;">
        <small><strong>Creator:</strong> {{ $thread->creator()->username }}</small>
    </p>
	<p style="margin: auto; width: 50%; padding: 10px; text-align: center;">
		<small style="margin: auto; width: 50%; padding: 10px; text-align: center;"><strong>Participants:</strong> {{ $thread->participantsString(Auth::id()) }}</small>
    </p>
</div>
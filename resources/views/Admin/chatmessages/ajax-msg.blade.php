

@foreach ($messages as $message)

<p>
	@if($message->owner)
		<strong>Owner</strong>

	@else
		<strong>Visitor</strong>
	@endif
	{{$message->msg}}
</p>

@endforeach
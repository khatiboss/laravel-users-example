<div class="form-group">
	{!! Form::label('title', 'Titolo') !!}
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('post', 'Articolo') !!}
	{!! Form::textarea('post', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('published_at', 'Data Publicazione') !!}
	@if ($create)
	{!! Form::Date('published_at', Carbon\Carbon::now(), ['class' => 'form-control']) !!}
	@else
	{!! Form::Date('published_at', null, ['class' => 'form-control', 'readonly' => true]) !!}
	@endif
</div>
<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
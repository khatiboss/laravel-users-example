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
	{!! Form::Date('published_at', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
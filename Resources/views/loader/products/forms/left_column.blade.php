<div class="form-group">
	{{ Form::label('size_id', 'Tamanho') }}
	<div class="input-group">
		<span class="input-group-prepend" data-toggle="modal" data-target="#modal_create_size">
			{{ Form::button('<i class="fa fa-plus-square-o"></i>', ['class' => 'btn btn-primary']) }}
		</span>
		{{ Form::select('size_id', $sizes, null, ['class' => 'form-control', 'placeholder' => 'Tamanho indefinido']) }}
	</div>
</div>


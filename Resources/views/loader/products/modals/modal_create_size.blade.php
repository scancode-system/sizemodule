<div class="modal fade" id="modal_create_size" tabindex="-1" role="dialog" aria-labelledby="modal_create_size" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			{{ Form::open(['route' => 'sizes.store']) }}
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Criar Tamanho</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
					{{ Form::text('size', null, ['class' => 'form-control', 'placeholder' => 'Tamanho']) }}
			</div>
			<div class="modal-footer">
				{{ Form::button('<i class="fa fa-save"></i><span>Salvar</span>', ['class' => 'btn btn-brand btn-primary', 'type' => 'submit']) }}
			</div>
			{{ Form::close() }}
		</div>
	</div>
</div>
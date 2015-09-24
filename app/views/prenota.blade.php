@extends('layouts.master')
@section('contenido')
<div class="row">
	<div class="col-sm-11 col-sm-offset-1 col-md-10 col-md-offset-2 col-lg-8 col-lg-offset-2">
		<h4 class="text-center">
			PRENOTA ONLINE
			<small>
				<br>Compila i campi del form che trovi qui sotto e prenota il tuo tavolo.
			</small>
		</h4>
		<p class="hidden-xs">
			<br>
		</p>
		<form class="form-horizontal">
			<div class="form-group">
				<label for="data" class="col-sm-4 col-md-3 control-label">Data</label>
				<div class="col-sm-6 col-md-7">
					<input type="text" class="form-control" name="data" id="data" placeholder="Data">
				</div>
			</div>
			<div class="form-group">
				<label for="ora" class="col-sm-4 col-md-3 control-label">Ora</label>
				<div class="col-sm-6 col-md-7">
					<input type="text" class="form-control" name="ora" id="ora" placeholder="Ora">
				</div>
			</div>
			<div class="form-group">
				<label for="nome" class="col-sm-4 col-md-3 control-label">Nome*</label>
				<div class="col-sm-6 col-md-7">
					<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
				</div>
			</div>
			<div class="form-group">
				<label for="email" class="col-sm-4 col-md-3 control-label">E-mail*</label>
				<div class="col-sm-6 col-md-7">
					<input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
				</div>
			</div>
			<div class="form-group">
				<label for="telefono" class="col-sm-4 col-md-3 control-label">Telefono</label>
				<div class="col-sm-6 col-md-7">
					<input type="tel" class="form-control" name="telefono" id="telefono" placeholder="Telefono">
				</div>
			</div>
			<div class="form-group">
				<label for="numero-posti" class="col-sm-4 col-md-3 control-label">Numero posti</label>
				<div class="col-sm-6 col-md-7">
					<input type="text" class="form-control" name="numero-posti" id="numero-posti" placeholder="Numero posti">
				</div>
			</div>
			<div class="form-group">
				<label for="messaggio" class="col-sm-4 col-md-3 control-label">Messaggio</label>
				<div class="col-sm-8 col-md-9">
					<textarea name="messaggio" id="messaggio" class="form-control" rows="3" placeholder="Messaggio"></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<button type="submit" class="btn btn-default submit-form pull-right">Invia Prenotazione</button>
				</div>
			</div>
		</form>
	</div>
</div>
@stop
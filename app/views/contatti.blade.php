@extends('layouts.master')
@section('contenido')
<div id="map"></div>
<div class="row">
	<div class="col-sm-6 col-md-8">
		<h4>
			CONTATTI
		</h4>
		<form class="form-horizontal">
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
				<label for="messaggio" class="col-sm-4 col-md-3 control-label">Messaggio</label>
				<div class="col-sm-8 col-md-9">
					<textarea name="messaggio" id="messaggio" class="form-control" rows="3" placeholder="Messaggio"></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-8 col-sm-offset-4 col-md-9 col-md-offset-3">
					<button type="submit" class="btn btn-default submit-form">Inviare</button>
				</div>
			</div>
		</form>
	</div>
	<div class="col-sm-6 col-md-4">
		<p class="text-center">
			<a href="https://www.google.it/maps/place/Via+Emilio+Gola,+4,+20143+Milano/@45.4456308,9.1901226,15z/data=!4m2!3m1!1s0x4786c3f78fc6280f:0xb8178fc1d51db17c" target="_blank">
				Via Emilio Gola 4
			</a><br>
			Milano 20143<br>
			Tel: +39 02.83631695<br>
			Cell: +39 340.5277352<br>
			E-mail: <a href="mailto:info@inkanto.eu">info@inkanto.eu</a>
			<br><br>
		</p>
		<div class="clearfix"></div>
		<div class="fb-page" data-href="https://www.facebook.com/facebook" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></div>
	</div>
</div>
<p>
	&nbsp;
</p>
@stop
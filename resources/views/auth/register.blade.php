@extends('layouts.app')
@section('body-class', 'signup-page')
@section('content')
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);">Find<b>Me</b></a>
            <small>Sociedad de Modelaje 2017</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_up" method="POST">
                    <div class="msg">Registro para nuevo usuario</div>
					
					<h2 class="card-inside-title">Datos de Personales</h2>
					<div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">face</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="namesurname" placeholder="Nombre Completo" required >
                        </div>
						
                    </div>
					<div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">cake</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="datepicker form-control" placeholder="Fecha Nacimiento">
                        </div>
						
                    </div>
					<div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">room</i>
                        </span>
                       <div class="form-line">
                            <select class="form-control show-tick">
								<option value="0">-- Ciudad --</option>
								<option value="Santa Cruz">Santa Cruz</option>
								<option value="La Paz">La Paz</option>
								<option value="Cochabamba">Cochabamba</option>
								<option value="Beni">Beni</option>
								<option value="Pando">Pando</option>
								<option value="Sucre">Sucre</option>
								<option value="Tarija">Tarija</option>
								<option value="Potosi">Potosi</option>
								<option value="Oruro">Oruro</option>
							</select>
                        </div>
						
                    </div>
					<h2 class="card-inside-title">Genero</h2>
					<div class="form-group">
						<div class="radio">
							<input name="sexo" type="radio" id="radio_12" class="radio-col-red" checked />
							<label for="radio_12">Hombre</label>
						</div>
						<div class="radio">
							<input name="sexo" type="radio" id="radio_22" class="radio-col-red"/>
							<label for="radio_22">Mujer</label>
						</div>

                    </div>
					                        
					<h2 class="card-inside-title">Tipo de Cuenta</h2>
					<div class="form-group">
						<div class="radio">
							<input name="tipo" type="radio" id="radio_1" class="radio-col-red" checked />
							<label for="radio_1">Invitado</label>
						</div>
						<div class="radio">
							<input name="tipo" type="radio" id="radio_2" class="radio-col-red"/>
							<label for="radio_2">Usuario</label>
						</div>
						<div class="radio">
							<input name="tipo" type="radio" id="radio_3" class="radio-col-red"/>
							<label for="radio_3">Usuario Representante</label>
						</div>

                    </div>
					<h2 class="card-inside-title">Datos de usuario</h2>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confirm" minlength="6" placeholder="Confirmar Password" required>
                        </div>
                    </div>

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">SIGN UP</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="sign-in.html">¿Usted ya tiene cuenta?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

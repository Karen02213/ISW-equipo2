
    <div class="main-content">

        <div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-2"></div>
                    <div class="col-lg-6 col-md-8 login-box">
                        <div class="col-lg-12 login-title py-5">
                            INICIAR SESIÓN
                        </div>
                        <div class="col-lg-12 login-form">
                            <div class="form-group">
                                {{ Form::label('email', 'Correo electrónico', ['class' => 'form-control-label']) }}
                                {{ Form::email('email', session('email'), ['class' => 'form-control']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('password', 'Contraseña', ['class' => 'form-control-label']) }}
                                {{ Form::password('password', ['class' => 'form-control']) }}
                                <a href="/password">¿Olvidaste tu contraseña?</a>
                                <a href="/new/user">Nuevo usuario</a>
                            </div>
                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-12 login-btm login-button">
                                    <button type="submit" class="btn btn-outline-primary">Iniciar sesión</button>
                                    {{ Form::submit('Entrar', ['class' => 'btn btn-outline-primary']) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>


        {{-- <div class="form-group">
            {{ Form::label('email', 'Correo electrónico:') }}
            {{ Form::email('email', session('email'), ['class' => 'form-control', 'placeholder' => 'Correo electrónico']) }}
        </div>
        <div class="form-group">
            {{ Form::label('password', 'Contraseña:') }}
            {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contraseña']) }}
            <br />
            <div class="row">
                <div class="col-sm-8">
                    <a
                        href="{{ config('caronte.URL') .
                            'password/recover?callback_url=' .
                            base64_encode(config('app.url') . config('caronte.LOGIN_URL')) .
                            '&application=' .
                            base64_encode(config('app.name')) }}">Olvidaste
                        tu contraseña?</a>
                </div>
                <div class="col-sm-4" align="right">
                    {{ Form::submit('Entrar', ['class' => 'btn btn-success text-white']) }}
                </div>
            </div>
        </div> --}}
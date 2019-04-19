<!-- ksoft::errors -->
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Ups!</strong> Se han encontrado errores en formulario.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session()->has('message'))
    <div class="alert alert-success">
        <strong>  {!! session()->get('message') !!} </strong>
    </div>
@endif
@if (session()->has('flash_message'))
    <div class="alert alert-success">
        <strong>  {!! session()->get('flash_message') !!} </strong>
    </div>
@endif
@if (session()->has('flash_error'))
    <div class="alert alert-danger">
        <strong>  {!! session()->get('flash_error') !!} </strong>
    </div>
@endif

@extends ('web.master')

@section('title', 'Contact')

@section('content')

    <h2>Contacta con nosotros:</h2>
    <hr class="my-4">
   
    <div class="contact-div">            
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label class="label-contact" for="inputName4">Nombre</label>
                    <input type="text" class="contact" id="inputName4">
                </div>
                <div class="form-group col-md-6">
                    <label class="label-contact" for="inputSurname4">Apellidos</label>
                    <input type="text" class="contact" id="inputSurname4">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label class="label-contact" for="inputEmail4">Email</label>
                    <input type="email" class="contact" id="inputEmail4">
                </div>
                <div class="form-group col-md-6">
                    <label class="label-contact" for="inputPassword4">Contraseña</label>
                    <input type="password" class="contact" id="inputPassword4">
                </div>
            </div>

            
            <div class="form-group">
                <label class="label-contact" for="exampleFormControlTextarea1">Mensaje</label>
                <textarea class="contact" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <button type="button" class="btn btn-light">Enviar</button>
            </form>

    </div>

</form>
@stop

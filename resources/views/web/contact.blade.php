@extends ('web.master')

@section('title', 'Contact')

@section('content')

    <h2>Contact us</h2>
    <hr class="my-4">
   
    <div class="contact-div">            
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label class="label-contact" for="inputName4">Name</label>
                    <input type="text" class="contact" id="inputName4">
                </div>
                <div class="form-group col-md-6">
                    <label class="label-contact" for="inputSurname4">Surname</label>
                    <input type="text" class="contact" id="inputSurname4">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label class="label-contact" for="inputEmail4">Email</label>
                    <input type="email" class="contact" id="inputEmail4">
                </div>
                <div class="form-group col-md-6">
                    <label class="label-contact" for="inputPassword4">Password</label>
                    <input type="password" class="contact" id="inputPassword4">
                </div>
            </div>

            
            <div class="form-group">
                <label class="label-contact" for="exampleFormControlTextarea1">Message</label>
                <textarea class="contact" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <button type="button" class="btn btn-light">Submit</button>
            </form>

    </div>

</form>
@stop

@extends ('web.master')

@section('title', 'Contact')

@section('content')

    <h2>Contact us</h2>
    <hr class="my-4">
   
    <form>
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="inputUserName4">UserName</label>
                <input type="text" class="contact" placeholder="">
            </div>
            <div class="form-group col-md-5">
                <label for="inputName4">Name</label>
                <input type="text" class="contact" placeholder="">
            </div>
            <div class="form-group col-md-5">
                <label for="inputSurname14">First Surname</label>
                <input type="text" class="contact" placeholder="">
            </div>
            <div class="form-group col-md-5">
                <label for="inputSurname24">Second Surname</label>
                <input type="text" class="contact" placeholder="">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="inputEmail4">Email</label>
                <input type="email" class="contact" id="inputEmail4">
            </div>
            <div class="form-group col-md-5">
                <label for="inputPassword4">Password</label>
                <input type="password" class="contact" id="inputpassword4">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="inputCity">City</label>
                <input type="text" class="contact" id="inputAddress">
            </div>
            <div class="form-group col-md-5">
                <label for="inputCountry">Country</label>
                <input type="text" class="contact" id="inputCountry">
            </div>
            <div class="form-group col-md-5">
                <label for="Textarea1">Message</label>
                <textarea class="contact" id="Textarea1" rows="1"></textarea>
                </div>
                <br>
            <div class="form-group col-md-5">            
                <button type="submit" class="contactbuttom">Submit</button>
            </div>
      </div>        
</form>
@stop

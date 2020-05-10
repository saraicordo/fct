@extends ('connect.master')

@section('title', 'Register')

@section('content')
<div class="box shadow">

    <div class="logo-cnt">
        <img src="{{ url('static/images/logo.png') }}" class="img-fluid" style="width: 70%;">
    </div>

    <form>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="email exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        </div>
        <div class="form-group">
            <label for="password exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" required>
        </div>
        <div class="form-group">
            <label for=" cpassword exampleInputPassword1">Confirm password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" required>
        </div>

        <button type="submit" class="btn btn-dark">Sign in</button>
    </form>

      @if(Session::  has('message'))
        <div class="container">
            <div class="alert alert-{{ Session::get('typealert') }}"style="display:none;">
                {{ Session::get('message') }}
                @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
                <script>
                    $('.alert').slideDown();
                    setTimeout(function(){ $(.alert).slideUp(); }, 10000);
                </script>
            </div>
        </div>
    @endif
    
    <div class="pie">
        <a href="{{ url('/login') }}"> Ya tengo una cuenta, Ingresar</a>
    </div>
</div>
@stop
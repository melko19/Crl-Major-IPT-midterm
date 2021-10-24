@section('content')
@extends('base')
    <div class="col-md-5 offset-md-5 ">
        <div class="login-form">
            <h1>Login Form</h1>
            <form action="{{url('/login')}}" method="post">
            {{csrf_field()}}

                <p>Email</p>
                    <input type="text" name="email" placeholder="Email">

                <p>Password</p>
                    <input type="password" name="password" placeholder="Password">

                <button class="btn btn-primary" type="submit">Login</button>
            </form>
        </div>
    </div>
</div>

<style>
    body{
        background-image: url(../images/logs.jpg);
        width:100%;
        height:100%;
        background-position:cover;
	    background-repeat: no-repeat;
    }
    .login-form{
        font-family: Garamond;
        top:30%;
        transform: translate(-5%, -5%);
        position:absolute;
        opacity:90%;
    }
    .login-form h1{
        color:white;
        font-size:40px;
        text-align:center;
        text-transform:uppercase;
        margin: 40px 0;
    }
    .login-form p{
        color:white;
        font-size:20px;
        margin:15px 0;
    }
    .login-form input{
        font-size:16px;
        width:100%;
        padding: 10px 10px;
        border: 0;
        outline:none;
        border-radius:5px;
    }
    .login-form button{
        font-size: 18px;
        font-weight: bold;
        margin: 25px 0;
        padding:10px 20px;
        width: 45%;
        border-radius:10px;
    }
</style>

@stop





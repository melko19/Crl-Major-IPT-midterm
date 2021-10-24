@section('content')
@extends('base')
<div class="row">
    <div class="col-md-2 form ">
        <div class="register-form">
            <h1> User Registration</h1>
            <form action="{{url('/register')}}" method="post">
            {{csrf_field()}}
            
                <p>Name</p>
                    <input type="text" name="name" placeholder="Name">
                <p>Sex</p>
                <select class="form-select" name="sex" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    <option value="male">male</option>
                    <option value="female">female</option>
                </select>
                <p>Email</p>
                    <input type="text" name="email" placeholder="Email">

                <p>Password</p>
                    <input type="password" name="password" placeholder="Password">

                <button class="btn btn-primary" type="submit">Register</button>
            </form>
        </div>
    </div>
</div>

<style>
    .row .form{
        margin-left:38%;
    }
    body{
        background-image: url(../images/logs.jpg);
        width:100%;
        height:100%;
	    background-repeat: no-repeat;
    }
    .register-form{
        font-family: Garamond;
        top:20%;
        transform: translate(-5%, -5%);
        position:absolute;
        opacity:90%;
    }
    .register-form h1{
        color:white;
        font-size:40px;
        text-align:center;
        text-transform:uppercase;
        margin: 40px 0;
    }
    .register-form p{
        color:white;
        font-size:20px;
        margin:15px 0;
    }
    .register-form input{
        font-size:16px;
        width:100%;
        padding: 10px 10px;
        border: 0;
        outline:none;
        border-radius:5px;
    }
    .register-form button{
        font-size: 18px;
        font-weight: bold;
        margin: 25px 0;
        padding:10px 20px;
        width: 45%;
        border-radius:10px;
    }
</style>

@stop
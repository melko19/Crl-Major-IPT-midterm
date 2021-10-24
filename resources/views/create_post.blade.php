@extends('base')

@section('content')
<div class="container">
    <div class="row">
        <div class="container">
            <div class="col-md-6 offset-3">
                <div class="card">
                    <div class="card-header">
                        <h1>Create Post</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{url('/create_post')}}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                            <div class="mb-3">
                                <h4>Category</h4>
                                <select name="category_id" id="category_id" class="form-select">
                                    @foreach(App\Models\Category::all() as $c)
                                    <option value="{{$c->id}}">{{$c->category}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <h4>Post</h4>
                                <textarea name="post" id="post" cols="40" rows="10" class="form-control"></textarea>
                            </div>
                            <a href="/dashboard" class="btn btn-warning bg-gradient ">Back</a>
                            <button class="btn btn-primary bg-gradient float-end" type="submit" style="width: 100px">Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    body {
        background-image: url(../images/finalbg.png);
        width: 100%;
        height: 100%;
        background-repeat: no-repeat;
    }

    .card {
        margin-top: 1.5rem;
        color: white;
        background-color: rgba(0, 0, 0, 0.5);
        font-family: Garamond;
        height: inherit;
    }
</style>

@endsection
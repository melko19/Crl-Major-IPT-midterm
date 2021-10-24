@extends('base')

@section('content')
<div class="container text-white">
    <div class="row">
        <div class="col-md-6 mt-4">
            <div class="card">
                <div class="card-header">{{$category->category}} Post</div>
                <div class="card-body">
                    @foreach($posts as $p)
                    @if ($p->user->sex == 'male')
                    <div class="card" style="background-color: rgba(141, 199, 247, 0.5)">
                        @else
                        <div class="card" style="background-color: rgba(236, 98, 195, 0.5)">
                            @endif
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-list"></i> {{$p->category->category}}
                                    </button>
                                    <ul class="dropdown-menu bg-transparent" aria-labelledby="dropdownMenuButton1">
                                        @foreach(App\Models\User::whereHas('posts', function($query) use ($p){
                                        $query->where('category_id', $p->category_id);
                                        })->get() as $u)
                                        <li><a class="dropdown-item text-white" href="/user_author/{{$u->id}}">{{$u->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <h5 class="card-title pb-3">{{$p->user->name}}</h5>
                                <p class="card-data p-2" style="border-radius: 10px;">{{$p->post}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-4 text-center">
                <div class="card">
                    <div class="card-header">Top Categories</div>
                    <div class="card-body">
                        <div class="container">
                            <div class="skills drama pe-3">90% 
                            <p class="float-start ms-2">Drama</p>
                            </div>
                        </div>

                        <div class="container">
                            <div class="skills horror pe-3">80% 
                            <p class="float-start ms-2">Horror</p>
                            </div>
                        </div>

                        <div class="container">
                            <div class="skills adventure pe-3">70% 
                            <p class="float-start ms-2">Adventure</p>
                            </div>
                        </div>

                        <div class="container">
                            <div class="skills comedy pe-3">60% 
                            <p class="float-start ms-2">Comedy</p>
                            </div>
                        </div>
                        
                        <div class="container">
                            <div class="skills romance pe-3">50% 
                            <p class="float-start ms-2">Romance</p>
                            </div>
                        </div>

                        <div class="container">
                            <div class="skills politics pe-3">40% 
                            <p class="float-start ms-2">Romance</p>
                            </div>
                        </div>

                        <div class="container">
                            <div class="skills religion pe-3">30% 
                            <p class="float-start ms-2">Religion</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        body {
            background-image: url(../images/cat.jpg);
            width: 100%;
            height: 100%;
            background-repeat: no-repeat;
        }

        .card {
            margin-top: 1rem;
            background-color: rgba(0, 0, 0, 0.5);
            height: inherit;
        }

        .card-header {
            font-family:Garamond;
            font-size: x-large;
        }

        .card-data {
            font-family:Garamond;
            background-color: rgba(203, 213, 221, 0.5);
        }
        * {
            box-sizing: border-box
        }
        .skills {
            margin-top: 1.1rem;
            text-align: right;
            padding-top: 5px;
            padding-bottom: 5px;
            color: white;
        }

        .drama {
            width: 90%;
            background-color: #04AA6D;
        }
        .horror {
            width: 80%;
            background-color: #2196F3;
        }
        .adventure {
            width: 65%;
            background-color: #f44336;
        }
        .comedy {
            width: 60%;
            background-color: #808080;
        }
        .romance {
            width: 50%;
            background-color: #29cf1f;
        }
        .politics {
            width: 40%;
            background-color: #ed64d9;
        }
        .religion {
            width: 30%;
            background-color: #e67a45;
        }
    </style>
    @endsection
@extends('base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-2 mt-3">
            <div class="container">
                <div class="card">
                    <div class="card-header">Timeline of {{$user->name}}</div>
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
                                    <p class="card-data text-white p-3" style="border-radius: 10px;">{{$p->post}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .card {
        margin-top: 1rem;
        background-color: rgba(0, 0, 0, 0.5);
        height: inherit;
    }

    body {
        background-image: url(../images/homes.jpg);
        width: 100%;
        height: 100%;
        background-repeat: no-repeat;
    }

    .card-header {
        color: white;
        font-family: Garamond;
        font-size: x-large;
    }
    .card-data {
        font-family:Garamond;
        background-color: rgba(255, 255, 255, 0.5);
    }
    .card-title{
        color: white;
    }
</style>
@endsection
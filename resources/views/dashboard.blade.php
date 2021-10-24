@section('content')
@extends('base')
  <div class="container">
    <div class="row">
      <div class="col-md-10 offset-1">
          <div class="card">
            <div class="card-header">
                Fakebook
                <div class="float-end mt-2">
                  <a href="/create_post" class="btn btn-primary">
                    <i class="fas fa-money-check-edit"></i> Create Post
                  </a>
                </div>
            </div>
            <div class="card-body">
                <div class="container ">
                  <div class="row">
                    <div class="col-md-12">
                       @foreach($posts as $p)
                      @if ($p->user->sex == 'male')
                      <div class="card" style="background-color: rgba(141, 199, 247, 0.5)">
                      @else
                      <div class="card" style="background-color: rgba(236, 98, 195, 0.5)">
                      @endif
                        <div class="card-body">
                          <div class="dropdown mt-2 float-end">
                            <button class="btn dropdown-toggle " type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                              {{$p->category->category}}
                            </button>
                            <ul class="dropdown-menu bg-transparent" aria-labelledby="dropdownMenuButton">
                              @foreach(App\Models\User::whereHas('posts', function($query) use ($p){
                                  $query->where('category_id', $p->category_id);
                              })->get() as $u)
                              <li><a class="dropdown-item text-white" href="/user_author/{{$u->id}}">{{$u->name}}</a></li>
                              @endforeach
                            </ul>
                          </div>
                            <h5 class="card-title pb-3 text-white">{{$p->user->name}}</h5>
                            <p class="card-data  text-white  p-2" style="border-radius: 10px;">{{$p->post}}</p>
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
  </div>
<style>
    body{
    background-image: url(../images/zzz.png);
    width:100%;
    height:100%;
    background-repeat: no-repeat;
    }
    .card{
      margin-top: 2rem;
      background-color: rgba(0, 0, 0, 0.5);
      height: inherit;
    }
    .card-header{
      background-color: rgba(43, 143, 224, 0.5);
      font-size: xx-large;
      font-weight: bolder;
      color: white;
      text-transform: uppercase;
    }
    .btn{
      margin-top: -1rem;
    }
    .card-data{
      background-color: rgba(255, 255, 255, 0.5);
    }
</style>
@stop

@extends('base')

@section('content')
<div class="container ">
  <div class="row">
      <div class="col-md-6">
          <div class="card">
            <div class="card-header text-white">List of Authors</div>
            <div class="card-body">
              <div class="container">
              @foreach($users as $u)
                @if ($u->sex == 'male')
                <div class="card mt-2" style="background-color: rgba(79, 156, 219, 0.5)">
                @else
                <div class="card mt-2" style="background-color: rgba(236, 98, 195, 0.5)">
                @endif
                  <div class="card-body">
                    <h5 class="card-header text-white">{{$u->name}}</h5>
                      <a href="/user_author/{{$u->id}}"><button class="btn btn-info bg-gradient form-control">Show Post</button></a>
                  </div>
                </div>
              @endforeach
              </div>
            </div>
          </div>
      </div>

      <div class="col-md-6">
        <div class="card text-white" style="height:32rem">
          <div class="card-header">Trending Post </div>
          <div class="card-body">
              <div class="container">
              <h4>Melchizedek A. Cruel</h4>
              <p class="mt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam eveniet eum, repudiandae at non quae cupiditate suscipit quisquam 
              ad eius, enim quidem dignissimos neque dolores ipsa et deleniti incidunt est?</p>

              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam deserunt facere nulla, sequi dolores, dolore eveniet atque nisi cum omnis dolor natus 
              inventore, voluptates nostrum ipsam! Quas tempore placeat esse!</p>

              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam accusantium, eveniet ullam cupiditate quam at laborum,
                saepe inventore illo quasi porro odio consequuntur perferendis vel nesciunt animi? Consequatur, ratione officiis.
              </p>

              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab repudiandae officia magnam officiis. Voluptate, cumque recusandae illo laudantium dolore voluptas
                 non amet, incidunt, in obcaecati molestiae exercitationem aut porro saepe?
              </p>
              </div>
          </div>
        </div>
      </div>
  </div>
</div>
<style>
    body{
    background-image: url(../images/cat.jpg);
    width:100%;
    height:100%;
    background-repeat: no-repeat;
    }
    .card-header{
      font-family:Garamond;
      font-size:x-large;
    }
    .card{
      border-radius: 1rem;
      background-color: rgba(0, 0, 0, 0.5);
      margin-top: 3rem;
      height: inherit;
    }
    .btn{
      color: white;
      margin-top: 1rem;
    }
    .btn:hover{
      color: green;
      margin-top: 1rem;
    }
</style>
@endsection
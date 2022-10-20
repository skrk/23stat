@props(['player'])

<div class="card m-2" style="width: 15rem;">
  <img src="{{$player->photo ? asset('storage/'. $player->photo) : asset('storage/photos/no-photo.jpg')}}" class="card-img-top mt-1" alt="{{$player->name}}">
  <div class="card-body">
    <h5 class="card-title"><a href="/players/{{$player->id}}" class="stretched-link link-dark">{{$player->name}}</a></h5>
    <h5 class="card-text">#{{$player->number}}</h5>
    <p class="card-text">{{$player->team}}</p>
  </div>
</div>
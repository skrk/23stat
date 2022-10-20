@props(['league'])

<div class="card m-2" style="width: 10rem;">
  <img src="{{$league->logo ? asset('storage/'. $league->logo) : asset('storage/photos/no-photo.jpg')}}" class="card-img-top" alt="{{$league->name}}">
  <div class="card-body">
    <h5 class="card-title"><a href="/players?league_id={{$league->id}}" class="stretched-link link-dark">{{$league->name}}</a></h5>
  </div>
</div>
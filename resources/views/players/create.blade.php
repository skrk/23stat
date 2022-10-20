<x-layout>
    <div class="p-3 mb-2 bg-secondary text-white"><h4 class="mt-1 mb-1 text-center">Create new player</h4></div>

    <form method="POST" action="/players" class="row g-3 m-5" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Yegor Sharangovich" value="{{old('name')}}">
          @error('name')
              <p class="text-danger small">{{$message}}</p>
          @enderror
        </div>
        <div class="col-md-6">
          <label for="league_id" class="form-label">League</label>
          <select class="form-select" id="league_id" name="league_id">
            <option value="">Choose...</option>
            @foreach($leagues as $league)
            <option value="{{$league->id}}">{{$league->name}}</option>
            @endforeach
          </select>
          @error('league_id')
              <p class="text-danger small">{{$message}}</p>
          @enderror
        </div>
        <div class="col-md-6">
          <label for="team" class="form-label">Team</label>
          <input type="text" class="form-control" id="team" name="team" placeholder="New Jersey Devils" value="{{old('team')}}">
          @error('team')
              <p class="text-danger small">{{$message}}</p>
          @enderror
        </div>
        <div class="col-md-6">
          <label for="birthdate" class="form-label">Date of Birth</label>
          <input type="date" class="form-control" id="birthdate" name="birthdate" value="{{old('birthdate')}}">
          @error('birthdate')
              <p class="text-danger small">{{$message}}</p>
          @enderror
        </div>
        <div class="col-md-6">
          <label for="number" class="form-label">Number</label>
          <input type="number" class="form-control" id="number" name="number" min="1" max="99" placeholder="1 - 99" value="{{old('number')}}">
          @error('number')
              <p class="text-danger small">{{$message}}</p>
          @enderror
        </div>
        <div class="col-12">
          <label for="photo" class="form-label">Photo</label>
          <input class="form-control" type="file" id="photo" name="photo">
          @error('photo')
              <p class="text-danger small">{{$message}}</p>
          @enderror
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</x-layout>
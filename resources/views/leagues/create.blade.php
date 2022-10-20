<x-layout>
    <div class="p-3 mb-2 bg-secondary text-white"><h4 class="mt-1 mb-1 text-center">Create new league</h4></div>
    <div calss="container">
    <form method="POST" action="/leagues" class="row g-3 m-5" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6">
          <label for="name" class="form-label">League name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="NHL" value="{{old('name')}}">
          @error('name')
              <p class="text-danger small">{{$message}}</p>
          @enderror
        </div>
        <div class="col-6">
          <label for="logo" class="form-label">League logo</label>
          <input class="form-control" type="file" id="logo" name="logo">
          @error('logo')
              <p class="text-danger small">{{$message}}</p>
          @enderror
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
  </div>
</x-layout>
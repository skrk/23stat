<x-layout>
    <div class="p-3 mb-2 bg-secondary text-white text-center">
        <h4 class="mt-1 mb-1 ">REGISTER</h4>
        <p>Create an account to manage players</p>
    </div>
    <div class="container text-center">
        <div class="row justify-content-md-center">
            <div class="col-5">
                <form method="POST" action="/users" class="row g-3 m-1">
                    @csrf
                    <div class="col-12">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                      @error('name')
                          <p class="text-danger small">{{$message}}</p>
                      @enderror
                    </div>
                    <div class="col-12">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
                      @error('email')
                          <p class="text-danger small">{{$message}}</p>
                      @enderror
                    </div>
                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password">
                      @error('password')
                          <p class="text-danger small">{{$message}}</p>
                      @enderror
                    </div>
                    <div class="col-12">
                        <label for="password_confirmation" class="form-label">Confirm password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                        @error('password_confirmation')
                            <p class="text-danger small">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div clas="mt-2">
                        <p>
                            Already have an account?
                            <a href="/login" class="text-laravel">Login</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</x-layout>
<x-layout>
    <div class="p-3 mb-2 bg-secondary text-white text-center">
        <h4 class="mt-1 mb-1 ">Log into your account to manage players</h4>
    </div>
    <div class="container text-center">
        <div class="row justify-content-md-center">
            <div class="col-5">
                <form method="POST" action="/users/authenticate" class="row g-3 m-1">
                    @csrf
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
                      <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                    <div clas="mt-2">
                        <p>
                            Don't have an account?
                            <a href="/register" class="text-laravel">Register</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</x-layout>
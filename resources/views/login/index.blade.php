@extends('layouts.main')

@section('container')
{{-- Alert Success --}}

      @if (session()->has('success'))
      <div class="alert alert-success shadow-lg">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
          <span>{{ session('success') }}</span>
        </div>
      </div>
      @endif

      @if (session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
{{-- Alert Success End --}}

<div class="hero min-h-screen bg-base-200 ">
  <div class="hero-content flex-col w-4/5">
    <div class="text-center" >
      <h1 class="text-3xl font-bold">LOGIN NOW!</h1>
    </div>
    <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
      <div class="card-body">
        <form action="/login" method="post">
          @csrf
        <div class="form-control">
          <input type="email" id="email" name="email" placeholder="name@example.com" class="input @error('email') is-invalid
          @enderror" autofocus required value="{{ old('email') }}"/>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-control mt-1">
          <input type="password" name="password" id="password" placeholder="Password" class="input" required/>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-control mt-6">
          <button class="btn btn-primary">Login</button>
        </div>
      </div>
    </div>




    {{-- <form action="/login" method="post">
      @csrf
    <div class="form-floating">
      <input type="email" name="email" class="form-control @error('email') is-invalid
      @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
      <label for="email">Email address</label>
      @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
      <label for="password">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

  </form> --}}
  </div>
</div>

{{-- <div class="row justify-content-center">
    <div class="col-md-5">

      @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      @if (session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
            <form action="/login" method="post">
                @csrf
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid
                @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
          
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

            </form>
            <small class="d-block text-center mt-3">Not Register? <a href="/register">Register Now!</a></small>
        </main>
    </div>
</div> --}}
@endsection
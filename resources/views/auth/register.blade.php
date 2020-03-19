@include('includes.style')

<main class="login-container">
  <div class="container">
      <div
        class="row page-login d-flex align-items-center"
      >
        <div
          class="section-left col-12 col-md-6 mt-2"
        >
          <h1 class="mb-4">
            We explore the new
            <br />
            life much better
          </h1>
          <img
            src="{{ url('./frontend/images/login-images.png') }}"
            alt=""
            class="w-75 d-none d-sm-flex"
          />
        </div>
        <div
          class="section-right col-12 col-md-4 mt-2"
        >
          <div class="card">
            <div class="card-body">
              <div class="text-center">
                <img
                  src="{{ url('./frontend/images/logo.png') }}"
                  class="w-50 mb-4"
                />
              </div>
              <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <input 
                        id="name"
                        type="text"
                        class="form-control"
                        placeholder="Your Name" 
                        @error('name') is-invalid @enderror name="name" 
                        value="{{ old('name') }}" 
                        required 
                        autocomplete="name" 
                        autofocus
                    >

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input placeholder="Username" id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input placeholder="Confirm password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-login btn-block mb-2">
                        {{ __('Register') }}
                    </button>
                    <a href="{{ route('login') }}">
                        Sudah Punya Akun
                    </a>
                </div>
            </div>
            </form>
            </div>
          </div>
        </div>
      </div>
  </div>
</main>

@include('includes.script')


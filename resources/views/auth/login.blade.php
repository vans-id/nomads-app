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
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                  <label for="email">
                    Email Address
                  </label>
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                  />

                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">
                    Password
                  </label>
                  <input
                    type="password"
                    class="form-control"
                    id="exampleInputPassword1"
                    @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"
                  />
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group form-check">
                  <input
                    class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}
                  />
                  <label
                    class="form-check-label" for="remember"
                  >
                    Remember Me
                  </label>
                </div>
                <button
                  type="submit"
                  class="btn btn-login btn-block"
                >
                  Sign In
                </button>
                <div
                  class="text-center mt-4 d-flex justify-content-between"
                >
                  @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                      Saya Lupa Password
                    </a>
                  @endif
                  <a href="{{ route('register') }}">
                    Belum Punya Akun
                  </a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  </div>
</main>

@include('includes.script')

@extends('layouts.app')

@section('title')
  NOMADS
@endsection

@section('content')
  <!-- Header -->
  <header class="text-center">
    <h1 data-aos="zoom-in-up" data-aos-duration="1000">
      Explore the Beautiful World
      <br />
      As Easy One Click
    </h1>
    <p class="mt-3" data-aos="zoom-in-up" data-aos-duration="2000">
      You will see beautiful
      <br />
      moment you never see before
    </p>
    <a
      href="#popular"
      class="btn btn-get-started px-4 mt-4"
      data-aos="fade-up"
      data-aos-duration="3000"
    >
      Get Started
    </a>
  </header>

  <!-- Content -->
  <main>
    <div class="container">
      <section
        class="section-stats row justify-content-center text-center"
        id="stats"
      >
        <div 
          class="col-6 col-md-2 stats-detail"
        >
          <div>
            <h2>20k</h2>
            <p>Members</p>
          </div>
        </div>
        <div 
          class="col-6 col-md-2 stats-detail"
        >
          <div>
            <h2>12</h2>
            <p>Countries</p>
          </div>
        </div>
        <div 
          class="col-6 col-md-2 stats-detail" 
        >
          <div>
            <h2>3k</h2>
            <p>Hotel</p>
          </div>
        </div>
        <div 
          class="col-6 col-md-2 stats-detail" 
        >
          <div>
            <h2>72</h2>
            <p>Partners</p>
          </div>
        </div>
      </section>
    </div>

    <!-- Section Popular -->
    <section class="section-popular" id="popular">
      <div class="container">
        <div class="row">
          <div
            class="col text-center section-popular-heading"
          >
            <h2 class="mb-3">Wisata Popular</h2>
            <p>
              Something that you never try
              <br />
              before in this world
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Section Popular Content -->
    <section
      class="section-popular-content"
      id="popularContent"
    >
      <div class="container">
        <div
          class="section-popular-travel row justify-content-center"
        >
          @foreach ($items->take(4) as $item)
            <div 
              class="col-sm-6 col-lg-3" 
              data-aos="fade-right" 
              data-aos-duration="{{ 500 + ($loop->index)*700 }}"
            >
              <div
                class="card-travel text-center d-flex flex-column"
                style="background-image: url('{{
                  $item->galleries->count() ?
                  Storage::url($item->galleries->first()->image) : 
                  ''
                }}');"
                {{-- Jalankan func Storage:: php artisan storage:link --}}
              >
                <div class="travel-country">
                  {{ $item->location }}
                </div>
                <div class="travel-location">
                  {{ $item->title }}
                </div>
                <div class="travel-button mt-auto">
                  <a
                    href="{{ route('detail', $item->slug) }}"
                    class="btn btn-travel-details px-4 btn-block"
                  >
                    View Details
                  </a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>

    <!-- Section Networks -->
    <section class="section-networks" id="networks">
      <div class="container">
        <div class="row">
          <div class="col-md-4 md-text-center mb-3">
            <h2>Our Networks</h2>
            <p>
              Companies are trusted us
              <br />
              more than just a trip
            </p>
          </div>
          <div 
            class="col-md-8 text-center" 
            data-aos="fade-left" 
            data-aos-duration="1500"
          >
            <img
              src="./frontend/images/partners.png"
              alt="logo partner nomads"
              class="partner"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonial Heading -->
    <section
      class="section-testimonial-heading"
      id="testimonialHeading"
    >
      <div class="container">
        <div class="row">
          <div 
            class="col text-center"
          >
            <h2>They Are Loving Us</h2>
            <p>
              Moments were giving them
              <br />
              the best experience
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonial Content -->
    <section
      class="section-testimonial-content"
      id="testimonialContent"
    >
      <div class="container">
        <div
          class="row section-popular-travel justify-content-center"
        >
          <div class="col-sm-6 col-lg-4">
            <div
              class="card card-testimonial text-center"
              data-aos="flip-left"
              data-aos-duration="500"
            >
              <div class="testimonial-content">
                <img
                  src="./frontend/images/testimonial-1.png"
                  alt="user"
                  class="mb-4 rounded-circle"
                />
                <h3 class="mb-4">Julian Steven</h3>
                <p class="testimonial">
                  "This is the most valuable travel package have EVER purchased. I am really satisfied with it. Really good."
                </p>
              </div>

              <hr />

              <p class="trip-to mt-2">
                Trip to Geneva, Switzerland
              </p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div
              class="card card-testimonial text-center"
              data-aos="flip-left"
              data-aos-duration="1500"
            >
              <div class="testimonial-content">
                <img
                  src="./frontend/images/testimonial-2.png"
                  alt="user"
                  class="mb-4 rounded-circle"
                />
                <h3 class="mb-4">Jonathan Evan</h3>
                <p class="testimonial">
                  "I could probably go into sales for you. Nomads did exactly what you said it does. Just what I was looking for. You guys rock!"
                </p>
              </div>

              <hr />

              <p class="trip-to mt-2">
                Trip to Honolulu, Hawaii
              </p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div
              class="card card-testimonial text-center"
              data-aos="flip-left"
              data-aos-duration="3000"
            >
              <div class="testimonial-content">
                <img
                  src="./frontend/images/testimonial-3.png"
                  alt="user"
                  class="mb-4 rounded-circle"
                />
                <h3 class="mb-4">Shabrina</h3>
                <p class="testimonial">
                  "It's exactly what I've been looking for. Nomads has got everything I need. It's exactly what I've been looking for. I can't say enough about Nomads."
                </p>
              </div>

              <hr />

              <p class="trip-to mt-2">
                Trip to Karimun Jawa
              </p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 text-center">
            <a
              href="#"
              class="btn btn-need-help px-4 mt-4 mx-1"
            >
              I Need Help
            </a>
            <a
              href="{{ route('register') }}"
              class="btn btn-get-started px-4 mt-4 mx-1"
            >
              Get Started
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection

@push('prepend-style')
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endpush

@push('addon-script')
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
@endpush

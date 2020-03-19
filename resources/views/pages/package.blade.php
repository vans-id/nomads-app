@extends('layouts.app')

@section('title', 'NOMADS | Paket Travel')

@section('content')
  <main>
    <section
      class="section-package-header"
    ></section>

    <section class="section-popular-content section-packages">
      <div class="container">
        <div
          class="section-popular-travel row"
        >
          @foreach ($items as $item)
            <div 
              class="col-sm-6 col-lg-3"
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
  </main>
@endsection
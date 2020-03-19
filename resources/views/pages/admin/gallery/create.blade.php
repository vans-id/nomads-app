@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Gallery</h1>
    <a 
      href="{{ route('gallery.create') }}" 
      class="btn btn-primary shadow-sm btn-sm"
    >
      <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Gallery
    </a>
  </div>

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <div>{{ $error }}</div>
        @endforeach
      </ul>
    </div>
  @endif

  <div class="card shadow">
    <div class="card-body">
      <form 
        action="{{ route('gallery.store') }}"
        method="POST"
        enctype="multipart/form-data"
      >
        @csrf
        <div class="form-group">
          <select 
            name="travel_packages_id" 
            class="form-control"
            required
          >
            <option value="">Pilih Paket Travel</option>
            @foreach ($travel_packages as $travel_package)
              <option 
                value="{{ $travel_package->id }}"
              >
                {{ $travel_package->title }}
              </option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="image">Image</label>
          <input 
            type="file"
            name="image"
            class="form-control"
            placeholder="Image"
          >
        </div>

        <button type="submit" class="btn btn-primary btn-block">
          Simpan 
        </button>
      </form>
    </div>
  </div>

</div>
<!-- /.container-fluid -->    
@endsection
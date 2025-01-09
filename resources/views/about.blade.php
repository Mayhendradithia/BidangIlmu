@extends('layout')
@section('content')

<main id="content" role="main">
  <!-- Gallery -->
  <div class="container content-space-t-3 content-space-t-lg-5">
    <div class="w-lg-75 text-center mx-lg-auto">
      <!-- Heading -->
      <div class="mb-5 mb-md-10">
        <h1 class="display-4">{{ $about->title ?? 'null' }}</h1>
        <p class="lead mt-5">{{ $about->description ?? 'null'}}</p>
      </div>
      <!-- End Heading -->
    </div>

    <div class="row gx-3 justify-content-center align-items-center min-vh-100">
      <div class="col mb-3 d-flex justify-content-center align-items-center">
          <div class="bg-img-start">
              <img style="height: 15rem;" src="{{ asset('/storage/' . $about->image) }}">
          </div>
      </div>
  </div>
  
  <!-- End Gallery -->

  <!-- Feature Stats -->
  <div class="container content-space-2 content-space-lg-3">
    <div class="row justify-content-lg-center">
      <div class="col-sm-4 col-lg-3 mb-7 mb-sm-0">
        <div class="text-center">
          <h2 class="display-4">{{ $totalMateri }}</h2>
          <p class="small">Materi</p>
        </div>
      </div>
      <!-- End Col -->

      <div class="col-sm-4 col-lg-3 mb-7 mb-sm-0">
        <div class="text-center">
          <h2 class="display-4">{{ $user }}</h2>
          <p class="small">Pengguna</p>
        </div>
      </div>
      <!-- End Col -->
      <!-- End Col -->
    </div>
    <!-- End Row -->
  </div>
  <!-- End Feature Stats -->

  <div class="border-top mx-auto" style="max-width: 25rem;"></div>

  <!-- Info -->
  <div class="container content-space-2 content-space-lg-3">
    <div class="row justify-content-center">
        <!-- Bagian Overview -->
        <div class="col-lg-8 text-center mb-5">
            <h2 class="display-4">{{ $about->title_overview ?? 'Default Overview' }}</h2>
        </div>
        <!-- End Overview -->

        <!-- Bagian Deskripsi -->
        <div class="col-lg-10">
            <p class="lead">
                {{ $about->deskripsi ?? 'Default description for this section.' }}
            </p>
        </div>
        <!-- End Deskripsi -->
    </div>
    <!-- End Row -->
</div>

  <!-- End Info -->

  <div class="border-top mx-auto" style="max-width: 25rem;"></div>

  <!-- Team -->

  <!-- End Team -->
</main>
@endsection
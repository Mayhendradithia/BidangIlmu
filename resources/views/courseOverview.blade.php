@extends('layout')
@section('content')
    <main id="content" role="main">
        <div class="position-relative mt-10">
            <!-- Hero -->
            <div class="gradient-y-overlay-lg-white bg-img-start content-space-2"
                style="background-image: url(../assets/img/1920x800/img6.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-lg-8">
                            <h1>{{ $materi->title }}</h1>
                            <h3><a class="link">{{ $materi->kategori->nama }}</a></h3>
                            <p class="mt-3">{{ $materi->overview }}</p>

                            <div class="d-flex align-items-center flex-wrap">
                                <!-- Media -->

                                <!-- End Media -->

                                <div class="d-flex align-items-center flex-wrap">
                                </div>
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->
                    </div>
                </div>
                <!-- End Hero -->

                <!-- Sidebar -->
                <div class="container content-space-t-md-2 position-md-absolute top-0 start-0 end-0">
                    <div class="row justify-content-end">
                        <div class="col-md-5 col-lg-4 position-relative zi-2 mb-7 mb-md-0">
                            <!-- Sticky Block -->
                            <div id="stickyBlockStartPoint">
                                <div class="js-sticky-block"
                                    data-hs-sticky-block-options='{
                   "parentSelector": "#stickyBlockStartPoint",
                   "breakpoint": "md",
                   "startPoint": "#stickyBlockStartPoint",
                   "endPoint": "#stickyBlockEndPoint",
                   "stickyOffsetTop": 12,
                   "stickyOffsetBottom": 12
                 }'>
                                    <!-- Card -->
                                    <div class="card">
                                        <div class="p-1">
                                            <!-- Fancybox -->

                                            @php
                                                // Ambil URL video dari database
                                                $urlVideo = $materi->url_video;

                                                // Ekstrak ID video dari URL pake regex
                                                preg_match(
                                                    '/(?:https?:\/\/(?:www\.)?youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/',
                                                    $urlVideo,
                                                    $matches,
                                                );
                                                $videoId = $matches[1] ?? null; // ID video YouTube
                                            @endphp

                                            @if ($videoId)
                                                <div class="bg-img-start text-center rounded-2 py-10 px-5"
                                                    style="background-image: url('https://img.youtube.com/vi/{{ $videoId }}/hqdefault.jpg');">
                                                    <a class="video-player video-player-btn"
                                                        href="https://www.youtube.com/embed/{{ $videoId }}"
                                                        role="button" data-fslightbox="youtube-video">
                                                        <span class="d-flex justify-content-center align-items-center">
                                                            <span class="video-player-icon shadow-sm">
                                                                <i class="bi-play-fill"></i>
                                                            </span>
                                                        </span>
                                                        <span class="text-white">Preview this course</span>
                                                    </a>
                                                </div>
                                            @endif




                                            <!-- End Fancybox -->
                                        </div>
                                        <!-- End Card Body -->
                                    </div>
                                    <!-- End Card -->
                                </div>
                            </div>
                            <!-- End Sticky Block -->
                        </div>
                    </div>
                </div>
                <!-- End Sidebar -->
            </div>

            <!-- Content -->
            <div class="container content-space-t-2 content-space-t-md-1">
                <div class="row">
                    <div class="col-md-7 col-lg-8">
                        <h3 class="mb-4">Apa aja yang kamu pelajari</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- List Checked -->
                                <ul class="list-checked list-checked-primary">
                                    @foreach (explode(',', $materi->benefit) as $index => $benefit)
                                        @if ($index < 4)
                                            <li class="list-checked-item">{{ $benefit }}</li>
                                        @endif
                                    @endforeach
                                </ul>
                                <!-- End List Checked -->
                            </div>

                            <div class="col-lg-6">
                                <!-- List Checked -->
                                <ul class="list-checked list-checked-primary">
                                    @foreach (explode(',', $materi->benefit) as $index => $benefit)
                                        @if ($index >= 3)
                                            <li class="list-checked-item">{{ $benefit }}</li>
                                        @endif
                                    @endforeach
                                </ul>
                                <!-- End List Checked -->
                            </div>
                        </div>
                    </div>

                    <!-- End Row -->

                    <!-- Content -->
                    <div class="border-top pt-7 mt-7">
                        <div class="mb-4">
                            <h3>Deskripsi</h3>
                        </div>

                        <!-- Read More - Collapse -->
                        <div class=id="collapseCourseDescriptionSection">
                            <p>{{ $materi->deskripsi }}</p>
                        </div>
                        <!-- End Link -->
                    </div>
                    <!-- End Content -->

                    <hr class="my-7">
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Content -->
    </main>
@endsection

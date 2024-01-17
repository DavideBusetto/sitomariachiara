<x-layout>
    <x-header/>
    <div class="container my-5">
        <div class="row text-left">
            <div class="col-12">
                <h1>Articoli in evidenza</h1>
                <div class="border-custom-big">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-12 swiper-container">
                <div class="swiper mySwiperClass">
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        @foreach ($articles as $article)
                            <div class="swiper-slide px-2">
                                <x-article-card :article="$article"/>
                            </div>
                        @endforeach
                        
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev d-none d-md-block"></div>
                    <div class="swiper-button-next d-none d-md-block"></div>
                </div>
            </div>

        </div>
    </div>


    @if($video)
    <section class="container my-5 ">
        <div class="row">
            <div class="col-12">
                <h2 class="h1">Video in evidenza</h2>
            </div>
            <div class="col-12 text-center my-5">
                <x-video-section url="{{ $video->url }}"/>
            </div>
        </div>
    </section>
    @endif


    <section class="container my-5 ">
        <div class="row">
            <div class="col-12">
                <h1>Gli utlimi Lavori</h1>
            </div>
        </div>
    </section>

    <section class="container my-5 ">
        <div class="row text-center">
          @foreach ($works as $work)
            <div class="col-12 col-md-4 my-3">
                <x-work-card :work="$work"/>
            </div>
          @endforeach
        </div>
    </section>



    <section class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1>Risorse</h1>
            </div>
        </div>
    </section>

    <section class="container my-5">
        <div class="row text-left">
          @foreach ($papers as $paper)
          <div class="col-12 col-md-3">
              <livewire:paper-container :paper="$paper"/>
          </div>
          @endforeach
        </div>
    </section>

</x-layout>
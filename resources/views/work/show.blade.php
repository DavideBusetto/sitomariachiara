<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{{ $work->name }}</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <img src="{{ $work->getFirstMediaUrl('gallery', 'cover') }}" alt="">
            </div>
            @foreach ($work->getMedia('gallery') as $image)  
            <div class="col-12 col-md-4">
                <img src="{{ $image->getUrl('cover') }}" alt="">
            </div>
            @endforeach
        </div>
    </div>

</x-layout>
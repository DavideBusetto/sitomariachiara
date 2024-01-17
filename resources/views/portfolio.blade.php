<x-layout>
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <h1>Portfolio</h1>
            </div>
        </div>
    </div>
    <div class="container my-3">
        <div class="row">
            @foreach($images as $image)
            <div class="col-12">
               <img src="{{$image['cover']}}" alt="">
               <a href="{{ route('work.show', $image['id'])}}">{{ $image['name']}}</a>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
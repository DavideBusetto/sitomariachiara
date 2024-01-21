<x-layout>
    <style>
       #masonry figure img {
  max-width: 100%;
  display: block;
}

#masonry figure {
  margin: 0;
  display: grid;
  grid-template-rows: 1fr auto;
  margin-bottom: 10px;
  break-inside: avoid;
}

figure a img {
  grid-row: 1 / -1;
  grid-column: 1;
}

#masonry figure a {
  color: black;
  text-decoration: none;
}

figcaption {
  grid-row: 2;
  grid-column: 1;
  background-color: rgba(255,255,255,.5);
  padding: .2em .5em;
  justify-self: start;
}

#masonry.container {
  column-count: 1;
  column-gap: 10px;
}
        </style>
    <header class="bg-light border-bottom-dashed">
        <div class="bg-portfolio-index vh-100">
          <div class="container h-100">
            <div class="row h-100 align-items-center">
              <div class="col-12">
                <h1 class="fw-bold">Portfolio</h1>
                <div class="border-custom-big"></div>
              </div>
            </div>
          </div>
      
        </div>
    </header>
    <div class="container-fluid bg-profile-pic min-vh-100 border-bottom-dashed">
        <div class="container">
            <div class="row py-3">
                <div class="col-12 col-md-8">
                    <h1 class="pt-3">Chi sono</h1>
                    <div class="border-custom-big mb-3"></div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt nesciunt qui mollitia vitae quo, numquam iure eveniet autem possimus, fugiat magnam earum nihil consectetur nobis. Accusantium provident nulla autem! Facere.
                    Eius modi ad labore dolore ea eum! Ratione velit eaque molestias? Doloribus quisquam vel molestias corrupti fugiat, quam dolor mollitia hic aliquam, tenetur laboriosam officia ea sed voluptatum, accusantium quos.
                    Temporibus sint velit impedit, commodi autem qui ipsam blanditiis harum voluptatum quibusdam fugiat enim mollitia laboriosam neque, officiis cumque quasi sunt est aliquid eos voluptate. Deleniti delectus exercitationem animi hic.
                    Optio, nam nulla maiores incidunt, dicta sint atque fuga neque itaque voluptatum placeat aut, voluptates deserunt soluta nihil at ipsam cum corrupti officiis impedit earum? At error excepturi fuga deserunt?
                    Sequi mollitia dignissimos corporis adipisci placeat, pariatur voluptates? Libero dolorem ut, sint fugit quod necessitatibus quas magni dicta, ratione aspernatur commodi ipsa fuga aliquid doloribus harum maxime id modi velit?
                    Odit labore dolorem repellendus incidunt repudiandae tempore?</p>
                </div>
        
            </div>

        </div>

    </div>
   
    <div class="container my-3">
        <div class="row">
            {{-- @foreach($images as $image)
            <div class="col-12">
               <img src="{{$image['cover']}}" alt="">
               <a class="text-decoration-none" href="{{ route('work.show', $image['id'])}}">{{ $image['name']}}</a>
            </div>
            @endforeach --}}

            <div id="masonry" class="container">
                <div class="row">
                    @foreach($images as $image)
                 
                    <figure class="col-12">
                        <a class="d-block mx-auto" href="{{ route('work.show', $image['id'])}}"">
                            <img class="w-50 d-block mx-auto" src="{{$image['cover']}}" alt="{{ $image['name']}}" />
                            <figcaption><h5 href="#">{{ $image['name']}}</h5></figcaption>
                        </a>
                      </figure>
    
                    @endforeach

                </div>
           </div>
              
        
              
        </div>
    </div>
</x-layout>
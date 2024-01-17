<article class="card colorcard card-height">
    <img src="{{ $article->getCover() }}" class="card-img-top img-fluid p-3" alt="{{ $article->title }}">
    <div class="card-body">
      <h5 class="fw-500">{{ $article->title }}</h5>
      <div class="border-custom"></div>
      <p class="card-text mt-3">{!! substr($article->subtitle, 0, 30) !!}...</p>
      <h6 class="fst-normal small text-end color-text-small">{{ $article->created_at->format("d/m/y") }}</h6>
      <p class="fst-italic small text-end color-text-small">{{ $article->getTagsFormatted() }}</p>
    </div>
</article>
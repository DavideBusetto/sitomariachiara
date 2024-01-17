<x-layout>
    <header class="container-fluid my-5">
        <div class="row px-3">
            <div class="col-12 col-md-8">
                @if($featuredArticle)
                <x-article-card :article="$featuredArticle"/>
                @endif
            </div>
        </div>
    </header>
    <livewire:articles-container />
</x-layout>
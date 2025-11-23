    <x-layout>
        
        <div class="container-fluid bg-body-secondary bg-white-background">
            <div class="row h-75 justify-content-center align-items-center">
                <div class="col-12 mt-1 px-0 py-0">
                    <h1 class="text-center display-4 shadow text-bianco bg-sabbia">
                        BLOG
                    </h1>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                @foreach ($articles as $article)
                    <div class="col-12 col-md-3 py-5">
                        <x-card
                        articleName = "{{ $article['name'] }}"
                        articleId = "{{ $article['id'] }}"
                        articleDescription = "{{ $article['description'] }}"
                        articleImg = "{{ $article['img'] }}"
                        articleArticolo = "{{ $article['articolo'] }}"
                        >
                        </x-card>
                    </div>
                @endforeach
            </div>
        </div>

    </x-layout>
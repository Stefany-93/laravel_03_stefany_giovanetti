<div class="card mx-auto card-custom" style="width: 18rem;">
    <img src="{{ $articleImg }}" alt="" class="img-custom">
    <div class="card-body">
        <h5 class="card-title">{{ $articleName }}</h5>
        <p>{{ $articleDescription }}</p>
        <a href="{{ route('article.detail', ['id' => $articleId]) }}" class="btn btn-primary">Leggi l'articolo completo</a>
    </div>
</div>
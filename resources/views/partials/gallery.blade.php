<section class="gallery">
    <div class="container">
        <h2 class="section-title">Галерия</h2>
        <div class="gallery-container">
            @foreach($galleries as $gallery)
                <div class="gallery-item">
                    <a href="{{ asset('storage/' . $gallery->image) }}" data-fancybox="gallery" data-caption="{{ $gallery->title }}">
                        <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}">
                    </a>
                </div>
            @endforeach
        </div>
        <div id="pagination-container"></div>
    </div>
</section>

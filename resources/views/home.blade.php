@extends('layouts.index')

@section('content')
    <section class="full-width-section">
        <div class="section-text">ПРИРОДО-МАТЕМАТИЧЕСКА ГИМНАЗИЯ <br> <span class="section-subtext">"АТАНАС РАДЕВ"</span></div>
    </section>
    <section class="latest-events">
    <div class="container">
        <h2 class="section-title">Скорошни новини</h2>
        <div class="events-container">
        <?php $count = 0; ?>
        @foreach($news as $news_item)
            <?php if ($count >= 2) break; ?>
                <div class="event">
                    <h3>{{ $news_item->title }}</h3>
                    <p class="text" style="white-space: normal;">{!! Str::limit($news_item->content, 1000) !!}</p>
                    <p class="date">Дата: {{ date('d.m.Y', strtotime($news_item->date)) }}</p>
                </div>
                <?php $count++; ?>
            @endforeach
        </div>
    </div>
</section>
@endsection

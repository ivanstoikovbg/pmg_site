<section class="latest-events">
        <div class="container">
            <h2 class="section-title">Новини</h2>
            <div class="events-container">
                @foreach($news as $news_item)
                    <div class="event">
                        <h3>{{ $news_item->title }}</h3>
                        <p class="text" style="white-space: normal;">{!! $news_item->content !!}</p>
                        <p class="date">Дата: {{ date('d.m.Y', strtotime($news_item->date)) }}</p>
                    </div>
                @endforeach
            </div>
        </div>
</section>
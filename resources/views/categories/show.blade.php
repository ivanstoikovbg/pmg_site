<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/news.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/documents.css') }}">
    <script src="https://kit.fontawesome.com/9b6ddce56d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/simplePagination.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>{{ ucfirst($category) }}</title>
</head>
<body>
    @include('partials.navbar')

    <section class="latest-events">
    <div class="container">
        <div class="events-container">
        <h2 class="section-title">{{ ucfirst($category) }}</h2>
        <div class="events-container">
            @foreach($documents as $document)
                <div class="event">
                    <h3>{{ $document->name }}</h3>
                    <p class="text" style="white-space: normal;">
                    <a href="{{ Storage::url($document->file_path) }}" target="_blank">Изтегляне на файла</a>
                    </p>
                </div>
            @endforeach
        </div>
    </div>
    <div id="pagination-container"></div>
    </section>

    @include('partials.footer')
    @include('partials.scroll')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="{{ asset('assets/js/model.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.2/jquery.twbsPagination.min.js"></script>

    <script>
        $(document).ready(function() {
            var itemsPerPage = 12;
            var totalItems = $('.gallery-item').length; 

            $('#pagination-container').twbsPagination({
                totalPages: Math.ceil(totalItems / itemsPerPage),
                visiblePages: 5, 
                onPageClick: function (event, page) {
                    var startIndex = (page - 1) * itemsPerPage;
                    var endIndex = startIndex + itemsPerPage;

                    
                    $('.gallery-item').hide().slice(startIndex, endIndex).show();
                },
                first: false,
                prev: '<< Предишна',
                next: 'Следваща >>',
                last: false 
            });

            $('.gallery-item').slice(0, itemsPerPage).show();
        });

    </script>
</body>
</html>
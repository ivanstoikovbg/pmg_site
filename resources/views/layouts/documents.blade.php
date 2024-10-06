<!DOCTYPE html>
<html lang="bg">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ПМГ „Атанас Радев" - град Ямбол')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/documents.css') }}">
    <script src="https://kit.fontawesome.com/9b6ddce56d.js" crossorigin="anonymous"></script>
</head>

<body>
    @include('partials.navbar')
    
    @include('partials.documents')

    @include('partials.footer')

    @include('partials.scroll')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="{{ asset('assets/js/model.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        var accordionItems = document.querySelectorAll('.accordion-item');

        accordionItems.forEach(function(item) {
            var header = item.querySelector('.accordion-header');
            var content = item.querySelector('.accordion-content');

            header.addEventListener('click', function() {
                var isActive = content.classList.contains('active');

                accordionItems.forEach(function(item) {
                    item.querySelector('.accordion-content').classList.remove('active');
                });

                if (!isActive) {
                    content.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>

<h2 class="section-title">Специалности</h2>

<div class="container-specialties">
    <div class="menu">
        @foreach($specialties as $index => $specialty)
            <div class="menu-item" onclick="showContent({{ $index }})">{{ $specialty['title'] }}</div>
        @endforeach
    </div>
    <div class="content">
        @foreach($specialties as $index => $specialty)
            <div class="content-item {{ $index !== 0 ? 'hidden' : '' }}">
                <h3>{{ $specialty['title'] }}</h3>
                <p><strong>Описание:</strong> {{ $specialty['description'] }}</p>
                <h4>В нея ще научите:</h4>
                <ul>
                    @foreach($specialty['learn'] as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
</div>
<script>
    function showContent(index) {
        var contents = document.querySelectorAll('.content-item');
        contents.forEach(function(content, i) {
            content.classList.toggle('hidden', i !== index);
        });
    }
</script>

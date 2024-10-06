<div class="container">
    <h2 class="section-title">Преподаватели</h2>
        <div class="teachers-grid">
            @foreach ($teachers as $teacher)
                <div class="teacher-card">
                    <img src="{{ asset('storage/' . $teacher->photo) }}" alt="{{ $teacher->first_name }} {{ $teacher->last_name }}" class="teacher-photo">
                    <div class="teacher-info">
                        <h2>{{ $teacher->first_name }} {{ $teacher->last_name }}</h2>
                        <p>Учител по {{ $teacher->subject }}</p>
                    </div>
                </div>
            @endforeach
        </div>
</div>

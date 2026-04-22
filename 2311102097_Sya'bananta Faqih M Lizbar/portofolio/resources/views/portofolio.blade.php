<h1 class="text-3xl font-bold">My Portfolio</h1>

<!-- Profile -->
<div>
    <h2>About Me</h2>
    <p>{{ $profile->bio ?? 'Belum ada data' }}</p>
</div>

<!-- Skills -->
<div>
    <h2>Skills</h2>
    @foreach($skills as $skill)
        <p>{{ $skill->name }} - {{ $skill->level }}</p>
    @endforeach
</div>

<!-- Achievement -->
<div>
    <h2>Achievements</h2>
    @foreach($achievements as $a)
        <p>{{ $a->title }} ({{ $a->year }})</p>
    @endforeach
</div>
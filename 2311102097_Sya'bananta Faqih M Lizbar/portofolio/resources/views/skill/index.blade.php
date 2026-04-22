<h2>Skills</h2>

<a href="/skills/create">+ Tambah Skill</a>

@foreach($skills as $skill)
    <p>
        {{ $skill->name }} - {{ $skill->level }}

        <a href="/skills/{{ $skill->id }}/edit">Edit</a>

        <form action="/skills/{{ $skill->id }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </p>
@endforeach
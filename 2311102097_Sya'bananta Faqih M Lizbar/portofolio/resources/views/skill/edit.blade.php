<h2>Edit Skill</h2>

<form action="/skills/{{ $skill->id }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $skill->name }}">
    <input type="text" name="level" value="{{ $skill->level }}">

    <button type="submit">Update</button>
</form>
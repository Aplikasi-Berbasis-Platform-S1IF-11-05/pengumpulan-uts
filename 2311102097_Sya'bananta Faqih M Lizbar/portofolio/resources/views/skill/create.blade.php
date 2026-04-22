<h2>Tambah Skill</h2>

<form action="/skills" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nama Skill">
    <input type="text" name="level" placeholder="Level">
    <button type="submit">Simpan</button>
</form>
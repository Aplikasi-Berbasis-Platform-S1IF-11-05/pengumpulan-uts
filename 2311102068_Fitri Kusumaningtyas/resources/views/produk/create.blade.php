<h1>Tambah Skill</h1>

<form method="POST" action="/produk">
@csrf
<input type="text" name="nama_produk" placeholder="Nama Produk"><br>
<textarea name="deskripsi" placeholder="Deskripsi"></textarea><br>
<input type="number" name="tahun" placeholder="Tahun"><br>
<input type="text" name="gambar" placeholder="Nama gambar"><br>
<button type="submit">Simpan</button>
</form>
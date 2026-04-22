<!DOCTYPE html>
<html>
<head>
    <title>Portofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h1 class="text-center mb-4">Portofolio</h1>
    <h5 class="text-right">Fitri Kusumaningtyas</h5>
    <h6 class="text-right">Telkom University Purwokerto</h6>
    <h6 class="text-right">S1 Teknik Informatika</h6>


    <a href="/tambah" class="btn btn-primary mb-3">+ Tambah Skill</a>

    <div class="row">
        @foreach($produk as $p)
        <div class="col-md-4">
            <div class="card mb-4 shadow">
                
                <img src="{{ asset('images/'.$p->gambar) }}" 
                     class="card-img-top" 
                     style="height:200px; object-fit:cover;">

                <div class="card-body">
                    <h5 class="card-title">{{ $p->nama_produk }}</h5>
                    <p class="card-text">{{ $p->deskripsi }}</p>
                    <h6 class="text-success">{{ $p->harga }}</h6>
                </div>

            </div>
        </div>
        @endforeach
    </div>

</div>

</body>
<nav class="navbar navbar-dark bg-dark mb-4">
  <div class="container">
    <span class="navbar-brand">PENGALAMAN FITRI KUSUMANINGTYAS</span>
  </div>
</nav>
</html>
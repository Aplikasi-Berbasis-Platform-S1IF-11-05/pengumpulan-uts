<!DOCTYPE html>
<html>
<head>
    <title>Form Portofolio</title>
    <style>
        body {
            font-family: Arial;
            background: linear-gradient(135deg, #fbc2eb, #a6c1ee);
            padding: 40px;
        }
        .container {
            background: white;
            padding: 25px;
            border-radius: 15px;
            width: 400px;
            margin: auto;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        h2 {
            color: #e91e63;
            text-align: center;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 6px;
            border: 1px solid #ccc;
        }
        button {
            background: #e91e63;
            color: white;
            padding: 10px;
            border: none;
            width: 100%;
            border-radius: 6px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>{{ isset($book) ? 'Edit' : 'Tambah' }} Portofolio</h2>

    <form method="POST" action="{{ isset($book) ? '/books/'.$book->id : '/books' }}">
        @csrf
        @if(isset($book))
            @method('PUT')
        @endif

        <input type="text" name="title" placeholder="Skill"
            value="{{ $book->title ?? '' }}" required>

        <input type="text" name="author" placeholder="Data Diri"
            value="{{ $book->author ?? '' }}" required>

        <input type="text" name="type" placeholder="Achievement"
            value="{{ $book->type ?? '' }}" required>

        <button>Simpan</button>
    </form>
</div>

</body>
</html>
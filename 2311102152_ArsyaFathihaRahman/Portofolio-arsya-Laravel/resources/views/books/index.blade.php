<!DOCTYPE html>
<html>
<head>
    <title>Website Portofolio by Arsya</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
            margin: 0;
            padding: 0;
        }

        .wrapper {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            padding-top: 60px;
        }

        .container {
            width: 80%;
            max-width: 900px;
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        h2 {
            color: #e91e63;
            margin-bottom: 15px;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .btn {
            padding: 6px 12px;
            border-radius: 6px;
            text-decoration: none;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 13px;
        }

        .add { background: #e91e63; }
        .edit { background: orange; }
        .delete { background: red; }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th {
            text-align: left;
            padding: 10px;
            background: #f8f8f8;
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #eee;
        }

        tr:hover {
            background: #fff0f5;
        }

    </style>
</head>
<body>

<div class="wrapper">
    <div class="container">

        <div class="top-bar">
            <h2>📚 Data Diri</h2>
            <a href="/books/create" class="btn add">+ Tambah Data Diri</a>
        </div>

        <table>
            <tr>
                <th>Skill</th>
                <th>Data Diri</th>
                <th>Achievement</th>
                <th>Aksi</th>
            </tr>

            @foreach($books as $b)
            <tr>
                <td>{{ $b->title }}</td>
                <td>{{ $b->author }}</td>
                <td>{{ $b->type }}</td>
                <td>
                    <a href="/books/{{ $b->id }}/edit" class="btn edit">Edit</a>

                    <form action="/books/{{ $b->id }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn delete">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </table>

    </div>
</div>

</body>
</html>
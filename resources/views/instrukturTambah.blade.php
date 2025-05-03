<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah instruktur</title>
</head>
<body>
    <h1>Form Tambah instruktur</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('instruktur.simpan') }}" method="POST">
        @csrf
        <label for="nama">Nama instruktur:</label><br>
        <input type="text" id="nama" name="nama" value="{{ old('nama') }}"><br><br>

        <label for="keahlian">keahlian:</label><br>
        <input type="text" id="keahlian" name="keahlian" value="{{ old('keahlian') }}"><br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="{{ url('/instruktur') }}">← Kembali ke daftar instruktur</a>
</body>
</html>

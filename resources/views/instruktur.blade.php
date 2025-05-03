<h1>Daftar instruktur</h1>
@if (session('success'))
    <p style="color:green;">{{ session('success') }}</p>
@endif
<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Keahlian</th>
            <th>aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($instruktur as $d)
        <tr>
            <td>{{ $d->id }}</td>
            <td>{{ $d->nama }}</td>
            <td>{{ $d->keahlian }}</td>
        </tr>
        <td>
            <form action="{{ route('instruktur.hapus', $d->id) }}" method="POST" onsubmit="return confirm('Yakin mau hapus data ini?');">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
        @endforeach
    </tbody>
</table>
{{-- instruktur --}}
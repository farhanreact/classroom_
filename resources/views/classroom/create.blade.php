<h2>Tambah Classroom</h2>

<form action="{{ route('classroom.store') }}" method="POST">
    @csrf

    Name: <input type="text" name="name"><br><br>
    Level: <input type="text" name="level"><br><br>

    <button type="submit">Simpan</button>
</form>

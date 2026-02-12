<h2>Tambah Student</h2>

<form action="{{ route('student.store') }}" method="POST">
    @csrf

    Name:
    <input type="text" name="name"><br><br>

    Classroom:
    <select name="classrooms_id">
        @foreach($classrooms as $c)
            <option value="{{ $c->id }}">
                {{ $c->name }} - {{ $c->level }}
            </option>
        @endforeach
    </select><br><br>

    Gender:
    <select name="gender">
        <option value="L">L</option>
        <option value="P">P</option>
    </select><br><br>

    <button type="submit">Simpan</button>
</form>

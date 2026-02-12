<h2>Data Student</h2>

<a href="{{ route('student.create') }}">Tambah Student</a>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Classroom</th>
        <th>Gender</th>
        <th>Aksi</th>
    </tr>

    @foreach($students as $s)
    <tr>
        <td>{{ $s->id }}</td>
        <td>{{ $s->name }}</td>
        <td>{{ $s->classroom->name }}</td>
        <td>{{ $s->gender }}</td>
        <td>
            <a href="{{ route('student.edit', $s->id) }}">Edit</a>

            <form action="{{ route('student.destroy', $s->id) }}"
                  method="POST"
                  style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit"
                        onclick="return confirm('Yakin hapus?')">
                    Hapus
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

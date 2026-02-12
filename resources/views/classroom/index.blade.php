<h2>Data Classroom</h2>

<a href="{{ route('classroom.create') }}">Tambah Classroom</a>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Level</th>
        <th>Aksi</th>
    </tr>

    @foreach($classrooms as $c)
    <tr>
        <td>{{ $c->id }}</td>
        <td>{{ $c->name }}</td>
        <td>{{ $c->level }}</td>
        <td>
            <a href="{{ route('classroom.edit', $c->id) }}">Edit</a>

            <form action="{{ route('classroom.destroy', $c->id) }}"
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

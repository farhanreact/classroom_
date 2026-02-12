<h2>Edit Student</h2>

<form action="{{ route('student.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')

    Name:
    <input type="text" name="name"
           value="{{ $student->name }}"><br><br>

    Classroom:
    <select name="classrooms_id">
        @foreach($classrooms as $c)
            <option value="{{ $c->id }}"
                {{ $student->classrooms_id == $c->id ? 'selected' : '' }}>
                {{ $c->name }} - {{ $c->level }}
            </option>
        @endforeach
    </select><br><br>

    Gender:
    <select name="gender">
        <option value="L" {{ $student->gender == 'L' ? 'selected' : '' }}>L</option>
        <option value="P" {{ $student->gender == 'P' ? 'selected' : '' }}>P</option>
    </select><br><br>

    <button type="submit">Update</button>
</form>

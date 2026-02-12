<h2>Edit Classroom</h2>

<form action="{{ route('classroom.update', $classroom->id) }}" method="POST">
    @csrf
    @method('PUT')

    Name:
    <input type="text" name="name"
           value="{{ $classroom->name }}"><br><br>

    Level:
    <input type="text" name="level"
           value="{{ $classroom->level }}"><br><br>

    <button type="submit">Update</button>
</form>

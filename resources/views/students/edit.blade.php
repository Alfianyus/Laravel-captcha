@extends('templates.default')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{route('users.update', $student->id)}}" class="" method="post">

            @csrf

            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" name="example-text-input" placeholder="Tulis Nama" value="{{$student->name}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="text" name="password" class="form-control" name="example-text-input" placeholder="Tulis Password" value="{{$student->password}}">
            </div>
            <div class="mb-3">
                <input type="submit" value="Simpan" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
@endsection
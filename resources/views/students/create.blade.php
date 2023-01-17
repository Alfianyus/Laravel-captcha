@extends('templates.default')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{route('users.index')}}" class="" method="post">

        @csrf 
        
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" name="example-text-input" placeholder="Tulis Nama">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="text" name="password" class="form-control" name="example-text-input" placeholder="Tulis Password">
            </div>
            <div class="mb-3">
                <input type="submit" value="Simpan" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
@endsection
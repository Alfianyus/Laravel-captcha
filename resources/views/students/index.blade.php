@extends('templates.default')

@push('page-action')
<a href="{{route('users.create')}}" class="btn btn-primary">tambah Data</a>
@endpush

@section('content')
<div class="col-lg-8">
    <div class="card">
        <div class="table-responsive">
            <table class="table table-vcenter card-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Password</th>
                        <th>Fungsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)

                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->password }}</td>
                        <td>


                            <form action="{{route('users.edit', $student->id)}}" class="">
                                <input type="submit" value="Edit" class="btn btn-primary btn-sm">
                            </form>

                            <form action="{{route('users.destroy', $student->id)}}" class="" method="post">

                                @csrf

                                @method('delete')

                                <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
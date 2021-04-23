@extends('template')
@section('content')
    <div class="container">
        <div class="alert alert-primary" role="alert">
            <strong>Course Data</strong>
        </div>
        <div class="card text-left">
            <div class="card-body">
                <table class="table-bordered table">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($courses as $course)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->description }}</td>
                            <td>Edit | Hapus</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.default')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1>CRUD Post</h1>
                    <a href="{{url('/post/create')}}" class="btn btn-primary">+ Tambah data</a>
                </div>

                <div class="col-lg-8 mt-5">
                    <table class="table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>

                        @foreach ($data as $dataPost)
                            <tr>
                                <td>{{ $dataPost->id }}</td>
                                <td>{{ $dataPost->title }}</td>
                                <td>{{ $dataPost->content }}</td>
                                <td>{{ $dataPost->created_at }}</td>
                                <td>
                                    <a href="{{url('/post/show/' . $dataPost->id)}}" class="btn btn-info">Edit</a>
                                    <a href="{{url('/post/destroy/' . $dataPost->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <h1>Tambah Post</h1>
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{url('/post/store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Helmi Pradita">
                        </div>

                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control" name="content" placeholder="Isi dengan content"></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Tambah Post</button>
                        </div>

                        <div class="form-group mt-2">
                            <a href="{{url('/post')}}"> << Kembali ke halaman post </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">

    <div class="col-md-12">
      <div class="card-header">Edit Blog</div>
      <div class="card-body">

        <br>
        <br>
        <form action="{{ url('/admin/blog', $id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="Judul">Judul: </label>
                    <input type="text" name="judul" value="{{$blog->judul}}" class="form-control" required>
                </div>
            </div>

            <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="article">Article: </label>
                        <textarea name="article" class="form-control" required>{{$blog->article}}</textarea>
                    </div>
                </div>

            <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="gambar">Gambar: </label>
                        <input type="file" name="filename">
                    </div>
                </div>
        
            <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
        </form>

      </div>
    </div>

  </div>

</div>
@endsection

@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">

    <div class="col-md-12">
      <div class="card-header">Add New Buku</div>
      <div class="card-body">

        <br>
        <br>
        <form action="{{ url('/admin/buku') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="Judul">Judul: </label>
                    <input type="text" name="judul" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="Judul">Pengarang: </label>
                    <input type="text" name="pengarang" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="Judul">Penerbit: </label>
                    <input type="text" name="penerbit" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="Judul">Tahun Terbit: </label>
                    <input type="text" name="tahun" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="Judul">Stok: </label>
                    <input type="text" name="stok" class="form-control" required>
                </div>
            </div>

            <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="gambar">Cover: </label>
                        <input type="file" name="filename">
                    </div>
                </div>
        
            <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
        </form>
      </div>
    </div>

  </div>

</div>
@endsection

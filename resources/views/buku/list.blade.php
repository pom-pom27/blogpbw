@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">

    <div class="right">
      <a href="{{ url('admin/add_buku') }}" class="btn btn-primary"> Add New Buku </a>
    </div>

    <div class="col-md-12">
      <div class="card-header">Buku</div>
      <div class="card-body">

        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Image</th>
              <th scope="col">Judul</th>
              <th scope="col">Pengarang</th>
              <th scope="col">Penerbit</th>
              <th scope="col">Tahun</th>
              <th scope="col">Stok</th>
              <th scope="col">Created</th>
              <th scope="col" colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
            @if(!empty($DataBuku))
            @foreach($DataBuku as $key => $Buku)
            <tr>
              <td> {{ $key += 1 }} </td>
              <td>
                    @if($Buku->gambar != '')
                      <img src="{{ url('images/'.$Buku->gambar) }}" alt="Gambar" width="100" />
                    @else
                    -
                    @endif
              </td>
              <td> {{ $Buku->judul }} </td>
              <td> {{ $Buku->pengarang }} </td>
              <td> {{ $Buku->penerbit }} </td>
              <td> {{ $Buku->tahun }} </td>
              <td> {{ $Buku->stok }} </td>
              <td> {{ $Buku->created_at }} </td>
             
              <td> <a href="{{ url('admin/edit_buku', $Buku->id) }}" class="btn btn-success"><i class="fas fa-edit"></i> Edit </a> </td>
              <td>
                <form action="{{ url('admin/buku', $Buku->id) }}" method="post">
                  @csrf
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" onclick="return confirm('Are you sure ?')" class="btn btn-danger"><i class="far fa-trash-alt"></i> Delete </button>
                </form>
              </td>
            </tr>
            @endforeach
            @else
              <tr></tr>
            @endif
          </tbody>

        </table>

      </div>
    </div>

  </div>

</div>
@endsection

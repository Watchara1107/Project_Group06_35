@extends('layouts.back-end.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <h5 class="card-header">Products</h5>
    <div class="table-responsive text-nowrap">
      <a href="{{route('product.create')}}" class="btn btn-success mx-3"><i class='bx bxs-plus-circle'></i> เพิ่มข้อมูล</a>
      <table class="table mt-4">
        <thead class="table-red">
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Image</th>
            <th>Created_at</th>
            <th>Updated_at</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
        </tbody>
        @foreach ($product as $item)
        <tr>
          <td>{{ $product->firstItem()+$loop->index}}</td>
          <td>{{ $item->name }}</td>
          <td>{{ $item->price }}</td>
          <td>{{ $item->description }}</td>
          <td>
            <img src="{{ asset('admin/upload/product/'.$item->image)}}" width="100px" height="80px" alt="">
          </td>
          <td>{{ $item->created_at }}</td>
          <td>{{ $item->updated_at }}</td>
          <td>
            <a href="{{ route('product.edit',$item->id) }}"><i class='bx bxs-edit btn btn-warning'>Edit</i></a>
            <a href="{{ route('product.delete',$item->id) }}"><i class='bx bx-trash btn btn-danger'>Delete</i></a>

          </td>

        </tr>
        @endforeach
      </table>
    </div>
  </div>
  <hr class="my-5">

      {{ $product->links('pagination::bootstrap-5') }}


    <div class="content-backdrop fade"></div>
</div>
@endsection
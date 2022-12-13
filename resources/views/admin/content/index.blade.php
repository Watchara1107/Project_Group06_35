@extends('layouts.back-end.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
                        <div class="card">
                            <h5 class="card-header">Contact</h5>
                            <div class="table-responsive text-nowrap">
                                {{-- <a href="{{route('category.create')}}" class="btn btn-success mx-3"><i class='bx bxs-plus-circle'></i> เพิ่มข้อมูล</a> --}}
                              <table class="table mt-4">
                                <thead class="table-light">
                                  <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Emali</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Created_at</th>
                                    <th>Actions</th>
                                  </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                  <tr>
                                    
                                    @foreach ($contact as $con)
                                    <td>{{ $con->id }}</td>
                                    <td>{{ $con->name }}</td>
                                    <td>{{ $con->email }}</td>
                                    <td>{{ $con->subject }}</td>
                                    <td>{{ $con->message }}</td>
                                    <td>{{ $con->created_at }}</td>
                                    <td>
                                      <a href="{{ url('/admin/contact/delete/'.$con->id) }}"><i class='bx bx-trash btn btn-danger'>Delete</i></a>
                                    </td>
                                    @endforeach
                                  
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
</div>
@endsection
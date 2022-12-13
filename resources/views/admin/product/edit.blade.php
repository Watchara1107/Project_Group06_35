@extends('layouts.back-end.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card mb-9">
            <h5 class="card-header">Product</h5>
            <div class="card-body">
                <div>
                    <form action="{{route('product.update',$product->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="defaultFormControlInput" class="form-label">Name</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" placeholder="กรุณากรอกชื่อสินค้า" aria-describedby="defaultFormControlHelp" name="name" value="{{$product->name}}" />
                        <label for="defaultFormControlInput" class="form-label">price</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" placeholder="กรุณากรอกราคาสินค้า" aria-describedby="defaultFormControlHelp" name="price" value="{{$product->price}}" />
                        <label for="defaultFormControlInput" class="form-label">description</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" placeholder="กรุณากรอกรายละเอียดสินค้า" aria-describedby="defaultFormControlHelp" name="description" value="{{$product->description}}" />
                        <h5>Image</h5>
                        <div class="input-group">
                            <input type="file" name="image" value="{{$product->image}} class="form-control" id="inputGroupFile02" />
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                        <Button type="submit" value="บันทึก" class="btn btn-success mt-3">บันทึก</Button>
                        <a href="{{route('product')}}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
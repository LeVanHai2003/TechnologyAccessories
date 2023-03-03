@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
<div class="card mb-4">
    <div class="card-header ">
   Thêm sản phẩm
    </div>
    <div class="card-body">
    @if($errors->any())
    <ul class="alert alert-danger list-unstyled">
    @foreach($errors->all() as $error)
    <li>- {{ $error }}</li>
    @endforeach
    </ul>
    @endif
    <form method="POST" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
    @csrf <!– bảo vệ sự tấn công CSRF-->
    <!-- add form controls to create product -->
    <div class="row">
        <div class="col">
            <div class="mb-3 row">
                <label class="col-lg-4 col-md-6 col-sm-12 col-form-label">Tên sản phẩm:</label>
                 <div class="col-lg-10 col-md-6 col-sm-12">
                 <input name="name" value="{{ old('name') }}" type="text" class="form-control">
               </div>
            </div>
        </div>
       
    </div>
    <div class="row">
        <div class="col">
            <div class="mb-3 row">
                <label class="col-lg-4 col-md-6 col-sm-12 col-form-label">Giá sản phẩm:</label>
               <div class="col-lg-10 col-md-6 col-sm-12">
                <input name="price" value="{{ old('price') }}" type="number" class="form-control">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <div class="mb-3 row">
        <label class="col-lg-4 col-md-6 col-sm-12 col-form-label">Ảnh sản phẩm:</label>
        <div class="col-lg-10 col-md-6 col-sm-12">
        <input class="form-control" type="file" name="image">
        </div>
        </div>
        </div>
        <div class="col">
        &nbsp;
        </div>
        </div>
        
    <div class="mb-3">
        <label class="form-label">Mô tả sản phẩm:</label>
        <textarea class="form-control" name="description" rows="3">{{ old('description') }}
        </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
    </div>
    </div>
    


<div class="card border-danger">
<div class="card-header border-danger">
Danh mục sản phẩm
</div>
<div class="card-body">
    <table class="table table-info table-striped table-hover">
        <thead>
        <tr>
        <th scope="col">Mã sản phẩm</th>
        <th scope="col">Tên sản phẩm</th>
        <th scope="col">Sửa</th>
        <th scope="col">Xóa</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($viewData['products'] as $product)
<tr>
<td>{{ $product->getId() }}</td>
<td>{{ $product->getName() }}</td>
<td>
    <a class="btn btn-primary"
    href="{{route('admin.product.edit', ['id'=> $product->getId()])}}">
    <i class="bi-vector-pen"></i>
    </a> 
</td>
<td>
<form action="{{ route('admin.product.delete', $product->getId()) }}"
method="POST">
@csrf
@method('DELETE')
<button class="btn btn-danger">
<i class="bi-trash"></i>
</button>
</form>
</td>
</tr>
@endforeach
        </tbody>
        </table>
</div>
</div>
@endsection

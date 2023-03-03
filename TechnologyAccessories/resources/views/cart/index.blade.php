@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<link rel="stylesheet" href="../../css/Style.css">


<div class="wishlist-area pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#">
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="li-product-remove">Id</th>
                                    <th class="li-product-thumbnail">tên</th>
                                    <th class="li-product-price">Giá</th>
                                    <th class="cart-product-name">Số lượng</th>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($viewData["products"] as $product) 
                                <tr>
                                    <td class="li-product-remove"><a href="#">{{$product->getId()}}</i></a></td>
                                    <td class="li-product-thumbnail"><a href="#">{{$product->getName()}}</a></td>
                                    <td class="li-product-name"><a href="#">{{$product->getPrice()}}</a></td>
                                    <td class="li-product-price"><span class="amount">{{session('products')[$product->getId()]}}</span></td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row pt-5">
<div class="text-end">
    <a class="btn btn-outline-secondary mb-2"><b>Tổng tiền:</b>{{$viewData["total"]}}VND</a>
    @if(count($viewData["products"]) > 0)
    <a href="{{route('cart.purchase')}}" class="btn btn-warning text-white mb-2 pe-2">Thanh toán</a>
    <a href="{{route('cart.delete')}}">
    <button class="btn btn-warning text-white mb-2">
        Xóa tất cả sản phẩm khỏi giỏ hàng
    </button>
    </a>
    @endif
</div>
</div>

@endsection
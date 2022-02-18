@extends('fronted.layouts.master', ['page' => 'Beranda'])
@section('content')
    <div class="shop-category-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                    <!-- Shop Top Area Start -->
                    <div class="shop-top-bar d-flex">
                        <p class="compare-product"> <span>{{$items->count()}}</span> Product Found of <span>{{$items->total()}}</span></p>
                        <!-- Left Side End -->
                        <div class="shop-tab nav">
                            <button class="active" data-bs-target="#shop-grid" data-bs-toggle="tab">
                                <i class="fa fa-th" aria-hidden="true"></i>
                            </button>
                            <button data-bs-target="#shop-list" data-bs-toggle="tab">
                                <i class="fa fa-list" aria-hidden="true"></i>
                            </button>
                        </div>
                        <!-- Right Side Start -->
                        <div class="select-shoing-wrap d-flex align-items-center">
                            <div class="shot-product">
                                <p>Sort By:</p>
                            </div>
                            <!-- Single Wedge End -->
                            <div class="header-bottom-set dropdown">
                                <button class="dropdown-toggle header-action-btn" data-bs-toggle="dropdown">Default <i class="fa fa-angle-down"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="#">Name, A to Z</a></li>
                                    <li><a class="dropdown-item" href="#">Name, Z to A</a></li>
                                    <li><a class="dropdown-item" href="#">Price, low to high</a></li>
                                    <li><a class="dropdown-item" href="#">Price, high to low</a></li>
                                    <li><a class="dropdown-item" href="#">Sort By new</a></li>
                                    <li><a class="dropdown-item" href="#">Sort By old</a></li>
                                </ul>
                            </div>
                            <!-- Single Wedge Start -->
                        </div>
                        <!-- Right Side End -->
                    </div>
                    <!-- Shop Top Area End -->
                    <!-- Shop Bottom Area Start -->
                    <div class="shop-bottom-area">
                        <!-- Tab Content Area Start -->
                        <div class="row">
                            <div class="col">
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="shop-grid">
                                        <div class="row mb-n-30px">
                                            @foreach($items as $item)
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-30px">
                                                    <!-- Single Prodect -->
                                                    <div class="product">
                                                        <span class="badges">
                                                            @if($item->item_discount > 0)
                                                                <span class="sale">-{{$item->item_discount}}%</span>
                                                            @endif
                                                            @if($item->item_new == 1)
                                                                <span class="new">New</span>
                                                            @endif
                                                        </span>
                                                        <div class="thumb">
                                                            <a href="{{route('item', $item->item_id)}}" class="image">
                                                                <img src="{{asset('storage/images/product/'. $item->image()[0])}}" alt="Product" />
                                                                <img class="hover-image" src="{{asset('storage/images/product/'. $item->image()[0])}}" alt="Product" />
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <span class="category"><a href="#">{{$item->category->category_name}}</a></span>
                                                            <h5 class="title"><a href="{{route('item', $item->item_id)}}">{{$item->item_title}}</a></h5>
                                                            <span class="price">
                                                                @if($item->item_discount > 0)
                                                                    <span class="old">${{$item->item_price}}</span>
                                                                    <span class="new">${{($item->item_price) - (($item->item_price * $item->item_discount)/100)}}</span>
                                                                @else
                                                                    <span class="new">${{$item->item_price}}</span>
                                                                @endif
                                                            </span>
                                                        </div>
                                                        <div class="actions">
                                                            <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i class="pe-7s-like"></i></button>
                                                            <button class="action quickview btn-detail" id="btn-detail" data-num="{{$item->item_id}}"><i class="pe-7s-look"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade mb-n-30px" id="shop-list">
                                        @foreach($items as $item)
                                            <div class="shop-list-wrapper mb-30px">
                                                <div class="row">
                                                    <div class="col-md-5 col-lg-5 col-xl-4 mb-lm-30px">
                                                        <div class="product">
                                                            <div class="thumb">
                                                                <a href="{{route('item', $item->item_id)}}" class="image">
                                                                    <img src="{{asset('storage/images/product/'. $item->image()[0])}}" alt="Product" />
                                                                    <img class="hover-image" src="{{asset('storage/images/product/'. $item->image()[0])}}" alt="Product" />
                                                                </a>
                                                                <span class="badges">
                                                                    @if($item->item_discount > 0)
                                                                        <span class="sale">-{{$item->item_discount}}%</span>
                                                                    @endif
                                                                    @if($item->item_new == 1)
                                                                        <span class="new">New</span>
                                                                    @endif
                                                        </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-lg-7 col-xl-8">
                                                        <div class="content-desc-wrap">
                                                            <div class="content">
                                                                <span class="category"><a href="#">{{$item->category->category_name}}</a></span>
                                                                <h5 class="title"><a href="{{route('item', $item->item_id)}}">{{$item->item_title}}</a></h5>
                                                                <p>{{$item->item_desc}}</p>
                                                            </div>
                                                            <div class="box-inner">
                                                               <span class="price">
                                                                @if($item->item_discount > 0)
                                                                       <span class="old">${{$item->item_price}}</span>
                                                                       <span class="new">${{($item->item_price) - (($item->item_price * $item->item_discount)/100)}}</span>
                                                                   @else
                                                                       <span class="new">${{$item->item_price}}</span>
                                                                   @endif
                                                               </span>
                                                                <div class="actions">
                                                                    <button class="action wishlist" title="Wishlist" data-bs-toggle="modal" data-bs-target="#exampleModal-Wishlist"><i class="pe-7s-like"></i></button>
                                                                    <button class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-look"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab Content Area End -->
                        <!--  Pagination Area Start -->
                        @if($items->lastPage() > 1)
                            <div class="pro-pagination-style text-center text-lg-end" data-aos="fade-up" data-aos-delay="200">
                                <div class="pages">
                                    <ul>
                                        <li class="li"><a class="page-link" href="{{$items->currentPage() == 1 ? '#' : $items->previousPageUrl()}}"><i class="fa fa-angle-left"></i></a></li>
                                        @for($i=1;$i <= $items->lastPage(); $i++)
                                        <li class="li"><a class="page-link {{$items->currentPage() == $i ? 'active' : null}}" href="{{$items->url($i)}}">{{$i}}</a></li>
                                        @endfor
                                        <li class="li"><a class="page-link" href="{{$items->currentPage() == $items->lastPage() ? '#' :$items->nextPageUrl()}}"><i class="fa fa-angle-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endif
                        <!--  Pagination Area End -->
                    </div>
                    <!-- Shop Bottom Area End -->
                </div>
                <!-- Sidebar Area Start -->
                @include('fronted.layouts.sidebar')
            </div>
        </div>
    </div>
@endsection
@section('modal')
    <div class="modal modal-2 fade" id="item-detail" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> <i class="pe-7s-close"></i></button>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                            <!-- Swiper -->
                            <div class="swiper-container gallery-top">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" id="image0" src="{{asset('assets/images/product-image/small-image/1.webp')}}" alt="" width="570px">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" id="image1" src="{{asset('assets/images/product-image/small-image/2.webp')}}" alt="" width="570px">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" id="image2" src="{{asset('assets/images/product-image/small-image/3.webp')}}" alt="" width="570px">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" id="image3" src="{{asset('assets/images/product-image/small-image/4.webp')}}" alt="" width="570px">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" id="image4" src="{{asset('assets/images/product-image/small-image/5.webp')}}" alt="" width="570px">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-container gallery-thumbs mt-20px slider-nav-style-1 small-nav">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" id="image-small0" src="{{asset('assets/images/product-image/small-image/1.webp')}}" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" id="image-small1" src="{{asset('assets/images/product-image/small-image/2.webp')}}" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" id="image-small2" src="{{asset('assets/images/product-image/small-image/3.webp')}}" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" id="image-small3" src="{{asset('assets/images/product-image/small-image/4.webp')}}" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" id="image-small4" src="{{asset('assets/images/product-image/small-image/5.webp')}}" alt="">
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-buttons">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                            <div class="product-details-content quickview-content">
                                <h2 class="item-title"></h2>
                                <div class="pricing-meta">
                                    <ul class="d-flex">
                                        <li class="new-price">$20.90</li>
                                    </ul>
                                </div>
                                <p class="mt-30px item-desc" style="text-align: justify"></p>
                                <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                    <span>SKU:</span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#" class="item-sku">Ch-256xl</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                    <span>Categories: </span>
                                    <ul class="d-flex">
                                        <li>
                                            <a href="#" class="item-category">Smart Device</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                                    <span>Tags: </span>
                                    <ul class="d-flex item-tag">
                                        <li>
                                            <a href="#">Smart Device, </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                    </div>
                                    <div class="pro-details-cart">
                                        <button class="add-cart"> Add To
                                            Cart</button>
                                    </div>
                                    <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                        <a href="wishlist.html"><i class="pe-7s-like"></i></a>
                                    </div>
                                </div>
                                <div class="payment-img">
                                    <a href="#"><img src="assets/images/icons/payment.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        var csrf_token = {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
        $('.btn-detail').click(function (e){
            e.preventDefault();
            var item_id = $(this).data('num');
            $.ajax({
                headers: csrf_token,
                url : '{{route('home')}}',
                type: 'post',
                dataType: 'json',
                data: {
                    '_type': 'data',
                    '_data': 'item',
                    'item_id': item_id,
                },
                success : function (resp) {
                    var image = jQuery.parseJSON(resp.item_image);
                    var tag = resp.item_tag;
                    for (let i = 0; i < image.length; i++) {
                        $("#image"+i).attr("src",'{{asset('storage/images/product')}}/' + image[i]);
                        $("#image-small"+i).attr("src",'{{asset('storage/images/product')}}/' + image[i]);
                    }
                    for (let i = 0; i < tag.length; i++) {
                        item_tag += '<li> <a href="#">'+ tag[i]+' </a></li>'
                    }
                    $('.item-title').html(resp.item_title)
                    $('.new-price').html('$' + resp.item_price)
                    $('.item-desc').html(resp.item_desc)
                    $('.item-sku').html(resp.item_sku)
                    $('.item-category').html(resp.item_category)
                    $('.item-tag').html(item_tag)
                    $('#item-detail').modal('show')
                }
            });
        })
    </script>
@endsection

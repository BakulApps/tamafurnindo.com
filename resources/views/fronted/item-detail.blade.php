@extends('fronted.layouts.master', ['page' => $item->item_title])
@section('content')
    <!-- Product Details Area Start -->
    <div class="product-details-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                    <!-- Swiper -->
                    <div class="swiper-container zoom-top">
                        <div class="swiper-wrapper">
                            @for($i=0;$i<count($item->item_image);$i++)
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto" src="{{asset('storage/images/product/' . $item->item_image[$i])}}" alt="" width="570px">
                                    <a class="venobox full-preview" data-gall="myGallery" href="{{asset('storage/images/product/' . $item->item_image[$i])}}">
                                        <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                    </a>
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div class="swiper-container mt-20px zoom-thumbs slider-nav-style-1 small-nav">
                        <div class="swiper-wrapper">
                            @for($i=0;$i<count($item->item_image);$i++)
                                <div class="swiper-slide">
                                    <img class="img-responsive m-auto" src="{{asset('storage/images/product/' . $item->item_image[$i])}}" alt="">
                                </div>
                            @endfor
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-buttons">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-details-content quickview-content ml-25px">
                        <h2>{{$item->item_title}}</h2>
{{--                        <div class="pricing-meta">--}}
{{--                            <ul class="d-flex">--}}
{{--                                <li class="new-price">$20.90</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                        <p class="mt-30px" style="text-align: justify">{{$item->item_desc}}</p>
                        <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                            <span>SKU:</span>
                            <ul class="d-flex">
                                <li>
                                    <a href="#">{{$item->item_sku}}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                            <span>Categories: </span>
                            <ul class="d-flex">
                                <li>
                                    <a href="#">{{$item->category->category_name}}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="pro-details-categories-info pro-details-same-style d-flex m-0">
                            <span>Tags: </span>
                            <ul class="d-flex">
                                @for($i=0;$i<count($item->item_tag);$i++)
                                    <li>
                                        <a href="#">{{$item->item_tag[$i]}} </a>
                                    </li>
                                @endfor
                            </ul>
                        </div>
                        <div class="pro-details-quality">
                            <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                <a href="#"><i class="fa fa-whatsapp"></i></a>
                            </div>
                            <div class="pro-details-cart">
                                <a target="_blank" href="https://wa.me/{{$company->company_phone}}?text=Saya%20ingin%20pesan%20{{$item->item_title}}%20SKU%20:%20{{$item->item_sku}}" class="add-cart"> Chat on Whatsapp</a>
                            </div>
                        </div>
                    </div>
                    <!-- product details description area start -->
                    <div class="description-review-wrapper">
                        <div class="description-review-topbar nav">
                            <button data-bs-toggle="tab" data-bs-target="#des-details2">Information</button>
                            <button class="active" data-bs-toggle="tab" data-bs-target="#des-details1">Description</button>
                        </div>
                        <div class="tab-content description-review-bottom">
                            <div id="des-details2" class="tab-pane">
                                <div class="product-anotherinfo-wrapper text-start">
                                    <ul>
                                        <li><span>Weight</span> {{$item->item_weight}}</li>
                                        <li><span>Dimensions</span>{{$item->item_dimension}}</li>
                                        <li><span>Materials</span> {{$item->item_material}}</li>
                                        <li><span>Other Info</span> {{$item->item_info}}</li>
                                    </ul>
                                </div>
                            </div>
                            <div id="des-details1" class="tab-pane active">
                                <div class="product-description-wrapper">
                                    <p style="text-align: justify">
                                        {{$item->item_desc}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details description area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area Start -->
    <div class="product-area related-product">
        <div class="container">
            <!-- Section Title & Tab Start -->
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center m-0">
                        <h2 class="title">Related Products</h2>
                        <p>There are many variations of passages of {{$item->item_title}}</p>
                    </div>
                </div>
            </div>
            <!-- Section Title & Tab End -->
            <div class="row">
                <div class="col">
                    <div class="new-product-slider swiper-container slider-nav-style-1">
                        <div class="swiper-wrapper">
                            @foreach($relate_item as $item)
                                @php($item->item_image = $item->image())
                                <div class="swiper-slide">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        @if($item->item_discount > 0)
                                            <span class="badges">
                                                <span class="sale">{{$item->item_discount}}%</span>
                                            </span>
                                        @endif
                                        <div class="thumb">
                                            <a href="{{route('item', $item->item_id)}}" class="image">
                                                <img src="{{asset('storage/images/product/'. $item->item_image[0])}}" alt="Product" />
                                                <img class="hover-image" src="{{asset('storage/images/product/'. $item->item_image[0])}}" alt="Product" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title" style="text-align: center"><a href="{{route('item', $item->item_id)}}">{{$item->item_title}}</a></h5>
                                            <span class="category"><a href="#">{{$item->category->category_name}}</a></span>
                                        </div>
                                        <div class="actions">
                                            <a target="_blank" href="https://wa.me/{{$company->company_phone}}?text=Saya%20ingin%20pesan%20{{$item->item_title}}%20SKU%20:%20'{{$item->item_sku}}" class="action bg-success"><i class="fa fa-whatsapp"></i></a>
                                            <button class="action btn-detail" data-num="{{$item->item_id}}"><i class="pe-7s-look"></i></button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-buttons">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
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
                                    <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                        <a href="#"><i class="fa fa-whatsapp"></i></a>
                                    </div>
                                    <div class="pro-details-cart">
                                        <a target="_blank" href="" class="add-cart item-whatsapp"> Chat on Whatsapp</a>
                                    </div>
                                </div>
                                <div class="payment-img">
                                    <a href="#"><img src="{{asset('assets/images/icons/payment.png')}}" alt=""></a>
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
                    var item_tag = '';
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
                    $('.item-whatsapp').attr('href', 'https://wa.me/{{$company->company_phone}}?text=Saya%20ingin%20pesan%20'+resp.item_title+'%20SKU%20:%20'+resp.item_sku)

                    $('#item-detail').modal('show')
                }
            });
        })
    </script>
@endsection

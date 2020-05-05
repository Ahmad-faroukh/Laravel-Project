@extends ('inc.layout')
@section('content')

<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div
                    class="banner_content d-md-flex justify-content-between align-items-center"
            >
                <div class="mb-3 mb-md-0">
                    <h2>Product Details</h2>
                    <p>Very us move be blessed multiply night</p>
                </div>
                <div class="page_link">
                    <a href="index.html">Home</a>
                    <a href="single-product.html">Product Details</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Single Product Area =================-->
<div class="product_image_area">
    <div class="container">
        <div class="row s_product_inner">
            @if($product->image != 'null')

                <div class="col-lg-5 offset-lg-1">
                    <div class="s_product_text">
                        <h3 style="word-break:break-word; overflow-wrap: break-word">{{$product->name}}</h3>
                        <h2>{{$product->price}} $</h2>
                        <ul class="list">
                            <li>
                                <a class="active" href="#">
                                    <span>Category</span> : Household</a
                                >
                            </li>
                            <li>
                                <a href="#"> <span>Availibility</span> : In Stock</a>
                            </li>
                        </ul>
                        <p>
                            {{$product->description}}
                        </p>
                        <div class="product_count">
                            <label for="qty">Quantity:</label>
                            <input
                                    type="text"
                                    name="qty"
                                    id="sst"
                                    maxlength="12"
                                    value="1"
                                    title="Quantity:"
                                    class="input-text qty"
                            />
                            <button
                                    onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                    class="increase items-count"
                                    type="button"
                            >
                                <i class="lnr lnr-chevron-up"></i>
                            </button>
                            <button
                                    onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                    class="reduced items-count"
                                    type="button"
                            >
                                <i class="lnr lnr-chevron-down"></i>
                            </button>
                        </div>
                        <div class="card_area">
                            <a class="main_btn" href="#">Add to Cart</a>
                            <a class="icon_btn" href="#">
                                <i class="lnr lnr lnr-diamond"></i>
                            </a>
                            <a class="icon_btn" href="#">
                                <i class="lnr lnr lnr-heart"></i>
                            </a>
                        </div>
                    </div>
                </div>


            <div class="col-lg-6">
                <div class="s_product_img">
                    <img
                            src="/storage/product-images/{{$product->image}}"
                            alt="image"
                            style="width: 100%"
                    />
                    <!--
                    <div
                            id="carouselExampleIndicators"
                            class="carousel slide"
                            data-ride="carousel"
                    >
                        <ol class="carousel-indicators">
                            <li
                                    data-target="#carouselExampleIndicators"
                                    data-slide-to="0"
                                    class="active"
                            >
                                <img
                                        src="img/product/single-product/s-product-s-2.jpg"
                                        alt=""
                                />
                            </li>
                            <li
                                    data-target="#carouselExampleIndicators"
                                    data-slide-to="1"
                            >
                                <img
                                        src="img/product/single-product/s-product-s-3.jpg"
                                        alt=""
                                />
                            </li>
                            <li
                                    data-target="#carouselExampleIndicators"
                                    data-slide-to="2"
                            >

                            </li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img
                                        class="d-block w-100"
                                        src="img/product/single-product/s-product-1.jpg"
                                        alt="First slide"
                                />
                            </div>
                            <div class="carousel-item">
                                <img
                                        class="d-block w-100"
                                        src="img/product/single-product/s-product-1.jpg"
                                        alt="Second slide"
                                />
                            </div>
                            <div class="carousel-item">
                                <img
                                        class="d-block w-100"
                                        src="img/product/single-product/s-product-1.jpg"
                                        alt="Third slide"
                                />
                            </div>
                        </div>
                    </div>
                    -->
                </div>
            </div>


            @else
                <div class="col-md-12">
                    <div class="s_product_text">
                        <h3 style="word-break:break-word; overflow-wrap: break-word">{{$product->name}}</h3>
                        <h2>{{$product->price}} $</h2>
                        <ul class="list">
                            <li>
                                <a class="active" href="#">
                                    <span>Category</span> : Household</a
                                >
                            </li>
                            <li>
                                <a href="#"> <span>Availibility</span> : In Stock</a>
                            </li>
                        </ul>
                        <p>
                            {{$product->description}}
                        </p>
                        <div class="product_count">
                            <label for="qty">Quantity:</label>
                            <input
                                    type="text"
                                    name="qty"
                                    id="sst"
                                    maxlength="12"
                                    value="1"
                                    title="Quantity:"
                                    class="input-text qty"
                            />
                            <button
                                    onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                    class="increase items-count"
                                    type="button"
                            >
                                <i class="lnr lnr-chevron-up"></i>
                            </button>
                            <button
                                    onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                    class="reduced items-count"
                                    type="button"
                            >
                                <i class="lnr lnr-chevron-down"></i>
                            </button>
                        </div>
                        <div class="card_area">
                            <a class="main_btn" href="#">Add to Cart</a>
                            <a class="icon_btn" href="#">
                                <i class="lnr lnr lnr-diamond"></i>
                            </a>
                            <a class="icon_btn" href="#">
                                <i class="lnr lnr lnr-heart"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

<!--================End Single Product Area =================-->


@endsection
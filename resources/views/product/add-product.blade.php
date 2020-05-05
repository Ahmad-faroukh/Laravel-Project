@extends ('inc.layout')
@section('content')

        <section class="checkout_area section_gap">
            <div class="container">

                <div class="billing_details">
                    <div class="row">
                        <div class="col-lg-8">
                            <h3>List Product For Sale</h3>
                            <form
                                    class="row contact_form"
                                    action="{{route('product-submit')}}"
                                    method="post"
                                    enctype="multipart/form-data"
                            >
                                @csrf
                                <div class="col-md-12 form-group ">
                                    <input
                                            type="text"
                                            class="form-control {{$errors->has('name') ? "alert alert-danger bg-white" : ''}}"
                                            name="name"
                                            placeholder="Product Name"
                                            maxlength="190"
                                    />
                                    @if($errors->has('name'))
                                        <p class="text-danger">{{$errors->first('name')}}</p>
                                    @endif
                                </div>

                                <div class="col-md-12 form-group">
                                <textarea
                                        class="form-control {{$errors->has('description') ? "alert alert-danger bg-white" : ''}}"
                                        name="description"
                                        rows="1"
                                        placeholder="Product Description"
                                ></textarea>
                                    @if($errors->has('description'))
                                        <p class="text-danger">{{$errors->first('description')}}</p>
                                    @endif
                                </div>

                                <div class="col-md-6 form-group ">
                                    <input
                                            type="text"
                                            class="form-control {{$errors->has('price') ? "alert alert-danger bg-white" : ''}}"
                                            name="price"
                                            placeholder="Price"
                                            maxlength="10"
                                    />
                                    @if($errors->has('price'))
                                        <p class="text-danger">{{$errors->first('price')}}</p>
                                    @endif
                                </div>

                                <div class="col-md-12 form-group">
                                    <span>Product Image (Optional)</span>
                                    <input
                                            type="file"
                                            class="form-control"
                                            name="image"
                                            placeholder="Product Image"
                                    />
                                    @if($errors->has('image'))
                                        <p class="text-danger">{{$errors->first('image')}}</p>
                                    @endif
                                </div>

                                <div class="col-md-12 form-group">
                                    <button class="main_btn" type="submit">List Product</button>
                                </div>

                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </section>

@endsection

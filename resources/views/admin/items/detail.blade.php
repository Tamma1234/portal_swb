@extends('admin.layouts.main')
@section('title', 'Create')
@section('content')
    @include('admin.templates.content-header', ['name' => 'Swinburne', 'key' => 'Items', 'value' => "Detail", 'value2' => ""])
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <div class="card">
                <div class="row">
                    <div class="col-md-6 border-end">
                        <div class="d-flex flex-column justify-content-center">
                            <div class="main_image"><img
                                    src="https://drive.google.com/uc?export=view&id={{ $item->images }}"
                                    id="main_product_image"
                                    width="400"></div>
                                                        <div class="thumbnail_images">
                                                            <ul id="thumbnail">
                                                                <li><img onclick="changeImage(this)" src="https://drive.google.com/file/d/15oXFbTUAJKmy5qt9aJ-EwrdYGHmkOWpN/view"
                                                                         width="70"></li>
                                                            </ul>
                                                        </div>
                        </div>
                    </div>
                    <div class="col-md-6" id="list-carts">
                        <form action="{{ route("items.order", ['id' => $item->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="">
                                <div class="d-flex justify-content-between align-items-center text-uppercase"><h3
                                        style="color: #0f0f16; font-family: system-ui">{{ $item->name_item }}</h3></div>
                                <div class="mt-2 pr-3 content"><p>{{ $item->description }}</p></div>

                                <span class="kt-pricing-1__price" id="pricing-1__price"
                                      style="font-size: x-large;color: red;font-family: unset;">{{ $item->gold }}
                               </span>
                                <span class="kt-pricing-1__price"><img style="vertical-align: baseline; width: 20px"
                                                                       src="{{ asset('assets/admin/images/dong-coin.jpg') }}"
                                                                       alt="">
                                </span>
                                <div class="ratings d-flex flex-row align-items-center">
                                    <div class="d-flex flex-row"><i class='bx bxs-star'></i> <i class='bx bxs-star'></i>
                                        <i
                                            class='bx bxs-star'></i> <i class='bx bxs-star'></i> <i
                                            class='bx bx-star'></i>
                                    </div>
                                    <span>0 reviews</span></div>

                                <div class="mt-5">
                                    <span class="fw-bold">Quantity</span>
                                    <input type="number" class="form-control col-2" data-id="{{ $item->id }}"
                                           id="cart_quantity" value="1"
                                           min="0" max="10" placeholder="Enter email" name="cart_quantity">
                                </div>
                                @if($item->status == 1)
                                    <div class="sizes mt-5">

                                        <h6 class="fw-bold">Size</h6>
                                        @foreach($item->sizes as $size)
                                            <label class="radio"> <input type="radio" name="size" value="{{ $size->id }}" checked>
                                                <span>{{ $size->name }}</span>
                                            </label>
                                        @endforeach

                                    </div>
                                @endif
                            </div>
                            <div class="buttons d-flex flex-row mt-5 gap-3">
                                <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal">Buy Now</button>
                                {{--                                <button class="btn btn-dark">Add to Basket</button>--}}
                            </div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"> Bạn có chắc chắn muốn mua sản phẩm này không</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Yes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                        <!-- Button trigger modal -->
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Understood</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Button trigger modal -->
                    <!-- Modal -->
                    {{--                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
                    {{--                        <div class="modal-dialog modal-dialog-centered">--}}
                    {{--                            <div class="modal-content">--}}
                    {{--                                <div class="modal-header">--}}
                    {{--                                    <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to buy?</h5>--}}
                    {{--                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                    {{--                                        <span aria-hidden="true">&times;</span>--}}
                    {{--                                    </button>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="modal-footer">--}}
                    {{--                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>--}}
                    {{--                                    <button type="button" class="btn btn-primary">Yes</button>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-toolbar">
                            <ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#kt_widget5_tab1_content" role="tab">
                                        Product Details
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_widget5_tab2_content" role="tab">
                                        Shopping Guide
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="kt_widget5_tab1_content" aria-expanded="true">
                                <div class="kt-widget5">
                                    <div class="kt-widget5__item">
                                        <div class="kt-widget5__content">
                                            <div class="kt-widget5__pic">
                                                <img class="kt-widget7__img" src="assets/media/products/product27.jpg" alt="">
                                            </div>
                                            <div class="kt-widget5__section">
                                                <p class="kt-widget5__desc">
                                                    {{ $item->description }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="kt-widget5__content">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="kt_widget5_tab2_content">
                                <div class="kt-widget5">
                                    <div class="kt-widget5__item">
                                        <div class="kt-widget5__content">
                                            <div class="kt-widget5__pic">
                                                <img class="kt-widget7__img" src="assets/media/products/product10.jpg" alt="">
                                            </div>

                                        </div>
                                        <div class="kt-widget5__content">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
{{--                <section class="py-5 bg-light">--}}
{{--                    <div class="container px-4 px-lg-5 mt-5">--}}
{{--                        <h2 class="fw-bolder mb-4">Related products</h2>--}}
{{--                        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">--}}
{{--                            <div class="col mb-5">--}}
{{--                                <div class="card h-100">--}}
{{--                                    <!-- Product image-->--}}
{{--                                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />--}}
{{--                                    <!-- Product details-->--}}
{{--                                    <div class="card-body p-4">--}}
{{--                                        <div class="text-center">--}}
{{--                                            <!-- Product name-->--}}
{{--                                            <h5 class="fw-bolder">Fancy Product</h5>--}}
{{--                                            <!-- Product price-->--}}
{{--                                            $40.00 - $80.00--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- Product actions-->--}}
{{--                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">--}}
{{--                                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col mb-5">--}}
{{--                                <div class="card h-100">--}}
{{--                                    <!-- Sale badge-->--}}
{{--                                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>--}}
{{--                                    <!-- Product image-->--}}
{{--                                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />--}}
{{--                                    <!-- Product details-->--}}
{{--                                    <div class="card-body p-4">--}}
{{--                                        <div class="text-center">--}}
{{--                                            <!-- Product name-->--}}
{{--                                            <h5 class="fw-bolder">Special Item</h5>--}}
{{--                                            <!-- Product reviews-->--}}
{{--                                            <div class="d-flex justify-content-center small text-warning mb-2">--}}
{{--                                                <div class="bi-star-fill"></div>--}}
{{--                                                <div class="bi-star-fill"></div>--}}
{{--                                                <div class="bi-star-fill"></div>--}}
{{--                                                <div class="bi-star-fill"></div>--}}
{{--                                                <div class="bi-star-fill"></div>--}}
{{--                                            </div>--}}
{{--                                            <!-- Product price-->--}}
{{--                                            <span class="text-muted text-decoration-line-through">$20.00</span>--}}
{{--                                            $18.00--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- Product actions-->--}}
{{--                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">--}}
{{--                                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col mb-5">--}}
{{--                                <div class="card h-100">--}}
{{--                                    <!-- Sale badge-->--}}
{{--                                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>--}}
{{--                                    <!-- Product image-->--}}
{{--                                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />--}}
{{--                                    <!-- Product details-->--}}
{{--                                    <div class="card-body p-4">--}}
{{--                                        <div class="text-center">--}}
{{--                                            <!-- Product name-->--}}
{{--                                            <h5 class="fw-bolder">Sale Item</h5>--}}
{{--                                            <!-- Product price-->--}}
{{--                                            <span class="text-muted text-decoration-line-through">$50.00</span>--}}
{{--                                            $25.00--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- Product actions-->--}}
{{--                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">--}}
{{--                                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col mb-5">--}}
{{--                                <div class="card h-100">--}}
{{--                                    <!-- Product image-->--}}
{{--                                    <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />--}}
{{--                                    <!-- Product details-->--}}
{{--                                    <div class="card-body p-4">--}}
{{--                                        <div class="text-center">--}}
{{--                                            <!-- Product name-->--}}
{{--                                            <h5 class="fw-bolder">Popular Item</h5>--}}
{{--                                            <!-- Product reviews-->--}}
{{--                                            <div class="d-flex justify-content-center small text-warning mb-2">--}}
{{--                                                <div class="bi-star-fill"></div>--}}
{{--                                                <div class="bi-star-fill"></div>--}}
{{--                                                <div class="bi-star-fill"></div>--}}
{{--                                                <div class="bi-star-fill"></div>--}}
{{--                                                <div class="bi-star-fill"></div>--}}
{{--                                            </div>--}}
{{--                                            <!-- Product price-->--}}
{{--                                            $40.00--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- Product actions-->--}}
{{--                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">--}}
{{--                                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </section>--}}
            </div>
    </div>
@endsection
@section('script')
    <script src="">
        function changeImage(element) {

            var main_prodcut_image = document.getElementById('main_product_image');
            main_prodcut_image.src = element.src;
        }
    </script>
@endsection

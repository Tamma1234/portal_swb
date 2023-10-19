@extends('admin.layouts.main')
@section('title', 'Create')
@section('content')
    @include('admin.templates.content-header', ['name' => 'Swinburne', 'key' => 'Items', 'value' => "Detail", 'value2' => ""])
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="container">
            <div class="card">
                <div class="row">
                    <div class="col-md-6 border-end">
                        <div class="d-flex flex-column justify-content-center">
                            <div class="main_image"><img
                                    src="https://drive.google.com/uc?export=view&id={{ $item->images }}"
                                    id="main_product_image"
                                    width="400"></div>
                            {{--                            <div class="thumbnail_images">--}}
                            {{--                                <ul id="thumbnail">--}}
                            {{--                                    <li><img onclick="changeImage(this)" src="https://i.imgur.com/TAzli1U.jpg"--}}
                            {{--                                             width="70"></li>--}}
                            {{--                                    <li><img onclick="changeImage(this)" src="https://i.imgur.com/w6kEctd.jpg"--}}
                            {{--                                             width="70"></li>--}}
                            {{--                                    <li><img onclick="changeImage(this)" src="https://i.imgur.com/L7hFD8X.jpg"--}}
                            {{--                                             width="70"></li>--}}
                            {{--                                    <li><img onclick="changeImage(this)" src="https://i.imgur.com/6ZufmNS.jpg"--}}
                            {{--                                             width="70"></li>--}}
                            {{--                                </ul>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                    <div class="col-md-6" id="list-carts">
                        <form action="{{ route('items.order', ['id' => $item->id]) }}" method="post">
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
                                            <label class="radio"> <input type="radio" name="size" value="S" checked>
                                                <span>{{ $size->name }}</span>

                                            </label>
                                        @endforeach

                                    </div>
                                @endif
                            </div>
                            <div class="buttons d-flex flex-row mt-5 gap-3">
                                <button type="submit" class="btn btn-outline-dark">Buy Now</button>
                                {{--                                <button class="btn btn-dark">Add to Basket</button>--}}
                            </div>
                        </form>
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
            </div>
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

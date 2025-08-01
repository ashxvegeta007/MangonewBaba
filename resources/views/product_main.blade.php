@extends('layouts.master')

@section('title', 'Webstore')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/product_main.css') }}">
@endpush

@section('content')
<div class="container pt-5">
        <div class="row g-0">
            <div class="col-sm-12 col-lg-5 product-main-image-col">
                <div class="product-main-image-box">
                    <img class="product-main-image" rel="zoom"
                        src="https://www.bigbasket.com/media/uploads/recipe/w-l/970_1.jpg?tr=w-undefined,q-80"
                        data-type="image" style="width: 500px;"
                        xoriginal="https://www.bigbasket.com/media/uploads/recipe/w-l/726_1.jpg?tr=w-undefined,q-80"
                        alt="Main Product Image" style="width: 500px;">
                </div>

                <div class="product-more-image-container m-2">
                    <div class="m-1">
                        <img class="product-more-image"
                            src="https://www.bbassets.com/media/uploads/p/m/10000150_20-fresho-onion.jpg?tr=w-154,q-80"
                            data-type="image"
                            data-src="https://www.bigbasket.com/media/uploads/recipe/w-l/726_1.jpg?tr=w-undefined,q-80"
                            alt="Thumbnail 1" width="43" height="40">
                    </div>
                    <div class="m-1">
                        <img class="product-more-image"
                            src="https://www.bigbasket.com/media/uploads/p/l/10000263_14-fresho-strawberry.jpg"
                            data-type="image"
                            data-src="https://www.bigbasket.com/media/uploads/p/l/10000263_14-fresho-strawberry.jpg"
                            alt="Thumbnail 2" width="43" height="40">
                    </div>
                    <div class="m-1">
                        <img class="product-more-image"
                            src="https://www.bigbasket.com/media/uploads/p/m/10000074_20-fresho-cauliflower.jpg?tr=w-154,q-80"
                            data-type="image"
                            data-src="https://www.bigbasket.com/media/uploads/p/m/10000074_20-fresho-cauliflower.jpg?tr=w-154,q-80"
                            alt="Thumbnail 2" width="43" height="40">
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="image_modal" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" id="modal-dialog_id">
                        <div class="modal-content" id="modal-content_id">
                            <div class="modal-header">
                                <div class="select_format_header_img_text d-flex" data-dismiss="modal">
                                    <div class="select_format_header_img_text d-flex" data-bs-dismiss="modal">
                                        <div class="select_format_header_img">
                                            <i class="fa fa-angle-left"></i>
                                            <span class="select_format_header_back"> Back</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="new-modal" id="full-image-modal-body">
                                <div class="modal-body" id="image_modal_body"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- here the right side of the code started -->
            <div class="col-sm-12 col-lg-6 product-details-col">
                <div class="p-0">
                    <h3 class="fw-bold mb-2">freshol Carrot - Orange (Loose), 500 g</h3>

                    <div class="d-flex align-items-center my-0">
                        <div class="text-muted">MRP: <span class="price_was">198</span></div>
                    </div>

                    <div class="mb-4">
                        <div class="text-secondary fw-bold price_now"> Price: ₹31.78
                            <span class="price_weight">(&#8377; 0.06 / g)</span>
                        </div>
                        <div class="text-success fw-bold"> You Save: 20% OFF</div>
                        <div class="text-muted">( Inclusive of all taxes )</div>
                    </div>

                    <div class="mb-2">
                        <h5 class="mb-3">Pack sizes</h5>
                        <div class="row g-3">
                            <div class="col-6 col-md-6">
                                <div class="card_resize p-2 border-primary">
                                    <div class="fw-bold">1 kg</div>
                                    <div class=" align-items-center">
                                        <span class="text-danger fw-bold">₹40</span>
                                        <small class="text-muted ms-2"><del>₹64</del></small>
                                    </div>
                                    <small class="text-success">38% OFF</small>
                                </div>
                            </div>

                            <div class="col-6 col-md-6">
                                <div class="card_resize p-2">
                                    <div class="fw-bold">250 g</div>
                                    <div class="d-flex align-items-center">
                                        <span class="text-danger fw-bold">₹16.44</span>
                                        <small class="text-muted ms-2"><del>₹30.95</del></small>
                                    </div>
                                    <small class="text-success">20% OFF</small>
                                </div>
                            </div>

                            <div class="col-6 col-md-6">
                                <div class="card_resize p-2">
                                    <div class="fw-bold">500 g</div>
                                    <div class="d-flex align-items-center">
                                        <span class="text-danger fw-bold">₹31.78</span>
                                        <small class="text-muted ms-2"><del>₹39.73</del></small>
                                    </div>
                                    <small class="text-success">20% OFF</small>
                                </div>
                            </div>

                            <div class="col-6 col-md-6">
                                <div class="card_resize p-2 bg-light">
                                    <div class="fw-bold text-muted">5 kg</div>
                                    <div class="text-muted small">Not available</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-column flex-md-row gap-3 button-group">
                        <button class="btn btn-danger flex-grow-1 py-3">
                            <i class="fas fa-shopping-basket me-2"></i>Add to basket
                        </button>
                        <button class="btn btn-outline-secondary flex-grow-1 py-3">
                            <i class="fas fa-bookmark me-2"></i>Save for later
                        </button>
                    </div>

                    <div class="border-top pt-3">
                        <a href="#" class="text-decoration-none text-primary">
                            <i class="fas fa-chevron-down me-2"></i>2 More Compos
                        </a>
                    </div>
                </div>
            </div>



        </div>
    </div>


    <!-- here is third section started  -->
    <div class="container">
        <div class="row g-0">
            <div class="mt-5">
                <!-- Why Choose Bigbasket Section -->
                <h3 class="text-center mb-4">Why choose Mango baba?</h3>
                <div class="row text-center">
                    <div class="col-6 col-md-3 py-1">
                        <div class="p-3 why_choose">
                            <span class="icons_circle">
                                <i class="fas fa-check-circle fa-2x"></i>
                            </span>
                            <h5>Quality</h5>
                            <p>You can trust</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 py-1">
                        <div class="p-3 why_choose">
                            <span class="icons_circle">
                                <i class="fas fa-clock fa-2x"></i>
                            </span>
                            <h5>On time</h5>
                            <p>Guarantee</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 py-1">
                        <div class="p-3 why_choose">

                            <span class="icons_circle">
                                <i class="fas fa-truck fa-2x"></i>
                            </span>
                            <h5>Free Delivery</h5>
                            <p>Free</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 py-1">
                        <div class="p-3 why_choose">

                            <span class="icons_circle">
                                <i class="fas fa-undo fa-2x"></i>
                            </span>
                            <h5>Return Policy</h5>
                            <p>No Question asked</p>
                        </div>

                    </div>
                </div>
                <!-- Product Details Section -->
                <div class="mt-5">
                    <div class="card module">
                        <!-- Header for "About the Product" -->
                        <div class="card-header d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#collapseAboutProduct" aria-expanded="true">
                            <h5 class="mb-0">About the Product</h5>
                            <span class="accicon"><i class="fa fa-angle-down rotate-icon"></i></span>
                        </div>
                        <!-- Body for "About the Product" -->
                        <div id="collapseAboutProduct" class="collapse show">
                            <div class="card-body">
                                <p>
                                    A popular sweet-tasting root vegetable, carrots are narrow and cone-shaped. They have thick, fleshy, deeply coloured roots which grow underground and feathery green leaves that emerge above the ground. While these greens are fresh-tasting and slightly bitter, the carrot roots are crunchy textured with a sweet and minty aromatic taste. Fresho! brings you the flavour and richness of the best quality carrots.
                                </p>
                            </div>
                        </div>

                        <!-- Header for "Other Product Info" -->
                        <div class="card-header d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#collapseOtherInfo" aria-expanded="false">
                            <h6>Other Product Info</h6>
                            <span class="accicon"><i class="fa fa-angle-down rotate-icon"></i></span>
                        </div>
                        <!-- Body for "Other Product Info" -->
                        <div id="collapseOtherInfo" class="collapse">
                            <div class="card-body">
                                <p>EAN Code: 10000070</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <!-- here is fourth section started  -->
        <div class="container mt-4">
        <div class="row g-0">
        <h4 class="fw-bold">Rating and Reviews</h4>
        <div class="alert alert-light d-flex align-items-center" role="alert">
            <i class="fas fa-comment-alt me-2"></i> Want to rate this product? You can rate or review this product only after purchasing from bigbasket
        </div>
            <div class="col-12 p-1 col-md-5">
                <div class="p-3 border rounded rating_box">
                    <h2 class="text-success fw-bold">4.1 <i class="fas fa-star text-success"></i></h2>
                    <p class="mb-2">444 ratings & 1 review</p>
                    
                    <div>
                        <div class="d-flex align-items-center">
                            <span>5 <i class="fas fa-star"></i></span>
                            <div class="progress w-75 mx-2">
                                <div class="progress-bar bg-success" style="width: 60%"></div>
                            </div>
                            <span>240</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <span>4 <i class="fas fa-star"></i></span>
                            <div class="progress w-75 mx-2">
                                <div class="progress-bar bg-success" style="width: 25%"></div>
                            </div>
                            <span>93</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <span>3 <i class="fas fa-star"></i></span>
                            <div class="progress w-75 mx-2">
                                <div class="progress-bar bg-success" style="width: 15%"></div>
                            </div>
                            <span>57</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <span>2 <i class="fas fa-star"></i></span>
                            <div class="progress w-75 mx-2">
                                <div class="progress-bar bg-warning" style="width: 10%"></div>
                            </div>
                            <span>22</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <span>1 <i class="fas fa-star"></i></span>
                            <div class="progress w-75 mx-2">
                                <div class="progress-bar bg-danger" style="width: 8%"></div>
                            </div>
                            <span>32</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-7 p-1">
                <div class="p-3 border rounded review_box">
                    <h5 class="fw-bold">Product Reviews</h5>
                    <div class="p-3 border rounded bg-light mt-2">
                        <span class="badge bg-success">3 <i class="fas fa-star"></i></span>
                        <strong class="ms-2">Very low quantity as per the price.</strong>
                        <p class="mb-1">Very low quantity as per the price. Taste was good.</p>
                        <small class="text-muted">Abhinav, (2 years ago)</small>
                        <div class="mt-2">
                            <i class="far fa-thumbs-up"></i> <span class="me-3">1</span>
                            <i class="far fa-flag"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    </div>
@endsection

@push('scripts')
<script src="{{ asset('js/product_main.js') }}"></script>
@endpush

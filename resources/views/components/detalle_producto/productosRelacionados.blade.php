<section class="section ec-releted-product section-space-p">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2 class="ec-bg-title">Articulos relacionados</h2>
                    <h2 class="ec-title">Articulos relacionados</h2>
                    <p class="sub-title">Conoce nuestros articulos</p>
                </div>
            </div>
        </div>
        <div class="row margin-minus-b-30">
            <!-- Related Product Content -->
            @foreach ($producto->similar($producto) as $pr)
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                <div class="ec-product-inner">
                    <div class="ec-pro-image-outer">
                        <div class="ec-pro-image">
                            <a href="product-left-sidebar.html" class="image">
                                <img class="main-image"
                                    src="{{asset('images/product-image/6_1.jpg')}}" alt="Product" />
                                <img class="hover-image"
                                    src="{{asset('images/product-image/6_2.jpg')}}" alt="Product" />
                            </a>
                            @if($producto->haveDiscount($producto->id))
                            <span class="percentage">{{$producto->priceDiscount($producto->id)}}%</span>
                            @endif
                            <a href="#" class="quickview" data-link-action="quickview"
                                title="Quick view" data-bs-toggle="modal"
                                data-bs-target="#ec_quickview_modal"><img
                                    src="{{asset('images/icons/quickview.svg')}}" class="svg_img pro_svg"
                                    alt="" /></a>
                            <div class="ec-pro-actions">
                                <a href="compare.html" class="ec-btn-group compare"
                                    title="Compare"><img src="{{asset('images/icons/compare.svg')}}"
                                        class="svg_img pro_svg" alt="" /></a>
                                <button title="Add To Cart" class=" add-to-cart"><img
                                        src="{{asset('images/icons/cart.svg')}}" class="svg_img pro_svg"
                                        alt="" /> Agregar al carrito</button>
                                <a class="ec-btn-group wishlist" title="Wishlist"><img
                                        src="{{asset('images/icons/wishlist.svg')}}"
                                        class="svg_img pro_svg" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="ec-pro-content">
                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">{{$producto->nombre}}</a></h5>
                        <div class="ec-pro-rating">
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star"></i>
                        </div>
                        <div class="ec-pro-list-desc">{{$producto->descripcion}}</div>
                        <span class="ec-price">
                            @if($producto->haveDiscount($producto->id))
                            <span class="old-price">${{$producto->productoprecio->pvp}}</span>
                            <span class="new-price">${{$producto->priceDiscount($producto->id)}}</span>
                            @else
                            <span class="new-price">${{$producto->productoprecio->pvp}}</span>
                            @endif
                        </span>
                        <div class="ec-pro-option">
                            <div class="ec-pro-color">
                                <span class="ec-pro-opt-label">Color</span>
                                <ul class="ec-opt-swatch ec-change-img">

                                    @foreach($producto->colores as $key => $color)
                                    <li class="{{$key==0 ? 'active' : ''}}"><a href="#" class="ec-opt-clr-img"
                                            data-src="{{$color->imagen->url}}"
                                            data-src-hover="{{$color->imagen->url}}"
                                            data-tooltip="Orange"><span style="background-color:{{$color->codigo}};"></span>
                                        </a>
                                    </li>
                                    @endforeach
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                <div class="ec-product-inner">
                    <div class="ec-pro-image-outer">
                        <div class="ec-pro-image">
                            <a href="product-left-sidebar.html" class="image">
                                <img class="main-image"
                                    src="{{asset('images/product-image/7_1.jpg')}}" alt="Product" />
                                <img class="hover-image"
                                    src="{{asset('images/product-image/7_2.jpg')}}" alt="Product" />
                            </a>
                            <span class="percentage">20%</span>
                            <span class="flags">
                                <span class="sale">Sale</span>
                            </span>
                            <a href="#" class="quickview" data-link-action="quickview"
                                title="Quick view" data-bs-toggle="modal"
                                data-bs-target="#ec_quickview_modal"><img
                                    src="{{asset('images/icons/quickview.svg')}}" class="svg_img pro_svg"
                                    alt="" /></a>
                            <div class="ec-pro-actions">
                                <a href="compare.html" class="ec-btn-group compare"
                                    title="Compare"><img src="{{asset('images/icons/compare.svg')}}"
                                        class="svg_img pro_svg" alt="" /></a>
                                <button title="Add To Cart" class=" add-to-cart"><img
                                        src="{{asset('images/icons/cart.svg')}}" class="svg_img pro_svg"
                                        alt="" /> Agregar al carrito</button>
                                <a class="ec-btn-group wishlist" title="Wishlist"><img
                                        src="{{asset('images/icons/wishlist.svg')}}"
                                        class="svg_img pro_svg" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="ec-pro-content">
                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Full Sleeve Shirt</a></h5>
                        <div class="ec-pro-rating">
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star"></i>
                        </div>
                        <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer took a galley.</div>
                        <span class="ec-price">
                            <span class="old-price">$12.00</span>
                            <span class="new-price">$10.00</span>
                        </span>
                        <div class="ec-pro-option">
                            <div class="ec-pro-color">
                                <span class="ec-pro-opt-label">Color</span>
                                <ul class="ec-opt-swatch ec-change-img">
                                    <li class="active"><a href="#" class="ec-opt-clr-img"
                                            data-src="{{asset('images/product-image/7_1.jpg')}}"
                                            data-src-hover="{{asset('images/product-image/7_1.jpg')}}"
                                            data-tooltip="Gray"><span
                                                style="background-color:#01f1f1;"></span></a></li>
                                    <li><a href="#" class="ec-opt-clr-img"
                                            data-src="{{asset('images/product-image/7_2.jpg')}}"
                                            data-src-hover="{{asset('images/product-image/7_2.jpg')}}"
                                            data-tooltip="Orange"><span
                                                style="background-color:#b89df8;"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                <div class="ec-product-inner">
                    <div class="ec-pro-image-outer">
                        <div class="ec-pro-image">
                            <a href="product-left-sidebar.html" class="image">
                                <img class="main-image"
                                    src="{{asset('images/product-image/1_1.jpg')}}" alt="Product" />
                                <img class="hover-image"
                                    src="{{asset('images/product-image/1_2.jpg')}}" alt="Product" />
                            </a>
                            <span class="percentage">20%</span>
                            <span class="flags">
                                <span class="sale">Sale</span>
                            </span>
                            <a href="#" class="quickview" data-link-action="quickview"
                                title="Quick view" data-bs-toggle="modal"
                                data-bs-target="#ec_quickview_modal"><img
                                    src="{{asset('images/icons/quickview.svg')}}" class="svg_img pro_svg"
                                    alt="" /></a>
                            <div class="ec-pro-actions">
                                <a href="compare.html" class="ec-btn-group compare"
                                    title="Compare"><img src="{{asset('images/icons/compare.svg')}}"
                                        class="svg_img pro_svg" alt="" /></a>
                                <button title="Add To Cart" class=" add-to-cart"><img
                                        src="{{asset('images/icons/cart.svg')}}" class="svg_img pro_svg"
                                        alt="" /> Add To Cart</button>
                                <a class="ec-btn-group wishlist" title="Wishlist"><img
                                        src="{{asset('images/icons/wishlist.svg')}}"
                                        class="svg_img pro_svg" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="ec-pro-content">
                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Cute Baby Toy's</a></h5>
                        <div class="ec-pro-rating">
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star"></i>
                        </div>
                        <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer took a galley.</div>
                        <span class="ec-price">
                            <span class="old-price">$40.00</span>
                            <span class="new-price">$30.00</span>
                        </span>
                        <div class="ec-pro-option">
                            <div class="ec-pro-color">
                                <span class="ec-pro-opt-label">Color</span>
                                <ul class="ec-opt-swatch ec-change-img">
                                    <li class="active"><a href="#" class="ec-opt-clr-img"
                                            data-src="{{asset('images/product-image/1_1.jpg')}}"
                                            data-src-hover="{{asset('images/product-image/1_1.jpg')}}"
                                            data-tooltip="Gray"><span
                                                style="background-color:#90cdf7;"></span></a></li>
                                    <li><a href="#" class="ec-opt-clr-img"
                                            data-src="{{asset('images/product-image/1_2.jpg')}}"
                                            data-src-hover="{{asset('images/product-image/1_2.jpg')}}"
                                            data-tooltip="Orange"><span
                                                style="background-color:#ff3b66;"></span></a></li>
                                    <li><a href="#" class="ec-opt-clr-img"
                                            data-src="{{asset('images/product-image/1_3.jpg')}}"
                                            data-src-hover="{{asset('images/product-image/1_3.jpg')}}"
                                            data-tooltip="Green"><span
                                                style="background-color:#ffc476;"></span></a></li>
                                    <li><a href="#" class="ec-opt-clr-img"
                                            data-src="{{asset('images/product-image/1_4.jpg')}}"
                                            data-src-hover="{{asset('images/product-image/1_4.jpg')}}"
                                            data-tooltip="Sky Blue"><span
                                                style="background-color:#1af0ba;"></span></a></li>
                                </ul>
                            </div>
                            <div class="ec-pro-size">
                                <span class="ec-pro-opt-label">Size</span>
                                <ul class="ec-opt-size">
                                    <li class="active"><a href="#" class="ec-opt-sz"
                                            data-old="$40.00" data-new="$30.00"
                                            data-tooltip="Small">S</a></li>
                                    <li><a href="#" class="ec-opt-sz" data-old="$50.00"
                                            data-new="$40.00" data-tooltip="Medium">M</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                <div class="ec-product-inner">
                    <div class="ec-pro-image-outer">
                        <div class="ec-pro-image">
                            <a href="product-left-sidebar.html" class="image">
                                <img class="main-image"
                                    src="{{asset('images/product-image/2_1.jpg')}}" alt="Product" />
                                <img class="hover-image"
                                    src="{{asset('images/product-image/2_2.jpg')}}" alt="Product" />
                            </a>
                            <span class="percentage">20%</span>
                            <span class="flags">
                                <span class="new">New</span>
                            </span>
                            <a href="#" class="quickview" data-link-action="quickview"
                                title="Quick view" data-bs-toggle="modal"
                                data-bs-target="#ec_quickview_modal"><img
                                    src="{{asset('images/icons/quickview.svg')}}" class="svg_img pro_svg"
                                    alt="" /></a>
                            <div class="ec-pro-actions">
                                <a href="compare.html" class="ec-btn-group compare"
                                    title="Compare"><img src="{{asset('images/icons/compare.svg')}}"
                                        class="svg_img pro_svg" alt="" /></a>
                                <button title="Add To Cart" class=" add-to-cart"><img
                                        src="{{asset('images/icons/cart.svg')}}" class="svg_img pro_svg"
                                        alt="" /> Add To Cart</button>
                                <a class="ec-btn-group wishlist" title="Wishlist"><img
                                        src="{{asset('images/icons/wishlist.svg')}}"
                                        class="svg_img pro_svg" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="ec-pro-content">
                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Jumbo Carry Bag</a></h5>
                        <div class="ec-pro-rating">
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star fill"></i>
                            <i class="ecicon eci-star"></i>
                        </div>
                        <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer took a galley.</div>
                        <span class="ec-price">
                            <span class="old-price">$50.00</span>
                            <span class="new-price">$40.00</span>
                        </span>                                                
                        <div class="ec-pro-option">
                            <div class="ec-pro-color">
                                <span class="ec-pro-opt-label">Color</span>
                                <ul class="ec-opt-swatch ec-change-img">
                                    <li class="active"><a href="#" class="ec-opt-clr-img"
                                            data-src="{{asset('images/product-image/2_1.jpg')}}"
                                            data-src-hover="{{asset('images/product-image/2_2.jpg')}}"
                                            data-tooltip="Gray"><span
                                                style="background-color:#fdbf04;"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
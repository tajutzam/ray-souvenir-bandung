<div class="gallery-area section-padding30">
    <div class="container">
        <!-- Section Title -->
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-9 col-sm-10">
                <div class="section-tittle text-center mb-100">
                    <span>Galeri Produk Kami</span>
                    <h2>Beberapa souvenir terlaris kami</h2>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($bestSellerProducts as $index => $product)
                <div class="col-lg-{{ $index % 2 == 0 ? '4' : '8' }} col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img" style="background-image: url({{ asset('storage/' . $product->image) }});">
                        </div>

                        <div class="overlay d-flex align-items-start justify-content-center">
                            <div class="overlay-content text-startpx-3">
                                <h4 class="text-white">{{ $product->name }}</h4>
                                <p class="small text-white">
                                    {{ Str::limit($product->description, 80) }}
                                </p>
                                <span class="badge badge-warning mt-2">
                                    Best Seller
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@extends('layouts.app')

@section('subtitle', $product->name)

@section('content')

    <div class="product-detail section-padding30">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <img id="mainProductImage" src="{{ asset('storage/' . $product->image) }}"
                        class="img-thumbnail rounded mb-3" style="height: 400px" alt="{{ $product->name }}">

                    @if ($product->other_image)
                        <div class="d-flex gap-2">
                            <img id="otherProductImage" src="{{ asset('storage/' . $product->other_image) }}"
                                class="img-thumbnail" style="
                                            width: 100px;
                                            height: 100px;
                                            object-fit: cover;
                                            cursor: pointer;
                                        " onclick="swapImage()" alt="Other image {{ $product->name }}">
                        </div>
                    @endif


                </div>


                <div class="col-lg-6">
                    <h2>{{ $product->name }}</h2>

                    <p class="text-muted mb-1">
                        Kategori: <strong>{{ $product->category->name ?? '-' }}</strong>
                    </p>

                    <p class="text-primary fs-4 fw-bold">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </p>

                    <p class="mt-3">
                        {{ $product->description }}
                    </p>

                    @if ($product->links->count())
                        <div class="mt-4">
                            <h5>Link Pembelian</h5>
                            <div class="d-grid gap-2">
                                @foreach ($product->links as $link)
                                    <a href="{{ $link->link }}" target="_blank" class="btn">
                                        {{ $link->name }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <a href="{{ route('landing.product') }}" class="btn btn-secondary mt-4">
                        Kembali ke Produk
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function swapImage() {
            const mainImage = document.getElementById('mainProductImage');
            const otherImage = document.getElementById('otherProductImage');

            const tempSrc = mainImage.src;
            mainImage.src = otherImage.src;
            otherImage.src = tempSrc;
        }
    </script>

@endsection
@extends('layouts.app')

@section('subtitle', 'PRODUK SOUVENIR')

@section('content')

    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-4">
                    <div class="blog_right_sidebar">

                        <!-- SEARCH -->
                        <aside class="single_sidebar_widget search_widget">
                            <form method="GET" action="{{ route('landing.product') }}">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" class="form-control" placeholder="Cari produk"
                                            value="{{ request('search') }}" onfocus="this.placeholder=''"
                                            onblur="this.placeholder='Cari produk'">

                                        <div class="input-group-append">
                                            <button class="btns" type="submit">
                                                <i class="ti-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="category" value="{{ request('category') }}">
                            </form>
                        </aside>

                        <!-- CATEGORY -->
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title" style="color:#2d2d2d;">Kategori</h4>
                            <ul class="list cat-list">

                                <li>
                                    <a href="{{ route('landing.product', request()->except('category')) }}" class="d-flex">
                                        <p>Semua Produk</p>
                                    </a>
                                </li>

                                @foreach ($categories as $category)
                                    <li>
                                        <a href="{{ route('landing.product', array_merge(request()->query(), ['category' => $category->id])) }}"
                                            class="d-flex">
                                            <p>{{ $category->name }}</p>
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </aside>

                        <!-- FILTER HARGA -->
                        <aside class="single_sidebar_widget">
                            <h4 class="widget_title" style="color:#2d2d2d;">Filter Harga</h4>

                            <form method="GET" action="{{ route('landing.product') }}">
                                <input type="hidden" name="search" value="{{ request('search') }}">
                                <input type="hidden" name="category" value="{{ request('category') }}">

                                <div class="form-group">
                                    <input type="number" name="min_price" class="single-input" placeholder="Harga minimum"
                                        value="{{ request('min_price') }}">
                                </div>

                                <div class="form-group">
                                    <input type="number" name="max_price" class="single-input" placeholder="Harga maksimum"
                                        value="{{ request('max_price') }}">
                                </div>

                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">
                                    Terapkan
                                </button>
                            </form>
                        </aside>

                    </div>
                </div>

                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @forelse ($products as $product)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="{{ asset('storage/' . $product->image) }}"
                                        alt="Gelang karet custom souvenir Bandung">

                                    <a href="{{ route('landing.product.detail', $product) }}" class="blog_item_date">
                                        <h3>Rp</h3>
                                        <p>{{ number_format($product->price, 0, ',', '.') }}</p>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="{{ route('landing.product.detail', $product) }}">
                                        <h2 class="blog-head" style="color:#2d2d2d;">
                                            {{ $product->name }}
                                        </h2>
                                    </a>

                                    <p>
                                        {{ Str::limit($product->description ?? 'Souvenir berkualitas dengan desain menarik.', 120) }}
                                    </p>

                                    <ul class="blog-info-link">
                                        <li>
                                            <i class="fa fa-tags"></i>
                                            {{ $product->category->name ?? 'Tanpa Kategori' }}
                                        </li>
                                        <li>
                                            <a href="{{ route('landing.product.detail', $product) }}">
                                                <i class="fa fa-eye"></i> Lihat Detail
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </article>
                        @empty
                            <div class="alert alert-warning text-center">
                                Produk tidak ditemukan
                            </div>
                        @endforelse

                        <nav class="blog-pagination justify-content-center d-flex">
                            {{ $products->withQueryString()->links() }}
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
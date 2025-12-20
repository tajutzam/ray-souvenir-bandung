@extends('layouts.app')

@section('subtitle', 'BLOG')

@section('content')
    <main>
        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">

                            @forelse ($blogs as $blog)
                                <article class="blog_item">
                                    <div class="blog_item_img">
                                        <img class="card-img rounded-0"
                                            src="{{ $blog->image ? asset('storage/' . $blog->image) : asset('assets/img/blog/single_blog_1.png') }}"
                                            alt="{{ $blog->title }}">

                                        <a href="{{ url('/blogs/' . $blog->slug) }}" class="blog_item_date">
                                            <h3>{{ $blog->created_at->format('d') }}</h3>
                                            <p>{{ $blog->created_at->translatedFormat('M') }}</p>
                                        </a>
                                    </div>

                                    <div class="blog_details">
                                        <a class="d-inline-block" href="{{ url('/blogs/' . $blog->slug) }}">
                                            <h2 class="blog-head" style="color: #2d2d2d;">
                                                {{ $blog->title }}
                                            </h2>
                                        </a>

                                        <p>
                                            {{ $blog->excerpt ?? \Str::limit(strip_tags($blog->content), 150) }}
                                        </p>

                                        <ul class="blog-info-link">
                                            <li>
                                                <i class="fa fa-user"></i> Ray Souvenir
                                            </li>
                                            <li>
                                                <i class="fa fa-calendar"></i>
                                                {{ $blog->created_at->format('d M Y') }}
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            @empty
                                <p>Belum ada artikel.</p>
                            @endforelse

                            <nav class="blog-pagination justify-content-center d-flex">
                                {{ $blogs->links() }}
                            </nav>

                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">

                            <aside class="single_sidebar_widget search_widget">
                                <form action="#">
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Search Keyword">
                                            <div class="input-group-append">
                                                <button class="btns" type="button">
                                                    <i class="ti-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </aside>

                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Recent Post</h3>

                                @foreach (\App\Models\Blog::latest()->take(4)->get() as $item)
                                    <div class="media post_item">
                                        <img src="{{ $item->image ? asset('storage/' . $item->image) : asset('assets/img/post/post_1.png') }}"
                                            width="80" alt="{{ $item->title }}">
                                        <div class="media-body">
                                            <a href="{{ url('/blogs/' . $item->slug) }}">
                                                <h3>{{ \Str::limit($item->title, 40) }}</h3>
                                            </a>
                                            <p>{{ $item->created_at->format('d M Y') }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </aside>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Blog Area End -->

    </main>
@endsection
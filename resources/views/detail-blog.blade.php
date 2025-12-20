@extends('layouts.app')

@section('subtitle', $blog->title)

@section('content')
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">

                <!-- LEFT CONTENT -->
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid" src="{{ $blog->image
        ? asset('storage/' . $blog->image)
        : asset('assets/img/blog/single_blog_1.png') }}" alt="{{ $blog->title }}">
                        </div>

                        <div class="blog_details">
                            <h2 style="color: #2d2d2d;">
                                {{ $blog->title }}
                            </h2>

                            <ul class="blog-info-link mt-3 mb-4">
                                <li>
                                    <i class="fa fa-user"></i> Ray Souvenir
                                </li>
                                <li>
                                    <i class="fa fa-calendar"></i>
                                    {{ $blog->created_at->format('d M Y') }}
                                </li>
                            </ul>

                            @if ($blog->excerpt)
                                <p class="excert">
                                    {{ $blog->excerpt }}
                                </p>
                            @endif

                            {{-- CONTENT dari RichEditor --}}
                            <div class="blog-content">
                                {!! $blog->content !!}
                            </div>
                        </div>
                    </div>

                    <!-- NAVIGATION PREV / NEXT -->
                    <div class="navigation-top">
                        <div class="navigation-area">
                           
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog_right_sidebar">

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>

                            @foreach (\App\Models\Blog::latest()->take(4)->get() as $item)
                                                <div class="media post_item">
                                                    <img src="{{ $item->image
                                ? asset('storage/' . $item->image)
                                : asset('assets/img/post/post_1.png') }}" width="80" alt="{{ $item->title }}">
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
@endsection
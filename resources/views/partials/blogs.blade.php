<section class="home-blog-area section-padding30">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                <div class="section-tittle text-center mb-90">
                    <span>Update Terbaru Kami</span>
                    <h2>Tips & Cerita dari Ray Souvenir</h2>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($blogs as $blog)
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="{{ $blog->image
                ? asset('storage/' . $blog->image)
                : asset('assets/img/gallery/home-blog1.png') }}" alt="{{ $blog->title }}">

                                    <div class="blog-date text-center">
                                        <span>{{ $blog->created_at->format('d') }}</span>
                                        <p>{{ $blog->created_at->translatedFormat('M') }}</p>
                                    </div>
                                </div>

                                <div class="blog-cap">
                                    <p>| Blog</p>
                                    <h3>
                                        <a href="{{ url('/blogs/' . $blog->slug) }}">
                                            {{ $blog->title }}
                                        </a>
                                    </h3>
                                    <a href="{{ url('/blogs/' . $blog->slug) }}" class="more-btn">
                                        Baca Selengkapnya »
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>

        <div class="row justify-content-center mt-40">
            <div class="col-auto">
                <a href="{{ url('/blogs') }}" class="btn ">
                    Lihat Semua Blog
                </a>
            </div>
        </div>

    </div>
</section>
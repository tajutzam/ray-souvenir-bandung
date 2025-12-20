@extends('layouts.app')

@section('title', 'Testimoni Rays Souvenir Bandung')
@section('subtitle', 'TESTIMONI')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .testimonial-section {
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .testimonial-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            opacity: 0.3;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .section-subtitle {
            font-size: 1.1rem;
            margin-bottom: 50px;
        }

        .testimonial-swiper {
            padding: 20px 0 60px;
        }

        .testimonial-card {
            background: #ffffff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }

        .testimonial-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .testimonial-content {
            padding: 30px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .quote-icon {
            color: #d19f68;
            font-size: 3rem;
            opacity: 0.2;
            line-height: 1;
            margin-bottom: 15px;
        }

        .testimonial-text {
            color: #555;
            font-size: 1rem;
            line-height: 1.8;
            font-style: italic;
            margin-bottom: 20px;
            flex-grow: 1;
        }

        .testimonial-footer {
            border-top: 2px solid #f0f0f0;
            padding-top: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .testimonial-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, #d19f68 0%, #d19f68 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.2rem;
        }

        .testimonial-author {
            flex-grow: 1;
        }

        .testimonial-name {
            font-weight: 700;
            color: #333;
            margin: 0;
            font-size: 1.1rem;
        }

        .testimonial-role {
            color: #888;
            font-size: 0.9rem;
            margin: 0;
        }

        .rating-stars {
            color: #d19f68;
            font-size: 1rem;
            margin-top: 5px;
        }

        .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            background: #333;
            opacity: 0.5;
        }

        .swiper-pagination-bullet-active {
            opacity: 1;
            background: #d19f68;
            width: 30px;
            border-radius: 6px;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: #d19f68;
            background: rgba(255, 255, 255, 0.2);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            backdrop-filter: blur(10px);
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            font-size: 20px;
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }

        .empty-state-icon {
            font-size: 4rem;
            color: #d19f68;
            margin-bottom: 20px;
        }

        .empty-state-text {
            color: #666;
            font-size: 1.2rem;
        }

        @media (max-width: 768px) {
            .section-title {
                font-size: 2rem;
            }

            .testimonial-image {
                height: 200px;
            }

            .swiper-button-next,
            .swiper-button-prev {
                display: none;
            }
        }
    </style>
@endpush

@section('content')
    <section class="testimonial-section">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">Testimoni Pelanggan Kami</h2>
                    <p class="section-subtitle">Kepuasan pelanggan adalah prioritas utama kami. Lihat apa kata mereka
                        tentang Ray's Souvenir Bandung</p>
                </div>
            </div>

            @if($testimonies->count() > 0)
                <div class="swiper testimonial-swiper">
                    <div class="swiper-wrapper">
                        @foreach ($testimonies as $testimoni)
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    @if ($testimoni->image)
                                        <img src="{{ asset('storage/' . $testimoni->image) }}" class="testimonial-image"
                                            alt="{{ $testimoni->name }}">
                                    @endif

                                    <div class="testimonial-content">
                                        <div class="quote-icon">"</div>
                                        <p class="testimonial-text">
                                            {{ $testimoni->description }}
                                        </p>

                                        <div class="testimonial-footer">
                                            <div class="testimonial-avatar">
                                                {{ strtoupper(substr($testimoni->name, 0, 1)) }}
                                            </div>
                                            <div class="testimonial-author">
                                                <p class="testimonial-name">{{ $testimoni->name }}</p>
                                                <p class="testimonial-role">Pelanggan Setia</p>
                                                <div class="rating-stars">
                                                    ★★★★★
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="swiper-pagination"></div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            @else
                <div class="empty-state">
                    <div class="empty-state-icon">💬</div>
                    <p class="empty-state-text">Belum ada testimoni. Jadilah yang pertama memberikan ulasan!</p>
                </div>
            @endif
        </div>
    </section>
@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const swiper = new Swiper('.testimonial-swiper', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                },
            });
        });
    </script>
@endpush
@push('styles')
    <style>
        /* Section Padding Responsif */
        .team-area {
            padding-top: 100px;
            padding-bottom: 100px;
        }

        /* Frame Gambar */
        .team-img {
            position: relative;
            width: 100%;
            aspect-ratio: 1 / 1;
            /* Konsisten kotak */
            overflow: hidden;
            border-radius: 12px;
            margin-bottom: -40px;
            /* Menumpuk dengan caption */
            z-index: 1;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .team-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .single-team:hover .team-img img {
            transform: scale(1.1);
        }

        .team-caption {
            position: relative;
            z-index: 2;
            background: #000;
            color: #fff;
            padding: 25px 15px;
            width: 85%;
            margin: 0 auto;
            border-radius: 8px;
            mask-image: url('path-ke-gambar-brush.png');
            -webkit-mask-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Brush_stroke.svg/1200px-Brush_stroke.svg.png');
            -webkit-mask-size: cover;
        }

        .team-caption span {
            display: block;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 5px;
            color: #ccc;
        }

        .team-caption h3 {
            background-color: transparent;
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 0;
            color: #fff;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .team-area {
                padding-bottom: 50px;
            }

            .section-tittle h2 {
                font-size: 28px;
            }

            .team-caption h3 {
                font-size: 18px;
            }
        }
    </style>
@endpush

<div class="team-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-9 col-md-11">
                <div class="section-tittle text-center mb-80">
                    <span class="text-primary fw-bold">Tim Kami</span>
                    <h2 class="mt-2">Orang-orang kreatif di balik Ray Souvenir</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            @forelse ($teams as $team)
                <div class="col-12 col-sm-6 col-lg-4 mb-5">
                    <div class="single-team text-center">
                        <div class="team-img">
                            <img src="{{ asset('storage/' . $team->image) }}" alt="{{ $team->name }}">
                        </div>
                        <div class="team-caption">
                            <span>{{ $team->position }}</span>
                            <h3>{{ $team->name }}</h3>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <div class="alert alert-light">Data tim belum tersedia</div>
                </div>
            @endforelse
        </div>
    </div>
</div>
@extends('layouts.app')

@section('subtitle', 'GALLERY')

@section('content')
    <div class="section-top-border">
        <div class="container">
            <h3 data-aos="fade-up" data-aos-duration="800">
                Image Gallery
            </h3>

            <div class="row gallery-item">
                @forelse ($galleries as $index => $gallery)
                    <div class="col-md-4" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="{{ $index * 100 }}">

                        <a href="{{ asset('storage/' . $gallery->image) }}" class="img-pop-up">
                            <div class="single-gallery-image"
                                style="background: url('{{ asset('storage/' . $gallery->image) }}');">
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-12 text-center" data-aos="fade-up">
                        <p>Gallery belum tersedia</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
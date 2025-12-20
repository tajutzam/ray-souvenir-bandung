@extends('layouts.app')

@section('subtitle', 'KONTAK KAMI')

@section('content')
    <section class="contact-section">
        <div class="container">

            {{-- GOOGLE MAPS EMBED (AMAN, TANPA API) --}}
            <div class="d-none d-sm-block mb-5 pb-4">
                <iframe src="https://www.google.com/maps?q=Rays%20Souvenir%20Bandung&output=embed" width="100%" height="480"
                    style="border:0;" allowfullscreen loading="lazy">
                </iframe>
            </div>

            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Get in Touch</h2>
                </div>

                {{-- FORM --}}
                <div class="col-lg-8">
                    <form class="form-contact contact_form">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" rows="9" placeholder="Tulis pesan Anda"></textarea>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Nama Anda">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="Email">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Subjek">
                                </div>
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">
                                Kirim Pesan
                            </button>
                        </div>
                    </form>
                </div>

                {{-- INFO KONTAK --}}
                <div class="col-lg-3 offset-lg-1">

                    <div class="media contact-info">
                        <span class="contact-info__icon">
                            <i class="ti-home"></i>
                        </span>
                        <div class="media-body">
                            <h3>RAY'S SOUVENIR</h3>
                            <p>Bandung, Jawa Barat</p>
                        </div>
                    </div>

                    <div class="media contact-info">
                        <span class="contact-info__icon">
                            <i class="ti-tablet"></i>
                        </span>
                        <div class="media-body">
                            <h3>0819-9789-0847</h3>
                            <p>
                                <a href="https://wa.me/6281997890847" target="_blank">
                                    WhatsApp Aktif
                                </a>
                            </p>
                        </div>
                    </div>

                    <div class="media contact-info">
                        <span class="contact-info__icon">
                            <i class="ti-email"></i>
                        </span>
                        <div class="media-body">
                            <h3>rayscreativerubber@gmail.com</h3>
                            <p>Email Support</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
@endsection
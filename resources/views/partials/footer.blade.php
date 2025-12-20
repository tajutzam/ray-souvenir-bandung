<footer>
    <div class="footer-area section-bg" data-background="{{ asset('/') }}/assets/img/gallery/footer_bg.png">
        <div class="container">
            <div class="footer-top footer-padding">
                <div class="row d-flex justify-content-between">

                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-logo">
                                <h3 style="color:#fff;font-weight:700;">RAY'S SOUVENIR</h3>
                            </div>

                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p class="info1">
                                        Produsen souvenir karet custom: gelang karet tanpa sambungan & gantungan kunci
                                        karet.
                                    </p>
                                </div>
                            </div>

                            <div class="footer-number">
                                <h4><span>+62 </span>819-9789-0847</h4>
                                <p>rayscreativerubber@gmail.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Produk</h4>
                                <ul>
                                    <li><a href="#">Gelang Karet Timbul</a></li>
                                    <li><a href="#">Gelang Karet Custom</a></li>
                                    <li><a href="#">Gantungan Kunci Karet</a></li>
                                    <li><a href="#">Souvenir Event</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Marketplace</h4>
                                <ul>
                                    @forelse ($onlineShops as $shop)
                                        <li>
                                            <a href="{{ $shop->url }}" target="_blank">
                                                {{ $shop->name }}
                                            </a>
                                        </li>
                                    @empty
                                        <li>
                                            <span>Belum tersedia</span>
                                        </li>
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Hubungi Kami</h4>
                                <div class="footer-pera">
                                    <p class="info1">
                                        Konsultasi & pemesanan custom souvenir
                                    </p>
                                </div>
                            </div>

                            <div class="footer-form">
                                <a href="https://wa.me/6281997890847" target="_blank" class="btn boxed-btn text-white">
                                    <i class="fab fa-whatsapp"></i> Chat WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="footer-bottom">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-xl-9 col-lg-8">
                        <div class="footer-copy-right">
                            <p>
                                &copy;
                                <script>document.write(new Date().getFullYear());</script>
                                RAY'S SOUVENIR. All Rights Reserved.
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4">
                        <div class="footer-social f-right">
                            <a href="https://www.instagram.com/raysouvenir" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://shopee.co.id/raysouvenir" target="_blank">
                                <i class="fas fa-shopping-bag"></i>
                            </a>
                            <a href="https://wa.me/6281997890847" target="_blank">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>
<section class="section bg-light">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center text-capitalize">{{ config('app.name', 'Laravel') }}</h3>
                    <div class="mt-4 text-center">
                        <ul class="list-unstyled social-icon">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-google"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class=" fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer-alt">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class=" float-end pull-none mt-4">
                    <p><a href="javascript:void(0);" class="text-muted text-decoration-none">Terms &amp; Condition</a></p>
                </div>

                <div class=" float-start pull-none mt-4">
                    <p class="copy-rights text-muted">{{ now()->year }} © {{ config('app.name', 'Laravel') }}. All Rights Reserved. Powered by Rong</p>
                </div>

            </div>
        </div>
    </div>
</footer>

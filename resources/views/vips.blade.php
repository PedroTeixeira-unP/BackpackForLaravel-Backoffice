<!doctype html>
<html class="no-js" lang="zxx">
<head>
        @include('head')
        <style>
/*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*/
.nav-pills-custom .nav-link {
    color: #aaa;
    background: #fff;
    position: relative;
}

.nav-pills-custom .nav-link.active {
    color: #45b649;
    background: #fff;
}


/* Add indicator arrow for the active tab */
@media (min-width: 992px) {
    .nav-pills-custom .nav-link::before {
        content: '';
        display: block;
        border-top: 8px solid transparent;
        border-left: 10px solid #fff;
        border-bottom: 8px solid transparent;
        position: absolute;
        top: 50%;
        right: -10px;
        transform: translateY(-50%);
        opacity: 0;
    }
}

.nav-pills-custom .nav-link.active::before {
    opacity: 1;
}



        </style>
   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        @include('header')
        <!-- Header End -->
    </header>
    <main>

        <!-- Hero Start-->
        <div class="slider-area slider-bg ">
            <div class="single-slider d-flex align-items-center slider-height2 ">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center pt-50">
                            
                                <h2>Pacotes VIPs</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider Shape -->
            <div class="slider-shape d-none d-lg-block">
                <img class="slider-shape1" src="assets/img/hero/top-left-shape.png" alt="">
                <img class="slider-shape2" src="assets/img/hero/right-top-shape.png" alt="">
                <img class="slider-shape3" src="assets/img/hero/left-botom-shape.png" alt="">
            </div>
            <!-- slider Social -->
            <div class="slider-social d-none d-md-block">
                <!--<a href="#"><i class="fab fa-facebook-f"></i></a>-->
                <a href="fivem://connect/ip.narcos.pt:30120"><i class="fas fa-server"></i></a>
                <a href="http://discord.narcos.pt "><i class="fab fa-discord"></i></a>
                <a href="https://www.instagram.com/narcosroleplay/"><i class="fab fa-instagram"></i></a>
            </div>

        </div>
        <!--Hero End -->

        <!--Services Area Start -->
        <div style="background-color:#f3eee2">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                    
            &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="section-tittle text-center mb-100">
                            <span>Pacotes VIPs</span>
                            <h2>O que nos temos para ti</h2>
                            <p>Ver mais no <a style="color:#eb566c;" href="https://discord.gg/9GknUeDy">discord</a></p>
                        </div>
                    </div>
                </div>
                <!-- INICIO-->
                <div class="row">
            <div class="col-md-3">
                <!-- Tabs nav -->
                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                @foreach($vip as $vips)
                <?php $id = $vips->id; ?>
                @if($id == '1')
                    <a class="nav-link mb-3 p-3 shadow active" id="v-pills-<?php echo $id;?>-tab" data-toggle="pill" href="#v-pills-<?php echo $id;?>" role="tab" aria-controls="v-pills-<?php echo $id;?>" aria-selected="true">
                @else
                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-<?php echo $id;?>-tab" data-toggle="pill" href="#v-pills-<?php echo $id;?>" role="tab" aria-controls="v-pills-<?php echo $id;?>" aria-selected="true">
               @endif
                       <i class="fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold smaller text-uppercase">{{$vips->nome}}</span><br>
                        <span class="font-weight-bold small text-uppercase" style="color:#28395A;">Categoria: {{$vips->Tipo}} </span></a>
                        
                @endforeach
                    </div>
            </div>


            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                @foreach($vip as $vips)
                <?php $id = $vips->id; ?>
                @if($id == '1')
                    <div class="tab-pane fade shadow rounded bg-white p-5 active show" id="v-pills-<?php echo $id;?>" role="tabpanel" aria-labelledby="v-pills-<?php echo $id;?>-tab">
                @else
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-<?php echo $id;?>" role="tabpanel" aria-labelledby="v-pills-<?php echo $id;?>-tab">
                @endif
                    <h4 class="font-italic mb-4">{{$vips->nome}}</h4>
                    @foreach($lista->where('pacote_id', $vips->nome) as $listas)
                        <p class="font-italic text-muted mb-2">{{$listas->oferta}}</p>
                        @endforeach
                    </div>
                @endforeach 
                </div>
            </div>
        </div>
            <!-- fim -->
            &nbsp;&nbsp;&nbsp;&nbsp;
            </div>
        </div>
        <!-- Services Area End -->

    </main>
    <footer>
        <!-- Footer Start-->
        @include('footer')
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>


    <!-- JS here -->
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Nice-select, sticky -->
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </body>
</html>
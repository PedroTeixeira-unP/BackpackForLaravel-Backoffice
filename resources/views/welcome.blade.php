<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        @include('head')
        
        <link rel="stylesheet" href="assets/css/style2.css">
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

        <!-- Slider Area Start-->
        <div class="slider-area slider-bg ">
            <div class="slider-active dot-style">
            @foreach($banners as $banner)
                <div class="single-slider d-flex align-items-center slider-height ">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-9 ">
                                <div class="hero__caption">
                                    <h3 data-animation="fadeInLeft" data-delay=".3s" style="color:#04e9ff">{{$banner->texto1}}</h3>
                                    <h1 data-animation="fadeInLeft" data-delay=".6s">{{$banner->texto2}}</h1>
                                </div>
                                <?php $botao = $banner->botao; $link =$banner->link;?>
                                @if($botao == "Sim")
                                <div class="slider-btns">
                                        <!-- Hero-btn -->
                                        <a data-animation="fadeInLeft" data-delay="1s" href="<?php echo $link ?>" class="btn radius-btn">Ver mais</a>
                                   </div>
                                   @endif
                            </div>
                            <div class="col-lg-6">
                                <div class="hero__img d-none d-lg-block f-right">
                                    <img src="assets/img/hero/hero_right.png" alt="" data-animation="fadeInRight" data-delay="1s">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
                @endforeach   
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
        <!-- Slider Area End -->
        <!-- work company Start
        <section class="work-company">
            <div class="container" style="padding:3%;">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        
                        <div class="section-tittle section-tittle3">
                            <span>SEJA PATROCINADOR</span>
                            <h2>Quem nos Acompanha</h2>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="logo-area">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-logo">
                                        <img src="assets/img/gallery/cisco_brand1.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-logo">
                                        <img src="assets/img/gallery/cisco_brand2.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-logo">
                                        <img src="assets/img/gallery/cisco_brand3.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-logo">
                                        <img src="assets/img/gallery/cisco_brand4.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-logo">
                                        <img src="assets/img/gallery/cisco_brand5.png" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="single-logo">
                                        <img src="assets/img/gallery/cisco_brand6.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!-- work company End-->
        <!-- Our pricing Start -->
        <div class="our-pricing-area section-padding30 fix"> <!--data-background="assets/img/gallery/section_bg03.jpg">-->
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="tab-content" id="nav-tabContent">
                             <!-- First Tab -->
                             @foreach($vipI as $vipsI)
                           
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">  
                                <div class="single-pricing mb-30">
                                    <div class="pricing-caption text-center">
                                    <div class="procing-logo">
                                            <img src="assets/img/icon/roket.png" alt="">
                                    </div>
                                    <h2 style="color:white;">{{ $vipsI->nome}}</h2>
                                        <h3 style="color:white;">{{ $vipsI->Valor}} €</h3>
                                        <span></span>
                                        <div class="pricing-listing">
                                            <ul>
                                                        <?php $counter=0;?>
                                                        @foreach( $lista->where('pacote_id', $vipsI->nome) as $viewlista)
                                                            <?php $counter=$counter+1;?>
                                                        @endforeach
                                            <?php $count=0;?>
                                                @foreach( $lista->where('pacote_id', $vipsI->nome) as $viewlista)
                                                @if($counter > 5)
                                                    @if($count == 4)
                                                        <li>e mais...</li>
                                                            @break
                                                    @endif
                                                @endif
                                                <li>{{ $viewlista->oferta}}</li>
                                                <?php $count=$count+1;?>
                                                    
                                                @endforeach
                                            
                                            </ul>
                                        </div>
                                        
                                        <a href="https://discord.gg/9GknUeDy" class="btn white-btn">Ver os pacotes</a>
                                    </div>
                                    <!-- pricing Shape -->
                                    <div class="pricing-shape">
                                        <img class="pricing1" src="assets/img/gallery/procing-shape1.png" alt="">
                                        <img class="pricing2"  src="assets/img/gallery/procing-shape2.png" alt="">
                                    </div>
                                </div>@break
                                @endforeach
                            </div>
                             <!-- Second Tab -->
                             @foreach($vipO as $vipsO)
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="single-pricing  mb-30">
                                    <div class="pricing-caption text-center">
                                    <div class="procing-logo">
                                            <img src="assets/img/icon/roket.png" alt="">
                                    </div>
                                    <h2 style="color:white;">{{ $vipsO->nome}}</h2>
                                        <h3 style="color:white;">{{ $vipsO->Valor}}</h3>
                                        <span></span>
                                        <div class="pricing-listing">
                                            <ul>        <?php $counter=0;?>
                                                        @foreach( $lista->where('pacote_id', $vipsO->nome) as $viewlista)
                                                            <?php $counter=$counter+1;?>
                                                        @endforeach
                                                <?php $count=0;?>
                                                @foreach( $lista->where('pacote_id', $vipsO->nome) as $viewlista)
                                                @if($counter > 5)
                                                    @if($count == 4)
                                                        <li>e mais...</li>
                                                            @break
                                                    @endif
                                                @endif
                                                <li>{{ $viewlista->oferta}}</li>
                                                
                                                <?php $count=$count+1;?>
                                                    
                                                @endforeach
                                            </ul>
                                        </div>
                                        <a href="https://discord.gg/9GknUeDy" class="btn white-btn">Ver os pacotes</a>
                                    </div>
                                    <!-- pricing Shape -->
                                    <div class="pricing-shape">
                                        <img class="pricing1" src="assets/img/gallery/procing-shape1.png" alt="">
                                        <img class="pricing2"  src="assets/img/gallery/procing-shape2.png" alt="">
                                    </div>
                                </div>@break
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Pricing-caption -->
                    <div class="col-lg-6 col-md-6">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle3">
                            <span>Pacotes VIPs</span>
                            <h2>Alguns dos nossos pacotes VIPs</h2>
                            <p class="pt-20 pb-20">Todas as doações são revertidas a 100% para pagar despesas do servidor, estas doações não se destinam a fins lucrativos.</p>
                            <p class="pt-20 pb-20">Dado que o pagamento do servidor e das despesas são mensais, para manter o servidor todos os <span style="font-weight: bold;">PACOTES SÃO MENSAIS</span>, pelo período de 30 dias..</p>
                            <p class="pt-20 pb-20">ENTREGA DE VIP'S ATÉ <span style="font-weight: bold;">72 HORAS</span> EM DIAS ÚTEIS.</p>
                        </div>
                        <!-- Tab Button -->
                        <div class="pricing-button">                                         
                            <nav>                                                                     
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Individual</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Organizações</a>
                                </div>
                            </nav>
                        </div>
                        <!-- End Tab Button -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Our pricing End -->
        
        <!-- Support Area Start -->
        <section class="support-area section-bg pt-150 pb-150" data-background="assets/img/gallery/section_bg03.jpg">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-5">
                        <div class="support-caption">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle5">
                            <span>Servidor FIVEM</span>
                            <h2>Entra na nossa comunidade</h2>
                            <p class="support-details">Para jogares no nosso servidor precisas de entrar primeiro no discord!</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="support-number">
                            <!-- Single contact -->
                            <div class="single-contact text-center">
                                <div class="contact-icon">
                                    <i class="fab fa-discord"></i>
                                </div>
                                <div class="contact-number">
                                    <span>discord.narcos.pt</span>
                                </div>
                            </div>
                            <!-- Single contact -->
                            <div class="single-contact text-center">
                                <div class="contact-icon">
                                    <i class="fas fa-server"></i>
                                </div>
                                <div class="contact-number">
                                    <span>ip.narcos.pt</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Support Area End -->
        
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
        
    </body>
</html>
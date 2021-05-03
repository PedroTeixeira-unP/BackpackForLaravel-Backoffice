        <!-- Footer Start-->
        <div class="footer-area">
            <div class="container">
               <div class="footer-top footer-padding">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Alguns pacotes</h4>
                                    <ul><?php $soma1=0;?>
                                        @foreach($vipI as $vipsI)
                                        <?php $soma1=$soma1+1;?>
                                            <li><a href="Vips">{{ $vipsI->nome}}</a></li>
                                        @if($soma1==2)
                                            @break
                                        @endif
                                        @endforeach
                                        <?php $soma2=0;?>
                                        @foreach($vipO as $vipsO)
                                        <?php $soma2=$soma2+1;?>
                                            <li><a href="Vips">{{ $vipsO->nome}}</a></li>
                                        @if($soma2==2)
                                            @break
                                        @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Acesso Rápido</h4>
                                    <ul>
                                        <li><a href="#">Servidores</a></li>
                                        <li><a href="#">Vips</a></li>
                                        <li><a href="#">Equipas</a></li>
                                        <li><a href="#">Candidaturas</a></li>     
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Servidores</h4>
                                    <ul>
                                        <li><a href="fivem://connect/ip.narcos.pt:30120">ip.narcos.pt</a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="http://discord.narcos.pt">discord.narcos.pt</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
                <div class="footer-bottom">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-9 ">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  &copy; <script>document.write(new Date().getFullYear());</script><a target="_blank"> NARCOSRP.PT</a> Todos os Direitos Reservados 
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3">
                            <!-- Footer Social -->
                            <div class="footer-social f-right">
                                <!--<a href="#"><i class="fab fa-facebook-f"></i></a>-->
                                <a href="fivem://connect/ip.narcos.pt:30120"><i class="fas fa-server"></i></a>
                                <a href="http://discord.narcos.pt"><i class="fab fa-discord"></i></a>
                                <a href="https://www.instagram.com/narcosroleplay/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Footer End-->


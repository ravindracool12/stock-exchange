@extends("layouts.home")
@section("title" , "home page | Html convesion")


@section("welcome")

    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url(images/slider/bg1.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2><span>TRADE</span> IN THE MOMENT INVEST IN THE FUTURE</h2>
                                    <p> Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut. </p>
                                    <a class="btn btn-primary btn-lg" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
             <div class="item" style="background-image: url(images/slider/bg2.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2>TRADE IN THE MOMENT INVEST IN THE <span> FUTURE</span></h2>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore. </p>
                                    <a class="btn btn-primary btn-lg" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->

    <section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <h2>Sed ut perspiciatis unde omnis iste</h2>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima.</p>
                </div>
                <div class="col-sm-3 text-right">
                    <a class="btn btn-primary btn-lg" href="#">Reprehenderit Qui!</a>
                </div>
            </div>
        </div>
    </section><!--/#cta-->

    <section id="features">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Enjoy the ultimate platform</h2>
                <p class="text-center wow fadeInDown">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium<br>voluptatum deleniti atque corrupti quos dolores et quas</p>
            </div>
            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <img class="img-responsive" src="images/main-feature.png" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-download"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Officia Deserunt</h4>
                            <p>Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-database"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Soluta Nobis</h4>
                            <p>Eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-gamepad"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Temporibus Autem</h4>
                            <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-cloud"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Itaque earum</h4>
                            <p>Rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="cta2">
        <div class="container">
            <div class="text-center">
                <h2 class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">Award-winning broker <span>recognized and praised by the most respected experts of the industry.</span></h2>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo<br>inventore veritatis et quasi architecto beatae.</p>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms"><a class="btn btn-primary btn-lg" href="#">View All awards</a></p>
            </div>
        </div>
    </section>


    
    <section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">About Us</h2>
                <p class="text-center wow fadeInDown">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis<br>praesentium voluptatum deleniti atque corrupti quos dolores et quas</p>
            </div>

            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <h3 class="column-title">Video Sample</h3>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/XH7OShyZ1Ek" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-sm-6 wow fadeInRight">
                    <h3 class="column-title">Officia Deserunt</h3>
                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum.</p>

                    <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>

                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="nostyle">
                                <li><i class="fa fa-check-square"></i> Eaque ipsa quae ab</li>
                                <li><i class="fa fa-check-square"></i> Inventore veritatis</li>
                            </ul>
                        </div>

                        <div class="col-sm-6">
                            <ul class="nostyle">
                                <li><i class="fa fa-check-square"></i> Architecto beatae vitae dicta</li>
                                <li><i class="fa fa-check-square"></i> Nemo enim ipsam</li>
                            </ul>
                        </div>
                    </div>

                    <a class="btn btn-primary" href="#">Consequuntur magni</a>

                </div>
            </div>
        </div>
    </section><!--/#about-->

    

   

    <section id="pricing">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Online Trading Platform</h2>

                <p class="text-center wow fadeInDown"><b>Stocks, ETFs, Forex and Digital Options</b></p>
                <p class="text-center wow fadeInDown"> CRM is one of the fastest growing online trading brands in the world. Voted the best mobile trading platform, we have now expanded our offerings to include stock trading, ETF trading, Forex trading and a brand-new product unique to CRM called Digital Options.</p>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="0ms" >
                        <ul class="pricing">
                            <li class="plan-header">
                                <div class="price-duration">
                                    <span class="price">
                                        $15
                                    </span>
                                    <span class="duration">
                                        per year
                                    </span>
                                </div>

                                <div class="plan-name">
                                    Forex
                                </div>
                            </li>
                            <p>Forex trading has long been a popular choice for investors. Forex, or FX, is the largest and most liquid market in the world, with daily trades running into trillions of dollars. Currencies are traded in pairs, </p>
                            <li class="plan-purchase"><a class="btn btn-primary" href="#">View More</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="200ms">
                        <ul class="pricing featured">
                            <li class="plan-header">
                                <div class="price-duration">
                                    <span class="price">
                                        $28
                                    </span>
                                    <span class="duration">
                                        per year
                                    </span>
                                </div>

                                <div class="plan-name">
                                    Options
                                </div>
                            </li>
                            <p>In addition, you can trade Digital Options in order to speculate on the global market movements of commodities, currencies, indices and stocks. Online options can be a great introduction to the world of trading.</p>
                            <li class="plan-purchase"><a class="btn btn-primary" href="#">View More</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="400ms">
                        <ul class="pricing">
                            <li class="plan-header">
                                <div class="price-duration">
                                    <span class="price">
                                        $40
                                    </span>
                                    <span class="duration">
                                        per year
                                    </span>
                                </div>

                                <div class="plan-name">
                                   Stocks
                                </div>
                            </li>
                            <p>Stock trading is one of our newest products, and with CRM you can buy shares and trade a great variety of stocks from some of the world's most successful companies Online options can be a great.</p>
                            <li class="plan-purchase"><a class="btn btn-primary" href="#">View More</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="600ms">
                        <ul class="pricing">
                            <li class="plan-header">
                                <div class="price-duration">
                                    <span class="price">
                                        $58
                                    </span>
                                    <span class="duration">
                                        per year
                                    </span>
                                </div>

                                <div class="plan-name">
                                    ETFs
                                </div>
                            </li>
                            <p>
                            ETF trading is another brand-new feature that offers an excellent way to diversify your investment portfolio with less risk. ETFs track baskets of assets, commodities, and indices and trade common stock .</p>
                            <li class="plan-purchase"><a class="btn btn-primary" href="#">View More</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#pricing-->



    <section id="get-in-touch">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">RISK WARNING</h2>
                <p class="text-center wow fadeInDown">he Financial Products offered by the company include Contracts for Difference ('CFDs') and other complex financial products. Trading CFDs carries a high level of risk since leverage can work both to your advantage and disadvantage. As a result, CFDs may not be suitable for all investors because it is possible to lose all of your invested capital. You should never invest money that you cannot afford to lose. Before trading in the complex financial products offered, please ensure to understand the risks involved</p>
            </div>
        </div>
    </section><!--/#get-in-touch-->


    <section id="contact">
       <!-- 
        -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224346.61368441398!2d77.06889789241492!3d28.527218142152982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x52c2b7494e204dce!2sNew+Delhi%2C+Delhi!5e0!3m2!1sen!2sin!4v1550570954647" width="100%" height="400" frameborder="0" style="border: 0px; pointer-events: none;" allowfullscreen=""></iframe>
     
    </section><!--/#bottom-->

@endsection
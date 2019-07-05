 @extends("layouts.home")
 @section("title" , "figures page | Html convesion")

<div class="container-fluid" style="padding-bottom: 50px;">
    <div class="row">
        <div>
            <img src="images/slider/bg2.jpg" width="100%" height="300px">
        </div>
        
    </div>
</div>
 <section id="animated-number">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Accounts Registered</h2>
                <p class="text-center wow fadeInDown">id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.<br>Temporibus autem quibusdam et aut officiis debitis aut</p>
            </div>

            <div class="row text-center">
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="animated-number" data-digit="1234" data-duration="1000"></div>
                        <strong>registered users : 2016</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="animated-number" data-digit="3214" data-duration="1000"></div>
                        <strong>registered users : 2017</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="animated-number" data-digit="4123" data-duration="1000"></div>
                        <strong>registered users : 2018</strong>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="animated-number" data-digit="2233" data-duration="1000"></div>
                        <strong>registered users : 2019</strong>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#animated-number-->

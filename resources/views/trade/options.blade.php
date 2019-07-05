@extends("layouts.home")

@section("title" , "options page | Html convesion")


@section("options")

    <section id="features">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Choose Your Options</h2>
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
                            <h4 class="media-heading">Digital Options</h4>
                            <p>Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-database"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">$1</h4>
                            <p>Minimum investments</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-gamepad"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">60 sec — 5 min</h4>
                            <p>Expiration time</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-cloud"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">$0</h4>
                            <p>Brokerage fees</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <button class="btn btn-primary">Trade Now</button>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-primary">How To Trade</button>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
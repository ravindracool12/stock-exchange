@extends("layouts.user")

@section('content')

{{Auth::id()}}
 <div class="container mt-5">
    <div class="row">
        <div class="col-lg-3 pb-5">
            <div class="wizard">
                <nav class="list-group list-group-flush">
                    <a class="list-group-item" href="personal">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="fe-icon-shopping-bag mr-1 text-muted"></i>
                                <div class="d-inline-block font-weight-medium text-uppercase">Personal Data</div>
                            </div><!-- <span class="badge badge-secondary">6</span> -->
                        </div>
                    </a><a class="list-group-item active" href="#"><i class="fe-icon-user text-muted"></i>Notification Settings</a><a class="list-group-item" href="id"><i class="fe-icon-map-pin text-muted"></i>Account Settings</a>
                    <a class="list-group-item" href="#">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="fe-icon-heart mr-1 text-muted"></i>
                                <div class="d-inline-block font-weight-medium text-uppercase">Social Networks</div>
                            </div><span class="badge badge-secondary">3</span>
                        </div>
                    </a>
                    <a class="list-group-item" href="#">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="fe-icon-tag mr-1 text-muted"></i>
                                <div class="d-inline-block font-weight-medium text-uppercase">Safty & Security</div>
                            </div><!-- <span class="badge badge-secondary">4</span> -->
                        </div>
                    </a>
                </nav>
            </div>
        </div>
        <!-- Profile Settings-->
        <div class="col-lg-1"></div>
        <div class="col-lg-8 pb-5">
            <div class="row">
                <h2>Account Settings</h2>
            </div>
            <div class="row">
                <h3>Using a public profile</h3>

                <p>You can pick a generated name that will be displayed in the trading statistics on the platform.</p>
                <hr>
                <h3></h3>

                <p>You can change the email address to which your account is linked. <br><a href="">Change e-mail</a></p>
            </div>
            <div class="row">
                <h3>Additional Settings</h3>
             </div>
             <div class="row">
                <h3>Reset</h3>
                
                <p>If you face any problems when using our trading platform, try resetting your settings to default values. After the reset is done, you will have to re-log in to the system. All settings will have default values.</p>
                <hr>
            </div>
            </div>
        </div>
    </div>
</div>


@endsection
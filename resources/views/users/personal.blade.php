@extends("layouts.user")

@section('content')

{{Auth::id()}}
 <div class="container mt-5">
    <div class="row">
        <div class="col-lg-4 pb-5">
            <!-- Account Sidebar-->
            <div class="author-card pb-3">
                <div class="author-card-cover" style="background-image: url(https://demo.createx.studio/createx-html/img/widgets/author/cover.jpg);"><a class="btn btn-style-1 btn-white btn-sm" href="#" data-toggle="tooltip" title="" ></div>
                <div class="author-card-profile">
                    <div class="author-card-avatar"><img src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="Daniel Adams">
                    </div>
                    <div class="author-card-details">
                        <h5 class="author-card-name text-lg">Ravindra Yadav</h5><span class="author-card-position">Joined February 06, 2019</span>
                    </div>
                </div>
            </div>
            <div class="wizard">
                <nav class="list-group list-group-flush">
                    <a class="list-group-item" href="personal">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="fe-icon-shopping-bag mr-1 text-muted"></i>
                                <div class="d-inline-block font-weight-medium text-uppercase">Personal Data</div>
                            </div><!-- <span class="badge badge-secondary">6</span> -->
                        </div>
                    </a>

                    <a class="list-group-item active" href="profile/notification"><i class="fe-icon-user text-muted"></i>Notification Settings</a>

                    <a class="list-group-item" href="profile/account-settings"><i class="fe-icon-map-pin text-muted"></i>Account Settings</a>
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
        <div class="col-lg-8 pb-5">
            <form class="row" action="/users/personals" enctype="multipart/form-data" method="post">
                @csrf
                <!-- <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-fn">First Name</label>
                        <input class="form-control" type="text" name="fname" id="account-fn" value="{{ Auth::id()['user_fname'] }}" required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-ln">Last Name</label>
                        <input class="form-control" type="text" name="lname" id="account-ln" value="{{Auth::id()['user_lname']}}" required="">
                    </div>
                </div> -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-email">E-mail Address</label>
                        <input class="form-control" name="email" type="text" id="account-email" value="{{Auth::id()['user_email']}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-phone">Phone Number</label>
                        <input class="form-control" name="phone" type="text" id="account-phone" value="{{ Auth::id()['user_phone'] }}" required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-pass">City</label>
                        <input class="form-control" name="city" type="text" id="account-pass" value="{{    Auth::id()['user_city'] }}">
                    </div>
                </div>
                <!-- <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-confirm-pass">Password</label>
                        <input class="form-control" name="password" type="password" id="account-confirm-pass" vlaue="{{ Auth::id()['user_password'] }}">
                    </div>
                </div> -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-confirm-pass">Photo</label>
                        <input class="form-control" name="photo" type="file" id="account-confirm-pass" value="{{ Auth::id()['user_photo'] }}">
                    </div>
                </div>
                <div class="col-12">
                    <hr class="mt-2 mb-3">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <div class="custom-control custom-checkbox d-block">
                            <!-- <input class="custom-control-input" name="news" type="checkbox" id="subscribe_me" checked="">
                            <label class="custom-control-label" for="subscribe_me">Subscribe me to Newsletter</label> -->
                        </div>
                        <button class="btn" ng-click="updateMe()">Update Now</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
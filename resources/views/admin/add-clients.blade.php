@extends("layouts.admin")

@section('content')


<div class="content">
        <div class="row justify-content-center">
            <div class="block-content">
	            <form action="/admin/add-clients" method="post">
	            	@csrf
	                <div class="form-group row">
	                    <div class="col-md-6">
	                        <div class="form-material floating">
	                            <input type="text" class="form-control" id="name" name="name">
	                            <label for="name">Name</label>
	                        </div>
	                    </div>
	                    <div class="col-md-6">
	                        <div class="form-material floating">
	                            <input type="text" class="form-control" id="email" name="email">
	                            <label for="email">Email</label>
	                        </div>
	                    </div>
                    </div>
                    <input type="hidden" name="pool" value="">
                    <div class="form-group row">
	                    <div class="col-md-6">
	                        <div class="form-material floating">
	                            <input type="password" class="form-control" id="password" name="password">
	                            <label for="password">Password</label>
	                        </div>
	                    </div>
	                    <div class="col-md-6">
	                        <div class="form-material floating">
	                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
	                            <label for="password_confirmation">Confirm Password</label>
	                        </div>
	                    </div>
                    </div>
                    <div class="form-group row">
	                    <div class="col-md-6">
	                        <div class="form-material floating">
	                            <input type="text" class="form-control" id="mobile" name="mobile">
	                            <label for="mobile">Mobile</label>
	                        </div>
	                    </div>
						<!-- <div class="col-md-6">
	                        <div class="form-material floating">
	                            <input type="text" class="form-control" id="tokennumber" name="tokennumber">
	                            <label for="tokennumber">Token Number</label>
	                        </div>
	                    </div> -->
                    </div>

                   <!--  <div class="form-group row">
	                   <div class="col-md-6">
	                        <div class="form-material floating">
	                            <input type="text" class="form-control" id="sponsorid" name="sponsorid">
	                            <label for="sponsorid">SponsorID</label>
	                        </div>
	                    </div> 
						
                    </div> -->
                    <div class="form-group row">
                        <div class="col-md-9">
                            <a href="/member/checkid/" class="btn btn-alt-success">Verify SponsorID</a>
                            <button type="submit" class="btn btn-alt-primary"><a href=""> Submit</a></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
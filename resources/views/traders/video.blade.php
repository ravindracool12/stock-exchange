@extends("layouts.home")

@section("title" , "video page | Html convesion")

@section("video")


<div class="container-fluid" style="padding-bottom: 50px;">
	<div class="container">
		<div class="row">
			<div>
				<img src="images/slider/bg2.jpg" width="100%" height="300px">
			</div>
			
		</div>
	</div>
</div>
<section style="padding-bottom: 50px">
	<div class="container">
		<div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Trading tutorials and top market news</h2>
        </div>
                    <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <h3 class="column-title">Trading Tutorial Video</h3>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/XH7OShyZ1Ek" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-sm-6 wow fadeInRight">
                    <h3 class="column-title">How to trade</h3>
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

                    <a class="btn btn-primary" href="#">More Videos</a>

                </div>
            </div>
	</div>
</section>
@endsection
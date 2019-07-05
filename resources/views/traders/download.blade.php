@extends("layouts.home")

@section("title" , "collection page | Html convesion")


<section style="margin-bottom: 50px">
	<div class="container">
		<div class="row">
			<h2>Download Our #1 Trading App</h2>
			<h3>(*App Store)</h3>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-6">
						<div class="" style="border: 1px solid; padding: 15px;fill:red;cursor: pointer;">
						   <img src="images/buttons/1.png" width="50" height="50">
							  <span style="padding-left: 80px;padding-top: 15px; font-size: 30px"><b>Download</b></span>
					   </div>
					</div>


				<div class="col-md-6">
				<div class="" style="border: 1px solid; padding: 15px;fill:red;cursor: pointer;">
					<img src="images/buttons/2.png" width="50" height="50">
						<span style="padding-left: 80px;padding-top: 15px; font-size: 30px"><b>Download</b></span>
				</div>
			</div>
			</div>
			
		</div>
	</div>
	<div class="row download">
		<!-- <img src="images/buttons/3.png" width="50" height="50"> -->
		<span><h3>System Requirements</h3></span>
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-6">
					<h3>Operating system:</h3>
					<p>Windows 7, 8, 8.1, 10 <br>
                      macOS - OS X 10.10 Yosemite</p>

                      <h3>Video card:</h3>
                      <p>OpenGL 2.0-friendly (macOS)<br>DirectX 9 (Windows)</p>
				</div>
				<div class="col-md-6">
					<h3>RAM</h3>
					<p>2 GB (3 GB recommended)</p>

					<h3>Hard disk space:</h3>
					<p>130 mb</p>
				</div>
			</div>
		</div>
	</div>

	<div class="row download">
		<h2>Problems & Solutions</h2>
		<h4>My antivirus blocks the installed file</h4>
		<p>Update the antivirus installed on your computer. Add the IQ Option client to the exclusions list of your antivirus.</p>
		<h3>Video driver generates an error (Windows)</h3>
		<p>If you see a window asking to update your video card drivers during the installation process or when you run the app, it means that your current drivers do not support the OpenGL configuration used in the app. In order to solve this problem, you need to visit your video card manufacturer’s website (follow the links in the message) and download and install the drivers for your video card. If you do this and the problem persists, it may indicate that your video card does not support the required OpenGL configuration.</p>
	</div>
</div>
	
</section>
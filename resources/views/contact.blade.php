@extends("layouts.home")
@section("title" , "contact us page | Html convesion")


@section("contact")


    <section id="contact">
        <!-- <div id="google-map" style="height:650px" data-latitude="4.688467" data-longitude="-74.051289"></div> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224346.61368441398!2d77.06889789241492!3d28.527218142152982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x52c2b7494e204dce!2sNew+Delhi%2C+Delhi!5e0!3m2!1sen!2sin!4v1550570954647" width="100%" height="650" frameborder="0" style="border: 0px; pointer-events: none;" allowfullscreen=""></iframe>
        <div class="container-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8">
                        <div class="contact-form">
                            <h3>Contact Info</h3>

                            <address>
                              <strong>Your Company, Inc.</strong><br>
                              Gautam Nursing Home, d2, 148, Pankha Rd, Block B, Jivan Park, Uttam Nagar New, Delhi, 110059"<br>
                              <abbr title="Phone">P:</abbr> 919 56 07 55823
                            </address>

                            <form id="main-contact-form" name="contact-form" method="post" action="contact-us.send.php">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="8" placeholder="Message" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#bottom-->

@endsection
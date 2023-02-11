 <?php
/**
 * The template Name:Contact
 *

 */

get_header(); ?>
 
 
  <div class="page-title-section" style="background-image: url(<?php bloginfo('template_url') ?>/css/img/bg/pagetitle.jpg);">
            <div class="container">
                <h1>Contact</h1>
                <ul>
                    <li><a href="index-2.html">Home</a></li>
                    <li><a href="contact-4.html">Contact</a></li>
                </ul>
            </div>
        </div>

        <div class="section-block">
            <div class="container">
                <div class="section-heading center-holder">
                    <span>Get in Touch</span>
                    <h3>Let's Talk about Your Business</h3>
                    <div class="section-heading-line"></div>
                </div>
                <div class="row mt-50">
                    <div class="col-md-6 col-sm-6 col-12">
                        <div id="map" class="mb-20 mt-10">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.7564658594515!2d75.76723571436433!3d26.847697169350674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db5a288b81819%3A0x8506dde97d3af0d5!2sVijay%20Path%2C%20Mansarovar%2C%20Jaipur%2C%20Rajasthan%20302020!5e0!3m2!1sen!2sin!4v1676020713468!5m2!1sen!2sin" width="550" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-12">
                        <form class="contact-form">
                            <div class="row">
                                <div class="col-md-12"><input type="text" name="subject" placeholder="Subject" /></div>
                                <div class="col-md-6 col-sm-6 col-12"><input type="text" name="name" placeholder="Name" /></div>
                                <div class="col-md-6 col-sm-6 col-12"><input type="email" name="email" placeholder="E-mail" /></div>
                                <div class="col-md-12"><textarea name="message" placeholder="Message"></textarea></div>
                                <div class="col-md-12">
                                    <div class="center-holder"><button type="submit">Send Message</button></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-50">
                    <div class="col-md-4 col-sm-4 col-12">
                        <div class="contact-data-box">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-12">
                                    <div class="contact-data-box-icon"><i class="fa fa-phone"></i></div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-12">
                                    <div class="contact-data-box-text">
                                        <h4>Phone</h4>
                                        <h6>(+123)123-456-789</h6>
                                        <h6>(+321)987-654-321</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-12">
                        <div class="contact-data-box">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-12">
                                    <div class="contact-data-box-icon"><i class="fa fa-envelope-open"></i></div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-12">
                                    <div class="contact-data-box-text">
                                        <h4>Message</h4>
                                        <h6>specthemes@gmail.com</h6>
                                        <h6>example@gmail.com</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-12">
                        <div class="contact-data-box">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-12">
                                    <div class="contact-data-box-icon"><i class="fa fa-globe"></i></div>
                                </div>
                                <div class="col-md-8 col-sm-8 col-12">
                                    <div class="contact-data-box-text">
                                        <h4>Our Location</h4>
                                        <h6>New York, NY Sheram 113</h6>
                                        <h6>London, Sheram 113/11 9007</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        
        <div class="notice-section notice-section-sm border-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-12">
                        <div class="mt-5">
                            <h6>Looking for Professional Approach and Quality Services ?</h6>
                            <div class="section-heading-line-left"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-12">
                        <div class="mt-10 right-holder-md"><a href="#" class="primary-button button-sm mt-15-xs">Contact Us Today</a></div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
<?php
get_footer();

?>
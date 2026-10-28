<?php
    $this->load->view('includes/header');
?>
<div
    class="visual-block visual-theme-5 bg-dark hero-section text-black pt-60 pt-md-60 pt-xl-40 pb-60 pb-xl-80 pb-md-60">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 col-xl-6">
                <header class="section-header">

                    <h2 class="mb-10 text-white">Connect with our <span class="text-success">financial experts</span>
                    </h2>
                    <p class="text-white">Questions about loan terms or your application? Our support team is here to
                        help — clear answers, no runaround.</p>
                </header>
            </div>
            <div class="col-12 col-lg-6 col-xl-6">
                <ul class="categories-list bg-transparent p-0 rounded-0">
                    <div class="row g-3">
                        <div class="col-lg-6 mb-20">
                            <li class="p-0 h-100">
                                <div
                                    class="categories-item flex-wrap align-items-center justify-content-center h-100 flex-column">
                                    <div>
                                        <div class="categories-image">
                                            <span class="icon">
                                                <i class="fas fa-phone text-white"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="text-center mt-10">

                                        <strong class="title">Call us</strong>
                                        <p class="mb-0"><small>Mon–Sat, 10 am – 6:30 pm</small></p>

                                        <p class="text-success mb-0"><small>+91 8796408503</small></p>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div class="col-lg-6 mb-20">
                            <li class="p-0 h-100">
                                <div
                                    class="categories-item flex-wrap align-items-center justify-content-center h-100 flex-column">
                                    <div>
                                        <div class="categories-image">
                                            <span class="icon">
                                                <i class="fas fa-envelope text-white"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="text-center mt-10">

                                        <strong class="title">Email us</strong>
                                        <p class="mb-0"><small>We typically reply within one business day</small></p>

                                        <p class="text-success mb-0"><small>info@rupeeraftaar.com</small></p>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div class="col-lg-12">
                            <li class="p-0 h-100">
                                <div
                                    class="categories-item flex-wrap align-items-center justify-content-center h-100 flex-column">
                                    <div>
                                        <div class="categories-image">
                                            <span class="icon">
                                                <i class="fas fa-map-marker-alt text-white"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="text-center mt-10">

                                        <strong class="title">Visit us</strong>
                                        <p class="mb-0"><small>Office address</small></p>

                                        <p class="text-success mb-0"><small>S-370, Block S, Panchsheel Park South,
                                                Panchsheel
                                                Park,
                                                New
                                                Delhi, Delhi 110017</small></p>
                                    </div>
                                </div>
                            </li>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </div>

</div>
<div class="banner__img-two partner-bg-img text-center d-flex align-items-center justify-content-center">
    <img src="<?= base_url('assets/images/partner-bg.png'); ?>" alt="" class="img-fluid d-md-block d-none">
</div>
<div class="banner__img-two partner-bg-img text-center d-flex align-items-center">
    <img src="<?php echo base_url('assets/images/mobile-img.jpeg'); ?>" alt="image" class="img-fluid d-md-none d-block">
</div>

<section class="section section-theme-5 pt-0 pt-md-0 pb-xl-80 partner-section">
    <div class="container">
        <div class="trending-categories-slider">
            <?php foreach ($banklist as $row) { ?>
            <div class="wrap text-center">
                <div class="justify-content-center categories-image">
                    <img src="<?php echo base_url('assets/images/bank/' . $row->bank_image); ?>"
                        alt="<?= $row->bank_name ?>" class="m-auto img-fluid">
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<section
    class="section section-contact section-theme-1 pt-60 pt-md-60 py-xl-80 py-xxl-80 pb-60 pb-md-60 contact-section"
    id="contactus">
    <div class="container">

        <div class="row">
            <div class="col-xl-7 col-12 m-auto">
                <header class="section-header text-center text-lg-center">
                    <span class="text-success text-uppercase text-outlined text-top mb-10 d-block">Drop Us a
                        Message</span>
                    <h2>We'd Love To Help You</h2>
                    <p class="text-center">Fill in your details and our team will get back to you shortly.</p>
                </header>
            </div>
        </div>
        <div class="contact-form">

            <div class="row justify-content-between">

                <div class="col-12 col-md-6 col-xl-5 p-0">

                    <ul class="contact-support text-light h-100">
                        <div class="mb-20">
                            <h6 class="mb-0">Get in touch</h6>
                            <p class="text-light">Our team responds within 24 hours.</p>
                        </div>
                        <li>
                            <div class="contact-box ps-0">
                                <div class="text-start mb-10">
                                    <div class="icon bg-success">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                </div>
                                <div class="textbox ms-20">
                                    <h3 class="h4 text-uppercase text-light">Location</h3>
                                    <address class="text-light"><?php echo COMPANY_ADDRESS; ?></address>
                                    </address>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="contact-box ps-0">
                                <div class="text-start mb-10">
                                    <div class="icon bg-success">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                </div>
                                <div class="textbox ms-20">
                                    <h3 class="h4 text-uppercase text-light">Call Us</h3>
                                    <p>
                                        <a href="tel:<?php echo COMPANY_MOBILE; ?>"
                                            class="text-light"><?php echo COMPANY_MOBILE; ?></a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="contact-box mb-0 ps-0">
                                <div class="text-start mb-10">
                                    <div class="icon bg-success">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                </div>
                                <div class="textbox ms-20">
                                    <h3 class="h4 text-uppercase text-light">Email</h3>
                                    <p>
                                        <a href="mailto:<?php echo COMPANY_EMAIL; ?>"
                                            class="text-light"><?php echo COMPANY_EMAIL; ?></a>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div
                    class="col-12 col-sm-10 col-md-6 col-xl-7 m-auto mb-40 mb-md-0 bg-white shadow  py-35 contact-form-right border">
                    <?php echo form_open('infopage/contactsubmission', array('id' => 'contactForm', 'class' => 'contac-form', 'novalidate' => 'novalidate')); ?>
                    <div class="row">
                        <div class="form-group col-6 mb-15 mb-md-20 mb-lg-25">
                            <input class="form-control" type="text" name="fullname" placeholder="Your Name" required
                                data-validation-regex-regex="^[a-zA-Z ]*$">
                            <div class="help-block font-small-3"></div>
                        </div>
                        <div class="form-group col-6 mb-15 mb-md-20 mb-lg-25">
                            <input class="form-control" type="text" name="mobile" placeholder="Your Mobile" required
                                minlength="10" maxlength="10" inputmode="numeric"
                                data-validation-regex-regex="^[6789]\d{9}$"
                                data-validation-regex-message="Enter valid mobile number">
                            <div class="help-block font-small-3"></div>
                        </div>
                        <div class="form-group col-6 mb-15 mb-md-20 mb-lg-25">
                            <input class="form-control" type="email" name="email" placeholder="Your Email Id" required>
                            <div class="help-block font-small-3"></div>
                        </div>
                        <div class="form-group col-6 mb-15 mb-md-20 mb-lg-25">
                            <input class="form-control" type="text" name="subject" placeholder="Your Subject" required>
                            <div class="help-block font-small-3"></div>
                        </div>
                        <div class="form-group col-12 mb-15 mb-md-20 mb-lg-25">
                            <textarea class="form-control" name="message" cols="30" rows="10" placeholder="Your Message"
                                required></textarea>
                            <div class="help-block font-small-3"></div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-green btn-sm w-100 text-uppercase"><span
                                    class="btn-text">Submit</span></button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section-contact section-theme-1 pt-0 pt-md-0 pb-xl-80 pb-xxl-80 pb-60 pb-md-60 contact-section"
    id="contactus">
    <div class="container">
        <div class="contact-form-wrap p-50">
            <div class="row">
                <div class="col-12 col-md-12 col-xl-12">
                    <div class="text-center">
                        <div class="mb-20">
                            <h3 class="text-light">Ready to apply?</h3>
                            <p class="text-light">Join thousands who trust firstkreditt for fast, fair borrowing.</p>
                        </div>
                        <div>
                            <a href="<?php echo site_url('onlineprocess/applynow'); ?>"
                                class="btn btn-light btn-shadow btn-sm"><span class="btn-text">Apply Now </span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php
    $this->load->view('includes/footer');
?>

<script type="text/javascript">
$(function() {
    $('#contactForm').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            url: $(this).attr('action'),
            type: "POST",
            data: $(this).serialize(),
            dataType: "JSON",
            cache: false,
            processData: false,
            beforeSend: function() {
                $('#submit-btn').html(
                    "SUBMITTING... <span class='spinner-border spinner-border-sm ms-1' role='status' aria-hidden='true'></span>"
                );
                $('#submit-btn').attr('disabled', true);
            },
            success: function(response) {
                if (response['success'] == true) {
                    document.getElementById("contactForm").reset();
                    toastr.success(response['message']);
                } else {
                    toastr.error(response['message']);
                }

                $('#submit-btn').html('Send Message');
                $('#submit-btn').attr('disabled', false);
            },
            error: function(jXHR, textStatus, errorThrown) {
                toastr.error(errorThrown, 'ERROR');
                $('#submit-btn').html('Send Message');
                $('#submit-btn').attr('disabled', false);
            }
        });
    });
});
</script>
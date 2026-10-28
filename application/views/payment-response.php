<?php $this->load->view('includes/header-apply'); ?>

<main class="main">
    <section class="section section-theme-1 packages-block pt-130 cust-height d-flex align-items-center bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 col-12 m-auto">
                    <div class="block-holder form-condidates bg-white shadow card-right rounded-1">
                        <div class="subhead text-center mb-0">
                            <?php if($responsedata == "true") { ?>
                            <div class="text-center mb-15">
                                <i class="fa-regular fa-circle-check fs-1 text-success"></i>

                            </div>
                            <h2 class="text-dark">Congratulations! <span class="text-success">kirtan!</span> </h2>
                            <p>A dedicated loan expert will reach out to complete <br> documentation and bank verification.
                            </p>

                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                    <div
                                        class="card-blog-wrapper border p-10 mb-md-0 mb-10 bg-light-sky card shadow-none">

                                        <h6 class="mb-0 text-uppercase">Sanctioned</h6>
                                        <p class="mb-0 text-dark fw-bold">₹1,95,000</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                    <div
                                        class="card-blog-wrapper border p-10 mb-md-0 mb-10 bg-light-sky card shadow-none">

                                        <h6 class="mb-0 text-uppercase">Tenure</h6>
                                        <p class="mb-0 text-dark fw-bold">Up to 60 mo</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                    <div
                                        class="card-blog-wrapper border p-10 mb-md-0 mb-10 bg-light-sky card shadow-none">

                                        <h6 class="mb-0 text-uppercase">Disbursal</h6>
                                        <p class="mb-0 text-dark fw-bold">Within 48 hrs</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-20">
                                <a href="<?php echo site_url(); ?>" class="btn btn-green btn-sm mb-md-0 mb-5">Goto Home
                                    Page</a>
                                <a href="<?php echo site_url(); ?>customer" class="btn btn-outline border btn-lg">Customer
                                    Login</a>

                            </div>
                            <div class="mt-20">

                                <a href="<?php echo site_url('support/request'); ?>" class="text-dark">Start a new
                                    application<i class="fa-solid fa-arrow-right ms-5"></i></a>
                            </div>
                            <?php } 
              else if($responsedata == "false") { ?>
                            <div class="text-center mb-15">
                                <i class="fa-regular fa-circle-xmark text-danger fs-1"></i>

                            </div>
                            <h2  class="text-dark">Payment  <br><span class="text-danger">Unsuccessful</span></h2>
                            <p>
                                We're sorry, but your payment could not be processed. Please try again or contact our
                                support team for assistance.
                            </p>
                            <p>
                                हमें खेद है, लेकिन आपका भुगतान प्रोसेस नहीं हो सका। कृपया पुनः प्रयास करें या सहायता के
                                लिए हमारी सपोर्ट टीम से संपर्क करें।
                            </p>
                            <hr>
                            <p>Common Reasons for Payment Failure:</p>


                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                    <div
                                        class="card-blog-wrapper border p-10 mb-md-0 mb-10 bg-light-sky card shadow-none">

                                        <h6 class="mb-0 text-uppercase">Sanctioned</h6>
                                        <p class="mb-0 text-dark fw-bold">₹1,95,000</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                    <div
                                        class="card-blog-wrapper border p-10 mb-md-0 mb-10 bg-light-sky card shadow-none">

                                        <h6 class="mb-0 text-uppercase">Tenure</h6>
                                        <p class="mb-0 text-dark fw-bold">Up to 60 mo</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                    <div
                                        class="card-blog-wrapper border p-10 mb-md-0 mb-10 bg-light-sky card shadow-none">

                                        <h6 class="mb-0 text-uppercase">Disbursal</h6>
                                        <p class="mb-0 text-dark fw-bold">Within 48 hrs</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-20">
                                <p
                                    class="text-success border-success py-2 rounded-pill border px-15 b-0">
                                    Don't worry! No
                                    amount has been deducted from your account.
                                </p>
                            </div>
                            <div class="mt-20">
                                       <a href="<?php echo site_url(); ?>customer" class="btn btn-outline border btn-lg mb-md-0 mb-5">having an issues ?</a>

                                <a href="<?php echo site_url('cardpay'); ?>" class="btn btn-green btn-sm">Try Another
                                    Payment Method</a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php $this->load->view('includes/footer-apply');   ?>
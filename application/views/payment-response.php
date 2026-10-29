<?php $this->load->view('includes/header-apply'); ?>

<main class="main">
    <section class="section section-theme-1 packages-block pt-130 cust-height d-flex align-items-center bg-blue">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 col-12 m-auto">
                    <div class="landind-card-wrapper">
                        <div class="block-holder form-condidates shadow rounded-1 bg-light-sky">
                            <div class="subhead text-center mb-0">
                                <?php if($responsedata == "true") { ?>
                                <div class="text-center mb-15">
                                    <i class="fa-regular fa-circle-check fs-1 text-success"></i>

                                </div>
                                <h3 class="text-blue">Congratulations! <span class="text-blue">kirtan!</span> </h3>
                                <p>Your payment has been successfully processed. You can now access your pre-approved
                                    offers.
                                </p>
                                <p>
                                    आपका भुगतान सफलतापूर्वक संसाधित हो गया है, अब आप अपने पूर्व-स्वीकृत (प्री-अप्रूव्ड)
                                    ऑफ़र देख सकते हैं।
                                </p>

                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div
                                            class="card-blog-wrapper border p-10 mb-md-0 mb-10 bg-white card shadow-none">

                                            <h6 class="mb-0 text-uppercase">Sanctioned</h6>
                                            <p class="mb-0 text-dark fw-bold">₹1,95,000</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div
                                            class="card-blog-wrapper border p-10 mb-md-0 mb-10 bg-white card shadow-none">

                                            <h6 class="mb-0 text-uppercase">Tenure</h6>
                                            <p class="mb-0 text-dark fw-bold">Up to 60 mo</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div
                                            class="card-blog-wrapper border p-10 mb-md-0 mb-10 bg-white card shadow-none">

                                            <h6 class="mb-0 text-uppercase">Disbursal</h6>
                                            <p class="mb-0 text-dark fw-bold">Within 48 hrs</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-20">
                                    <a href="<?php echo site_url(); ?>" class="btn btn-orange btn-sm w-100">Goto Home
                                        Page</a>
                                    <a href="<?php echo site_url(); ?>customer"
                                        class="btn btn-outline border btn-lg w-100 mt-10">Customer
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
                                <h3 class="text-blue">Payment <span class="text-blue">Unsuccessful</span></h3>
                                <p>
                                   We're sorry, but your payment could not be processed. Please try again or contact our support team for assistance.
                                </p>
                                <p>
                                 हमें खेद है, लेकिन आपका भुगतान संसाधित नहीं किया जा सका कृपया पुनः प्रयास करें या सहायता के लिए हमारी सहायता टीम से संपर्क करें।
                                </p>
                                <hr>
                                <p class="text-blue text-start">Common Reasons for Payment Failure:</p>


                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div
                                               class="card-blog-wrapper border p-10 mb-md-0 mb-10 bg-white card shadow-none">
                                            <p class="mb-0 fw-bold text-blue">Card Issue</p>
                                            <h6 class="mb-0 text-dark">Insufficient funds or card block</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div
                                                 class="card-blog-wrapper border p-10 mb-md-0 mb-10 bg-white card shadow-none">

                                            <p class="mb-0 fw-bold text-blue">Network</p>
                                            <h6 class="mb-0 text-dark">Bank network timed out</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div
                                           class="card-blog-wrapper border p-10 mb-md-0 mb-10 bg-white card shadow-none">

                                            <p class="mb-0 fw-bold text-blue">Exceeded Limit</p>
                                            <h6 class="mb-0 text-dark">Daily transactional limits reached</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-20">
                                    <p class="text-orange  border-orange bg-light-orange py-5 rounded-pill border px-15 b-0">
                                        Most common fix: Ensure the account has a deactivated Premium Subscription.
                                    </p>
                                </div>
                                <div class="mt-20">
                                    <a href="<?php echo site_url(); ?>customer"
                                        class="btn btn-outline border btn-lg mb-md-0 mb-5">having an issues ?</a>

                                    <a href="<?php echo site_url('cardpay'); ?>" class="btn btn-orange btn-sm">Try
                                        Another
                                        Payment Method</a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php $this->load->view('includes/footer-apply');   ?>
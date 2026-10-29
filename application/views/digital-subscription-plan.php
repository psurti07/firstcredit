<?php
$this->load->view('includes/header-offer.php');
//$today = date("Y-m-d", strtotime($userdetails['rec_date']));
//$last30 = date('Y-m-d', strtotime('-30 days'));
//if ($today <= $last30) {
  //$eligibilityamt = calEligiblity($userdetails['income'], $userdetails['currentemi'], $userdetails['apr'], $userdetails['loanamount']) + 100000;
//} else {
  $eligibilityamt = calEligiblity($userdetails['income'], $userdetails['currentemi'], $userdetails['apr'], $userdetails['loanamount']);
//}
$eligibilityamtindia = formatePriceIndia($eligibilityamt);
?>

<main class="main">
    <section class="section section-theme-1 packages-block pt-40 bg-gredient section-theme-12">
        <div class="container">


            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 mb-15 mb-md-30">
                    <div class="process-box subscription-left">
                        <div class="d-flex align-items-center pb-15 details-content">
                            <div
                                class="icon d-flex align-items-center justify-content-center categories-image-wrap bg-orange rounded-pill">
                                <i class="fas fa-file-signature fs-6 text-white"></i>
                            </div>
                            <div class="ms-15 text-start text-light">
                                <h6 class="text-light">xyz</h6>
                                <p class="mb-0">Applicant account</p>
                            </div>
                        </div>
                        <div class="text-start text-light mt-15 mb-20">
                            <h6 class="fw-normal text-light"> <i class="fas fa-phone me-10"></i>+
                                <strong><?php echo $userdetails['mobile']; ?></strong>
                        </div>

                        </h6>

                        <p class="text-uppercase text-light-sky d-md-block d-none text-start">Application
                            progress</p>
                        <div class="application-timeline mb-20">
                            <div class="timeline-step completed">
                                <div class="timeline-circle bg-green text-white">
                                    1
                                </div>
                                <span class="timeline-title">Details</span>
                            </div>
                            <div class="timeline-step completed">
                                <div class="timeline-circle bg-green text-white">2</div>
                                <span class="timeline-title">Verify OTP</span>
                            </div>
                            <div class="timeline-step completed">
                                <div class="timeline-circle bg-green text-white">3</div>
                                <span class="timeline-title">Loan Details</span>
                            </div>
                            <div class="timeline-step completed">
                                <div class="timeline-circle bg-green text-white">4</div>
                                <span class="timeline-title">Personal Details</span>
                            </div>
                            <div class="timeline-step completed">
                                <div class="timeline-circle bg-green text-white">5</div>
                                <span class="timeline-title">Unlock Offers</span>
                            </div>
                            <div class="timeline-step active">
                                <div class="timeline-circle bg-orange">6</div>
                                <span class="timeline-title">Purchase Plan</span>
                            </div>
                        </div>
                        <div class="left-content-bottom">
                            <h6 class="text-light"><i class="fas fa-shield-alt me-10"></i> Smart lender Matching</h6>
                            <p class="mb-0">We check pre-approved offers across muiltiple NBFC partners at once.so you
                                see the best fit without repeated applications.</p>
                        </div>


                        <div class="mobile-application-progress">
                            <div class="mobile-progress-header d-flex justify-content-between">
                                <span class="mobile-progress-title">YOUR APPLICATION</span>

                                <span class="mobile-secure">
                                    <i class="fas fa-lock"></i> 100% Secure
                                </span>
                            </div>
                            <div class="mobile-progress-bars">
                                <span class="progress-segment completed"></span>
                                <span class="progress-segment completed"></span>
                                <span class="progress-segment completed"></span>
                                <span class="progress-segment active"></span>
                                <span class="progress-segment"></span>
                                <span class="progress-segment"></span>
                            </div>
                            <p class="mobile-current-step mb-0">
                                Step 4 of 6 <span class="text-orange">· Personal Details</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-9 mb-15 mb-md-30">
                    <div class="landind-card-wrapper">
                        <div class=" how-we-help-block">
                            <div class="row mb-20">
                                <div class="col-12 col-md-12 col-lg-12 card-left">

                                    <div class="subhead mb-0 p-35 loan-offer-card position-relative">
                                        <span
                                            class="text-white limited-offer py-15 px-15 rounded-pill mb-15 d-inline-block fa-xs bo">🏦
                                            PRE-APPROVED LOAN</span>
                                        <h4 class="mb-10 text-white"><?php echo $userdetails['loanname']; ?> XYZ! 🎉
                                        </h4>
                                        <p class="text-white">Your <strong class="text-orange">Rs.
                                                <?php echo $eligibilityamtindia; ?> </strong> pre-approved loan is
                                            waiting.
                                            Unlock your offer to proceed.</p>
                                        <span class="text-white py-15 px-15 mb-0 d-inline-block fa-xs starting-price"> ⏱
                                            Valid till 11:59 PM tonight</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-20">
                            <div class="col-12 col-md-5 col-lg-5">
                                <div class="subscription-card bg-white">
                                    <?php echo form_open('onlineprocess/checkoutDigital', array('id' => 'submitForm3', 'class' => '', 'novalidate' => 'novalidate')); ?>
                                    <input type="hidden" name="loantype" id="loantype"
                                        value="<?php echo $userdetails['loantype']; ?>" class="form-control" required>
                                    <input type="hidden" name="applyid" value="<?php echo $userdetails['applyid']; ?>"
                                        class="form-control" required>
                                    <input type="hidden" name="userid" value="<?php echo $userdetails['userid']; ?>"
                                        class="form-control" required>
                                    <input type="hidden" name="fullname" id="fullname"
                                        value="<?php echo $userdetails['fullname']; ?>" class="form-control" required>
                                    <input type="hidden" name="mobile" id="mobile"
                                        value="<?php echo $userdetails['mobile']; ?>" class="form-control" required>
                                    <input type="hidden" name="email" id="email"
                                        value="<?php echo $userdetails['email']; ?>" class="form-control" required>
                                    <input type="hidden" name="cardtype" value="<?php echo $userdetails['cardtype']; ?>"
                                        class="form-control" required>


                                    <div class="box-inner p-30">
                                        <div class="d-flex align-items-start justify-content-between mb-20 flex-column">
                                            <div class="plan-details border-0 p-0">
                                                <span class="fw-bold text-uppercase mb-10 text-orange">Premium
                                                    Subscription</span>

                                            </div>
                                            <div>

                                                <?php if ($productdata['inOffer'] == 1) { ?>
                                                <p class="mb-0 bg-success text-white px-10 py-5 h6 rounded-pill pb-0">
                                                    <?php echo calPercentage($productdata['amount'], $productdata['offeramount']); ?>
                                                    OFF</p>
                                                <?php } ?>

                                            </div>
                                        </div>

                                        <?php
                        if ($productdata['inOffer'] == 1) {
                          echo '<div class="d-flex align-items-end justify-content-center mb-10"><h5 class="mb-0"><del class="text-dark pe-10 fa-sm">&#8377; ' . formatePrice($productdata['amount']) . '</del></h5>';
                          echo '<h3><span class="text-orange"><strong> &#8377; ' . formatePrice($productdata['offeramount']) . '/-</strong> </span></h3> </div>';
                          $subtotal = $productdata['offeramount'];
                        } else {
                          echo '<h5 class="text-orange">&#8377; ' . formatePrice($productdata['amount']) . '</h5>';
                          $subtotal = $productdata['amount'];
                        }
                        ?>
                                        <p class="text-start mb-10"><span class="fa-xs">One-time fee, GST extra</span>
                                        </p>
                                        <ul class="list-unstyled features-list pt-5 border-top">

                                            <li class="d-flex justify-content-between mb-10 border-bottom pb-5">
                                                <span>Amount
                                                </span><span
                                                    class="fw-bold"><?php echo formatePriceIndia($subtotal); ?></span>
                                            </li>
                                            <li class="d-flex justify-content-between mb-10 border-bottom pb-5">
                                                <span>GST (18%) :</span> <span class="fw-bold"><?php $gst = $subtotal * 0.18;
                          echo formatePriceIndia($gst); ?></span>
                                            </li>
                                            <li class="d-flex justify-content-between mb-10"><span class="fw-bold">Grand
                                                    Total : </span><span class="fw-bold"><?php $grandtotal = $subtotal + $gst;
                          echo formatePriceIndia($grandtotal); ?></span></li>
                                        </ul>
                                        <button type="submit" class="btn btn-orange btn-sm w-100" id="formsubmit3"><span
                                                class="btn-text">Buy Now <i
                                                    class="fa-solid fa-arrow-right"></i></span></button>
                                        <p class="h6 fw-normal mt-15 mb-0 text-center">Secured by 256-bit SSL · UPI
                                            /
                                            Cards / Net
                                            Banking</p>
                                    </div>

                                    <?php echo form_close(); ?>
                                </div>

                            </div>
                            <div class="col-12 col-md-7 col-lg-7">
                                <div class="subscription-card bg-white p-lg-30 p-25 h-100">
                                    <h6 class="fs-6 mb-20 text-orange text-uppercase"> Subscription Benefits</h6>
                                    <ul class="list-unstyled features-list mb-15 border-bottom pb-15">
                                        <li class="ps-0 d-flex mb-10">
                                            <div class="feature-img"> <i class="fa-solid fa-check text-success"></i>
                                            </div><span class="ms-15 text-blue">Loan Process in Multiple NBFCs</span>

                                        </li>
                                        <li class="ps-0 d-flex mb-10">
                                            <div class="feature-img"> <i class="fa-solid fa-check text-success"></i>
                                            </div><span class="ms-15 text-blue">100% Online Financial
                                                Consultation</span>
                                        </li>
                                        <li class="ps-0 d-flex mb-10">
                                            <div class="feature-img"> <i class="fa-solid fa-check text-success"></i>
                                            </div><span class="ms-15 text-blue">Access Personalized
                                                Tracking Portal</span>
                                        </li>
                                        <li class="ps-0 d-flex mb-10">
                                            <div class="feature-img"> <i class="fa-solid fa-check text-success"></i>
                                            </div><span class="ms-15 text-blue">Dedicated Loan Expert
                                                Assigned</span>
                                        </li>
                                        <li class="ps-0 d-flex mb-10">
                                            <div class="feature-img"> <i class="fa-solid fa-check text-success"></i>
                                            </div><span class="ms-15 text-blue">Subscription Validity: 9
                                                Months</span>
                                        </li>
                                        <li class="ps-0 d-flex mb-10">
                                            <div class="feature-img"> <i class="fa-solid fa-check text-success"></i>
                                            </div><span class="ms-15 text-blue">Loan Processing Time: 48
                                                Hours</span>
                                        </li>
                                    </ul>
                                    <div class="section-theme-6 pt-20 pb-0">
                                        <div class="counters-block pb-0">
                                            <div class="row justify-content-center justify-content-md-between gx-10">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                    <div class="counter-box d-block text-center mb-0">

                                                        <div class="counter-stats">
                                                            <strong class="numbers h5 mb-5 text-blue">
                                                                <span data-purecounter-duration="1"
                                                                    data-purecounter-start="0"
                                                                    data-purecounter-end="2.25"
                                                                    data-purecounter-once="true"
                                                                    class="purecounter">2.25</span>L+
                                                            </strong>
                                                            <span class="subtext">Satisfied
                                                                Customers</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                    <div class="counter-box d-block text-center mb-0">


                                                        <div class="counter-stats">
                                                            <strong class="numbers h5 mb-5 text-blue">
                                                                <span data-purecounter-duration="1"
                                                                    data-purecounter-start="0"
                                                                    data-purecounter-end="200"
                                                                    data-purecounter-once="true"
                                                                    class="purecounter">₹200</span>M+
                                                            </strong>
                                                            <span class="subtext">Loan Disbursed</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                    <div class="counter-box d-block text-center mb-0">


                                                        <div class="counter-stats">
                                                            <strong class="numbers h5 mb-5 text-blue">
                                                                <span data-purecounter-duration="1"
                                                                    data-purecounter-start="0" data-purecounter-end="48"
                                                                    data-purecounter-once="true"
                                                                    class="purecounter">48</span>hrs
                                                            </strong>
                                                            <span class="subtext">Processing time</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>



                        </div>
                    </div>


                </div>

    </section>
    <!-- <section class="pt-40 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 offset-lg-4 d-block d-sm-none d-md-none d-lg-none">
                    <?php $testimoniallists = array('offer1.png', 'offer2.png', 'offer5.png', 'offer6.png', 'offer7.png', 'offer9.png') ?>
                    <div class="companies-slider" data-slick='{"dots": false}'>
                        <?php foreach ($testimoniallists as $row) { ?>
                        <div class="slick-slide">
                            <article>
                                <div class="wrap">
                                    <div class="">
                                        <img src="<?php echo base_url() ?>assets/images/lending_img/<?php echo $row ?>"
                                            alt="">
                                    </div>
                                </div>
                            </article>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--<section class="section section-theme-10 latest-candidates-block bg-light-sky pt-30 pt-md-40 pt-lg-50 pt-xxl-50 pb-30 pb-md-50 pb-lg-60 pb-xxl-60">
    <div class="container">
      <div class="row mb-30 mb-md-40">
        <div class="col-12">
          <h4 class="text-center">Our Customers Testimonials</h4>
          <p class="text-center">Here Is What Our Clients Have To Say About Us</p>
        </div>
      </div>

      <div class="top_companies_holder">
        <?php $testimoniallist = array('1.png', '2.png', '3.png', '4.png', '5.png', '6.png') ?>
        <div class="companies-slider">
          <?php foreach ($testimoniallist as $row) { ?>
            <div class="slick-slide">
              <article>
                <div class="wrap">
                  <div class="">
                    <img src="<?php echo base_url() ?>assets/images/testimonial/<?php echo $row ?>" alt="customer img">
                  </div>
                </div>
              </article>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>-->
</main>

<script type="text/javascript">
$(document).ready(function() {
    var windowWidth = $(window).width();
    if (windowWidth <= 1024) { //for iPad & smaller devices
        $('#userCollapse').removeClass('show');
    }
});

$(function() {
    $('#submitForm3').on('submit', function(e) {
        $('#form-submit3').html(
            'Processing... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
        );
    });
});
</script>

<?php
$this->load->view('includes/footer-apply');
?>
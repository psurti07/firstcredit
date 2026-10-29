<?php
$this->load->view('includes/header-offer.php');
$today = date('Y-m-d', strtotime($userdetails['rec_date']));
$last30 = date('Y-m-d', strtotime('-30 days'));
if ($today <= $last30) {
    $eligibilityamt = calEligiblity($userdetails['income'], $userdetails['currentemi'], $userdetails['apr'], $userdetails['loanamount']) + 100000;
} else {
    $eligibilityamt = calEligiblity($userdetails['income'], $userdetails['currentemi'], $userdetails['apr'], $userdetails['loanamount']);
}
$eligibilityamtindia = formatePriceIndia($eligibilityamt);
?>

<main class="main d-flex flex-column">
    <section class="section section-theme-1 packages-block pt-40 bg-gredient offer-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4 mb-15 mb-md-30">
                    <div class="process-box subscription-left">
                        <div class="d-flex align-items-center pb-15 details-content">
                            <div
                                class="icon d-flex align-items-center justify-content-center categories-image-wrap bg-orange rounded-pill">
                                <i class="fas fa-file-signature fs-6 text-white"></i>
                            </div>
                            <div class="ms-15 text-start text-light">
                                <h6>xyz</h6>
                                <p class="mb-0">Applicant account</p>
                            </div>
                        </div>
                        <div class="text-start text-white mt-15 mb-20">
                            <h6 class="fw-normal"> <i class="fas fa-phone me-10"></i>+
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
                            <div class="timeline-step active">
                                <div class="timeline-circle bg-orange">5</div>
                                <span class="timeline-title">Unlock Offers</span>
                            </div>
                            <div class="timeline-step">
                                <div class="timeline-circle bg-light-purple">6</div>
                                <span class="timeline-title">Purchase Plan</span>
                            </div>
                        </div>
                        <div class="left-content-bottom">
                            <h6><i class="fas fa-shield-alt me-10"></i> Smart lender Matching</h6>
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
                <div class="col-12 col-md-6 col-lg-8 mb-15 mb-md-30">
                    <div class="mobile-application-progress process-box mb-15">

                        <div class="d-flex align-items-center pb-15 details-content">
                            <div
                                class="icon d-flex align-items-center justify-content-center categories-image-wrap bg-orange rounded-pill">
                                <svg class="svg-inline--fa fa-file-signature fs-6 text-white" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="file-signature" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M292.7 342.3C289.7 345.3 288 349.4 288 353.7V416h62.34c4.264 0 8.35-1.703 11.35-4.727l156.9-158l-67.88-67.88L292.7 342.3zM568.5 167.4L536.6 135.5c-9.875-10-26-10-36 0l-27.25 27.25l67.88 67.88l27.25-27.25C578.5 193.4 578.5 177.3 568.5 167.4zM256 0v128h128L256 0zM256 448c-16.07-.2852-30.62-9.359-37.88-23.88c-2.875-5.875-8-6.5-10.12-6.5s-7.25 .625-10 6.125l-7.749 15.38C187.6 444.6 181.1 448 176 448H174.9c-6.5-.5-12-4.75-14-11L144 386.6L133.4 418.5C127.5 436.1 111 448 92.45 448H80C71.13 448 64 440.9 64 432S71.13 416 80 416h12.4c4.875 0 9.102-3.125 10.6-7.625l18.25-54.63C124.5 343.9 133.6 337.3 144 337.3s19.5 6.625 22.75 16.5l13.88 41.63c19.75-16.25 54.13-9.75 66 14.12C248.5 413.2 252.2 415.6 256 415.9V347c0-8.523 3.402-16.7 9.451-22.71L384 206.5V160H256c-17.67 0-32-14.33-32-32L224 0H48C21.49 0 0 21.49 0 48v416C0 490.5 21.49 512 48 512h288c26.51 0 48-21.49 48-48V448H256z">
                                    </path>
                                </svg>
                                <!-- <i class="fas fa-file-signature fs-6 text-white"></i> Font Awesome fontawesome.com -->
                            </div>
                            <div class="ms-15 text-start text-light">
                                <h6>xyz</h6>

                                <h6 class="fw-normal mb-0">+
                                    <strong><?php echo $userdetails['mobile']; ?></strong>
                                </h6>

                            </div>
                        </div>

                        <div class="mobile-progress-bars">
                            <span class="progress-segment completed"></span>
                            <span class="progress-segment completed"></span>
                            <span class="progress-segment completed"></span>
                            <span class="progress-segment completed"></span>
                            <span class="progress-segment active"></span>
                            <span class="progress-segment"></span>
                        </div>

                        <p class="mobile-current-step mb-0 text-start">
                            Step 5 of 6 <span class="text-orange">· Emi Options</span>
                        </p>

                    </div>

                    <div class="landind-card-wrapper">
                        <div class="block-holder form-condidates shadow rounded-1 bg-light-sky">
                            <div class="loan-progress mb-20">
                                <div class="loan-progress-header">
                                    <span class="loan-progress-title">EMI Options</span>
                                    <span class="loan-progress-step">Step 5 of 6</span>
                                </div>

                                <div class="loan-progress-track">
                                    <div class="loan-progress-fill fourth"></div>
                                </div>
                            </div>
                            <div>
                                <div
                                    class="d-flex align-items-center justify-content-center categories-image-wrap bg-light-orange mb-20 m-auto rounded-pill">

                                    <i class="fas fa-user text-orange fs-5"></i>
                                </div>
                                <div class="subhead ms-15 text-center">
                                    <h5 class="mb-5 text-blue">Choose your EMI plan</h5>
                                    <!-- <p class="mb-0">Pre-Approved Offer : Congratulations! You're Eligible For <strong
                                    class="text-success">Rs. <?php echo $eligibilityamtindia; ?></strong> Pre-Approval
                                Offered By Our Partnered NBFCs.</p> -->
                                    <p class="mb-0">Pick the tenure that suits your monthly budget.</p>
                                </div>

                            </div>

                            <?php echo form_open('onlineprocess/getpreApproval', array('id' => 'submitForm2', 'class' => '', 'novalidate' => 'novalidate')); ?>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="mb-0">
                                    Loan amount
                                </p>
                                <p class="mb-0">
                                    Indicative rate
                                </p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-20">
                                <h5 class="mb-1 text-blue">₹5,00,000</h5>
                                <h5 class="mb-1 text-blue">14% p.a.</h5>
                            </div>
                            <div class="row gx-10">

                                <input type="hidden" name="applyid" value="<?php echo $userdetails['applyid']; ?>"
                                    class="form-control" required>
                                <input type="hidden" name="userid" value="<?php echo $userdetails['userid']; ?>"
                                    class="form-control" required>
                                <input type="hidden" name="mobile" value="<?php echo $userdetails['mobile']; ?>"
                                    class="form-control" required>
                                <input type="hidden" name="cardtype" value="<?php echo $userdetails['cardtype']; ?>"
                                    class="form-control" required>
                                <input type="hidden" name="tenure" id="tenure" value="36" class="form-control" required>
                                <input type="hidden" name="eligibilityamt" value="<?php echo $eligibilityamt; ?>"
                                    class="form-control" required>
                                <div class="col-6 col-md-6 col-lg-4 mb-15">
                                    <fieldset class="picker1">
                                        <label class="card shadow" for="plan-1">
                                            <input type="radio" name="tenure" id="plan-1" value="12" class="radio"
                                                checked="">
                                            <span class="plan-details justify-content-center align-items-center">
                                                <span class="plan-type h6 text-uppercase text-dark">12 months</span>
                                                <h5 class="mb-0 fs-16 text-dark text-center">Rs.
                                                    <?php echo calPMT($userdetails['apr'], 1, $eligibilityamt); ?><br>

                                                </h5>
                                                <div class="d-flex justify-content-between mt-5">

                                                    <p class="mb-0">Per Month </p>

                                                </div>
                                            </span></label>
                                    </fieldset>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4 mb-15">
                                    <fieldset class="picker1">
                                        <label class="card shadow" for="plan-2">
                                            <input type="radio" name="tenure" id="plan-2" value="24" class="radio">
                                            <span class="plan-details justify-content-center align-items-center">
                                                <span class="plan-type h6 text-uppercase text-dark">24 months</span>
                                                <h5 class="mb-0 fs-16 text-dark">Rs.
                                                    <?php echo calPMT($userdetails['apr'], 2, $eligibilityamt); ?>
                                                </h5>
                                                <div class="d-flex justify-content-between mt-5">

                                                    <p class="mb-0">Per Month</p>

                                                </div>
                                            </span></label>
                                    </fieldset>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4 mb-15">
                                    <fieldset class="picker1">
                                        <label class="card shadow" for="plan-3">
                                            <input type="radio" name="tenure" id="plan-3" value="36" class="radio">
                                            <span class="plan-details justify-content-center align-items-center">
                                                <span class="plan-type h6 text-uppercase text-dark">36 months</span>
                                                <h5 class="mb-0 fs-16 text-dark">Rs.
                                                    <?php echo calPMT($userdetails['apr'], 3, $eligibilityamt); ?>
                                                </h5>
                                                <div class="d-flex justify-content-between mt-5">

                                                    <p class="mb-0">Per Month</p>

                                                </div>
                                            </span></label>
                                    </fieldset>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4 mb-15">
                                    <fieldset class="picker1">
                                        <label class="card shadow" for="plan-4">
                                            <input type="radio" name="tenure" id="plan-4" value="48" class="radio">
                                            <span class="plan-details justify-content-center align-items-center">
                                                <span class="plan-type h6 text-uppercase text-dark">48 months</span>
                                                <h5 class="mb-0 fs-16 text-dark">Rs.
                                                    <?php echo calPMT($userdetails['apr'], 4, $eligibilityamt); ?>
                                                </h5>
                                                <div class="d-flex justify-content-between mt-5">

                                                    <p class="mb-0">Per Month</p>

                                                </div>
                                            </span></label>
                                    </fieldset>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4 mb-15">
                                    <fieldset class="picker1">
                                        <label class="card shadow" for="plan-5">
                                            <input type="radio" name="tenure" id="plan-5" value="60" class="radio">
                                            <span class="plan-details justify-content-center align-items-center">
                                                <span class="plan-type h6 text-uppercase text-dark">60 months</span>
                                                <h5 class="mb-0 fs-16 text-dark">Rs.
                                                    <?php echo calPMT($userdetails['apr'], 5, $eligibilityamt); ?>
                                                </h5>
                                                <div class="d-flex justify-content-between mt-5">

                                                    <p class="mb-0">Per Month</p>

                                                </div>
                                            </span></label>
                                    </fieldset>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4 mb-15">
                                    <fieldset class="picker1">
                                        <label class="card shadow" for="plan-6">
                                            <input type="radio" name="tenure" id="plan-6" value="72" class="radio">
                                            <span class="plan-details justify-content-center align-items-center">
                                                <span class="plan-type h6 text-uppercase text-dark">72 months</span>
                                                <h5 class="mb-0 fs-16 text-dark">Rs.
                                                    <?php echo calPMT($userdetails['apr'], 6, $eligibilityamt); ?>
                                                </h5>
                                                <div class="d-flex justify-content-between">

                                                    <p class="mb-0">Per Month</p>

                                                </div>
                                            </span>
                                        </label>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-12">
                                    <button type="submit" class="btn btn-orange btn-sm js-confetti w-100"
                                        id="formsubmit2"><span class="btn-text">
                                            Choose offer <i class="fa-solid fa-arrow-right"></i></span></button>


                                </div>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>


            </div>
    </section>
    <!-- 
    <section
        class="section section-theme-10 latest-candidates-block pt-30 pt-md-40 pt-lg-50 pt-xxl-50 pb-30 pb-md-50 pb-lg-60 pb-xxl-60">
        <div class="container">
            <div class="mb-30 mb-md-40">
                <div class="col-12">
                    <h4 class="text-center">Loan facility is provided by Our NBFC Partners.</h4>
                    <p class="text-center">Your Pre-Approved Loan Offers From</p>
                </div>
            </div>
            <div class="latest-candidates-holder">
                <?php
                $cnt = 1;
                foreach ($roipackages as $row) {
                    ?>
                <div class="candidate-frame bg-white">
                    <div class="border-bottom text-center pb-20"><img
                            src="<?php echo base_url('assets/images/bank/' . $row->bank_image); ?>" alt="nbfcs offer">
                    </div>
                    <div>
                        <h6 class="mt-20"><?php echo $row->bank_name; ?></h6>
                        <hr>
                        <p class="" style="margin-bottom: 0.2rem;">Rs. <?php echo formatePriceIndia($eligibilityamt); ?>
                        </p>
                        <p class="" style="margin-bottom: 0.2rem;">EMI : Rs.
                            <?php echo calPMT($row->roi, $row->termsyears, $eligibilityamt); ?></p>
                        <p class="" style="margin-bottom: 0.2rem;">ROI : <?php echo $row->roi . '%'; ?></p>
                        <p class="" style="margin-bottom: 0.2rem;">Terms : <?php echo $row->termsmonths . ' months'; ?>
                        </p>
                    </div>
                </div>
                <?php
                    $cnt++;
                }
                ?>
            </div>
            <div class="text-left mt-5">
                <p class="pt-5"><small>Disclaimer - The above data is tentative and purely on the information provided
                        by
                        you. Final EMI, loan sanction, loan approval, and loan amount depend on customer profile and
                        NBFCs
                        criteria and rules & regulations.</small></p>
            </div>
        </div>

    </section> -->
    <div class="modal fade auto-off" id="modal" role="modal" aria-labelledby="modal-label" aria-hidden="true"
        style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-label">How is pre-approved loan offer calculated?</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 text-justify p-4">
                            <p>The Pre-Approved Loan Offer and the amount mentioned in it are solely shown based on the
                                software calculation done on Monthly Income and Current Monthly EMI entered by you. This
                                'Pre-Approved Loan Offer' is tentative and not the final loan approval – as the final
                                loan
                                approval is given by the bank only, based on the bank's rules and regulations and the
                                customer profile.</p>

                            <p><strong>Reference Calculation:</strong>
                                <br />Consider a person who has entered the following details –
                                <br />Monthly Income: Rs.1,00,000
                                <br />Current Monthly EMI: Rs.30,000
                            </p>

                            <p>Based on these details, the person is left with Rs.70,000 in hand (deducting current EMI)
                                every month. So, according to the general rules of the banks, the EMI of 50% of the
                                in-hand
                                amount can be approved - in this example, it's 35,000. And based on the EMI and rate of
                                interest (12.5% tentatively), the eligible amount is shown in the Pre-Approved Loan
                                Offer -
                                considering the mentioned calculation.</p>

                            <p>Note: Pre-approved loan offer is tentative. It should not be considered as the final loan
                                approval. The final loan approval is given by the bank only, according to their rules
                                and
                                criteria and the customer profile.</p>

                            <p class="m-b-0">Note: As per the details/information entered by the user, even if the
                                actual
                                pre-approved amount is lesser than 2 Lakhs, the pre-approved amount shown on the website
                                will be Rs.2 Lakhs (minimum). And, even if the actual pre-approved amount is more than
                                8.5
                                Lakhs, the pre-approved amount shown on the website will be Rs.8.5 Lakhs (maximum). The
                                pre-approved amount/pre-approved loan offers are tentative – the final loan approval,
                                loan
                                sanction, and disbursement depend on the customer profile and the NBFCs’ rules and
                                regulations.</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-green btn-sm mt-10" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</main>

<script type="text/javascript">
$(document).ready(function() {
    var windowWidth = $(window).width();
    if (windowWidth <= 1024) { //for iPad & smaller devices
        $('#userCollapse').removeClass('show');
    }
});

$(function() {
    $('#submitForm2').on('submit', function(e) {
        $('#formsubmit2').attr('disabled', true);
        $('#formsubmit2').html(
            'Processing... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
        );
    });
});
</script>
<script src="<?php echo base_url('assets/celebration/confetti-script.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/celebration/confetti.browser.min.js'); ?>" type="text/javascript"></script>
<?php
$this->load->view('includes/footer-apply');
?>
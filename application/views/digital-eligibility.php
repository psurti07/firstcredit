<?php
$this->load->view('includes/header-offer.php');
?>

<main class="main">
    <section class="section section-theme-1 packages-block pt-40 pb-80 bg-gredient">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
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
                        <div class="application-timeline mb-60">
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
                            <div class="timeline-step active">
                                <div class="timeline-circle bg-orange">4</div>
                                <span class="timeline-title">Personal Details</span>
                            </div>
                            <div class="timeline-step">
                                <div class="timeline-circle bg-light-purple">5</div>
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
                <div class="col-12 col-md-6 col-lg-7 mb-15 mb-md-30">
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
                            <span class="progress-segment active"></span>
                            <span class="progress-segment"></span>
                            <span class="progress-segment"></span>
                        </div>

                        <p class="mobile-current-step mb-0 text-start">
                            Step 4 of 6 <span class="text-orange">· Financial Details</span>
                        </p>

                    </div>
                    <div class="landind-card-wrapper">
                        <div class="block-holder form-condidates shadow rounded-1 bg-light-sky">
                            <div class="loan-progress mb-20">
                                <div class="loan-progress-header">
                                    <span class="loan-progress-title">Financial Details</span>
                                    <span class="loan-progress-step">Step 4 of 6</span>
                                </div>

                                <div class="loan-progress-track">
                                    <div class="loan-progress-fill three"></div>
                                </div>
                            </div>
                            <div>
                                <div
                                    class="d-flex align-items-center justify-content-center categories-image-wrap bg-light-orange mb-20 m-auto rounded-pill">

                                    <i class="fas fa-user text-orange fs-5"></i>
                                </div>
                                <div class="subhead text-center">
                                    <h5 class="mb-5 text-blue"><?php echo $userdetails['loanname']; ?></h5>
                                    <p class="mb-0">Get pre-approved offers instantly — just fill in your details.</p>
                                </div>
                            </div>
                            <?php echo form_open('onlineprocess/userApply', array('id' => 'submitForm1', 'class' => '', 'novalidate' => 'novalidate')); ?>
                            <div class="row">
                                <input type="hidden" name="applyid" value="<?php echo $userdetails['applyid']; ?>"
                                    class="form-control" required>
                                <input type="hidden" name="userid" value="<?php echo $userdetails['userid']; ?>"
                                    class="form-control" required>
                                <input type="hidden" name="cardtype" value="<?php echo $userdetails['cardtype']; ?>"
                                    class="form-control" required>

                                <div class="form-group col-12 col-lg-6 mb-15">
                                    <label class="h6 mb-10 text-blue text-uppercase">CIBIL Score</label>
                                    <select class="form-select border-0" id="cibilscore" name="cibilscore" required>
                                        <option value="">CIBIL Score *</option>
                                        <option value="Below 650">Below 650</option>
                                        <option value="650 - 700">650 - 700</option>
                                        <option value="700 - 750">700 - 750</option>
                                        <option value="750 - 800">750 - 800</option>
                                        <option value="800 - 850">800 - 850</option>
                                        <option value="850 - 900">850 - 900</option>
                                    </select>
                                    <div class="help-block font-small-3"></div>
                                </div>

                                <div class="form-group col-12 col-lg-6 mb-15">
                                    <label class="h6 mb-10 text-blue text-uppercase">Monthly Income (₹)</label>
                                    <input class="form-control border-0" type="text" id="monincome" name="monincome"
                                        placeholder="Monthly Income *" required inputmode="numeric">
                                    <div class="help-block font-small-3"></div>
                                </div>

                                <div class="form-group col-12 col-lg-6 mb-15">
                                    <label class="h6 mb-10 text-blue text-uppercase">Current Monthly EMI (₹)</label>
                                    <input class="form-control border-0" type="text" id="monemi" name="monemi"
                                        placeholder="Current Monthly EMI *" required inputmode="numeric">
                                    <div class="help-block font-small-3"></div>
                                </div>

                                <div class="form-group col-12 col-lg-6 mb-15">
                                    <label class="h6 mb-10 text-blue text-uppercase">Loan Purpose</label>
                                    <select class="form-select border-0" id="loanpurpose" name="loanpurpose" required>
                                        <option value="">Select Loan Purpose *</option>
                                        <?php if ($userdetails['loantype'] == 12) { ?>
                                        <option value="Business Expansion">Business Expansion</option>
                                        <option value="Maintain Cash Flow">Maintain Cash Flow</option>
                                        <option value="Supplier Payments">Supplier Payments</option>
                                        <option value="Setup Manufacturing Unit">Setup Manufacturing Unit</option>
                                        <option value="Hiring Budget">Hiring Budget</option>
                                        <option value="Other">Other</option>
                                        <?php } else { ?>
                                        <option value="Personal Use">Personal Use</option>
                                        <option value="Property Renovation">Property Renovation</option>
                                        <option value="Marriage Purpose">Marriage Purpose</option>
                                        <option value="Education Purpose">Education Purpose</option>
                                        <option value="Medical Emergency">Medical Emergency</option>
                                        <option value="Other">Other</option>
                                        <?php } ?>
                                    </select>
                                    <div class="help-block font-small-3"></div>
                                </div>

                                <div class="form-group col-12 col-lg-6 mb-15">
                                    <label class="h6 mb-10 text-blue text-uppercase">Pincode</label>
                                    <input type="text" name="pincode" id="pincode" maxlength="6" minlength="6"
                                        inputmode="numeric" class="form-control mb-2 border-0" placeholder="Pincode*"
                                        required>
                                    <div class="help-block font-small-3"></div>
                                    <span class="pincode error text-danger text-start"></span>
                                </div>

                                <div class="form-group col-12 col-lg-6 mb-15">
                                    <label class="h6 mb-10 text-blue text-uppercase">City</label>
                                    <input type="text" name="city" id="city" class="form-control mb-2 border-0"
                                        placeholder="City*" required>
                                    <div class="help-block font-small-3"></div>
                                </div>

                                <div class="form-group col-12 col-lg-12 mb-15">
                                    <label class="h6 mb-10 text-blue text-uppercase">State</label>
                                    <input type="text" name="state" id="state" class="form-control mb-2 border-0"
                                        placeholder="State*" required>
                                    <div class="help-block font-small-3"></div>
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-12">
                                    <button type="submit" class="btn btn-orange btn-sm w-100" id="formsubmit1"><span
                                            class="btn-text">Check Your Eligibility <i
                                                class="fa-solid fa-arrow-right"></i></span></button>
                                </div>




                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>

                </div>


            </div>
        </div>
        </div>
    </section>
</main>

<script type="text/javascript">
$(document).ready(function() {
    var windowWidth = $(window).width();
    if (windowWidth <= 1024) { //for iPad & smaller devices
        $('#userCollapse').removeClass('show');
    }
});

$(function() {
    $('#submitForm1').on('submit', function(e) {
        $('#formsubmit1').attr('disabled', true);
        $('#formsubmit1').html(
            'Processing... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
        );
    });
});
</script>

<script>
$('#pincode').on('input', function() {

    var pincode = $(this).val();

    if (pincode.length === 6) {

        $.ajax({
            url: "<?= base_url('onlineprocess/geoLocation') ?>",
            type: "POST",
            data: {
                pincode: pincode
            },
            dataType: "json",

            success: function(response) {

                if (response.status === 'success') {
                    $('#city').val(response.city);
                    $('#state').val(response.state);
                    $('.pincode').text('');
                } else {
                    $('#city').val('');
                    $('#state').val('');
                    $('.pincode').text('Enter valid pincode.');
                }
            },

            error: function() {
                $('.pincode').text('Enter valid pincode.');
            }
        });

    } else {
        $('#city').val('');
        $('#state').val('');
    }
});
</script>

<?php
$this->load->view('includes/footer-apply');
?>
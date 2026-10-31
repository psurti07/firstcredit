<?php
$this->load->view('includes/header-apply.php');
?>

<section class="visual-block visual-theme-5 bg-blue text-black pt-40 pb-40 pt-md-60 pt-xl-50">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 order-2">
                <span class="text-white limited-offer py-15 px-15 rounded-pill mb-15 d-inline-block fa-xs bo">India's
                    trusted credit & loan expert</span>
                <div class="visual-textbox pt-0">
                    <h2 class="text-light font-Fraunces">Explore Personal Loan Options Up to <br><span
                            class="text-orange"> ₹10 Lakhs</span></h2>
                </div>
                <span class="text-white py-15 px-15 mb-15 d-inline-block fa-xs starting-price"> <i
                        class="fas fa-star me-5"></i> Personalised Application Support</span>
                <div class="base-icon mb-10">
                    <img src="<?= base_url('assets/images/logo/favicon-light-lg.png'); ?>" alt=""
                        class="img-fluid object-contain" width="20">
                </div>
                <p class="text-white">Trusted by 12,000+ Customers</p>
                <div class="banner__img-two text-center bg-image-wrap">
                    <img src="<?= base_url('assets/images/landing-img.png'); ?>" alt=""
                        class="img-fluid dekstop-img d-lg-block d-none">
                    <img src="<?= base_url('assets/images/mobile-landing-img.png'); ?>" alt=""
                        class="img-fluid mobile-img d-lg-none d-block">

                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-6 order-md-2 order-1"> 
                <?php if ($processstep == 'step1') { ?>
                
                <div class="account-box mb-40 landind-card-wrapper">
                    <div class="account-box-frame text-dark bg-light-sky card shadow-sm border">
                        <div class="loan-progress mb-20">
                            <div class="loan-progress-header">
                                <span class="loan-progress-title">Loan Application</span>
                                <span class="loan-progress-step">Step 1 of 4</span>
                            </div>

                            <div class="loan-progress-track">
                                <div class="loan-progress-fill"></div>
                            </div>
                        </div>
                        <div class="section-header text-start mb-0">

                            <h5 class="text-blue">Let’s Get You Started

                            </h5>

                        </div>
                        <?php echo form_open('onlineprocess/sendotpCode', array('id' => 'submitForm1', 'class' => 'contac-form mb-0', 'novalidate' => 'novalidate')); ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group error">
                                    <label class="text-uppercase h6 mb-10 text-blue">required AMOUNT</label>
                                    <div class="input-group mb-15">
                                        <span
                                            class="input-group-text text-blue bg-light-sky fw-bold rounded-0 py-0 px-15"
                                            id="basic-addon1">₹</span>
                                        <input class="form-control ms-10" type="text" id="loanamount" name="loanamount"
                                            placeholder="Enter amount *" required inputmode="numeric">
                                    </div>
                                    <div class="help-block font-small-3"></div>
                                </div>

                            </div>

                            <div class="col-12">
                                <div class="form-group error">
                                    <label class="text-uppercase h6 mb-10 text-blue">Mobile number</label>
                                    <div class="input-group mb-15">
                                        <span
                                            class="input-group-text text-blue bg-light-sky fw-bold rounded-0 py-0 px-15"
                                            id="basic-addon1">+91</span>
                                        <input class="form-control ms-10" type="text"
                                            placeholder="Bank-registered number" id="mobile" name="mobile" required
                                            minlength="10" maxlength="10" inputmode="numeric"
                                            data-validation-regex-regex="^[6789]\d{9}$"
                                            data-validation-regex-message="Enter valid mobile number">
                                    </div>
                                    <div class="help-block"></div>

                                </div>
                            </div>

                            <div class="text-danger mt-3 mb-3" id="mobilenoError1"></div>
                            <div class="col-12 mb-15">
                                <button type="submit" id="formsubmit1"
                                    class="btn btn-orange btn-sm text-uppercase"><span class="btn-text">Start
                                        Process <i class="fa-solid fa-arrow-right"></i></span></button>
                            </div>

                        </div>
                        <div class="col-12 mb-2">
                            <div class="form-group mb-10 ps-0">
                                <div class="d-flex align-items-start "> <input type="checkbox" name="tandc" id="tandc"
                                        class="custom-control-input mb-0 mt-5" value="1" checked required>
                                    <label class="custom-control-label" for="tandc"><small
                                            class="ms-10 d-block h6 fw-normal">By submitting the form & proceeding, you
                                            agree to the <a href="<?= base_url('terms-conditions') ?>" target="_blank"
                                                style="text-decoration: none;" class="text-dark">Terms of
                                                Use</a>
                                            and <a href="<?= base_url('privacy-policy') ?>" target="_blank"
                                                style="text-decoration: none;" class="text-dark">Privacy
                                                Policy</a></small></label>

                                </div>
                                <div class="help-block ms-0 ps-0 mb-2"></div>
                            </div>
                        </div>


                    </div>
                </div>
         
                <?php echo form_close(); ?>

            </div>
            <?php } else if ($processstep == 'step2') { ?>

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
                    <span class="progress-segment active"></span>
                    <span class="progress-segment"></span>
                    <span class="progress-segment"></span>
                    <span class="progress-segment"></span>
                    <span class="progress-segment"></span>
                </div>

                <p class="mobile-current-step mb-0 text-start">
                    Step 2 of 6 <span class="text-orange">· Verify OTP</span>
                </p>

            </div>

            <div class="account-box mb-40 landind-card-wrapper">
                <div class="account-box-frame text-dark bg-light-sky card shadow-sm border">
                    <div class="loan-progress mb-20">
                        <div class="loan-progress-header">
                            <span class="loan-progress-title">Verify Mobile</span>
                            <span class="loan-progress-step">Step 2 of 3</span>
                        </div>

                        <div class="loan-progress-track">
                            <div class="loan-progress-fill one"></div>
                        </div>
                    </div>
                    <div
                        class="d-flex align-items-center justify-content-center categories-image-wrap bg-light-orange mb-20 m-auto rounded-pill">

                        <i class="fas fa-mobile-alt text-orange fs-5"></i>
                    </div>
                    <div class="text-center">
                        <h5 class="mb-10 text-center fw-bold text-blue">Verify your mobile</h5>
                        <p class="mb-5">We sent a verification code to your mobile.</p>
                        <h6 class="fw-normal">We've sent a 4-digit OTP to
                            <strong><?php echo $userdetails['mobile']; ?></strong>
                        </h6>

                    </div>
                    <?php echo form_open('onlineprocess/checkotpCode', array('id' => 'submitForm2', 'class' => 'contac-form', 'novalidate' => 'novalidate')); ?>
                    <div class="row">
                        <input type="hidden" name="otpmobile" id="otpmobile"
                            value="<?php echo $userdetails['mobile']; ?>">
                        <input type="hidden" name="loanamount" id="loanamount"
                            value="<?php echo $userdetails['loanamount']; ?>">
                        <div class="col-12 mb-15 mb-md-20">
                            <div class="form-group error">
                                <label class="text-uppercase h6 mb-10 text-gray-alt">Enter OTP</label>
                                <!-- <div class="wpcf7-form-control-wrap" data-name="tel-922">
                                <input type="text" name="otpcode" id="otpcode"
                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required optnumber w-100"
                                    required inputmode="numeric" placeholder="Enter OTP Code" maxlength="4"
                                    data-validation-regex-regex="[0-9]+"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                            </div> -->
                                <div class="input-field text-center">
                                    <input type="number" maxlength="1" inputmode="numeric" pattern="[0-9]*" id="otpcode"
                                        name="otpcode[]" class="me-md-0 me-2 otp-input">
                                    <input type="number" maxlength="1" inputmode="numeric" pattern="[0-9]*" id="otpcode"
                                        name="otpcode[]" class="me-md-0 me-2 otp-input">
                                    <input type="number" maxlength="1" inputmode="numeric" pattern="[0-9]*" id="otpcode"
                                        name="otpcode[]" class="me-md-0 me-2 otp-input">
                                    <input type="number" maxlength="1" inputmode="numeric" pattern="[0-9]*" id="otpcode"
                                        name="otpcode[]" class="me-md-0 me-2 otp-input">
                                </div>
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="row justify-content-between align-items-center mb-20">
                            <div class="col-lg-8 col-md-6 col-12">
                                <div class="form-group">
                                    <div class="p-countdown" data-delay="30">
                                        <div class="p-countdown-count" id="counttime">
                                            <code>New OTP in <span id="timer">30</span> Sec</code>
                                        </div>
                                        <div id="resendBtn" class="d-none">
                                            <code>Didn’t receive OTP? <a href="javascript:resendotp()">Resend OTP</a></code>
                                        </div>
                                        <code id="resend-message"></code>
                                        <div class="custom-error" id="otpcodeError"></div>
                                    </div>
                                    <div class="custom-error" id="otpcodeError"></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="title-text d-flex justify-content-md-end justify-content-start">

                                    <h6 class="fw-light mb-0 ms-5"><i
                                            class="fa-solid fa-lock me-10 text-orange"></i>Encrypted</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" id="formsubmit2" class="btn btn-orange btn-sm"><span
                                    class="btn-text">Verify
                                    OTP <i class="fa-solid fa-arrow-right"></i></span></button>
                        </div>


                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <?php } else if ($processstep == 'step3') { ?>
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
                    <span class="progress-segment active"></span>
                    <span class="progress-segment"></span>
                    <span class="progress-segment"></span>
                    <span class="progress-segment"></span>
                </div>

                <p class="mobile-current-step mb-0 text-start">
                    Step 3 of 6 <span class="text-orange">· Personal Details</span>
                </p>

            </div>
            <div class="account-box mb-40 landind-card-wrapper">
                <div class="account-box-frame text-dark bg-light-sky card shadow-sm border">
                    <div class="loan-progress mb-20">
                        <div class="loan-progress-header">
                            <span class="loan-progress-title">Personal Details </span>
                            <span class="loan-progress-step">Step 3 of 4</span>
                        </div>

                        <div class="loan-progress-track">
                            <div class="loan-progress-fill two"></div>
                        </div>
                    </div>
                    <div
                        class="d-flex align-items-center justify-content-center categories-image-wrap bg-light-orange mb-20 m-auto rounded-pill">

                        <i class="fas fa-user text-orange fs-5"></i>
                    </div>
                    <div class="text-start section-header">

                        <div class="text-center">
                            <h5 class="mb-10 text-center fw-bold text-blue">Tell us about yourself</h5>
                            <p>Your details stay private and secure.</p>
                        </div>
                        <!-- <p class="mb-0" style="font-size:14px"> <strong>Loan Amount. :
                                        <?php echo formatePriceIndia($userdetails['loanamount']); ?></strong></p>
                                <p style="font-size:14px"> <strong> Mobile No. :
                                        <?php echo $userdetails['mobile']; ?></strong></p> -->
                    </div>
                    <?php echo form_open('onlineprocess/registeredUser', array('id' => 'submitForm3', 'class' => 'contac-form', 'novalidate' => 'novalidate')); ?>
                    <div class="row gx-10 mb-15 justify-content-center">
                        <input type="hidden" id="loanamount" name="loanamount"
                            value="<?php echo $userdetails['loanamount']; ?>">
                        <input type="hidden" id="referralcode" name="referralcode"
                            value="<?php echo $userdetails['referralcode']; ?>">
                        <input type="hidden" id="usermobile" name="usermobile"
                            value="<?php echo $userdetails['mobile']; ?>">

                        <!-- <div class="size-details">
                                    <ul class="nav form-tabs mb-15 mb-md-20" id="mylist">
                                        <li data-value="1">
                                            <button class="nav-link active-size active" data-bs-toggle="tab"
                                                data-bs-target="#nav-tab01" type="button">Salaried</button>
                                        </li>
                                        <li data-value="2">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-tab02"
                                                type="button">Self-Employed</button>
                                        </li>
                                    </ul>
                                    <input type="hidden" id="usertype" name="usertype" value="1">
                                </div>   -->

                                <div class="row g-15 mt-0">
                            <label class="h6 mb-10 text-blue text-uppercase">Employment type</label>
                            <div class="col-md-6 col-lg-6 col-sm-6 col-12 mb-md-0 mb-10">
                                <fieldset class="picker1">
                                    <label for="personalloan" class="w-100">
                                        <input type="radio" name="usertype" id="personalloan" value="1" class="radio"
                                            checked>
                                        <span class="plan-details p-15 bg-white h-100">
                                            <div class="d-flex mb-0 align-items-start flex-column">
                                                <div>
                                                    <div class="salaried-img mb-10 bg-orange">
                                                        <img src="<?php echo base_url('assets/images/icons/Salarised.png'); ?>"
                                                            alt="image" class="">
                                                    </div>
                                                </div>
                                                <div class="employment-content">
                                                    <h6 class="employment-title mb-0">Salaried</h6>
                                                    <p class="mb-0">Monthly salary from an employer</p>

                                                </div>
                                            </div>
                                        </span>
                                    </label>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                                <fieldset class="picker1">
                                    <label for="businessloan" class="w-100">
                                        <input type="radio" name="usertype" id="businessloan" value="2" class="radio">
                                        <span class="plan-details p-15 bg-white h-100">
                                            <div class="d-flex mb-0 align-items-start flex-column">
                                                <div>
                                                    <div class="salaried-img bg-orange mb-10">
                                                        <img src="<?php echo base_url('assets/images/icons/self-employed.png'); ?>"
                                                            alt="image" class="">
                                                    </div>
                                                </div>
                                                <div class="employment-content">
                                                    <h6 class="employment-title mb-0">Self-Employed
                                                    </h6>
                                                    <p class="mb-0">Own business or profession</p>

                                                </div>
                                            </div>
                                        </span>
                                    </label>
                                </fieldset>
                            </div>
                            <div class="col-12 mb-15 mb-md-20 mt-20">
                                <div class="form-group">
                                    <label class="h6 mb-10 text-blue text-uppercase">Full name</label>
                                    <div class="input-group mb-3">

                                        <input class="form-control" type="text" id="username" name="username"
                                            placeholder="Bank Registered Name" required
                                            data-validation-regex-regex="^[a-zA-Z ]*$">
                                    </div>
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-12 mb-15 mb-md-20">
                                <div class="form-group">
                                    <label class="h6 mb-10 text-blue text-uppercase">Email address</label>
                                    <div class="input-group mb-3">

                                        <input class="form-control" type="email" id="useremail" name="useremail"
                                            placeholder="Email Id" required>
                                    </div>
                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" id="formsubmit3" class="btn btn-orange btn-sm"><span
                                        class="btn-text">Process <i class="fa-solid fa-arrow-right"></i></span></button>
                            </div>
                        </div>

                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
            <?php } ?>
        </div>
    </div>

</section>


<section class="section section-theme-2 pt-80 pt-md-80 pb-xl-80 bg-light-sky">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-12 m-auto">
                <header class="section-header text-center text-lg-center">

                    <h3>Our <span class="text-orange">Partnered NBFCs</sapn>
                    </h3>
                    <p class="text-center">Hear what our clients have to say about us.</p>
                </header>
            </div>
        </div>
        <div class="row">
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
    </div>
</section>
<section
    class="section section-theme-2 pt-40 pt-md-50 pt-lg-75 pt-xl-80 pt-xxl-80 pb-40 pb-md-50 pb-lg-75 pb-xl-70 pb-xxl-80">
    <div class="container">
        <div class="row">

            <div class="col-xl-12 col-12 m-auto">
                <header class="section-header text-center text-lg-center">
                    <h3 class="display-6 fw-bold text-navy mb-0">NBFC Loan <span class="text-orange">
                            Criteria </span> </h3>
                    <p class="text-center">Check if you meet the following basic requirements before applying.</p>
                </header>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="row mb-0">
                    <div class="col-md-6">
                        <div class="detail_box candidate border p-0 mb-md-0 mb-15">
                            <div class="p-20">
                                <div
                                    class="commmon-box card-box-main p-0 border-0 card-wrap d-flex align-items-center mb-25">
                                    <div
                                        class="icon d-flex align-items-center justify-content-center bg-light-sky categories-image-wrap">
                                        <i class="fas fa-briefcase text-blue fs-5"></i>
                                    </div>
                                    <h5 class="text-blue ms-10 mb-0">NBFC Personal Loan Criteria for Salaried</h5>
                                </div>
                                <hr>
                                <ul class="list-unstyled list m-0">
                                    <li class="ps-0 text-dark mb-20 mt-20">

                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="fa-sm"> <i
                                                    class="far fa-check-circle text-color-blue me-10"></i>Minimum 1 Year Job Stability
                                        </div>

                                    </li>
                                    <hr>
                                    <li class="ps-0 text-dark mb-20 mt-20">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="fa-sm"> <i
                                                    class="far fa-check-circle text-color-blue me-10"></i>Minimum Salary: Rs. 15,000 Monthly
                                        </div>
                                    </li>

                                    <hr>
                                    <li class="ps-0 text-dark mb-20 mt-20">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="fa-sm"> <i
                                                    class="far fa-check-circle text-color-blue me-10"></i>Min. Age: 21 Years
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="detail_box candidate border p-0">
                            <div class="p-20">
                                <div
                                    class="commmon-box card-box-main p-0 border-0 card-wrap d-flex align-items-center mb-25">
                                    <div
                                        class="icon d-flex align-items-center justify-content-center bg-light-sky categories-image-wrap">

                                        <i class="fas fa-calculator text-blue fs-5"></i>
                                    </div>
                                    <h5 class="text-blue ms-10 mb-0">NBFC Personal Loan Criteria for Self-Employed</h5>
                                </div>
                                <hr>
                                <ul class="list-unstyled list m-0">
                                    <li class="ps-0 text-dark mb-20 mt-20">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="fa-sm"> <i
                                                    class="far fa-check-circle text-color-blue me-10"></i>Minimum 1 Year Business Stability
                                        </div>
                                    </li>
                                    <hr>

                                    <li class="ps-0 text-dark mb-20 mt-20">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="fa-sm"> <i
                                                    class="far fa-check-circle text-color-blue me-10"></i>Minimum 1 Year IT Return
                                        </div>
                                    </li>
                                    <hr>

                                    <li class="ps-0 text-dark mb-20 mt-20">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="fa-sm"> <i
                                                    class="far fa-check-circle text-color-blue me-10"></i>Min. Age: 21 Years
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section
        class="section section-theme-2 section-faqs pt-35 pt-md-50 pt-lg-75 py-xl-80 py-xxl-80 pb-35 pb-md-50 pb-lg-75 bg-light-sky">
        <div class="container">
            <div class="row">
                <div class="col-md-4 section-header">
                    <div class="text-hold">
                        <div class="tag-list mb-20">
                            <span class="tag-wrap text-orange">FAQ</span>
                        </div>
                    </div>
                    <h3 class="mb-15">Frequently Asked Questions</h3>
                    <p>Find answers to common questions about personal loans with FirstKredit.</p>

                </div>
                <div class="col-md-8">
                    <div class="accordion" id="faq-accordion-2">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed bg-white justify-content-between border"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                    aria-expanded="false" aria-controls="collapseOne">

                                    <span class="title">How much personal loan can I apply for?</span>
                                    <span class="bullet me-0"></span>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#faq-accordion-1">
                                <div class="accordion-body">
                                    <p>The available loan amount depends on your profile and the lender’s eligibility criteria.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed bg-white justify-content-between border"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">

                                    <span class="title">How long does the application review take?</span>
                                    <span class="bullet me-0"></span>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#faq-accordion-1">
                                <div class="accordion-body">
                                    <p>Review times vary depending on the lender and the documents submitted.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed bg-white justify-content-between border"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">

                                    <span class="title">Will checking eligibility affect my credit score?</span>
                                    <span class="bullet me-0"></span>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#faq-accordion-1">
                                <div class="accordion-body">
                                    <p>
                                        This depends on whether a credit check is performed and the type of enquiry. Check the details before you proceed.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed bg-white justify-content-between border"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                    aria-expanded="false" aria-controls="collapseFour">

                                    <span class="title">Which documents do I need?</span>
                                    <span class="bullet me-0"></span>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#faq-accordion-1">
                                <div class="accordion-body">
                                    <p>
                                        Lenders may request identity, address and income proof. Requirements vary by lender.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed bg-white justify-content-between border"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                    aria-expanded="false" aria-controls="collapseFive">

                                    <span class="title">What charges should I expect?</span>
                                    <span class="bullet me-0"></span>
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#faq-accordion-1">
                                <div class="accordion-body">
                                    <p>Interest rates, processing fees and other charges vary by lender. Review the applicable terms before proceeding.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="section section-contact section-theme-1 bg-dark-blue">
    <div class="container">
        <p class="mb-0 text-white"><small><strong>Disclaimer: </strong><?php echo COMPANY_NAME ?> is not a lender or financial institution. We do not provide loans or make credit decisions. All loan approvals, interest rates, fees, and disbursal are handled by third-party lenders/NBFCs. We do not guarantee loan approval, disbursal, or specific loan terms. The amount paid is only for the service charge. We are not lenders and do not guarantee any loan approval. Loan approval, disbursement/sanction is entirely dependent on NBFC criteria.</small>
        </p>

        <p class="mb-0 text-white"><small><strong>Important Note: </strong>We ask our customers to make payments ONLY on
                our website <a class="text-dark" href="<?php echo COMPANY_SITE; ?>">firstkredit.in</a> and NOT through
                any other
                source, directly or indirectly.</small></p>

        <p class="mb-0 text-white"><small><strong>Pre-application NOTE: </strong>Users are advised to read our terms and
                conditions and
                policies before proceeding/applying/registration.</small>
        </p>
        <p class="mb-0 text-white"><small><strong>Disclosure:</strong> Loan tenure minimum 6 months & maximum 60 months;
                Maximum APR: 34%
                p.a.; processing fee: up to 2%. Representative example: ₹1,00,000 at 11.5% for 60 months with ₹2,000
                processing fee — EMI ₹2,301, total interest ₹38,059, total repayment ₹1,38,059, indicative APR
                14.41%.</small></p>

        <p class="mb-0 text-white"><small><strong>Registered Office Address :
                </strong><?php echo COMPANY_ADDRESS; ?></small></p>

        <p class="mb-0 text-white"><small><strong>Mobile : </strong><?php echo COMPANY_MOBILE; ?> | <strong>Email :
                </strong><?php echo COMPANY_EMAIL; ?></small></p>

    </div>
</section>

<?php $this->load->view('includes/footer-apply'); ?>

<script src="<?php echo base_url('assets/js/loanscript.js'); ?>" type="text/javascript"></script>

<script type="text/javascript">
$('#mylist li').click(function() {
    $('#usertype').val($(this).data('value'));
});

function resendotp() {
    loanamount = document.getElementById('loanamount').value;
    mobile = document.getElementById('otpmobile').value;

    $.ajax({
        url: '<?php echo base_url("onlineprocess/resendotpCode"); ?>',
        type: "POST",
        data: 'mobile=' + mobile + '&loanamount=' + loanamount,
        dataType: "JSON",
        cache: false,
        processData: false,
        success: function(response) {
            if (response['success'] == true) {
                $('#resend-message2').html(response['message']);
                toastr.success(response['message']);
            } else {
                toastr.error(response['message']);
            }
        },
        error: function(jXHR, textStatus, errorThrown) {
            toastr.error(errorThrown, 'ERROR');
        }
    });
}

$(function() {
    $('#submitForm1').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            url: $(this).attr('action') || window.location.pathname,
            type: "POST",
            data: $(this).serialize(),
            dataType: "JSON",
            cache: false,
            processData: false,
            beforeSend: function() {
                $('#formsubmit1').html(
                    'Applying... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
                );
                $('#formsubmit1').attr('disabled', true);
            },
            success: function(response) {
                if (response['success'] == true) {
                    if (response['redirect_url'] != "") {
                        window.location.href = response['redirect_url'];
                    } else {
                        window.location = "./applynow/s2/" + response['mobile'];
                    }
                } else {
                    $('#mobilenoError1').html(response['message']);
                    toastr.error(response['message']);
                }

                $('#formsubmit1').html('Apply Now');
                $('#formsubmit1').attr('disabled', false);
            },
            error: function(jXHR, textStatus, errorThrown) {
                toastr.error(errorThrown, 'ERROR');
                $('#formsubmit1').html('Apply Now');
                $('#formsubmit1').attr('disabled', false);
            }
        });
    });

    $('#submitForm2').on('submit', function(e) {
        e.preventDefault();
        $('#resend-message2').html('');
        $('#otpcodeError').html('');

        $.ajax({
            url: $(this).attr('action') || window.location.pathname,
            type: "POST",
            data: $(this).serialize(),
            dataType: "JSON",
            cache: false,
            processData: false,
            beforeSend: function() {
                $('#formsubmit2').html(
                    'Verifying... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
                );
                $('#formsubmit2').attr('disabled', true);
            },
            success: function(response) {
                if (response['success'] == true) {
                    window.location = "../../applynow/s3/" + response['mobile'];
                } else {
                    $('#otpcodeError').html(response['message']);
                    toastr.error(response['message']);
                }

                $('#formsubmit2').html('Verify OTP');
                $('#formsubmit2').attr('disabled', false);
            },
            error: function(jXHR, textStatus, errorThrown) {
                toastr.error(errorThrown, 'ERROR');
                $('#formsubmit2').html('Verify OTP');
                $('#formsubmit2').attr('disabled', false);
            }
        });
    });


    $('#submitForm3').on('submit', function(e) {
        e.preventDefault();
        $('#resend-message2').html('');
        $('#otpcodeError').html('');

        $.ajax({
            url: $(this).attr('action') || window.location.pathname,
            type: "POST",
            data: $(this).serialize(),
            dataType: "JSON",
            cache: false,
            processData: false,
            beforeSend: function() {
                $('#formsubmit3').html(
                    'Processing... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
                );
                $('#formsubmit3').attr('disabled', true);
            },
            success: function(response) {
                if (response['success'] == true) {
                    window.location.href = response['redirect_url'];
                } else {
                    $('#otpcodeError').html(response['message']);
                    toastr.error(response['message']);
                }

                $('#formsubmit3').html('Process');
                $('#formsubmit3').attr('disabled', false);
            },
            error: function(jXHR, textStatus, errorThrown) {
                toastr.error(errorThrown, 'ERROR');
                $('#formsubmit3').html('Process');
                $('#formsubmit3').attr('disabled', false);
            }
        });
    });
});
const color = $(".size-details li");

color.on("click", function() {
    $(".size-details ul li").removeClass("active-size");
    $(this).addClass("active-size");
});
</script>



<script>
document.addEventListener("DOMContentLoaded", function() {

    let resendBtn = document.getElementById('resendBtn');
    let counttime = document.getElementById('counttime');
    let timerDisplay = document.getElementById('timer');
    let countdown = 30;

    let interval = setInterval(() => {
        countdown--;
        timerDisplay.textContent = countdown;

        if (countdown <= 0) {
            clearInterval(interval);
            resendBtn.classList.remove('d-none');
            counttime.classList.add('d-none');
            timerDisplay.textContent = '';
        }
    }, 1000);

    resendBtn.addEventListener('click', function() {
        resendBtn.classList.add('d-none');
        counttime.classList.remove('d-none');
        countdown = 30;
        timerDisplay.textContent = countdown;

        interval = setInterval(() => {
            countdown--;
            timerDisplay.textContent = countdown;

            if (countdown <= 0) {
                clearInterval(interval);
                resendBtn.classList.remove('d-none');
                counttime.classList.add('d-none');
                timerDisplay.textContent = '';
            }
        }, 1000);
    });
});

$('.otp-input').on('input', function() {
    this.value = this.value.replace(/[^0-9]/g, '');
    if (this.value.length === 1) {
        $(this).next('.otp-input').focus();
    }
});
$('.otp-input').on('keydown', function(e) {
    if (e.key === "Backspace" && this.value === '') {
        $(this).prev('.otp-input').focus();
    }
});
</script>
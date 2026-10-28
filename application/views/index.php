<?php
$this->load->view('includes/header');
?>

<div
    class="visual-block visual-theme-5 bg-dark hero-section text-black pb-40 pb-xl-40 pb-md-40" style="padding-top: 340px;">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 col-xl-6 position-relative" style="margin-top: -111px;">
                <div class="me-25">
                    <div class="visual-textbox pt-0">
                        <h1 class="text-light" style="line-height: 1.1; font-family: Fraunces;">Hausla Aapka.
                        <br>Deals <span class="text-orange"><strong>Hamare. </strong><br>
                        </h1>
                        <p class="text-light">Business loans from 20+ NBFC partners, compared in one place. Apply
online and get approved in as little as 48 hours.</p>
                        <div
                            class="form-search d-flex flex-column flex-sm-row justify-content-between hero-section-form">
                            
                            <div>
                                <a href="<?php echo site_url('onlineprocess/applynow'); ?>"
                                    class="btn btn-orange btn-sm"><span class="btn-text">Apply Now <img
                                            src="<?php echo base_url('assets/images/icons/arrow-right.png'); ?>"
                                            alt="Video Image"></span></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>

</div>

<main class="main">
    <!--<section class="section section-theme-5 pt-0 pt-md-0 pb-xl-0 pb-0 partner-section">
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
    </section>-->

    <section
        class="section section-theme-2 how-we-help-block pt-60 pt-md-60 pt-xl-60 pb-0 about-section"
        id="aboutus">
        <div class="container">

            <div class="row align-items-center">

                <div class="col-12 col-lg-6 mt-10 mb-15 mb-md-30 mb-lg-0">
                    <header class="section-header">
                        <span class="text-success text-uppercase text-outlined text-top mb-15 d-block">Who We Are</span>
                        <h3 class="mb-10">Funding that moves as fast as your business</h3>
                        <p class="">FirstCredit connects business owners with trusted NBFC partners across India. We compare offers, simplify paperwork and support you until the money reaches your account.</p>

                        <ul class="list-unstyled help-list mt-10">
                            <li><i class="fa fa-check-circle text-blue fs-6"></i>&nbsp;
                                Transparent rates</li>
                            <li><i class="fa fa-check-circle text-blue fs-6"></i>&nbsp; Expert
                                No hidden charges</li>
                            <li><i class="fa fa-check-circle text-blue fs-6"></i>&nbsp;
                                Dedicated loan expert</li>
                            <li><i class="fa fa-check-circle text-blue fs-6"></i>&nbsp;
                                Secure data handling</li>
                        </ul>
                    <div>
                        <a href="<?php echo site_url('onlineprocess/applynow'); ?>"
                            class="btn btn-orange btn-sm"><span class="btn-text">Apply Now <img
                                    src="<?php echo base_url('assets/images/icons/arrow-right.png'); ?>"
                                    alt="Video Image"></span></a>
                    </div>
                    </header>
                </div>
                <div class="col-12 col-lg-6 mt-10 aboutus-cnt">
                   <img src="<?php echo base_url('assets/images/image _4.png'); ?>" alt="icon">
                </div>
                
            </div>
        </div>
    </section>

    <section class="section section-theme-2 how-work-block pt-60 pt-md-60 py-xl-80 pb-60 pb-md-60 bg-light-sky">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-12 m-auto">
                    <header class="section-header text-center text-lg-center">
                        <span class="text-success text-uppercase text-outlined text-top mb-15 d-block">Our
                            Process</span>
                        <h3>Get your business loan in 6 simple steps</h3>
                        <p class="text-center">A digital-first process with no branch visits and no paperwork queues.</p>
                    </header>
                </div>
            </div>


            <div class="row process-boxes justify-content-center">
                <div class="col-md-4 col-sm-6 mb-10">
                    <div class="how-box">
                        <a href="#" class="">
                            <div class="icon mb-20">
                                <img src="<?php echo base_url('assets/images/icons/s1.png'); ?>" alt="icon">
                            </div>
                            <h6 class="text-dark">Share Basic Details</h6>
                            <p class="text-dark">Start by sharing the information needed to understand your application requirements.</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-10">
                    <div class="how-box">
                        <a href="#" class="">
                            <div class="icon mb-20">
                                <img src="<?php echo base_url('assets/images/icons/s2.png'); ?>" alt="icon">
                            </div>
                            <h6 class="text-dark">Review Application Details</h6>
                            <p class="text-dark">We help you review basic eligibility factors, documents and next steps. Final eligibility is decided by the lender.</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-10">
                    <div class="how-box">
                        <a href="#" class="">
                            <div class="icon mb-20">
                                <img src="<?php echo base_url('assets/images/icons/s3.png'); ?>" alt="icon">
                            </div>
                            <h6 class="text-dark">Choose Application Support</h6>
                            <p class="text-dark">Select a support plan to access document guidance and application assistance. Service charges, if applicable, are shown clearly before payment.</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-10">
                    <div class="how-box">
                        <a href="#" class="">
                            <div class="icon mb-20">
                                <img src="<?php echo base_url('assets/images/icons/s4.png'); ?>" alt="icon">
                            </div>
                            <h6 class="text-dark">Upload Documents Securely</h6>
                            <p class="text-dark">Submit the required documents through the secure customer portal.</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-10">
                    <div class="how-box">
                        <a href="#" class="">
                            <div class="icon mb-20">
                                <img src="<?php echo base_url('assets/images/icons/s5.png'); ?>" alt="icon">
                            </div>
                            <h6 class="text-dark">Lender Review</h6>
                            <p class="text-dark">The NBFC reviews your documents and profile according to its internal policies and applicable guidelines.</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-0">
                    <div class="how-box">
                        <a href="#" class="">
                            <div class="icon mb-20">
                                <img src="<?php echo base_url('assets/images/icons/s6.png'); ?>" alt="icon">
                            </div>
                            <h6 class="text-dark">Receive Lender Decision</h6>
                            <p class="text-dark mb-0">The lender communicates its decision and next steps directly, subject to its eligibility criteria and terms.</p>
                        </a>
                    </div>
                </div>
            </div>



        </div>
    </section>


    <section class="section section-theme-2 how-we-help-block pt-60 pt-md-60 py-xl-80 pb-60 pb-md-60" style="background: linear-gradient(144.74deg, #00005A 0%, #0A0A86 100%);">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-12 m-auto">
                    <header class="section-header text-center text-lg-center">
                        <span class="text-success text-uppercase text-outlined text-top mb-15 d-block">Our
                            Process</span>
                        <h3 class="text-light">The FirstCredit difference</h3>
                        <p class="text-center text-light">A digital-first process with no branch visits and no paperwork queues.</p>
                    </header>
                </div>
            </div>
            <div class="row mb-20">
                        <div class="col-md-3">
                            <div class="align-items-center text-light process-box">
                                <div class="text-start mb-60">
                                    <div class="icon">
                                        <img src="<?php echo base_url('assets/images/icons/network.png'); ?>"
                                            alt="icon" width="50px" class="bg-orange p-10">
                                    </div>
                                </div>
                                <div class="text-start text-light">
                                    <h6>100% online</h6>
                                    <p class="mt-10">Apply from anywhere. No branch visits, no physical paperwork.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="align-items-center text-light process-box">
                                <div class="text-start mb-60">
                                    <div class="icon">
                                        <img src="<?php echo base_url('assets/images/icons/consultation.png'); ?>"
                                            alt="icon" width="50px" class="bg-orange p-10">
                                    </div>
                                </div>
                                <div class="text-start text-light">
                                    <h6>Fast approval</h6>
                                    <p class="mt-10">Most applications are approved within 48 hours of verification.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="align-items-center text-light process-box">
                                <div class="text-start mb-60">
                                    <div class="icon">
                                        <img src="<?php echo base_url('assets/images/icons/client.png'); ?>" alt="icon" width="50px" class="bg-orange p-10">
                                    </div>
                                </div>
                                <div class="text-start text-light">
                                    <h6>Many lenders</h6>
                                    <p class="mt-10">One application reaches  NBFCs so you can compare real offers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="align-items-center text-light process-box">
                                <div class="text-start mb-60">
                                    <div class="icon">
                                        <img src="<?php echo base_url('assets/images/icons/journey.png'); ?>"
                                            alt="icon" width="50px" class="bg-orange p-10 text-light">
                                    </div>
                                </div>
                                <div class="text-start text-light">
                                    <h6>Expert support</h6>
                                    <p class="mt-10">A certified loan expert guides you from first query to disbursal.</p>
                                </div>
                            </div>
                        </div>
                    
            </div>
            <div class="row">
                        <div class="col-md-3">
                            <div class="align-items-center process-box">
                                
                                <div class="text-start">
                                    <h3 class="text-light">₹500 Cr+</h3>
                                    <p class="mt-0 mb-0">Loans facilitated</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="align-items-center process-box">
                               
                                <div class="text-start">
                                    <h3 class="text-light">5,000+</h3>
                                    <p class="mt-0 mb-0">Businesses funded</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="align-items-center process-box">
                                
                                <div class="text-start">
                                    <h3 class="text-light">48 hrs</h3>
                                    <p class="mt-0 mb-0">Average approval time</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="align-items-center process-box">
                                
                                <div class="text-start">
                                    <h3 class="text-light">4.8/5</h3>
                                    <p class="mt-0 mb-0">Client rating</p>
                                </div>
                            </div>
                        </div>
                    
            </div>
        </div>
    </section>

    <section class="section section-theme-2 how-work-block pt-60 pt-md-60 py-xl-80 pb-60 pb-md-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-12 m-auto">
                    <header class="section-header text-center text-lg-center">
                        <span class="text-success text-uppercase text-outlined text-top mb-15 d-block">EMI
                            CALCULATOR</span>
                        <h3>Plan your monthly repayment</h3>
                        <p class="text-center ">Use this indicative calculator to understand how amount, rate and tenure
                            affect EMI.</p>
                    </header>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-12 col-12">
                    <div class="row">

                        <script src="https://emicalculator.net/widget/2.0/js/emicalc-loader.min.js"
                            type="text/javascript">
                        </script>
                        <div id="ecww-widgetwrapper" style="min-width:250px;width:100%;">
                            <div id="ecww-widget"
                                style="position:relative;padding-top:0;padding-bottom:280px;height:0;overflow:hidden;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-theme-2 featured_Jobs_Block pt-60 pt-md-60 py-xl-80 pb-60 pb-md-60 bg-light-sky"
        id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-12 m-auto">
                    <header class="section-header text-center text-lg-center">
                        <span
                            class="text-success text-uppercase text-outlined text-top mb-0 d-block">Testimonials</span>
                        <h3>Clients Testimonial</h3>
                        <p class="text-center">Hear what our clients have to say about us.</p>
                    </header>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-12 m-auto">
                    <div class="client_testimonials">
                        <?php $testimoniallist = array('testimonials-1.png', 'testimonials-2.png', 'testimonials-3.png', 'testimonials-1.png', 'testimonials-2.png', 'testimonials-3.png') ?>
                        <div class="client_testimonials_slider">
                            <div>
                                <div class="bg-white p-15 border testimonials-card-content">
                                    
                                    <div class="rates-review">
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    </div>
                                    <div class="card-comment">
                                        <p class="lh-normal">“The application steps and document requirements were explained clearly.”</p>
                                    </div>
                                    <p class="card-position mb-0">Rohan Bedi</p>
                                </div>
                            </div>
                            <div>
                                <div class="bg-white p-15 border testimonials-card-content">
                                    
                                    <div class="rates-review">
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    </div>
                                    <div class="card-comment">
                                        <p>“I found the guidance on the application process easy to understand.”</p>
                                    </div>
                                    <p class="card-position mb-0">Ankit Shah</p>
                                </div>
                            </div>
                            <div>
                                <div class="bg-white p-15 border testimonials-card-content">
                                    <p class="card-position mb-0">Priya Mehta</p>
                                    <div class="rates-review">
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    </div>
                                    <div class="card-comment">
                                        <p>“The team helped me organise the required documents in a clear way.”</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="bg-white p-15 border testimonials-card-content">
                                   
                                    <div class="rates-review">
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    </div>
                                    <div class="card-comment">
                                        <p>“I appreciated the timely updates and process-related support.”</p>
                                    </div>
                                     <p class="card-position mb-0">Kunal Patel</p>
                                </div>
                            </div>
                            <div>
                                <div class="bg-white p-15 border testimonials-card-content">
                                    
                                    <div class="rates-review">
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    </div>
                                    <div class="card-comment">
                                        <p>“The consultation helped me understand the next steps better.”</p>
                                    </div>
                                    <p class="card-position mb-0">Neha Verma</p>
                                </div>
                            </div>
                            <div>
                                <div class="bg-white p-15 border testimonials-card-content">
                                    
                                    <div class="rates-review">
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    </div>
                                    <div class="card-comment">
                                        <p>“The team explained NBFC requirements in a simple and professional manner.”</p>
                                    </div>
                                    <p class="card-position mb-0">Rahul Joshi</p>
                                </div>
                            </div>
                            <div>
                                <div class="bg-white p-15 border testimonials-card-content">
                                    
                                    <div class="rates-review">
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    </div>
                                    <div class="card-comment">
                                        <p>“The document checklist made the application process easier to follow.”</p>
                                    </div>
                                    <p class="card-position mb-0">Sneha Kapoor</p>
                                </div>
                            </div>
                             <div>
                                <div class="bg-white p-15 border testimonials-card-content">
                                    
                                    <div class="rates-review">
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    </div>
                                    <div class="card-comment">
                                        <p>“Clear communication helped me understand the process from the beginning.”</p>
                                    </div>
                                    <p class="card-position mb-0">Harshil Desai</p>
                                </div>
                            </div>
                            <div>
                                <div class="bg-white p-15 border testimonials-card-content">
                                    
                                    <div class="rates-review">
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    </div>
                                    <div class="card-comment">
                                        <p>“The support team responded to my process-related questions promptly.”</p>
                                    </div>
                                    <p class="card-position mb-0">Aditi Sharma</p>
                                </div>
                            </div>
                            <div>
                                <div class="bg-white p-15 border testimonials-card-content">
                                    
                                    <div class="rates-review">
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                        <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                    </div>
                                    <div class="card-comment">
                                        <p>“A helpful experience for understanding loan application requirements.”</p>
                                    </div>
                                    <p class="card-position mb-0">Vivek Agarwal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section
        class="section section-theme-2 section-faqs pt-35 pt-md-50 pt-lg-75 py-xl-80 py-xxl-80 pb-35 pb-md-50 pb-lg-75">
        <div class="container">
            <div class="row">
                <div class="col-md-4 section-header">

                    <p class="mb-10 mb-lg-15 title-text text-success text-uppercase">FAQ</p>
                    <h3 class="mb-15">Frequently Asked Questions</h3>
                    <p>Got questions? We’ve got answers. Here’s everything you need to know about applying for a loan
                        with firstkreditt.</p>

                </div>
                <div class="col-md-8">
                    <div class="accordion" id="faq-accordion-2">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed bg-white justify-content-between border"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                    aria-expanded="false" aria-controls="collapseOne">

                                    <span class="title">What can a personal loan be used for?</span>
                                    <span class="bullet me-0"></span>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#faq-accordion-1">
                                <div class="accordion-body">
                                    <p>A personal loan may be used for purposes permitted by the relevant NBFC, such as planned expenses or personal requirements. The permitted use and terms vary by lender.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed bg-white justify-content-between border"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">

                                    <span class="title">Is collateral required for a personal loan?</span>
                                    <span class="bullet me-0"></span>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#faq-accordion-1">
                                <div class="accordion-body">
                                    <p>Many personal loans are unsecured and may not require collateral. However, requirements are decided by the NBFC based on its policies and the applicant’s profile.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed bg-white justify-content-between border"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">

                                    <span class="title">How is personal loan eligibility assessed?</span>
                                    <span class="bullet me-0"></span>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#faq-accordion-1">
                                <div class="accordion-body">
                                    <p>
                                        NBFCs may assess income, credit history, existing financial obligations, documents and other internal criteria. FlexiCred can guide you on the application process, but the final decision is made by the NBFC.
                                    
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed bg-white justify-content-between border"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                    aria-expanded="false" aria-controls="collapseFour">

                                    <span class="title">What documents may be required?</span>
                                    <span class="bullet me-0"></span>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#faq-accordion-1">
                                <div class="accordion-body">
                                    <p>
                                       Requirements may vary by NBFC, but commonly include identity proof, address proof, income-related documents and bank statements. A complete checklist is shared based on the application requirements.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed bg-white justify-content-between border"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                    aria-expanded="false" aria-controls="collapseFive">

                                    <span class="title">Are there tax benefits on a personal loan?</span>
                                    <span class="bullet me-0"></span>
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#faq-accordion-1">
                                <div class="accordion-body">
                                    <p>Tax treatment depends on how the loan amount is used and applicable tax laws. Please consult a qualified tax professional for advice specific to your situation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header mb-0" id="headingSix">
                                <button class="accordion-button collapsed bg-white justify-content-between border"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                    aria-expanded="false" aria-controls="collapseSix">

                                    <span class="title">Why is credit history important?</span>
                                    <span class="bullet me-0"></span>
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#faq-accordion-2">
                                <div class="accordion-body">
                                    <p>Credit history is one factor an NBFC may consider while reviewing an application. Maintaining timely repayments and managing existing obligations responsibly may help support a healthy credit profile.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="section section-contact section-theme-2 pt-60 pt-md-60 py-xl-80 py-xxl-80 pb-60 pb-md-60 contact-section"
        id="contactus" style="background: linear-gradient(144.74deg, #00005A 0%, #0A0A86 100%);">
        <div class="container">

            <div class="row">
                <div class="col-xl-7 col-12 m-auto">
                    <header class="section-header text-center text-lg-center">
                        <span class="text-white text-uppercase text-outlined text-top mb-10 d-block">Drop Us a
                            Message</span>
                        <h2 class="text-white">We'd Love To Help You</h2>
                        <p class="text-center text-white">Fill in your details and our team will get back to you shortly.</p>
                    </header>
                </div>
            </div>
            <div class="contact-form">

                <div class="row justify-content-between">

                    <div class="col-12 col-md-6 col-xl-5 form-right-main">

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
                    <div class="col-12 col-sm-10 col-md-6 col-xl-7 m-auto form-right-main">
                        <div class="shadow  p-20 contact-form-right border form-right">
                            <?php echo form_open('infopage/contactsubmission', array('id' => 'contactForm', 'class' => 'contac-form', 'novalidate' => 'novalidate')); ?>
                            <div class="row">
                                <div class="form-group col-md-6 col-12 mb-15 mb-md-20 mb-lg-25">
                                    <input class="form-control" type="text" name="fullname" placeholder="Your Name"
                                        required data-validation-regex-regex="^[a-zA-Z ]*$">
                                    <div class="help-block font-small-3"></div>
                                </div>
                                <div class="form-group col-md-6 col-12 mb-15 mb-md-20 mb-lg-25">
                                    <input class="form-control" type="text" name="mobile" placeholder="Your Mobile"
                                        required minlength="10" maxlength="10" inputmode="numeric"
                                        data-validation-regex-regex="^[6789]\d{9}$"
                                        data-validation-regex-message="Enter valid mobile number">
                                    <div class="help-block font-small-3"></div>
                                </div>
                                <div class="form-group col-md-6 col-12 mb-15 mb-md-20 mb-lg-25">
                                    <input class="form-control" type="email" name="email" placeholder="Your Email Id"
                                        required>
                                    <div class="help-block font-small-3"></div>
                                </div>
                                <div class="form-group col-md-6 col-12 mb-15 mb-md-20 mb-lg-25">
                                    <input class="form-control" type="text" name="subject" placeholder="Your Subject"
                                        required>
                                    <div class="help-block font-small-3"></div>
                                </div>
                                <div class="form-group col-md-12 col-12 mb-15 mb-md-20 mb-lg-25">
                                    <textarea class="form-control" name="message" cols="30" rows="10"
                                        placeholder="Your Message" required></textarea>
                                    <div class="help-block font-small-3"></div>
                                </div>
                                <div class="col-md-3">
                                    <button class="submit btn btn-orange btn-sm w-100 text-uppercase"><span
                                            class="btn-text">Submit</span></button>
                                </div>
                            </div>
                            <?php echo form_close(); ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="features-11" class="pt-80 pb-10 features-section division"
    style="background: rgba(0, 0, 61, 1);">
    <div class="container">

        <div class="fbox-wrapper">
            <div class="row row-cols-1 row-cols-md-2 rows-3">
                <div class="col-md-12">
                    <div class="hero-1-txt p-0 ">
                        <div class="card border border-primary bg-orange mb-3">
                            <div class="row cta pt-30 pb-30">
                                <div class="col-md-9">
                                    <h3 class="text-light">Ready to grow your business? Get your loan offer today.</h3>
                                </div>
                                <div class="col-md-3">
                                    <a href="<?= base_url('onlineprocess/applynow'); ?>" class="submit btn btn-blue btn-sm w-100 text-uppercase">Get consultation</a>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
    <?php if ($msg[0]->option_value == 1 && $msg[1]->option_value != '') { ?>
    <div class="modal fade" id="welcomemsg" tabindex="-1" aria-labelledby="loginmodal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
            <div class="modal-content" id="loginmodal">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php echo $msg[1]->option_value; ?>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</main>

<?php
$this->load->view('includes/footer');
?>

<script type="text/javascript">
$(function() {
    $('#submitForm3').on('submit', function(e) {
        e.preventDefault();
        var pageid = $('#getapage').find(":selected").val();

        if (pageid == 1 || pageid == 2) {
            window.location = "onlineprocess/applynow";
        }
    });
});
</script>

<script type="text/javascript">
$(window).on('load', function() {
    $('#welcomemsg').modal('show');
});
</script>
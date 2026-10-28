<?php
$this->load->view('includes/header-apply');
?>

<div class="subvisual-block subvisual-theme-1 bg-dark d-flex pt-60 pt-md-90 pt-lg-150 pb-30 text-white">
  <div class="pattern-image"><img src="<?php echo base_url('assets/images/img/pages-2.jpg'); ?>" width="1920"
      height="570" alt="Pattern"></div>
  <div class="container position-relative text-center">
    <div class="row">
      <div class="col-12">
        <div class="subvisual-textbox text-white">
          <h1>Cancellation &amp; Refund Policy</h1>
        </div>
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

<main class="main">
  <section
    class="section section-job-details add-styles section-theme-1 pt-35 pt-md-50 pt-lg-75 pt-xl-100 pb-35 pb-md-50 pb-xl-100">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="text-holder">
            <?php echo $contentdetails->option_value; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php
$this->load->view('includes/footer');
?>
<?php require('base/header.php'); ?>
<?php require('base/nav.php'); ?>
<?php require('base/hero.php'); ?>

<div class="container mt-5">
  <h1><?php echo $headline ?></h1>

  <div class="row">
    <div class="col-12 col-lg-9">
      <div class="main-content">
        <?php echo $content; ?>

        <div class="main-text">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took 
            a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, 
            but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 
            1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop 
            publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

        </div>

        <div ckass="main-quotes">
          <figure class="text-center">
            <blockquote class="blockquote">
              <p>A well-known quote, contained in a blockquote element.</p>
            </blockquote>
            <figcaption class="blockquote-footer">
              Someone famous in <cite title="Source Title">Source Title</cite>
            </figcaption>
          </figure>

        </div>

        <div class="row photos">
          <div class="col-sm-6 col-md-4 col-lg-3 item"><img class="img-fluid" src="images/gym1.jpg"></div>
          <div class="col-sm-6 col-md-4 col-lg-3 item"><img class="img-fluid" src="images/gym2.jpg"></div>
          <div class="col-sm-6 col-md-4 col-lg-3 item"><img class="img-fluid" src="images/gym3.jpg"></div>
          <div class="col-sm-6 col-md-4 col-lg-3 item"><img class="img-fluid" src="images/gym4.jpg"></div>
          <div class="col-sm-6 col-md-4 col-lg-3 item"><img class="img-fluid" src="images/gym5.jpg"></div>
          <div class="col-sm-6 col-md-4 col-lg-3 item"><img class="img-fluid" src="images/gym6.jpg"></div>
          <div class="col-sm-6 col-md-4 col-lg-3 item"><img class="img-fluid" src="images/gym7.jpg"></div>
          <div class="col-sm-6 col-md-4 col-lg-3 item"><img class="img-fluid" src="images/gym8.jpg"></div>
          
        </div>
      </div>
    </div>

    <div class="col-12 col-lg">
      <?php require('base/sidebar.php'); ?>
    </div>
  </div>
</div>

<?php require('base/footer.php'); ?>
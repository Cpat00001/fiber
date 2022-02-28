<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light fixed-top navbarHead">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><span class="fiberlogo">Fiber</span><br>
        <span><p class="text-uppercase marketingwsieci" >Marketing <br> w sieci </p></span></a>
      <div style="margin-top:1%;">
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <?php
          wp_nav_menu(array('theme_location' => 'topMenuHeader'));
          ?>
      </div>
    </div>
  </nav>
</div>
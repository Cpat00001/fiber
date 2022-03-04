<div class="container-fluid">
    <div class="row rowOne">
        <div class="col-10 y">digital marketing<br>
            <span class="ysmalltext">KREACJA WIZERUNKU | BUDOWANIE MARKI | KOMUNIKACJA | ROZPOZNAWALNOŚĆ</span></div>
    </div>
</div>
<div class="container">
    <div class="row cardsPanel">
        <div class="col-md-4 col-sm-12 hc1">
            <h1 class="ofertaTextGlowny">Tradoo <br> oferta</h1>
        </div>
        <!-- hide col-md-4 on small devices -->
        <div class="col-md-4 d-none d-md-block hc1"></div>
        <div class="col-md-4 col-sm-auto hc2">
        <?php 
        // get template part with loop over category_name 
        include 'DB_query/get_services_post.php';
        ?> 
    </div>
</div>

<div class="container mt-4">
    <h1 class="ofertaTextGlowny">Nowa <br> rzeczywistość</h1>
    <div class="row">
        <div class="col-sm-12 col-md-12 hc2" style="padding:0px;">
            <img src="<?php echo bloginfo('template_directory') . '/images/marketing.jpg' ?>" class="img-fluid marketingPhoto">
        </div>        
        <!--<div class="col-sm-12 col-md-6 hc1"><h1>Col-8</h1></div>-->
    </div>
</div>
<!-- Contact row -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-4 col-sm-12 hc1">
            <h1 class="ofertaTextGlowny">Wrapuj firmę digital wizytówką</h1>
        </div>
        <!-- hide col-md-4 on small devices -->
        <div class="col-md-4 d-none d-md-block hc1"></div>
        <div class="col-md-4 col-sm-auto hc1"></div>
    </div>
</div>
<!-- Icons and Benefits row -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 col-sm-12 hc1"></div>
        <div class="col-md-4 col-sm-auto hc2">
        <?php include 'DB_query/contact.php'; ?>
        </div>
    </div>
</div>
<!-- SEO -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12 col-sm-12 hc1">
            <h1 class="ofertaTextGlowny">SEO + marketing treści</h1>
        </div>
    </div>
</div>








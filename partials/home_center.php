
<div class="row rowOne">
    <div class="col-10 y">digital marketing<br>
        <span class="ysmalltext">KREACJA WIZERUNKU | BUDOWANIE MARKI | KOMUNIKACJA | ROZPOZNAWALNOŚĆ</span></div>
</div>

<div class="container-fluid">
    <div class="row cardsPanel">
        <div class="col-md-4 col-sm-12 hc1">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="ofertaTextGlowny">oferta</h1><br>
                </div>
                <div class="col-md-12">
                <p style='text-decoration:underline;text-decoration-color: red;'>super cena &#38 spoko warunki</p>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-sm-auto hc2">
        <?php 
        // get template part with loop over category_name 
        include 'DB_query/get_services_post.php';
        ?> 
    </div>
</div>

<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-sm-10 col-md-4 hc2" style="padding:0px;">
            <h1>Stretegia<br>Marketingowa</h1>
        </div>        
        <div class="col-sm-12 col-md-4 hc1">
            <h1 class="ofertaTextGlowny">Nowa<br>jakość</h1>
        </div>
        <div class="col-sm-12 col-md-4 hc1">
            <?php 
            include 'DB_query/get_webdev_post.php'; 
            ?>
        </div>
    </div>
</div>
<!-- Contact row -->
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-4 col-sm-12 hc1">
            <div class="div" style="float:right;"></div>
            <h1 class="digitalText">Digital wygląd<span class="digitalTextColor"><br>Twojej firmy</span></h1>
        </div>
        <!-- hide col-md-4 on small devices -->
        <div class="col-md-4 d-none d-md-block hc1"></div>
        <div class="col-md-4 d-none d-md-block col-sm-auto hc1"></div>
    </div>
</div>
<!-- Icons and Benefits row -->
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-6 col-sm-12 hc1">
            <div class="row">
                <div class="col-sm-12 hc1_kontakt_belka"><h1>digitalizcja</h1></div>
                <div class="col-sm-12">
                <?php include 'suplementKontakt.php';?>
                </div>
            </div>
        </div>
        <div class="col-sm-2 col-md-2"></div>
        <div class="col-md-4 col-sm-auto hc2_kontakt">
        <?php include 'DB_query/contact.php'; ?>
        </div>
    </div>
</div>
<!-- SEO -->
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-12 col-sm-12 hc1">
            <div class="row">
                <div class="col-sm-8 col-md-8 seo_left">
                    <h1 class="ofertaTextGlowny">SEO + marketing treści</h1>
                </div>
                <div class="col-sm-4"></div>
            </div>
            <div class="row">
                <div class="col-sm-6 seo_right">
                    <!-- temporary -->
                        <?php include 'DB_query/get_seo_post.php'; ?>            
                    <!-- temporary -->
                </div>
                <div class="col-lg-6 seo_html"></div>
            </div>
        </div>
    </div>
</div>
<!-- close div of class='container' -->
</div>








<!-- Wrapper for Slides -->
<div class="carousel-inner">

    <!-- Slides + indicators -->
    <?php
    //haalt de database table slider uit database en zet in $sliderDB


    for ($i = 1; $i < (sqlQuery("slider", "count(*)") +1); $i++) {
    ?>


        <!-- Slider -->
    <div class="item <?php if($i==1){echo 'active';}?>">
            <div class="fill" style="background-image:url(assets/images/<?= sqlQuery("slider","Picture","ID = $i"); ?>)"></div>
            <div class="carousel-caption">
                <h2> <?= sqlQuery("slider","Text", "ID = $i"); ?> </h2>
            </div>
        </div>
        <?php } ?>

        <!-- Slider indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <?php
            //indicators for slides
            for ($i = 1; $i < sqlQuery("slider", "count(*)"); $i++) { ?>
                <li data-target="#myCarousel" data-slide-to="<?= $i; ?>"></li>
                <?php } ?>
        </ol>

    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>

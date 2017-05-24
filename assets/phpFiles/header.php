<!-- Wrapper for Slides -->
<div class="carousel-inner">

    <!-- Slides + indicators -->
    <?php
    for ($i = 1;
    $i < (count($xmlSliderContent) + 1);
    $i++) {


    if(!isset($xmlSliderContent["slider$i"]['image'])){
        $xmlSliderContent["slider$i"]['image'] = "";
    }
    if(!isset($xmlSliderContent["slider$i"]['text'])){
        $xmlSliderContent["slider$i"]['text'] = "";
    }
    ?>
        <!-- Slider -->
    <div class="item <?php if($i==1){echo 'active';}?>">
            <div class="fill" style="background-image:url(assets/images/<?= $xmlSliderContent["slider$i"]['image']; ?>)"></div>
            <div class="carousel-caption">
                <h2> <?= $xmlSliderContent["slider$i"]['text']; ?> </h2>
            </div>
        </div>
        <?php } ?>

        <!-- Slider indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <?php
            //indicators for slides
            for ($i = 1; $i < count($xmlSliderContent); $i++) { ?>
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

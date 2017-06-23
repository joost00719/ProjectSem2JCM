<?php
$slider = sqlQuery("SELECT * FROM slider");
?>

<div id="slider">
    <?php
    for ($i = 0; $i < (count($slider) - 1); $i++) { ?>
    <div class="sliderImage <?php if ($i == 0){ ?>active<?php } ?>" style="background-image: url('assets/images/<?=$slider[$i]["Picture"]; ?>');"></div>
    <?php } ?>
</div>

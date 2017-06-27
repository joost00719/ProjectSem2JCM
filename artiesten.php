<?php
require "phpfiles/functions/functions.php";
$artists = sqlQuery("SELECT * FROM artiest;");
    ?>
<div id="artiesten">
    <?php
    if(!isset($_GET['artiest'])) {
    ?>
    <h1>
        Artiesten die komen:
    </h1>
    <ul>
        <?php
        for ($i = 0; $i < count($artists) - 1; $i++) {
        ?>
        <li>
            <a href="artiesten.php?artiest=<?= $artists[$i]['artiestID']; ?>"><?= $artists[$i]['artiestnaam']; ?></a>
        </li>
        <?php
        }
            ?>
        </ul>
        <?php
    }else {
        $id = $_GET['artiest'];
        ?>
        <div id="artiestDetails">


            <table>
                <tr>
                    <td>
                        <img src="data:image/jpeg;base64,/<?=$artists[$id]['foto'];?>" style="max-height: 128px; max-width: 128px;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <?= $artists[$id]['artiestnaam']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?= $artists[$id]['websiteLink']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?= $artists[$id]['videoLink'];?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?= $artists[$id]['videoLink'];?>
                    </td>
                </tr>
            </table>
        </div>
        <?php
    }
    ?>

</div>

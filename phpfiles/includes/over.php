<?php
$artists = sqlQuery("SELECT * FROM artiest;");

?>


<div id="over">
    <a name="over"></a>
    <h1>
        Artiesten
    </h1>
    <table id="overTable">
        <tr>
            <td>
                <div id="over1">
                    <?php
                    for ($i = 0; $i < count($artists) - 1; $i++) {
                        ?>
                        <li>
                            <a href="index.php?artiest=<?= $artists[$i]['artiestID']; ?>#over"><?= $artists[$i]['artiestnaam']; ?></a>
                        </li>
                        <?php
                    }
                    ?>
                </div>
            </td>
            <td>
                <div id="over2">
                    <table style="width: 100%;">
                    <?php
                    if(isset($_GET['artiest'])){
                        $targetid = $_GET['artiest'];
                        $target = sqlQuery("SELECT * FROM artiest WHERE artiestID = '$targetid';");
                        $target = $target[0];
                    ?>
                    <tr>
                        <td>
                            Artiest:
                        </td>
                        <td>
                            <?=$target['artiestnaam'];?>
                        </td>
                    </tr>
                        <tr>
                            <td>
                                Website:
                            </td>
                            <td>
                                <?=$target['websiteLink'];?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                if(!empty($artists[$targetid]['foto'])) { ?>
                                    <img src="data:image/jpeg;base64,/<?= $artists[$targetid]['foto']; ?>"
                                         style="max-height: 128px; max-width: 128px;">
                                    <?php } ?>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </td>
        </tr>
    </table>
</div>
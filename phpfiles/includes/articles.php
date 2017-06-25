<?php
$articleArray = sqlQuery("SELECT * FROM artikel");
try {
    if(empty($articleArray[0]['text'])){
        $kop1 = "";
        $artikel1 = "";
    }else{
        $artikel1 = $articleArray[0]['text'];
    }
    $artikel2 = $articleArray[1]['text'];
    $artikel3 = $articleArray[2]['text'];
    $artikel4 = $articleArray[3]['text'];
    $artikel5 = $articleArray[4]['text'];
}catch(exception $e){
}

?>
<div id="articles">
    <table>
        <tr>
            <td id="firstArticle">
                <article id="a1">
                    <?=$artikel1;?>
                </article>
            </td>
            <td>
                <article id="a2">
                    <?=$artikel2;?>
                </article>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td>
                <article id="a3">
                    <?=$artikel3;?>
                </article>
            </td>
            <td>
                <article id="a4">
                    <?=$artikel4;?>
                </article>
            </td>
            <td>
                <article id="a5">
                    <?=$artikel5;?>
                </article>
            </td>
        </tr>
    </table>
</div>
<style>

</style>
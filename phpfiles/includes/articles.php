<?php
$articleArray = sqlQuery("SELECT * FROM artikel");
    if(empty($articleArray[0]['tekst'])){
        $kop1 = "";
        $artikel1 = "";
    }else{
        $artikel1 = $articleArray[0]['tekst'];
        $kop1 = $articleArray[0]['kop'];
    }
    ///////////////////////////////////////////////////////
    if(empty($articleArray[1]['tekst'])){
        $kop2 = "";
        $artikel2 = "";
    }else{
        $artikel2 = $articleArray[1]['tekst'];
        $kop2 = $articleArray[1]['kop'];
    }
    ///////////////////////////////////////////////////////
    if(empty($articleArray[2]['tekst'])){
        $kop3 = "";
        $artikel3 = "";
    }else{
        $artikel3 = $articleArray[2]['tekst'];
        $kop3 = $articleArray[2]['kop'];
    }
    ///////////////////////////////////////////////////////
    if(empty($articleArray[3]['tekst'])){
        $kop4 = "";
        $artikel4 = "";
    }else{
        $artikel4 = $articleArray[3]['tekst'];
        $kop4 = $articleArray[3]['kop'];
    }
    ///////////////////////////////////////////////////////
    if(empty($articleArray[4]['tekst'])){
        $kop5 = "";
        $artikel5 = "";
    }else{
        $artikel5 = $articleArray[4]['tekst'];
        $kop5 = $articleArray[4]['kop'];
    }
    ///////////////////////////////////////////////////////

?>
<div id="articles">
    <a name="content"></a>
    <table>
        <tr>
            <td id="firstArticle">
                <h1>
                    <?=$kop1;?>
                </h1>
                <article id="a1">
                    <?=$artikel1;?>
                </article>
            </td>
            <td>
                <h1>
                    <?=$kop2;?>
                </h1>
                <article id="a2">
                    <?=$artikel2;?>
                </article>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td>
                <h1>
                    <?=$kop3;?>
                </h1>
                <article id="a3">
                    <?=$artikel3;?>
                </article>
            </td>
            <td>
                <h1>
                    <?=$kop4;?>
                </h1>
                <article id="a4">
                    <?=$artikel4;?>
                </article>
            </td>
            <td>
                <h1>
                    <?=$kop5;?>
                </h1>
                <article id="a5">
                    <?=$artikel5;?>
                </article>
            </td>
        </tr>
    </table>
</div>
<style>

</style>
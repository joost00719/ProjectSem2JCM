<?php
$articleArray = sqlQuery("SELECT * FROM artikel");
    if(empty($articleArray[0]['text'])){
        $kop1 = "";
        $artikel1 = "";
    }else{
        $artikel1 = $articleArray[0]['text'];
        $kop1 = $articleArray[0]['h1'];
    }
    ///////////////////////////////////////////////////////
    if(empty($articleArray[1]['text'])){
        $kop2 = "";
        $artikel2 = "";
    }else{
        $artikel2 = $articleArray[1]['text'];
        $kop2 = $articleArray[1]['h1'];
    }
    ///////////////////////////////////////////////////////
    if(empty($articleArray[2]['text'])){
        $kop3 = "";
        $artikel3 = "";
    }else{
        $artikel3 = $articleArray[2]['text'];
        $kop3 = $articleArray[2]['h1'];
    }
    ///////////////////////////////////////////////////////
    if(empty($articleArray[3]['text'])){
        $kop4 = "";
        $artikel4 = "";
    }else{
        $artikel4 = $articleArray[3]['text'];
        $kop4 = $articleArray[3]['h1'];
    }
    ///////////////////////////////////////////////////////
    if(empty($articleArray[4]['text'])){
        $kop5 = "";
        $artikel5 = "";
    }else{
        $artikel5 = $articleArray[4]['text'];
        $kop5 = $articleArray[4]['h1'];
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
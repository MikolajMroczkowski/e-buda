<?php
function renderMenu($num){
    $menuArr = Array();
    for($i=0;$i<5;$i++){
        if($i==$num){
            array_push($menuArr,"active");
        }
        else{
            array_push($menuArr,"");
        }
    }
    echo '<div class="nav">
    <h1>e-buda</h1>
    <a class="'.$menuArr[0].'" href="index.php">O mnie</a>
    <a class="'.$menuArr[1].'">Aplikacje</a>
    <a class="'.$menuArr[2].'">Strony www</a>
    <a class="'.$menuArr[3].'">Sprzęt</a>
    <a class="'.$menuArr[4].'">Technologie</a>

</div>';
}
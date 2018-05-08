<?php



function pranesimas ()
{
    echo 'Paėjo...';
}
function plotas($weight , $height= 1)
{
    $plotas = $weight * $height * 2;
    echo $plotas . '<br>' ;
}

function grazinimas ($weight, $height)
{$plotas= $weight * $height;
return $plotas;
}
plotas(5);
plotas(64,51);
plotas(74,7);
plotas(4,25);
pranesimas();

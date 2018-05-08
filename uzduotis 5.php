<?php
function plyteliuKiekis($plytelesX,$plytelesY,$sienosPlotas )
{
$plytelesplotas=$plytelesX + 0.4 * $plytelesY +0.4 ;
$plyteliuKiekis =ceil($sienosPlotas/ $plytelesplotas) ;
echo 'Reikalinga:' . $plyteliuKiekis . "  ".  'plyteliu';



}
plyteliuKiekis(12,12,1000);
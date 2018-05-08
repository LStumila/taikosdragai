<?php
function kiekLaiko($valandos)
{
    $dienos = floor( $valandos /24 );
    $val = $dienos *24;
        echo $dienos . 'dienos ir' . ($valandos- $val) . 'valandos';

}
kiekLaiko(8574);
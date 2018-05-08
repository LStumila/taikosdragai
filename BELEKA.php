<form method="post" action="">
    <input type="number" name="number1" value="">
    <input type="number" name="number2" value="">

    <button type="submit">Sudeti</button>

</form>


<?php

$numbers = $_POST;

if (isset($numbers['number1']) && isset($numbers['number2'])) {

    $sum = $numbers['number1'] + $numbers['number2'];
    echo $sum;
} ?>

<form method="post" action="">
    <input type="number" name="number3" value="">
    <input type="number" name="number4" value="">

    <button type="submit">Dauginti</button>

</form>


<?php

$numbers = $_POST;

if (isset($numbers['number3']) && isset($numbers['number4'])) {

    $sum = $numbers['number3'] * $numbers['number4'];
    echo $sum;
}

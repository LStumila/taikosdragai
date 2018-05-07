<form method="post" action="">
    <br><label for="name">Prekes kaina</label>
    <input type="number" name="number1" value="">
   <br> <label for="name">Turimi pinigai</label>
    <input type="number" name="number2" value="">

    <button type="submit">Apskaicuoti</button>

</form>


<?php

$numbers = $_POST;

if (isset($numbers['number1']) && isset($numbers['number2'])) {

    $sum = $numbers['number1'] + $numbers['number2'];
    echo $sum;
} ?>

<form method="post" action="">
    <br><label for="name">Vardas</label>
    <input type="text" name="number3" value="">
    <br> <label for="name">Pavarde</label>
    <input type="text" name="number4" value="">

    <button type="submit">Pateikti</button>

</form>


<?php

$numbers = $_POST;

if (isset($numbers['number3']) && isset($numbers['number4'])) {

    $sum = $numbers['number3'] . $numbers['number4'];
    echo $sum  ;
}
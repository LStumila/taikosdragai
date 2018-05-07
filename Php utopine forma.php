<form method="post" action="">

    <label for="name">Vardas</label>
    <input type="text" name="Vardas" value="">
    <br><label for="name">Pavarde</label>
    <input type="text" name="pavarde" value="">
   <br><label for="kaina">Prekes kaina</label>
    <input type="number" name="kaina" value="">
    <br><label for="santaupos">Turimi pinigai</label>
    <input type="number" name="Santaupos" value="">
    <br><button type="submit">Pinigu trukumas/likutis</button>

</form>
<?php

$numbers = $_POST;

if (isset($numbers['kaina']) && isset($numbers['santaupos'])) {

    $sum = $numbers['santaupos'] - $numbers['kaina'];
    echo $sum;
}



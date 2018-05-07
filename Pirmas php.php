<form action="" method="post">
    <label for="name">Vardas</label>
<input type="text" name="name" value="">
    </form><br>
<form action="" method="post">
    <label for="age">Amzius </label>
    <input type="number" name="age" value="">
</form>
<?php

if (isset($_POST['name'])&& !empty($_POST ['name'])) {
    echo "Laba diena, {$_POST['name']}!";
} ?>
<?php
if (isset($_POST['age'])&& !empty($_POST ['age'])) {
    echo " Amzius {$_POST['age']}!";
}







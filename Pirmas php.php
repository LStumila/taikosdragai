<form action="" method="post">
    <label for="name">Enter your name</label>
<input type="text" name="name" value="">
    </form>

<?php

if (isset($_POST['name'])&& !empty($_POST ['name'])) {
    echo "Hello {$_POST"['name']}!";
}
<?php
require_once __DIR__.'/lib/uuid.php';

$gen = new simpleUUID\gen();
for ($i = 0; $i < 15; $i++) {
    print($gen->eachbit() . "\n");
}
?>
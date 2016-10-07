<?php
require_once __DIR__.'/lib/uuid.php';

$gen = new simpleUUID\gen();
for ($i = 0; $i < 15; $i++) {
    print($gen->each8bit() . "\n");
}

/*
f031a191-ee05-4926-8e0c-7153a7f7a125
88d94140-0c39-4ef0-ba7c-107e1db4a109
1c70fedd-630c-41a0-b63b-d21012bec500
c11315f4-42bd-44a0-8271-2cae7d85541d
7e0bed7a-444f-474c-843f-9c323f9a468b
2ec9b7f1-6b74-4fb4-b51c-81667c33a190
7190c457-8264-4229-93d2-165acd3b06a9
f7a2086b-d423-4c87-b2cd-cbc5e5962398
4646d52d-f20e-4ecf-91aa-9ebe0a15b2fb
d0d03076-7b9b-4028-87e6-6c5ee7bc35a6
b1b15a9a-ede4-4939-b2c8-9273d87ac04c
f19d55a6-b877-4c22-b7d1-69ec05a58b43
365301e7-63ca-4357-8fda-2ed14f59dc7d
cb2203c8-277c-413a-bf3e-03915a16b9a7
a1927e0d-75f2-4382-ac95-aa97b145be1b
*/
?>
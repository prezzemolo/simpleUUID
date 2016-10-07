<?php
namespace simpleUUID;

class gen {
    public function eachbit () {
        for ($i = 0x1; $i <= 0x20; $i++) {
            switch (true) {
                case $i === 0xD:
                    $upperUUID .= '4';
                    break;
                case $i === 0x11:
                    $upperUUID .= dechex(0b1000 + mt_rand(0b00, 0b11));
                    break;
                default:
                    $upperUUID .= dechex(mt_rand(0x0, 0xF));
            }
            if ($i === 0x8 || $i === 0xC || $i === 0x10 || $i === 0x14) {
                $upperUUID .= '-';
            }
        }
        return mb_strtolower($upperUUID);
    }
}
?>
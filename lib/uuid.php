<?php
namespace simpleUUID;

/**
 * UUID version 4 generator class
 */
class gen {
    /**
     * generate separate 8bit.
     */
    public function each8bit () {
        for ($i = 0x1; $i <= 0x20; $i++) {
            switch (true) {
                case $i === 0xD:
                    $upperUUID .= '4';
                    break;
                case $i === 0x11:
                    $upperUUID .= dechex(0b1000 + random_int(0b00, 0b11));
                    break;
                default:
                    $upperUUID .= dechex(random_int(0x0, 0xF));
            }
            if ($i === 0x8 || $i === 0xC || $i === 0x10 || $i === 0x14) {
                $upperUUID .= '-';
            }
        }
        return strtolower($upperUUID);
    }

    /**
     * at once generate as much as possible.
     */
    public function bulkbit () {
        $time_low = bin2hex(random_bytes(4));
        $time_mid = bin2hex(random_bytes(2));
        $time_hi_and_version = 0x4000 + (random_int(0x0, 0xFFF));
        $clock_seq_hi_and_reserved = ((0b1000 + random_int(0b00, 0b11)) * 0x1000) + random_int(0x0, 0xFFF);
        $clock_seq_low = bin2hex(random_bytes(6));
        return sprintf('%08s-%04s-%04x-%04x-%012s', $time_low, $time_mid, $time_hi_and_version, $clock_seq_hi_and_reserved, $clock_seq_low);
    }
}
?>
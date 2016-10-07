php-simpleUUID
==========
[![][mit-badge]][mit] [![][php-badge]][php] [![][issue-badge]][issue]  
simple UUID version 4 generator written by PHP 7.

Usage
----------
* bulkbit  
See [sample-bulk](sample-bulk.php).
* each8bit  
See [sample-each](sample-each.php).

Tips
----------
bulkbit up to about three times faster than than each8bit.
avarage time (gen 1000 UUID):  
* bulkbit: 0.07s
* each8bit: 0.2s

LICENSE
----------
The MIT License. See [LICENSE](LICENSE).

[mit]: http://opensource.org/licenses/MIT
[mit-badge]:https://img.shields.io/badge/license-MIT-444444.svg?style=flat-square
[issue]: https://github.com/prezzemolo/php-simpleUUID/issues
[issue-badge]: https://img.shields.io/github/issues/prezzemolo/php-simpleUUID.svg?style=flat-square
[php]: https://secure.php.net/
[php-badge]: https://img.shields.io/badge/PHP-7-4F5B93.svg?style=flat-square
<?php

if (!extension_loaded('zip')) {
    if (defined('DEBUG') && DEBUG) {
        Guardian::abort('<a href="http://www.php.net/manual/en/book.zip.php" title="PHP &#x2013; Zip" rel="nofollow" target="_blank">PHP Zip</a> extension is not installed on your web server.');
    }
} else {
    // Require the plug manually…
    r(['file', 'folder'], __DIR__ . DS . 'engine' . DS . 'plug', Lot::get());
}
<?php
// ln -s /home/criptoca/public_html/p2p/storage/app/public /home/criptoca/public_html/p2p/public/storage
$target = '/home/criptoca/public_html/p2p/storage/app/public';
$shortcut = '/home/criptoca/public_html/p2p/public/storage';
echo symlink($target, $shortcut);
?>

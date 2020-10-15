<?php
include 'read.php';
echo "<html><head><title>" . $images[$rand_key] . "</title><style>* {margin: 0;padding: 0;} .imgbox {display: grid;height: 100%;} .center-fit {max-width: 100%;max-height: 100vh;margin: auto;}</style></head><body style='margin: 0px; background: #0e0e0e;'><div class='imgbox'><img class='center-fit' src='/img/" . $images[$rand_key] . "'></div></body></html>";
?>

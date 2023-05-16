<?php
if(isset($_GET['output'])) {
    $output = urldecode($_GET['output']);
    echo $output;
}
?>

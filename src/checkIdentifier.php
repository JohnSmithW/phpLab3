<?php
$identifier = $_GET['identifier'];

if (is_numeric($identifier)) {
    echo 'Identifier is number';
} else if (ctype_alpha($identifier)) {
    echo 'Identifier is letter';
}
?>
<?php
if (is_page("imat")) {
    $title = "IMAT Articles"; ?>
    <h2><?php echo $title ?></h2>
<?php
} elseif (is_page("neet")) {
    $title = "NEET Articles"; ?>
    <h2><?php echo $title ?></h2>
<?php
} elseif (is_page("bmat")) {
    $title = "BMAT Articles"; ?>
    <h2><?php echo $title ?></h2>
<?php
} ?>
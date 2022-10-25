<?php
if (is_page("imat")) {
    $title = "IMAT Guides"; ?>
    <h2><?php echo $title ?></h2>
<?php
} elseif (is_page("neet")) {
    $title = "NEET Guides"; ?>
    <h2><?php echo $title ?></h2>
<?php
} elseif (is_page("bmat")) {
    $title = "BMAT Guides"; ?>
    <h2><?php echo $title ?></h2>
<?php
} ?>
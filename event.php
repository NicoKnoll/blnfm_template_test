<?php if($_GET['markup'] != '1') get_header(); ?>

<?php
// include event markup using wordpress functions
get_template_part('markup/event');
?>

<?php if($_GET['markup'] != '1') get_footer(); ?>
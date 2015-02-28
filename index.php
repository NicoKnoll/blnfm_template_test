<?php if($_GET['markup'] != '1') get_header(); ?>

<?php
// include index markup using wordpress functions
get_template_part('markup/index');
?>

<?php if($_GET['markup'] != '1') get_footer(); ?>
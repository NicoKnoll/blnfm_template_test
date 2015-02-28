<?php if($_GET['markup'] != '1') get_header(); ?>

<?php
// include single markup using wordpress functions
get_template_part('markup/single');
?>

<?php if($_GET['markup'] != '1') get_footer(); ?>
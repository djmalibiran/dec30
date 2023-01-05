<?php
get_header();


if( get_field('hero_background_image') ): ?>
    <?php $image = get_field('hero_background_image'); ?>
    <div id="hero" class="container-fluid px-0 py-5 py-md-64 py-lg-96 text-white" style="background-image: url(<?php echo $image['url']; ?>);">
        <?php  if( get_field('hero_text') ): ?>
            <h1 class="container"><?php the_field('hero_text'); ?></h1>
            <h1 class="container"><?php the_field('hero_button'); ?></h1>
        <?php endif; ?>
    </div>
<?php endif; ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <?php the_content(); ?>
        </div>
    </div>
</div>


<?php 
if( get_field('test_f_label') ): ?>
    <h2><?php the_field('test_f_label'); ?></h2>
<?php endif;

?><h2>hello</h2>
<?php

get_footer();
?>
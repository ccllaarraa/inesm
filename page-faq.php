<?php 
/* Template Name: faq */
?>

<?php
get_header();
?>
 

<!-- gradient background -->
<div class="background"></div>



<!-- screen tiles -->
<div class="random-tiles">
    <img class="tile" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiles/cube_rock_dithered.png" alt="" >      
    <img class="tile" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiles/cube_sand_dithered.png" alt="" >  
    <img class="tile" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiles/cube_sand_dithered.png" alt="" >  
</div>

<!-- tree -->
<img class="tree" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiles/tree_dithered_2.png" alt="" >  

<!-- menu -->
<div id="moving-menu" class="x">
    <div class="y">MENU</div>
</div>
<!-- menu popu -->
<div class="full-menu-ctn">
    <div class="circle-blur"></div>
    <div class="menu-close">&#x2715;</div>
    <div class="full-menu">
        <a><div class="yellow menu-square menu-square1">About</div></a> 
        <a><div class="red menu-square menu-square2">home</div></a> 
        <a><div class="green menu-square menu-square3">tickets</div></a> 
        <a><div class="blue menu-square menu-square4">instagram</div></a> 
        <a><div class="yellow menu-square menu-square5">discord</div></a> 
        <a><div class="red menu-square menu-square6">eco page</div></a> 
        <a><div class="green menu-square menu-square7">schedule</div></a> 
        <a><div class="blue menu-square menu-square8">program</div></a> 
    </div>
</div>

<!-- overkill title -->
<div class="overkill-logo">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/Overkill_horizontal_green.png" alt="" >  
</div>


<!-- faq here -->
<div class="faq-big-title">
        FAQ
</div>

<!-- about-content -->
<?php if( have_rows('block') ): ?>
    <div class="faq-ctn">
        <?php while( have_rows('block') ): the_row(); 
        $title = get_sub_field('title');
        $image = get_sub_field('image');
        $text = get_sub_field('text');
        ?>
            <div class="faq-block">
                <div class="faq-title"><?php echo $title; ?></div>
                
                <div class="faq-text">
                    <?php if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>

                    <?php echo $text; ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>


<!-- tickets here -->
<div class="festival-tickets">
    <a href="" target="_blank">Tickets here</a>
</div>


<?php

get_footer();
?>
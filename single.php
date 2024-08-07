<?php
get_header();
?>

<!-- page single program -->

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
        <a><div class="red menu-square menu-square2">faq</div></a> 
        <a><div class="green menu-square menu-square3">tickets</div></a> 
        <a><div class="blue menu-square menu-square4">instagram</div></a> 
        <a><div class="yellow menu-square menu-square5">discord</div></a> 
        <a><div class="red menu-square menu-square6">eco page</div></a> 
        <a><div class="green menu-square menu-square7">schedule</div></a> 
        <a><div class="blue menu-square menu-square8">home</div></a> 
    </div>
</div>

<!-- overkill title -->
<div class="overkill-logo">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/Overkill_horizontal_green.png" alt="" >  
</div>



<?php if (have_posts()) : while (have_posts()) : the_post();
    $piece = get_field('piece_name');
    $img = get_field('image');
    $text = get_field('description_text');
    $start = get_field('time_of_start');
    $end = get_field('time_of_end');
    $location = get_field('location');
    $day = get_field('day');
     ?>

 <?php the_content(); ?>


<?php endwhile; ?>
<?php endif; ?>

<!-- single program  here -->
<div class="single-big-title">
<?php echo the_title(); ?>
</div>

<div class="single-artist">
        <div class="artist-image"> <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>" /></div>
        
        <div class="single-info">
            <div class="page-title"><?php echo $piece; ?></div>
            <div class="artist-cat">
                <ul class="cat-list">
                    <?php foreach((get_the_category()) as $category) : ?>
                        <li>
                            <?= $category->name; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="day"><?php echo $day?></div>
            <div class="time"><?php echo $start?> — <?php echo $end?></div>
            <div class="loc">Location : <?php echo $location?> </div>
        </div>
      
       

        <div class="artist-ctn">
            <div class="artist-desc"><?php echo $text; ?></div>
        </div>


  
 
  



</div>

  <!-- schedule here -->
  <div class="festival-schedule">
        <a href="" target="_blank">See full Schedule</a>
    </div>



<!-- tickets here -->
<div class="festival-tickets">
    <a href="" target="_blank">Tickets here</a>
</div>


<?php
get_footer();
?>  

<?php 
/* Template Name: program */
?>
<?php

get_header();
?>


<!-- page program -->

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


<!-- program  here -->
<div class="program-big-title">
  program
</div>

	
	   

      <!-- cat -->
      <?php $categories = get_categories(); ?>
        <ul class="cat-list">
          <li><a class="cat-list_item active" href="#!" data-slug="">All program</a></li>

          <?php foreach($categories as $category) : ?>
            <li>
              <a class="cat-list_item" href="#!" data-slug="<?= $category->slug; ?>">
                <?= $category->name; ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>


  
        <?php 
          $projects = new WP_Query([
            'post_type' => 'program',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order' => 'asc',
          ]);  
        ?>

        <?php if($projects->have_posts()): ?>
          <ul class="project-tiles">
            <?php
              while($projects->have_posts()) : $projects->the_post();
              include('templates/_components/project-list-item.php');
              endwhile;
            ?>
          </ul>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>


	
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

<?php 
/* Template Name: eco */
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
        <a><div class="red menu-square menu-square2">faq</div></a> 
        <a><div class="green menu-square menu-square3">tickets</div></a> 
        <a><div class="blue menu-square menu-square4">instagram</div></a> 
        <a><div class="yellow menu-square menu-square5">discord</div></a> 
        <a><div class="red menu-square menu-square6">home</div></a> 
        <a><div class="green menu-square menu-square7">schedule</div></a> 
        <a><div class="blue menu-square menu-square8">program</div></a> 
    </div>
</div>

<!-- overkill title -->
<div class="overkill-logo">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/Overkill_horizontal_green.png" alt="" >  
</div>


<!-- eco here -->
<div class="eco-big-title">
    eco page
</div>

<!-- eco-content -->
<!-- <div class="eco-ctn">
    <div class="eco-block">
        <div class="eco-title">WHAT IS THE OVERKILL?</div>
        <div class="eco-text">
        The Overkill festival is a playful art festival celebrating art house video games, interactive art and films as tools to engage in social challenges. The program of the festival regroups an exhibition, workshops, talks, experimental live performances and screenings. In 2023 The Overkill festival is also the stage of a LARP (live action role play) that each visitor can be part of.

The program brings local, national and international artists and creators together and is curated by Aike Lütkemöller and Marie Janin from Sickhouse with the support of guest curator Kostis Stafylakis, playful curator Zuraida Buter and artist researcher Erik Peters. The LARP, The Horde : Goblin Mode is a co-creation of Kostis Stafylakis and Theo Triantafyllidis.
        </div>

    </div>


    <div class="eco-block">
        <div class="eco-title">WHAT IS THE OVERKILL?</div>
        <div class="eco-text">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/juju.png" alt="" >  
            The Overkill festival is a playful art festival celebrating art house video games, interactive art and films as tools to engage in social challenges. The program of the festival regroups an exhibition, workshops, talks, experimental live performances and screenings. In 2023 The Overkill festival is also the stage of a LARP (live action role play) that each visitor can be part of.

            The program brings local, national and international artists and creators together and is curated by Aike Lütkemöller and Marie Janin from Sickhouse with the support of guest curator Kostis Stafylakis, playful curator Zuraida Buter and artist researcher Erik Peters. The LARP, The Horde : Goblin Mode is a co-creation of Kostis Stafylakis and Theo Triantafyllidis.
   
          </div>

    </div>
</div> -->

<?php if( have_rows('block') ): ?>
    <div class="eco-ctn">
        <?php while( have_rows('block') ): the_row(); 
        $title = get_sub_field('title');
        $image = get_sub_field('image');
        $text = get_sub_field('text');
        ?>
            <div class="eco-block">
                <div class="eco-title"><?php echo $title; ?></div>
                
                <div class="eco-text">
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
<?php 
/* Template Name: about */
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
        <a><div class="red menu-square menu-square6">eco page</div></a> 
        <a><div class="green menu-square menu-square7">schedule</div></a> 
        <a><div class="blue menu-square menu-square8">program</div></a> 
    </div>
</div>

<!-- about here -->
<div class="about-title">
    <span>
        about
    </span>
    <div class="blurry-background"></div>
</div>

<!-- about-content -->
<div class="about-ctn">
    <div class="about-block">
        <div class="about-title">WHAT IS THE OVERKILL?</div>
        <div class="about-text">
        The Overkill festival is a playful art festival celebrating art house video games, interactive art and films as tools to engage in social challenges. The program of the festival regroups an exhibition, workshops, talks, experimental live performances and screenings. In 2023 The Overkill festival is also the stage of a LARP (live action role play) that each visitor can be part of.

The program brings local, national and international artists and creators together and is curated by Aike Lütkemöller and Marie Janin from Sickhouse with the support of guest curator Kostis Stafylakis, playful curator Zuraida Buter and artist researcher Erik Peters. The LARP, The Horde : Goblin Mode is a co-creation of Kostis Stafylakis and Theo Triantafyllidis.
        </div>

    </div>


    <div class="about-block">
        <div class="about-title">WHAT IS THE OVERKILL?</div>
        <div class="about-text">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/juju.png" alt="" >  
            The Overkill festival is a playful art festival celebrating art house video games, interactive art and films as tools to engage in social challenges. The program of the festival regroups an exhibition, workshops, talks, experimental live performances and screenings. In 2023 The Overkill festival is also the stage of a LARP (live action role play) that each visitor can be part of.

            The program brings local, national and international artists and creators together and is curated by Aike Lütkemöller and Marie Janin from Sickhouse with the support of guest curator Kostis Stafylakis, playful curator Zuraida Buter and artist researcher Erik Peters. The LARP, The Horde : Goblin Mode is a co-creation of Kostis Stafylakis and Theo Triantafyllidis.
   
          </div>

    </div>
</div>

<!-- tickets here -->
<div class="festival-tickets">
    <a href="" target="_blank">Tickets here</a>
    <div class="blurry-background"></div>
</div>


<?php

get_footer();
?>
<?php 
/* Template Name: secret */
?>

<?php
get_header();
?>



 <div id="home">

 <!-- intro -->
    <!-- <div class="festival-intro">
            <img class="floatanim" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/ovrkill_dithered_small.png" alt="" >  
    </div> -->


    <!-- gradient background -->
    <div class="background"></div>


    <!-- top tiles -->
    <div class="tiles">
        <img class="tile" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiles/cube_dithered.png" alt="" >  
        <img class="tile" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiles/cube_dithered.png" alt="" >  
        <img class="tile" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiles/cube_rock_dithered.png" alt="" > 
        <img class="tile" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiles/cube_sand_dithered.png" alt="" >  
        <img class="tile" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiles/round_corner_dithered2.png" alt="" >  
        <img class="tile" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiles/cube_rock_dithered.png" alt="" >  
        <img class="tile" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiles/cube_sand_dithered.png" alt="" >  
        <img class="tile" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiles/ramp_dithered_1.png" alt="" >  
        <img class="tile" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiles/ramp_dithered_2.png" alt="" >  
        <img class="tile" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiles/cube_dithered.png" alt="" >  
        <img class="tile" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiles/cube_sand_dithered.png" alt="" >  
        <img class="tile" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiles/round_corner_dithered1.png" alt="" >  
        <img class="tile" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiles/round_corner_sand_dithered2.png" alt="" >  
        <img class="tile" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiles/round_corner_dithered2.png" alt="" > 
        <img class="tile" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiles/round_corner_sand_dithered2.png" alt="" >  
        <img class="tile" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiles/round_corner_dithered3.png" alt="" >  
        <img class="tile" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiles/round_corner_dithered4.png" alt="" >  
        <img class="tile" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiles/cube_dithered.png" alt="" >  
        <img class="tile" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiles/round_corner_dithered4.png" alt="" >  
        <img class="tile" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiles/round_corner_sand_dithered1.png" alt="" >  
        <img class="tile" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiles/cube_rock_dithered.png" alt="" >      
    </div>



    <!-- screen tiles -->
    <div class="random-tiles">
        <img class="tile" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiles/cube_rock_dithered.png" alt="" >      
        <img class="tile" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiles/cube_sand_dithered.png" alt="" >  
        <img class="tile" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiles/cube_sand_dithered.png" alt="" >  
    </div>

    <!-- tree -->
    <img class="tree" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiles/tree_dithered_1.png" alt="" >  

    <!-- characters -->
    <img class="charac1" src="<?php echo get_stylesheet_directory_uri(); ?>/images/characters/charac1.png" alt="" >  
    <img class="charac2" src="<?php echo get_stylesheet_directory_uri(); ?>/images/characters/charac2.png" alt="" >  

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

    <?php 
        $loop = new WP_Query( array( 'post_type' => 'home', 'posts_per_page' => 100 , 
        'order'   => 'ASC',) ); 
        while ( $loop->have_posts() ) : $loop->the_post();
        ?>
    
                <!-- slider -->
                <div class="slider-ctn">
                <?php if( have_rows('slider') ): ?>
                    <div class="slider">
                        <?php while( have_rows('slider') ): the_row(); 
                        $image = get_sub_field('image');
                        ?>
                            <div class="slide">
                            <?php if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                                <?php 
                                $link = get_sub_field('link');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="caption" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>


    <?php endwhile; ?>




            <!-- slider btns -->
        <div class="slider-btn">
            <img id="left" src="<?php echo get_stylesheet_directory_uri(); ?>/images/left.png" alt="" >  
            <img id="right" src="<?php echo get_stylesheet_directory_uri(); ?>/images/right.png" alt="" >  
        </div>

    </div>


    <!-- content -->
    <div class="festival-title">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/Overkill_horizontal_green.png" alt="" >  
    </div>

    <div class="festival-subtitle">
        <span>Radical Joy Resistance</span>
    </div>

    <div class="festival-date">
        <span>
        20 — 24 November 2024<br>
        ENSCHEDE, NL
        </span>
    </div>

    <div class="festival-intro-">
        <div class="intro-text"><span class="bbb">The Overkill festival</span> is a playful art festival celebrating art house video games, interactive art and films as tools 
        to engage in social challenges. 
        </div>
    </div>

    <!-- tickets here -->
    <div class="festival-tickets">
        <a href="" target="_blank">Tickets here</a>
    </div>


    <!-- menu fixed -->
    <div class="full-menu-ctn-fixed">
        <div class="circle-blur"></div>
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

    <div id="secret-fixed"></div>

</div>



<?php

get_footer();
?>
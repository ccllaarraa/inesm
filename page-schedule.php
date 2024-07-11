<?php 
/* Template Name: schedule */
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
        <a><div class="green menu-square menu-square7">home</div></a> 
        <a><div class="blue menu-square menu-square8">program</div></a> 
    </div>
</div>

<!-- overkill title -->
<div class="overkill-logo">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/Overkill_horizontal_green.png" alt="" >  
</div>


<!-- program  here -->
<div class="schedule-big-title">
  schedule
</div>

	

<!-- schedule-content day 1-->
<div class="schedule-ctn">


    <!-- wednesay -->
            <?php if( have_rows('wednesday') ): ?>
                <div class="schedule-block">
                    <div class="schedule-title">
                        WEDNESDAY 20
                    </div>

                    <div class="schedule-text">
                    <div class="locations">
                            <?php while( have_rows('wednesday') ): the_row(); 
                            $loc = get_sub_field('location');
                            ?>
                               
                                        <div class="loc">
                                            <div class="loc-name">
                                                <?php echo $loc ?>
                                            </div>
                                            <?php if( have_rows('events') ): ?>
                                                <?php while( have_rows('events') ): the_row();
                                                    $link = get_sub_field('event'); 
                                                   $piece = get_sub_field('piece_name'); 
                                                    $start = get_sub_field('time_of_start');
                                                    $end = get_sub_field('time_of_end');
                                                    $link_url = $link['url'];
                                                    $link_title = $link['title'];
                                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                                    ?>
                                                     <li class="events">
                                                        <a class="single-info" href="<?php echo esc_url( $link_url ); ?>" 
                                                            target="<?php echo esc_attr( $link_target ); ?>">
                                                                <div class="time"><?php echo $start?> — <?php echo $end?></div>
                                                                <div class="page-title"> <?php echo esc_html( $link_title ); ?></div>
                                                                <div class="page-title"><?php echo $piece; ?></div>
                                                        
                                                        </a>
                                                    </li>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>    
                              
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>





    <!-- thursday -->
    <?php if( have_rows('thursday') ): ?>
                <div class="schedule-block">
                    <div class="schedule-title">
                    thursday 21
                    </div>

                    <div class="schedule-text">
                    <div class="locations">
                            <?php while( have_rows('thursday') ): the_row(); 
                            $loc = get_sub_field('location');
                            ?>
                               
                                        <div class="loc">
                                            <div class="loc-name">
                                                <?php echo $loc ?>
                                            </div>
                                            <?php if( have_rows('events') ): ?>
                                                <?php while( have_rows('events') ): the_row();
                                                    $link = get_sub_field('event'); 
                                                   $piece = get_sub_field('piece_name'); 
                                                    $start = get_sub_field('time_of_start');
                                                    $end = get_sub_field('time_of_end');
                                                    $link_url = $link['url'];
                                                    $link_title = $link['title'];
                                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                                    ?>
                                                     <li class="events">
                                                        <a class="single-info" href="<?php echo esc_url( $link_url ); ?>" 
                                                            target="<?php echo esc_attr( $link_target ); ?>">
                                                                <div class="time"><?php echo $start?> — <?php echo $end?></div>
                                                                <div class="page-title"> <?php echo esc_html( $link_title ); ?></div>
                                                                <div class="page-title"><?php echo $piece; ?></div>
                                                        
                                                        </a>
                                                    </li>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>    
                              
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>




    <!-- friday -->
    <?php if( have_rows('friday') ): ?>
                <div class="schedule-block">
                    <div class="schedule-title">
                    friday 22
                    </div>

                    <div class="schedule-text">
                    <div class="locations">
                            <?php while( have_rows('friday') ): the_row(); 
                            $loc = get_sub_field('location');
                            ?>
                               
                                        <div class="loc">
                                            <div class="loc-name">
                                                <?php echo $loc ?>
                                            </div>
                                            <?php if( have_rows('events') ): ?>
                                                <?php while( have_rows('events') ): the_row();
                                                    $link = get_sub_field('event'); 
                                                   $piece = get_sub_field('piece_name'); 
                                                    $start = get_sub_field('time_of_start');
                                                    $end = get_sub_field('time_of_end');
                                                    $link_url = $link['url'];
                                                    $link_title = $link['title'];
                                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                                    ?>
                                                     <li class="events">
                                                        <a class="single-info" href="<?php echo esc_url( $link_url ); ?>" 
                                                            target="<?php echo esc_attr( $link_target ); ?>">
                                                                <div class="time"><?php echo $start?> — <?php echo $end?></div>
                                                                <div class="page-title"> <?php echo esc_html( $link_title ); ?></div>
                                                                <div class="page-title"><?php echo $piece; ?></div>
                                                        
                                                        </a>
                                                    </li>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>    
                              
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>




    <!-- saturday -->
    <?php if( have_rows('saturday') ): ?>
                <div class="schedule-block">
                    <div class="schedule-title">
                    saturday 23
                    </div>

                    <div class="schedule-text">
                    <div class="locations">
                            <?php while( have_rows('saturday') ): the_row(); 
                            $loc = get_sub_field('location');
                            ?>
                               
                                        <div class="loc">
                                            <div class="loc-name">
                                                <?php echo $loc ?>
                                            </div>
                                            <?php if( have_rows('events') ): ?>
                                                <?php while( have_rows('events') ): the_row();
                                                    $link = get_sub_field('event'); 
                                                   $piece = get_sub_field('piece_name'); 
                                                    $start = get_sub_field('time_of_start');
                                                    $end = get_sub_field('time_of_end');
                                                    $link_url = $link['url'];
                                                    $link_title = $link['title'];
                                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                                    ?>
                                                     <li class="events">
                                                        <a class="single-info" href="<?php echo esc_url( $link_url ); ?>" 
                                                            target="<?php echo esc_attr( $link_target ); ?>">
                                                                <div class="time"><?php echo $start?> — <?php echo $end?></div>
                                                                <div class="page-title"> <?php echo esc_html( $link_title ); ?></div>
                                                                <div class="page-title"><?php echo $piece; ?></div>
                                                        
                                                        </a>
                                                    </li>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>    
                              
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>




    <!-- sunday -->
    <?php if( have_rows('sunday') ): ?>
                <div class="schedule-block">
                    <div class="schedule-title">
                    sunday 24
                    </div>

                    <div class="schedule-text">
                    <div class="locations">
                            <?php while( have_rows('sunday') ): the_row(); 
                            $loc = get_sub_field('location');
                            ?>
                               
                                        <div class="loc">
                                            <div class="loc-name">
                                                <?php echo $loc ?>
                                            </div>
                                            <?php if( have_rows('events') ): ?>
                                                <?php while( have_rows('events') ): the_row();
                                                    $link = get_sub_field('event'); 
                                                   $piece = get_sub_field('piece_name'); 
                                                    $start = get_sub_field('time_of_start');
                                                    $end = get_sub_field('time_of_end');
                                                    $link_url = $link['url'];
                                                    $link_title = $link['title'];
                                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                                    ?>
                                                     <li class="events">
                                                        <a class="single-info" href="<?php echo esc_url( $link_url ); ?>" 
                                                            target="<?php echo esc_attr( $link_target ); ?>">
                                                                <div class="time"><?php echo $start?> — <?php echo $end?></div>
                                                                <div class="page-title"> <?php echo esc_html( $link_title ); ?></div>
                                                                <div class="page-title"><?php echo $piece; ?></div>
                                                        
                                                        </a>
                                                    </li>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>    
                              
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>




</div>
	

<?php
get_footer();
?>  

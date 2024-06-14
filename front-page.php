<?php
get_header();
?>

<!-- menu to index -->

<div class="go-to-index"><a href="#archive">a</a></div>

<!-- stairs of images -->
<div class="stairs">
  


        <?php 
        $loop = new WP_Query( array( 'post_type' => array('moments', 'dessins', 'no_things', 'vue_datelier'), 'posts_per_page' => 100) ); 
        while ( $loop->have_posts() ) : $loop->the_post();
        $images = get_field('gallery');
        $newArray = array();
        ?>
                    
                <?php 
                foreach( $images as $image ): ?>
                            <div class="item">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" 
                                            <?php if ( 'moments' == get_post_type() ) { ?>
                                                class="green-border"
                                            <?php   } elseif( 'dessins' == get_post_type() ) { ?>
                                                class="pink-border"
                                            <?php    } elseif( 'no_things' == get_post_type() ) { ?>
                                                class="yellow-border"
                                            <?php    } elseif( 'vue_datelier' == get_post_type() ) { ?>
                                                class="cyan-border"
                                            <?php   } ?>
                                     />
                                    <div class="caption"><?php echo esc_attr($image['title']); ?></div>
                                </a>
                            </div>

                        <?php 
                     endforeach; ?>
        <?php endwhile; ?>
     
</div>


<?php 
        $loop = new WP_Query( array( 'post_type' => 'archive', 'posts_per_page' => 1) ); 
        while ( $loop->have_posts() ) : $loop->the_post();
        $bio = get_field('bio');
        ?>
                    
            <!-- bio -->
            <div class="artist-desc">
                <?php echo $bio; ?>  
            </div>

            <!-- archive -->
            <?php if( have_rows('archive') ): ?>
                <div class="archive" id="archive">
                <?php while( have_rows('archive') ): the_row(); 
                    $date = get_sub_field('date');
                    $nom = get_sub_field('nom');
                    $type = get_sub_field('type');
                    $link = get_sub_field('lien');
                    $color = get_sub_field('couleur');
                    ?>

                    <div class="archive-line  <?php echo esc_attr($color['value']); ?>">
                        <div class="numero"><?php echo $date; ?> </div>
                        <div class="project-name"><?php echo $nom; ?> </div>
                        <div class="project-type"><?php echo $type; ?> </div>
                        <div class="project-link">
                            <?php if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>

<?php endwhile; ?>




<!-- contact -->

<div class="contact">
<a href="mailto:inesmalfaisan@gmail.com">inesmalfaisan@gmail.com</a><br>
06.01.02.03.04
</div>

<!-- credits -->
<div class="credits">
website designed and coded by <a href="https://www.clarapasteau.com/" target="_blank">Clara Pasteau</a> — 2024 — typeface : comic neue light
</div>
  

<?php
get_footer();
?>  


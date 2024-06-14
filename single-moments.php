<?php
get_header();
?>
<div class="moments">
    <div class="big-green-border"></div>
    <div class="go-to-index"><a href="http://localhost:8888/ines">i</a></div>
  

    <div class="big-title">
        Moments : <br>
        <?php echo the_title(); ?>
    </div>


    <div class="gallery">
            <?php 
                    $images = get_field('gallery');

                    foreach( $images as $image ): ?>

                        <div class="item">
                                <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" 
                                            class="green-border"
                                        
                                    />
                                <div class="caption"><?php echo esc_attr($image['title']); ?></div>
                        </div>

                    <?php 
                    endforeach; ?>
    </div>


    <div class="project-txt">
        <?php echo get_field('desc'); ?>
    </div>
</div>
<?php
get_footer();
?>
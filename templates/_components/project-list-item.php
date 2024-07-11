<?php $piece = get_field('piece_name');
        $img = get_field('image');
        $size = 'large';
        $thumb = $img['sizes'][ $size ];// (thumbnail, medium, large, full or custom size)
      ?>
<a href="<?php echo get_permalink( $post->ID ); ?>" class="mosaique-link">
    <li class="mosaique-single">
            <div class="mosaique-image"> 
                <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($img['alt']); ?>" /></div>
            <div class="name"><?php echo the_title(); ?><br><?php echo $piece; ?></div>
    </li>
</a>


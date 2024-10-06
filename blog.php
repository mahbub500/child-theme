<?php
/*
Template Name: Blog list
*/

get_header(); 


$query = new WP_Query([
    'post_type'      => 'post',
    'posts_per_page' => 5
]);



?>




<?php
/*
Template Name: Blog list
*/

get_header(); 


$query = new WP_Query([
    'post_type'      => 'post',
    'posts_per_page' => 5
]);



?>



<div class="container">
    <div class="row justify-content-md-center">

        <?php 
            if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
                $query->the_post(); 
            $word_count = str_word_count( strip_tags( get_the_content() ) );
            $reading_time = ceil( $word_count / 200 );

            $author_email = get_the_author_meta('user_email'); 
            $author_avatar = get_avatar_url( $author_email, ['size' => '96'] );
         ?>
         
      
        <div class="col-10 pb-4 mb-4 " style="border-bottom: 1px solid #e7e7e7;" >
            <article class="type-post entry has-post-thumbnail">
            <header class="entry-header">
                <h2 class="entry-title">
                    <a class="entry-title-link custom-hover-effect" rel="bookmark" href="<?php echo get_permalink(); ?>" >
                        <?php echo get_the_title(); ?>
                    </a>
                </h2>
                <p class="entry-meta">
                    By <a href="<?php echo get_permalink(); ?>" ><?php echo get_the_author() ?></a>
                </p>
            </header>

            <div class="entry-summary">
                <a class="entry-image-link" href="<?php echo get_permalink(); ?>" aria-hidden="true" tabindex="-1">
                    <img width="180" height="180" 
                         src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'medium' ); ?>" 
                         class="alignleft post-image entry-image entered lazyloaded" 
                         alt="How to Redesign a WordPress Website" 
                         decoding="async"
                         srcset="" 
                         sizes="(max-width: 180px) 100vw, 180px" />
                </a>
                <p><?php echo wp_trim_words(get_the_content(), 40, '...'); ?>

                    <strong>
                        <a href="<?php echo get_permalink(); ?>">Read More »</a>
                    </strong>
                </p>
            </div>
        </article>
        </div>

         <?php 

           }

        wp_reset_postdata();
    } else {
        echo 'No posts found';
    }

       ?> 
        
    </div>
    
</div>








<?php get_footer(); ?>



<?php get_footer(); ?>
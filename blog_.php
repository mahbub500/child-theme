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






<section class="featured-posts">
    <div class="section-title">
        <h2><span>Blog List</span></h2>
    </div>
    <div class="card-columns listfeaturedtag">

     <?php 
        if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post(); 
        $word_count = str_word_count( strip_tags( get_the_content() ) );
        $reading_time = ceil( $word_count / 200 );

        $author_email = get_the_author_meta('user_email'); 
        $author_avatar = get_avatar_url( $author_email, ['size' => '96'] );
     ?>

        <!-- begin post -->
        <div class="card">
            <div class="row">
                <div class="col-md-5 wrapthumbnail">
                    <a href="<?php echo get_permalink(); ?>">
                        <div class="thumbnail" style="background-image: url(<?php echo get_the_post_thumbnail_url( get_the_ID(), 'medium' ); ?>);">
                        </div>
                    </a>
                </div>
                <div class="col-md-7">
                    <div class="card-block">
                        <h2 class="card-title mt-2"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                        <h4 class="card-text"><?php echo wp_trim_words(get_the_content(), 40, '...'); ?></h4>
                        <div class="metafooter">
                            <div class="wrapfooter">
                                <span class="meta-footer-thumb">
                                <a href="<?php echo esc_url( $author_avatar ) ?>"><img class="author-thumb" src="<?php echo esc_url( $author_avatar ) ?>" alt="<?php echo get_the_author() ?>"></a>
                                </span>
                                <span class="author-meta">
                                <span class="post-name"><a href="<?php esc_url( $author_avatar ) ?>"><?php echo get_the_author(); ?></a></span><br/>
                                <span class="post-date"><?php echo get_the_date('F j, Y') ?></span><span class="dot"></span><span class="post-read"><?php echo $reading_time; ?> min read</span>
                                </span>
                                <span class="post-read-more"><a href="p<?php echo get_permalink(); ?>" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end post -->

     


      

    </div>
    </section>
</div>



<?php get_footer(); ?>
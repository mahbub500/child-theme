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
         
      
        <div class="col-10 pb-4 mb-4 " style="border-bottom: 1px solid #e7e7e7;" >
            <article class="type-post entry has-post-thumbnail">
            <header class="entry-header">
                <h2 class="entry-title">
                    <a class="entry-title-link custom-hover-effect" rel="bookmark" href="#" >
                        How to Redesign a WordPress Website (Beginner’s Guide)
                    </a>
                </h2>
                <p class="entry-meta">
                    By <a href="https://www.wpbeginner.com/author/wpbeginner/" >Editorial Staff</a> |
               
                </p>
            </header>

            <div class="entry-summary">
                <a class="entry-image-link" href="https://www.wpbeginner.com/beginners-guide/how-to-redesign-a-wordpress-website-beginners-guide/" aria-hidden="true" tabindex="-1">
                    <img width="180" height="180" 
                         src="https://www.wpbeginner.com/wp-content/uploads/2024/09/redesign-a-wordpress-website-thumbnail-180x180.png" 
                         class="alignleft post-image entry-image entered lazyloaded" 
                         alt="How to Redesign a WordPress Website" 
                         decoding="async"
                         srcset="" 
                         sizes="(max-width: 180px) 100vw, 180px" />
                </a>
                <p>
                    Is your WordPress site underperforming? Dropping traffic, low conversion rates, poor mobile experience, or slow loading times are clear signs it’s time for a redesign. But tackling a redesign can be daunting, as you might worry about losing SEO rankings. At WPBeginner, we’ve redesigned our…
                    <strong>
                        <a href="https://www.wpbeginner.com/beginners-guide/how-to-redesign-a-wordpress-website-beginners-guide/">Read More »</a>
                    </strong>
                </p>
            </div>
        </article>
        </div>
        
    </div>
    
</div>








<?php get_footer(); ?>



<?php get_footer(); ?>
<?php get_header(); ?>

<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
          <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
      </div>

<main role="main" class="container">
      <div class="row">

<?php 
    if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-md-12 blog-main">
            <?php get_template_part( 'content', get_post_format() ); ?>
        </div>
    <?php endwhile; endif; ?>

     </div><!-- /.row -->

</main><!-- /.container -->

<?php get_footer(); ?>
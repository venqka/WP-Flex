<?php get_header(); ?>

<div id="container">

  <div role="main">
    <section>
      <h1><?php printf( 'Category Archives: %s', '<span>' . single_cat_title( '', false ) . '</span>' );?></h1>
      
	  <?php if( have_posts() ) : while( have_posts() ) : the_post()?>
      <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
      
        <header>
          <h1><span><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?> blog post entry"><?php the_title(); ?></a></span></h1>
          <?php get_template_part( 'inc/meta'); ?>
         </header>
         
        <div class="clearfix">
          <?php the_content( '<span>read more &raquo;</span>' ); ?>
        </div>
        
        <footer>
          <div class="meta-tags">
          	<span><a href="<?php comments_link(); ?>"><?php comments_number( '0', '1', '%' ); ?> Comments</a></span>
          </div>
          
          <div>
          	<ul>
          	<li class="tags"><?php _e( 'Tagged:', 'zenlite');?>
            	<ul>
                	<li><?php the_tags( ',</li> <li>'); ?></li>
                </ul>
    		</li>
            <li class="cats"><?php _e('Filed under:', 'zenlite');?>
            	<ul>
                	<li><?php the_category(',</li> <li>') ?></li>
            	</ul>
            </li>
            </ul>
          </div>
        </footer>
      
      </article>
      
	  <?php endwhile; //end while have_posts ?>
      
	  <!-- post loop error message -->
	  <?php else : //if no posts were found do this ?>
      	<p><?php echo ( 'Holy smokes! This is totally crazy. No posts match anything even remotely close to that in our database. Sorry Mon Frere, try again' ); ?></p>
      <?php endif; //end if have_posts condition ?>
      
    </section>
    
    <div><p><?php posts_nav_link( '&#8734;', '&laquo; Go Forward In Time', 'Go Back In Time &raquo;'); ?></p></div>
  
  </div>
  
  <!-- sidebar -->
  <section role="complementary">
    <?php get_sidebar(); ?>
  </section>

</div>
<!--! end /div#container -->

<?php get_footer(); ?>

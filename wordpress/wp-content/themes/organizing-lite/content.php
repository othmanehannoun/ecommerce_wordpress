<?php
/**
 * @package Organizing Lite
 */
?>
 <div class="org_blogstyle_front">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>        
        
        <?php if (has_post_thumbnail() ){ ?>
			<div class="thumbnail_box">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			</div>
		<?php }  ?> 
        
        <header class="entry-header">           
            
            <?php if ( 'post' == get_post_type() ) : ?>
                <div class="postmeta">
                    <div class="post-date"><?php the_date(); ?></div><!-- post-date -->  
                    <?php edit_post_link( __( 'Edit', 'organizing-lite' ), '<span class="edit-link">', '</span>' ); ?>                                   
                </div><!-- postmeta -->
            <?php endif; ?>
            <h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
            
        </header><!-- .entry-header -->
          
        <?php if ( is_search() || !is_single() ) : // Only display Excerpts for Search ?>
        <div class="entry-summary">
           	<?php the_excerpt(); ?>
             <a href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html_e('Learn More &rarr;','organizing-lite'); ?></a>
        </div><!-- .entry-summary -->
        <?php else : ?>
        <div class="entry-content">
            <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'organizing-lite' ) ); ?>
            <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . __( 'Pages:', 'organizing-lite' ),
                    'after'  => '</div>',
                ) );
            ?>
        </div><!-- .entry-content -->
        <?php endif; ?>
        <div class="clear"></div>
    </article><!-- #post-## -->
</div><!-- .org_blogstyle_front-->
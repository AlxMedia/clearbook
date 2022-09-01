<?php get_header(); ?>

<div class="content">

	<?php while ( have_posts() ): the_post(); ?>
	
		<article id="post-<?php the_ID(); ?>" <?php post_class('book'); ?>>
			
			<div class="book-inner">
				
				<div class="book-header">
					<div class="book-header-left">
						<div class="book-category"><?php the_category(' / '); ?></div>
					</div>
					<div class="book-header-right">
						<h1 class="book-title">
							<?php the_title(); ?>
						</h1>
					</div>
				</div>
				
				<?php if ( has_post_format( array( 'audio', 'gallery', 'video', 'image' ) ) ): ?>
					<div class="book-full">
						<div class="entry-media">
							<?php if( get_post_format() ) { get_template_part('inc/post-formats'); } ?>
						</div>
					</div>
				<?php endif; ?>
				
				<?php if ( has_post_format( array( 'audio', 'gallery', 'video', 'image' ) ) ): ?>
				
				<?php else: ?>
				
					<?php if ( has_post_thumbnail() ): ?>
						<div class="book-full">
							<?php the_post_thumbnail('clearbook-large'); ?>
						</div>
					<?php endif; ?>
					
				<?php endif; ?>
				
				<div class="book-content">
					
					<div class="book-content-left">
						<?php do_action( 'alx_ext_sharrre' ); ?>		
					</div>
					<div class="book-content-right">
					
						<div class="entry themeform">
							<?php the_content(); ?>
							<?php wp_link_pages(array('before'=>'<div class="post-pages">'.esc_html__('Pages:','clearbook'),'after'=>'</div>')); ?>
							<div class="clear"></div>
						</div>
						
						<ul class="book-meta group">
							<li class="book-date"><i class="far fa-calendar"></i><?php the_time( get_option('date_format') ); ?></li>
							<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) =='on' ) ): ?>
								<?php $number = get_comments_number( $post->ID ); if ( $number > 0 ) { ?>
									<li class="book-comments"><a href="<?php comments_link(); ?>"><i class="far fa-comment"></i><span><?php comments_number( '0', '1', '%' ); ?></span></a></li>
								<?php } ?>
							<?php endif; ?>
						</ul>
						
					</div>
				</div>
				
			</div>

		</article>
		
		<div class="entry-footer group">

			<?php the_tags('<p class="post-tags"><span>'.esc_html__('Tags:','clearbook').'</span> ','','</p>'); ?>
			
			<div class="clear"></div>
			
			<?php if ( ( get_theme_mod( 'author-bio', 'on' ) == 'on' ) && get_the_author_meta( 'description' ) ): ?>
				<div class="author-bio">
					<div class="bio-avatar"><?php echo get_avatar(get_the_author_meta('user_email'),'128'); ?></div>
					<p class="bio-name"><?php the_author_meta('display_name'); ?></p>
					<p class="bio-desc"><?php the_author_meta('description'); ?></p>
					<div class="clear"></div>
				</div>
			<?php endif; ?>
			
			<?php do_action( 'alx_ext_sharrre_footer' ); ?>
			
			<?php if ( get_theme_mod( 'post-nav', 'sidebar' ) == 'content' ) { get_template_part('inc/post-nav'); } ?>
			
			<?php if ( get_theme_mod( 'related-posts', 'categories' ) != 'disable' ) { get_template_part('inc/related-posts'); } ?>

			<?php if ( comments_open() || get_comments_number() ) :	comments_template( '/comments.php', true ); endif; ?>
			
		</div>

	<?php endwhile; ?>

</div><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
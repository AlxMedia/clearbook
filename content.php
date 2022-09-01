<?php $format = get_post_format(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('book'); ?>>
	
	<div class="book-inner">
		
		<div class="book-header">
			<div class="book-header-left">
				<div class="book-category"><?php the_category(' / '); ?></div>
			</div>
			<div class="book-header-right">
				<h2 class="book-title">
					<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h2>
			</div>
		</div>
		
		<div class="book-content">
			<div class="book-content-left">
			
				<?php if ( has_post_thumbnail() ): ?>
					<div class="book-thumbnail">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('clearbook-small'); ?>
							<?php if ( has_post_format('video') && !is_sticky() ) echo'<span class="thumb-icon small"><i class="fas fa-play"></i></span>'; ?>
							<?php if ( has_post_format('audio') && !is_sticky() ) echo'<span class="thumb-icon small"><i class="fas fa-volume-up"></i></span>'; ?>
							<?php if ( is_sticky() ) echo'<span class="thumb-icon small"><i class="fas fa-star"></i></span>'; ?>
						</a>
					</div>
				<?php else: ?>
					
				<?php endif; ?>
			
			</div>
			<div class="book-content-right">
			
				<div class="entry themeform">
					<?php if ( is_search() ) : ?>
						<?php the_excerpt(); ?>
					<?php else: ?>
						<?php if ( get_theme_mod( 'excerpt-enable', 'on' ) == 'on' ): ?>
							<?php if (get_theme_mod('excerpt-length','50') != '0'): ?>
								<?php the_excerpt(); ?>
							<?php endif; ?>
						<?php else: ?>
							<?php the_content(); ?>
						<?php endif; ?>
					<?php endif; ?>
					<div class="clear"></div>
				</div>
				
				<a class="book-more" href="<?php the_permalink(); ?>"><span><?php esc_html_e('More','clearbook'); ?></span><i class="fas fa-plus"></i></a>
				
				<ul class="book-meta group">
					<?php if ( get_theme_mod( 'author-avatar', 'on' ) == 'on' ): ?>
						<li class="book-author"><a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php echo get_avatar(get_the_author_meta('user_email'),'64'); ?></a></li>
					<?php endif; ?>
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
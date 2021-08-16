<?php if ($WHERE_AM_I == 'home'): ?>
	<!-- Begin Featured
	================================================== -->
	<div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>

	<!-- <div class="section-title">
		<h2><span>Featured</span></h2>
	</div> -->

		<?php
			// Get the first and second page from the content
			$featured = array_slice($content, 0, 2);
			$content = array_slice($content, 2);
			foreach ($featured as $page):
		?>
		<!-- begin post -->
		<div>
			<div class="uk-card uk-card-default uk-child-width-1-3" uk-grid>
					<div class="uk-card-media-left uk-cover-container">
						<img src="<?php echo ($page->coverImage()?$page->coverImage():Theme::src('img/noimage.png')) ?>" uk-cover>
						<canvas width="" height=""></canvas>
					</div>
				<div class="uk-card-body">
					<a href="<?php echo $page->permalink(); ?>">
					<h3 class="uk-card-title"><?php echo $page->title(); ?></h3>
					<p><?php echo (empty($page->description())?'Complete the description of the article for a correct work of the theme':$page->description()) ?></p>
					</a>
				</div>
			</div>
		</div>
		<!-- end post -->
		<?php endforeach ?>

	</div>
	<!-- End Featured
	================================================== -->
	<?php endif; ?>

	<!-- Begin List Posts
	================================================== -->
	<section class="recent-posts">
	<div class="section-title">
		<h2><span><?php ($WHERE_AM_I=='search'?$language->p('Search'):$language->p('All')) ?></span></h2>
	</div>
	<div class="card-columns listrecent">
		<?php if (empty($content)) { $language->p('No pages found'); } ?>
		<?php foreach ($content as $page): ?>
		<!-- begin post -->
		<div class="card">
			<a href="<?php echo $page->permalink(); ?>">
				<div style="background-image:url(<?php echo ($page->coverImage()?$page->coverImage():Theme::src('img/noimage.png')) ?>); background-size: cover; background-position: center; width:100%; height:250px;"></div>
			</a>
			<div class="card-block p-3">
				<h2 class="card-title"><a href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?></a></h2>
				<h4 class="card-text"><?php echo (empty($page->description())?$language->p('Complete the description of the article'):$page->description()) ?></h4>
				<div class="metafooter">
					<div class="wrapfooter">
						<span class="meta-footer-thumb">
						<img class="author-thumb" src="<?php echo ($page->user('profilePicture')?$page->user('profilePicture'):Theme::src('img/noimage.png')) ?>" alt="<?php echo $page->user('nickname') ?>">
						</span>
						<span class="author-meta">
						<span class="post-name"><?php echo $page->user('nickname'); ?></span><br/>
						<span class="post-date"><?php echo $page->date(); ?></span><span class="dot"></span><span class="post-read"><?php echo $page->readingTime(); ?></span>
						</span>
						<span class="post-read-more"><a href="<?php echo $page->permalink(); ?>" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
					</div>
				</div>
			</div>
		</div>
		<!-- end post -->
		<?php endforeach ?>

	</div>
	</section>
	<!-- End List Posts
	================================================== -->

	<?php if (Paginator::numberOfPages()>1): ?>
	<nav aria-label="Page navigation example">
		<ul class="pagination justify-content-center">
			<?php if (Paginator::showPrev()): ?>
			<li class="page-item"><a class="page-link" href="<?php echo Paginator::previousPageUrl() ?>" tabindex="-1">&#9664; <?php $language->p('Previous page') ?></a></li>
			<?php endif ?>

			<?php if (Paginator::showNext()): ?>
			<li class="page-item"><a class="page-link" href="<?php echo Paginator::nextPageUrl() ?>"><?php $language->p('Next page') ?> &#9658;</a></li>
			<?php endif ?>
		</ul>
	</nav>
	<?php endif ?>
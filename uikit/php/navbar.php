<nav class="uk-navbar-container uk-margin" uk-navbar>
    <div class="uk-navbar-left">

		<a class="uk-navbar-item uk-logo" href="<?php echo $site->url(); ?>">
		<?php if ($site->logo()) : ?>
			<img src="<?php echo $site->logo(); ?>" alt="<?php echo $site->title(); ?>">
		<?php else : ?>
			<img src="<?php echo Theme::src('img/logo.png'); ?>" alt="<?php echo $site->title(); ?>">
		<?php endif ?>
		</a>
	</div>
	<div class="uk-navbar-right">
		<ul class="uk-navbar-nav">
			<!-- Static pages -->
			<?php foreach ($staticContent as $staticPage): ?>
			<li class="">
				<a class="" href="<?php echo $staticPage->permalink(); ?>">
					<span class="uk-icon uk-margin-small-right"></span>
						<?php echo $staticPage->title(); ?>
					</span>
				</a>
			</li>
			<?php endforeach ?>

			<!-- Social Networks -->
			<?php foreach (Theme::socialNetworks() as $key=>$label): ?>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo $site->{$key}(); ?>" target="_blank">
					<img class="d-none d-sm-block nav-svg-icon" src="<?php echo DOMAIN_THEME.'img/'.$key.'.svg' ?>" alt="<?php echo $label ?>" />
					<!-- <span class="d-inline d-sm-none"><?php echo $label; ?></span> -->
				</a>
			</li>
			<?php endforeach; ?>

			<!-- RSS -->
			<?php if (Theme::rssUrl()): ?>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo Theme::rssUrl() ?>" target="_blank">
					<img class="d-none d-sm-block nav-svg-icon text-primary" src="<?php echo DOMAIN_THEME.'img/rss.svg' ?>" alt="RSS" />
					<span class="d-inline d-sm-none">RSS</span>
				</a>
			</li>
			<?php endif; ?>

		</ul>
	</div>
</nav>
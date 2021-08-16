<div class="ui stackable menu">
 	<div class="item">
  	<a href="<?php echo $site->url(); ?>">
	  	<?php if ($site->logo()) : ?>
			<img class="ui mini image" src="<?php echo $site->logo(); ?>" alt="<?php echo $site->title(); ?>">
		<?php else : ?>
			<img class="ui mini image" src="<?php echo Theme::src('img/logo.png'); ?>" alt="<?php echo $site->title(); ?>">
		<?php endif ?>
	</a>
  	</div>

 	 <!-- Static pages -->
  	<?php foreach ($staticContent as $staticPage): ?>
		<a class="item" href="<?php echo $staticPage->permalink(); ?>">
			<?php echo $staticPage->title(); ?>
		</a>
	<?php endforeach ?>

	<div class="right menu">

	<!-- Social Networks -->
	<?php foreach (Theme::socialNetworks() as $key=>$label): ?>
	
		<a class="item" href="<?php echo $site->{$key}(); ?>" target="_blank">
			<img class="d-none d-sm-block nav-svg-icon" src="<?php echo DOMAIN_THEME.'img/'.$key.'.svg' ?>" alt="<?php echo $label ?>" />
			<span class="d-inline d-sm-none"><?php echo $label; ?></span>
		</a>
	<?php endforeach; ?>

	<!-- RSS -->
	<?php if (Theme::rssUrl()): ?>
		<a class="item" href="<?php echo Theme::rssUrl() ?>" target="_blank">
			<img class="d-none d-sm-block nav-svg-icon text-primary" src="<?php echo DOMAIN_THEME.'img/rss.svg' ?>" alt="RSS" />
			<span class="d-inline d-sm-none">RSS</span>
		</a>
	<?php endif; ?>
	</div>

</div>
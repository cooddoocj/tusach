<!-- posts -->
<h1 class="h4 border-bottom border-danger d-inline-block"><span class="badge badge-danger rounded-0">Tìm</span> <?php echo $title ?></h1>
<?php if (isset($error)): ?>
	<div class="alert alert-warning"><?php echo $error ?></div>
<?php endif ?>
<?php if (isset($posts)): ?>
<div class="row">
	<?php foreach ($posts as $post): ?>
	<div class="col-lg-4 my-lg-4 col-md-6 my-md-3 col-xs-12 my-2">
		<div class="clearfix">
			<div class="float-left mr-3" style="width: 4.5rem;">
				<a rel="nofollow" href="<?php echo base_url('ebook/' . $post['slug']); ?>" title="<?php echo $post['title'] ?>"><img class="d-block lazyload" data-src="<?php echo str_replace('/s1600/', '/w72/', $post['featured_image']); ?>" alt="<?php echo $post['title'] ?>"></a>
			</div>
			<div class="float-left" style="width: calc(100% - 5.5rem)">
				<h3 class="h6 p-0"><a class="font-weight-normal" href="<?php echo base_url('ebook/' . $post['slug']); ?>" title="<?php echo $post['title'] ?>"><?php echo $post['title'] ?></a></h3>
				<div class="font-italic text-secondary"><?php echo $post['author_name'] ?></div>
			</div>
		</div>
	</div>
	<?php endforeach ?>
</div>
<?php endif ?>
<!-- pagination -->
<?php if (isset($pagination)): ?>
	<?php echo $pagination ?>
<?php endif ?>
<?php $this->need('header.php'); ?>

<div class="inner-post">
	<div class="post-title"><h2><?php $this->title(); ?></h2></div>
	<div class="post-meta"><?php $this->author(); ?> // <?php $this->date('Y-m-d H:i'); ?></div>
	<div class="post-content"><?php $this->content(); ?></div>
</div>

<?php $this->need('footer.php'); ?>
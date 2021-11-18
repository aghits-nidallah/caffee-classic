<?php

use CodeIgniter\Pager\PagerRenderer;

/**
 * @var PagerRenderer $pager
 */
$pager->setSurroundCount(2);
?>

<nav aria-label="<?= lang('Pager.pageNavigation') ?>">
	<ul class="pagination btn btn-group">
		<?php if ($pager->hasPrevious()) : ?>
			<a href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>" class="btn btn-primary">
				<span aria-hidden="true"><?= lang('Pager.first') ?></span>
			</a>
			<a href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>" class="btn btn-primary">
				<span aria-hidden="true"><?= lang('Pager.previous') ?></span>
			</a>
		<?php endif ?>

		<?php foreach ($pager->links() as $link) : ?>
			<a href="<?= $link['uri'] ?>" <?= $link['active'] ? 'class="active btn btn-primary"' : 'btn btn-primary' ?>>
				<?= $link['title'] ?>
			</a>
		<?php endforeach ?>

		<?php if ($pager->hasNext()) : ?>
			<a href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>" class="btn btn-primary">
				<span aria-hidden="true"><?= lang('Pager.next') ?></span>
			</a>
			<a href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>" class="btn btn-primary">
				<span aria-hidden="true"><?= lang('Pager.last') ?></span>
			</a>
		<?php endif ?>
	</ul>
</nav>
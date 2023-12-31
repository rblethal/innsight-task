<?php

use CodeIgniter\Pager\PagerRenderer;

/**
 * @var PagerRenderer $pager
 */
$pager->setSurroundCount(2);
?>

<nav aria-label="<?= lang('Pager.pageNavigation') ?>">
  <ul class="pagination justify-content-center m-0 p-0">
    <?php if ($pager->hasPrevious()) : ?>
      <li class="page-item">
        <a class="page-link rounded-1" href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>">
          <span aria-hidden="true"><?= lang('Pager.first') ?></span>
        </a>
      </li>
      <li class="page-item">
        <a class="page-link rounded-1" href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>">
          <span aria-hidden="true"><?= lang('Pager.previous') ?></span>
        </a>
      </li>
    <?php endif ?>

    <?php foreach ($pager->links() as $link) : ?>
      <li <?= $link['active'] ? 'class="page-item active"' : 'class="page-item"' ?>>
        <a class="page-link rounded-1" href="<?= $link['uri'] ?>">
          <?= $link['title'] ?>
        </a>
      </li>
    <?php endforeach ?>

    <?php if ($pager->hasNext()) : ?>
      <li class="page-item">
        <a class="page-link rounded-1" href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>">
          <span aria-hidden="true"><?= lang('Pager.next') ?></span>
        </a>
      </li>
      <li class="page-item">
        <a class="page-link rounded-1" href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>">
          <span aria-hidden="true"><?= lang('Pager.last') ?></span>
        </a>
      </li>
    <?php endif ?>
  </ul>
</nav>
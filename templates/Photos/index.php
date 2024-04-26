<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Photo[]|\Cake\Collection\CollectionInterface $photos
 */
?>

<?php
$this->assign('title', __('Photos'));
$this->Breadcrumbs->add([
    ['title' => __('Home'), 'url' => '/'],
    ['title' => __('List Photos')],
]);
?>

<div class="card card-primary card-outline">
    <div class="card-header d-flex flex-column flex-md-row">
        <h2 class="card-title">
            <!-- -->
        </h2>
        <div class="d-flex ml-auto">
            <?= $this->Paginator->limitControl([], null, [
                'label' => false,
                'class' => 'form-control form-control-sm',
                'templates' => ['inputContainer' => '{{content}}']
            ]); ?>
            <?= $this->Html->link(__('New Photo'), ['action' => 'add'], ['class' => 'btn btn-primary btn-sm ml-2']) ?>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <!-- <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th> -->
                    <th><?= $this->Paginator->sort('foto') ?></th>
                    <!-- <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('date_upload') ?></th>
                    <th><?= $this->Paginator->sort('album_id') ?></th> -->

                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($photos as $photo) : ?>
                    <tr>
                        <!-- <td><?= $this->Number->format($photo->id) ?></td>
                        <td><?= $photo->has('user') ? $this->Html->link($photo->user->name, ['controller' => 'Users', 'action' => 'view', $photo->user->id]) : '' ?></td> -->
                        <td><?= $this->Html->image('../upload/' . $photo->foto, ['width' => '200px']) ?></td>
                        <!-- <td><?= h($photo->title) ?></td>
                        <td><?= h($photo->date_upload) ?></td>
                        <td><?= $photo->has('album') ? $this->Html->link($photo->album->name, ['controller' => 'Albums', 'action' => 'view', $photo->album->id]) : '' ?></td> -->
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $photo->id], ['class' => 'btn btn-xs btn-outline-primary', 'escape' => false]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $photo->id], ['class' => 'btn btn-xs btn-outline-primary', 'escape' => false]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $photo->id], ['class' => 'btn btn-xs btn-outline-danger', 'escape' => false, 'confirm' => __('Are you sure you want to delete # {0}?', $photo->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <tr>

    </tr>

</div>
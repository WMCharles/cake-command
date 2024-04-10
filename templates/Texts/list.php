<?php

/**
 * @var \App\View\AppView $this
 * @var iterable<\Cake\Datasource\EntityInterface> $genders
 */
?>
<div class="genders index content">
    <?= $this->Form->postLink(__('New File'), ['action' => 'index'], ['class' => 'button float-right']) ?>
    <h3><?= __('Files') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($files as $file) : ?>
                    <tr>
                        <td><?= h($file->name) ?></td>
                        <td><?= h($file->created) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $file->name]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
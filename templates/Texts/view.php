<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $gender
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Gender'), ['action' => 'edit', $gender->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Gender'), ['action' => 'delete', $gender->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gender->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Genders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Gender'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="genders view content">
            <h3><?= h($gender->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($gender->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Uuid') ?></th>
                    <td><?= h($gender->uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($gender->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Id') ?></th>
                    <td><?= $gender->user_id === null ? '' : $this->Number->format($gender->user_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($gender->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($gender->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

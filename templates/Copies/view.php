<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Copy $copy
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Copy'), ['action' => 'edit', $copy->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Copy'), ['action' => 'delete', $copy->id], ['confirm' => __('Are you sure you want to delete # {0}?', $copy->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Copies'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Copy'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="copies view content">
            <h3><?= h($copy->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($copy->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Origin Id') ?></th>
                    <td><?= $this->Number->format($copy->origin_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Newlist Id') ?></th>
                    <td><?= $this->Number->format($copy->newlist_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($copy->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($copy->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Todolist[]|\Cake\Collection\CollectionInterface $todolists
 */
?>
<div class="todolists index content">
    <?= $this->Html->link(__('New Todolist'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Todolists') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>

                    <th>crée</th>
                    <th>modifié</th>
                    <th>Titre</th>
                    <th>picture</th>
                    <th>Utilisateur</th>
                    <th class="actions">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($todolists as $todolist):?>
                    <?php if($todolist->visibility != 0) : ?>
                <tr>
                    <td><?= h($todolist->created) ?></td>
                    <td><?= h($todolist->modified) ?></td>
                    <td><?= h($todolist->title) ?></td>
                    <td><?= h($todolist->picture) ?></td>
                    <td><?= $todolist->has('user') ? $this->Html->link($todolist->user->username, ['controller' => 'Users', 'action' => 'view', $todolist->user->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $todolist->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $todolist->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $todolist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $todolist->id)]) ?>
                    </td>
                </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

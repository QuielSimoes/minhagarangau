<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Configuraco'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="configuracoes index large-9 medium-8 columns content">
    <h3><?= __('Configuracoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('google_agenda_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($configuracoes as $configuraco): ?>
            <tr>
                <td><?= $this->Number->format($configuraco->id) ?></td>
                <td><?= h($configuraco->google_agenda_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $configuraco->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $configuraco->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $configuraco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $configuraco->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>

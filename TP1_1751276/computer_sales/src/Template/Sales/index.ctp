<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sale[]|\Cake\Collection\CollectionInterface $sales
 */
?>

<div class="sales index large-9 medium-8 columns content">
    <h3><?= __('Sales') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categories_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subcategories_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sales as $sale): ?>
            <tr>
                <td><?= $this->Number->format($sale->id) ?></td>
                <td><?= $sale->has('category') ? $this->Html->link($sale->category->name, ['controller' => 'Categories', 'action' => 'view', $sale->category->id]) : '' ?></td>
                <td><?= $sale->has('subcategory') ? $this->Html->link($sale->subcategory->name, ['controller' => 'Subcategories', 'action' => 'view', $sale->subcategory->id]) : '' ?></td>
                <td><?= $this->Number->format($sale->price) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sale->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sale->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sale->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

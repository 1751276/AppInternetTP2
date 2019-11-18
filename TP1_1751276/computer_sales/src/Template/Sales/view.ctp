<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sale $sale
 */
?>

<div class="sales view large-9 medium-8 columns content">
    <h3><?= h($sale->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $sale->has('category') ? $this->Html->link($sale->category->name, ['controller' => 'Categories', 'action' => 'view', $sale->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subcategory') ?></th>
            <td><?= $sale->has('subcategory') ? $this->Html->link($sale->subcategory->name, ['controller' => 'Subcategories', 'action' => 'view', $sale->subcategory->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sale->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($sale->price) ?></td>
        </tr>
    </table>
</div>

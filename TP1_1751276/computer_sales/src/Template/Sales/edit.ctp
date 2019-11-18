<?php
$urlToLinkedListFilter = $this->Url->build([
    "controller" => "Subcategories",
    "action" => "getByCategory",
    "_ext" => "json"
        ]);
echo $this->Html->scriptBlock('var urlToLinkedListFilter = "' . $urlToLinkedListFilter . '";', ['block' => true]);
echo $this->Html->script('Sales/add', ['block' => 'scriptBottom']);
?>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sale $sale
 */
?>

<div class="sales form large-9 medium-8 columns content">
    <?= $this->Form->create($sale) ?>
    <fieldset>
        <legend><?= __('Edit Sale') ?></legend>
        <?php
             echo $this->Form->control('Category_id', ['options' => $categories]);
             echo $this->Form->control('subcategory_id', ['options' => $subcategories]);
            echo $this->Form->control('price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $changelogsCategory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $changelogsCategory->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Changelogs Categories'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="changelogsCategories form large-9 medium-8 columns content">
    <?= $this->Form->create($changelogsCategory) ?>
    <fieldset>
        <legend><?= __('Edit Changelogs Category') ?></legend>
        <?php
            echo $this->Form->input('title');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

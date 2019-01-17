<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Post'), ['action' => 'edit', $post->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Post'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Posts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="posts view large-9 medium-8 columns content">
    <h2><?= h($post->title) ?></h2>
    <?php foreach($users as $user):?>
        <a href="/users/<?=$user->id?>">By <?= h($user->first_name . ' ' . $user->last_name) ?></a>
        <hr>
    <?php endforeach;?>
    <div class="row">
        <?= $this->Text->autoParagraph(h($post->body)); ?>
    </div>
    <hr>
    <div class="comments view large-9 medium-8 columns content">
        <?php foreach($comments as $comment):?>
            <h4><?=h($comment->title)?></h4>
            <?= $this->Text->autoParagraph(h($comment->body));?>
            <hr>
        <?php endforeach;?>

        <?= $this->Form->create($com, ['novalidate'=>true]) ?>
            <fieldset>
                <legend><?= __('Add Comment') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('body');
                    //echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    //echo $this->Form->control('post_id', ['options' => $posts, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        <br><br>
    </div>
</div>

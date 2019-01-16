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
        <a href="/comments/add/<?=$post->id?>">Add a comment</a>
        <br><br>
    </div>
</div>

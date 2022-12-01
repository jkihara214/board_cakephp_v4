<?php
if ($loginId !== $article->user->id):
    header('Location: http://jk-study-php.com/board_cakephp/articles');
    exit;
endif;
?>
<h1>記事の編集</h1>
<?php
    echo $this->Form->create($article);
    echo $this->Form->control('user_id', ['type' => 'hidden']);
    echo $this->Form->control('title');
    echo $this->Form->control('body', ['rows' => '3']);
    echo $this->Form->control('tag_string', ['type' => 'text']);
    echo $this->Form->button(__('Save Article'));
    echo $this->Form->end();
?>
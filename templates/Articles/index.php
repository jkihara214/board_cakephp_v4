<?php if (isset($loginDetail->id)):?>
<p><?= $loginDetail->name . 'としてログイン中'; ?></p>
<p><?= $this->Html->link("ログアウト", ['controller' => 'users', 'action' => 'logout']) ?></p>
<?php else: ?>
<p><?= $this->Html->link("ログイン", ['controller' => 'users', 'action' => 'login']) ?></p>
<p><?= $this->Html->link("新規登録", ['controller' => 'users', 'action' => 'add']) ?></p>
<?php endif; ?>
<h1>記事一覧</h1>
<p><?= $this->Html->link("記事の追加", ['action' => 'add']) ?></p>
<table>
    <tr>
        <th>投稿者</th>
        <th>タイトル</th>
        <th>作成日時</th>
        <th>操作</th>
    </tr>

<!-- ここで、$articles クエリーオブジェクトを繰り返して、記事情報を出力します -->

<?php foreach ($articles as $article): ?>
    <tr>
        <td>
            <?= $this->Html->link($article->user->name, ['controller' => 'users', 'action' => 'detail', $article->user->id]) ?>
        </td>
        <td>
            <?= $this->Html->link($article->title, ['action' => 'view', $article->slug]) ?>
        </td>
        <td>
            <?= $article->created->format(DATE_RFC850) ?>
        </td>
        <td>
            <?php
            if (isset($loginDetail->id) && $loginDetail->id === $article->user->id):
            ?>
            <?= $this->Html->link('編集', ['action' => 'edit', $article->slug]) ?>
            <?= $this->Form->postLink(
                '削除',
                ['action' => 'delete', $article->slug],
                ['confirm' => 'よろしいですか?'])
            ?>
            <?php
            endif;
            ?>
        </td>
    </tr>
<?php endforeach; ?>

</table>
<h1>ユーザー詳細</h1>
<table>
    <tr>
        <th>ユーザー名</th>
        <td>
            <?= $userDetail->name ?>
        </td>
    </tr>
    <tr>
        <th>アイコン</th>
        <td>
            <?php
            if(isset($userDetail->image)):
                echo $userDetail->image;
            else:
                echo '未登録';
            endif;
            ?>
        </td>
    </tr>
    <tr>
        <th>コメント</th>
        <td>
            <?php
            if(isset($userDetail->comment)):
                echo $userDetail->comment;
            else:
                echo '未登録';
            endif;
            ?>
        </td>
    </tr>
    <tr>
        <th>作成日時</th>
        <td>
            <?= $userDetail->created->format(DATE_RFC850) ?>
        </td>
    </tr>
    <tr>
        <th>操作</th>
        <td>
            <div>
                <?php
                if($userDetail->id === $user->id):
                    echo $this->Html->link('編集', ['action' => 'edit', $user->id]);
                endif;
                ?>
            </div>
            <div>
                <?= $this->Html->link('戻る', ['controller' => 'Articles', 'action' => 'index']); ?>
            </div>
        </td>
    </tr>

</table>
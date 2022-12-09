<div class="users form">
    <?= $this->Flash->render() ?>
    <h3>Password再設定</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your Email') ?></legend>
        <?= $this->Form->control('email', ['required' => true]) ?>
    </fieldset>
    <?= $this->Form->submit(__('メールを送信')); ?>
    <?= $this->Form->end() ?>
</div>
<h1>Add Post</h1>
<?php
echo $this->Form->create('Post'); //formタグ生成
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->end('Save Post'); //submitボタンを生成してformおわり
?>
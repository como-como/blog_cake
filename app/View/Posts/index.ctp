<h1>Blog posts</h1>
<p><?php echo $this->Html->link("Add Post", array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Action</th>
        <th>Created</th>
    </tr>

    <!-- $posts 配列をループして、投稿記事の情報を表示 -->

    <?php foreach ($posts as $post): ?>
        <tr>
            <td><?php echo $post['Post']['id']; ?></td>
            <td>
                <?php
                echo $this->Html->link(
                    $post['Post']['title'],
                    array('action' => 'view', $post['Post']['id'])
                );
                ?>
            </td>
            <td>
                <!-- 編集にリンク -->
                <?php
                echo $this->Html->link(
                    'Edit🖍',
                    array('action' => 'edit', $post['Post']['id'])
                );
                ?>
                <!-- 削除にリンク -->
                <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $post['Post']['id']),
                    array('confirm' => 'Are you sure?')
                );
                ?>
            </td>
            <td>
                <?php echo $post['Post']['created']; ?>
            </td>
        </tr>
    <?php endforeach; ?>

</table>
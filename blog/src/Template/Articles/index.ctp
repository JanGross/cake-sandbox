<h1>Blog articles</h1>
<?= $this->Html->link('Add new article', ['action' => 'add']) ?>
<table>
    <tr>
        <td>ID</td>
        <td>Title</td>
        <td>Created</td>
        <td>Edit</td>
    </tr>
    <?php foreach ($articles as $article): ?>
    <tr>
        <td><?= $article->id ?></td>
        <td><?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?></td>
        <td><?= $article->created->format(DATE_RFC850) ?></td>
        <td><?= $this->Html->link('Edit', ['action' => 'edit', $article->id]) ?>/<?= 
            $this->Form->postLink(
                'Delete', 
                ['action' => 'delete', $article->id], 
                ['confirm' => 'Are you sure?']) 
            ?>
    </tr>
    <?php endforeach; ?>
</table>
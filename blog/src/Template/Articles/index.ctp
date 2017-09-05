<h1>Blog articles</h1>
<table>
    <tr>
        <td>ID</td>
        <td>Title</td>
        <td>Created</td>
    </tr>
    <?php foreach ($articles as $article): ?>
    <tr>
        <td><?= $article->id ?></td>
        <td><?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?></td>
        <td><?= $article->created->format(DATE_RFC850) ?></td>
    </tr>
    <?php endforeach; ?>
</table>
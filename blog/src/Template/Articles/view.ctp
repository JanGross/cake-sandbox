<h1><?= h($article->title) ?></h1>
<p><?= $this->Html->link('Edit', ['action' => 'edit', $article->id]) ?></p>
<p><?= h($article->body) ?></p>
<p><small><?= $article->created->format(DATE_RFC850) ?></small></p>
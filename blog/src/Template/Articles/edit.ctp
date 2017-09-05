<h1>Edit article</h1>
<p><small>Created: <?= $article->created->format(DATE_RFC850) ?></small></p>
<?php
    echo $this->Form->create($article);
    echo $this->Form->control('title');
    echo $this->Form->control('body', ['rows' => 3]);
    echo $this->Form->button(__('Save Article'));
    echo $this->Form->end();
?>
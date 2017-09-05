<h1>Add new article</h1>
<?php
    echo $this->form->create($article);
    echo $this->form->control('title');
    echo $this->form->control('body', ['rows' => 3]);
    echo $this->form->button(__('Save article'));
    echo $this->form->end();
?>
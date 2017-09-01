<h1>
    Bookmarks tagged with
    <?= $this->Text->toList(h($tags)) ?>    
</h1>

<section>
<?php if($bookmarks->count() === 0): ?>
    No bookmarks found!
<?php else: ?>
    <?php foreach ($bookmarks as $key => $bookmark): ?>
        <article>
            <h4><?= $this->Html->link($bookmark->title, $bookmark->url) ?></h4>
            <?= $this->Text->autoParagraph($bookmark->description) ?>
        </article>
    <?php endforeach ?>
<?php endif ?>
</section>
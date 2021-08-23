<h1>Les annonces</h1>

<?php foreach ($params['posts'] as $post) : ?>

    <div class="card mb-3">
        <div class="card-body">
            <h2><?= $post->title ?></h2>
            <div>
                <?php foreach ($post->getTags() as $tag) : ?>
                    <span><a href="/tags/<?= $tag->id ?>" class="badge bg-success"><?= $tag->name ?></a></span>
                <?php endforeach ?>
            </div>
            <small class="text-info">Publié le <?= $post->getCreatedAt() ?></small>
            <p><?= $post->getExcerpt() ?></p>
            <?= $post->getButton(); ?>
        </div>
    </div>

<?php endforeach ?>
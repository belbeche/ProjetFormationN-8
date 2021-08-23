<?php foreach ($params['post']->getTags() as $tag) : ?>
    <span class="badge bg-info"><?= $tag->name ?></span>
<?php endforeach ?>

<h1><?= $params['post']->title; ?></h1>
<p><?= $params['post']->content; ?></p>
<a href="/posts" class="btn btn-secondary"> Retourner en arrière</a>
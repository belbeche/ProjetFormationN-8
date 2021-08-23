<?php

namespace App\Controllers;

use App\Models\Tag;
use App\Models\Post;

class AnnonceController extends Controller
{

    public function welcome()
    {
        return $this->view('annonce.welcome');
    }
    public function index()
    {

        $post = new Post($this->getDB());
        $posts = $post->all();

        return $this->view('annonce.index', compact('posts'));
    }

    public function show(int $id)
    {

        $post = new Post($this->getDB());
        $post = $post->findById($id);

        return $this->view('annonce.show', compact('post'));
    }

    public function tag(int $id)
    {
        $tag = (new Tag($this->getDB()))->findById($id);

        return $this->view('annonce.tag', compact('tag'));
    }
}

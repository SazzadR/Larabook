<?php

namespace App\Presenter;

use App\Presenter\Presenter;

class CommentPresenter extends Presenter
{
    public function timeSincePublished()
    {
        return $this->created_at->diffForHumans();
    }
}
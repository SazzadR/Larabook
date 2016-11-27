<?php

namespace App\Presenter;

use App\Presenter\Presenter;

class StatusPresenter extends Presenter
{
    public function timeSincePublished()
    {
        return $this->created_at->diffForHumans();
    }

    public function likesCount()
    {
        $count = $this->entity->likes()->count();
        $plural = str_plural('Like', $count);

        echo "<span> {$count} </span> {$plural}";
    }
}
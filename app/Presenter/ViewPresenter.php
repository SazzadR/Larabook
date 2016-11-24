<?php

namespace App\Presenter;

use App\Presenter\Presenter;

class ViewPresenter extends Presenter
{
    public function gravatar($email, $size = 30)
    {
        $email = md5($email);
        return "//gravatar.com/avatar/{$email}?s={$size}";
    }

    public function statusCount()
    {
        $count = $this->entity->statuses()->count();
        $plural = str_plural('Status', $count);

        return "{$count} {$plural}";
    }

    public function followerCount()
    {
        $count = $this->entity->followers()->count();
        $plural = str_plural('Follower', $count);

        return "{$count} {$plural}";
    }
}
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
}
<?php

namespace App\Presenter;

trait PresentableTrait
{
    protected $presenterInstance;

    public function present()
    {
        if ( ! $this->presenterInstance ) {
            $this->presenterInstance = new $this->presenter($this);
        }

        return $this->presenterInstance;
    }
}
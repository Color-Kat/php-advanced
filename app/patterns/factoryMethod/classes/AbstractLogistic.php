<?php

abstract class AbstractLogistic
{
    public function delevery($destination)
    {
        $delever = $this->deliveryMethod();
        $delever->setDestination($destination);

        return $delever->send();
    }

    abstract public function deliveryMethod(): DeleveryMethodInterface;
}

<?php

namespace Sadish\EventListener;

class CustomEventListener
{
    public function __invoke($event) {
        echo "I am a custom event listener and I am listening to " . $event->getName() . "\n";
        echo "Data: " . $event->getData() . "\n";
    }
}
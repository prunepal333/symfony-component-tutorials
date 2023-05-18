<?php
namespace Sadish\EventSubscriber;
use Sadish\Event\SadishEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
class SadishEventSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            SadishEvent::NAME => 'onSadishEvent',
        );
    }

    public function onSadishEvent(SadishEvent $event)
    {
        echo "I am sadish event subscriber and I am listening to sadish event\n";
        echo "Data: " . $event->getData() . "\n";
    }
}
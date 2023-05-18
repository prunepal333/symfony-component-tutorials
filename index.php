<?php

require_once "vendor/autoload.php";

use Sadish\Event\SadishEvent;
use Sadish\EventListener\CustomEventListener;
use Sadish\EventSubscriber\SadishEventSubscriber;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Sadish\Test;
$eventDispatcher = new EventDispatcher();

$subscriber = new SadishEventSubscriber();

$sadishEvent = new SadishEvent(new Test('test', 10));

$eventDispatcher->addSubscriber($subscriber); // Subscriber knows what event it subscribes to

$eventDispatcher->addListener('sadish.event', new CustomEventListener()); // Listener are just callables / invokable classes

$eventDispatcher->dispatch(new SadishEvent(new Test('test', 10)), 'sadish.event');
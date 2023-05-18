<?php
namespace Sadish\Event;
use Symfony\Contracts\EventDispatcher\Event;

class SadishEvent extends Event
{
    const NAME = 'sadish.event';

    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
    public function getName(): string
    {
        return self::NAME;
    }
}
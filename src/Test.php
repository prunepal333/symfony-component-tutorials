<?php

namespace Sadish;
class Test{
    public function __construct(private string $name, private int $id) {}
    public function __toString() {
        return $this->name . ' ' . $this->id;
    }
}
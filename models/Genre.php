<?php
class Genre
{
    public $type;
    public function __construct(
        array $type,
    ) {
        $this->type = $type;
    }
}
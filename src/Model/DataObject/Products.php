<?php

namespace App\Model\DataObject;

class Products extends \Pimcore\Model\DataObject\Products implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        $vars = get_object_vars($this);
        return $vars;
    }
}
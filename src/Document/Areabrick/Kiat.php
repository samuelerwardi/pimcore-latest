<?php
// src/Document/Areabrick/Iframe.php

namespace App\Document\Areabrick;

use Pimcore\Extension\Document\Areabrick\AbstractTemplateAreabrick;

class Kiat extends AbstractTemplateAreabrick
{
    public function getName(): string
    {
        return 'Component Carousel';
    }

    public function getDescription(): string
    {
        return 'Kiat Sukses';
    }

    public function needsReload(): bool
    {
        // optional
        // here you can decide whether adding this bricks should trigger a reload
        // in the editing interface, this could be necessary in some cases. default=false
        return false;
    }
}
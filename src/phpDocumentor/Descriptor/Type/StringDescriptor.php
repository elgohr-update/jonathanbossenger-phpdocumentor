<?php

namespace phpDocumentor\Descriptor\Type;

use phpDocumentor\Descriptor\Interfaces\TypeInterface;

class StringDescriptor implements TypeInterface
{
    public function getName()
    {
        return 'string';
    }

    public function __toString()
    {
        return $this->getName();
    }
}

<?php

declare(strict_types=1);

namespace Velhron\DadataBundle\Model\Request\Clean;

class NameRequest extends CleanRequest
{
    /**
     * {@inheritdoc}
     */
    public function getMethodUrl(): string
    {
        return 'name';
    }
}

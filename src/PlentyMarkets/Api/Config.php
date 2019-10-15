<?php

namespace PlentyMarkets\Api;

class Config
{
    /** @var string */
    private $restUri;

    public function __construct(string $restUri)
    {
        $this->restUri = $restUri;
    }

    public function getRestUri(): string
    {
        return $this->restUri;
    }
}

<?php

namespace PlentyMarkets\Api\Request;

abstract class Request
{
    public const
        API_ROUTE = '',
        REQUEST_METHOD = '',
        RESPONSE_CLASS = '';

    abstract public function buildBody();
}

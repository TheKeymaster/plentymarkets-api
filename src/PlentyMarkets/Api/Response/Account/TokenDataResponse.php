<?php

namespace PlentyMarkets\Api\Response\Account;

use PlentyMarkets\Api\Response\Response;

class TokenDataResponse extends Response
{
    /** @var string The access token. Required for REST call authentication. */
    private $accessToken;

    /** @var string The token type. The token type is Bearer. */
    private $tokenType;

    /** @var int The expiration time in seconds that the access token is valid for. */
    private $expiresIn;

    /** @var string The refresh token. Required for refreshing the access token. */
    private $refreshToken;
}

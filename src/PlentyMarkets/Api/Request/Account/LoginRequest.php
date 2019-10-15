<?php

namespace PlentyMarkets\Api\Request\Account;

use PlentyMarkets\Api\Request\Request;
use PlentyMarkets\Api\Response\Account\TokenDataResponse;

class LoginRequest extends Request
{
    public const
        API_ROUTE = '/rest/account/login',
        REQUEST_METHOD = 'POST',
        RESPONSE_CLASS = TokenDataResponse::class;

    /** @var string */
    private $email;

    /** @var string */
    private $password;

    /** @var int */
    private $id;

    /**
     * @param string $email Email address of the front end user.
     * @param string $password Password of the front end user.
     * @param int $id ID of the front end user.
     */
    public function __construct(string $email, string $password, int $id)
    {
        $this->email = $email;
        $this->password = $password;
        $this->id = $id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function buildBody(): array
    {
        return [
            'password' => $this->password,
            'email' => $this->email,
            'id' => $this->id
        ];
    }
}

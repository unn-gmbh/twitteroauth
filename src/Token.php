<?php

/**
 * The MIT License
 * Copyright (c) 2007 Andy Smith
 */

declare(strict_types=1);

namespace Abraham\TwitterOAuth;

class Token
{
    /** @var string|null */
    public $key;
    /** @var string|null */
    public $secret;

    /**
     * @param string|null $key    The OAuth Token
     * @param string|null $secret The OAuth Token Secret
     */
    public function __construct(string $key = null, string $secret = null)
    {
        $this->key = $key;
        $this->secret = $secret;
    }

    /**
     * Generates the basic string serialization of a token that a server
     * would respond to request_token and access_token calls with
     *
     * @return string
     */
    public function __toString(): string
    {
        return sprintf(
            'oauth_token=%s&oauth_token_secret=%s',
            Util::urlencodeRfc3986($this->key),
            Util::urlencodeRfc3986($this->secret)
        );
    }
}

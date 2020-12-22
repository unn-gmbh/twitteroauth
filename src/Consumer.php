<?php

/**
 * The MIT License
 * Copyright (c) 2007 Andy Smith
 */

declare(strict_types=1);

namespace Abraham\TwitterOAuth;

class Consumer
{
    /** @var string|null  */
    public $key;
    /** @var string|null  */
    public $secret;
    /** @var string|null  */
    public $callbackUrl;

    /**
     * @param string $key
     * @param string $secret
     * @param string|null $callbackUrl
     */
    public function __construct(
        string $key = null,
        string $secret = null,
        string $callbackUrl = null
    ) {
        $this->key = $key;
        $this->secret = $secret;
        $this->callbackUrl = $callbackUrl;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf('Consumer[key=%s,secret=%s]', $this->key, $this->secret);
    }
}

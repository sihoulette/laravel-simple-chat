<?php

namespace App\Contracts\OAuth;

use Illuminate\Http\Client\Response as ClientResponse;

/**
 * Interface OAuthTokenGenerator
 */
interface OAuthTokenGenerator
{
    /**
     * @var string BY_PASSWORD
     */
    public const BY_PASSWORD = 'password';

    /**
     * @var string BY_REFRESH
     */
    public const BY_REFRESH = 'refresh_token';

    /**
     * Generate access and refresh tokens.
     *
     * @param array $data
     * @param string $type
     *
     * @return ClientResponse
     */
    public function generateTokens(array $data, string $type): ClientResponse;
}

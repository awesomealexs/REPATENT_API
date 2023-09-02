<?php

namespace Rospatent\API;

class RospatentApi implements ApiInterface
{

    private string $token;

    /**
     * @param string $token
     */
    public function __construct(string $token)
    {
        $this->token = $token;
    }

    public function checkAuthorization(): bool
    {
        return true;
    }
}
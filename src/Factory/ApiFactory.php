<?php

namespace Rospatent\Factory;

use Exception;
use Rospatent\API\ApiInterface;
use Rospatent\API\RospatentApiInterface;

class ApiFactory implements ApiFactoryInterface
{

    /**
     * @throws Exception
     */
    public function create(ApiInterface $api): ApiInterface
    {
        if (!$api->checkAuthorization()) {
            throw new Exception("User is not authorized");
        }
        return $api;
    }
}
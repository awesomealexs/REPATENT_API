<?php

namespace Rospatent\Factory;

use Rospatent\API\ApiInterface;
use Rospatent\API\RospatentApiInterface;

interface ApiFactoryInterface
{
    public function create(ApiInterface $api): ApiInterface;
}
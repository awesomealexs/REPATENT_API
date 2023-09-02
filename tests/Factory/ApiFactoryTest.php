<?php

namespace Factory;

use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\TestCase;
use Rospatent\API\RospatentApi;
use Rospatent\Factory\ApiFactory;

class ApiFactoryTest extends TestCase
{

    /**
     * @throws Exception
     */
    public function testCreate()
    {
        $stub = $this->createStub(RospatentApi::class);
        $stub->method('checkAuthorization')
            ->willReturn(true);

        $apiFactory = new ApiFactory();

        $api = $apiFactory->create($stub);

        $this->assertInstanceOf(RospatentApi::class, $api);
    }
}

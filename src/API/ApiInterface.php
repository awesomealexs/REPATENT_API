<?php

namespace Rospatent\API;

interface ApiInterface
{
    public function checkAuthorization(): bool;
}
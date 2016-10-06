<?php

namespace PagarMe\Sdk;

use PagarMe\Sdk\Request;

interface Request
{
    /**
     * @return array
     */
    public function getPayload();

    /**
     * @return string
     */
    public function getPath();

    /**
     * @return string
     */
    public function getMethod();
}
<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;

class VKApiParamException extends VKApiException {
    /**
     * VKApiParamException constructor.
     * @param VKApiError $error
     */
    public function __construct(VKApiError $error) {
        parent::__construct(100, 'One of the parameters specified was missing or invalid', $error);
    }
}

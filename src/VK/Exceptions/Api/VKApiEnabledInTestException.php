<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;

class VKApiEnabledInTestException extends VKApiException {
    /**
     * VKApiEnabledInTestException constructor.
     * @param VKApiError $error
     */
    public function __construct(VKApiError $error) {
        parent::__construct(11, 'In test mode application should be disabled or user should be authorized', $error);
    }
}

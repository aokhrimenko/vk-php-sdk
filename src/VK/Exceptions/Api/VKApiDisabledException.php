<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;

class VKApiDisabledException extends VKApiException {
    /**
     * VKApiDisabledException constructor.
     * @param VKApiError $error
     */
    public function __construct(VKApiError $error) {
        parent::__construct(2, 'Application is disabled. Enable your application or use test mode', $error);
    }
}

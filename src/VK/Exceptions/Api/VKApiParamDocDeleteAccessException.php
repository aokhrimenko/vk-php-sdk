<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;

class VKApiParamDocDeleteAccessException extends VKApiException {
    /**
     * VKApiParamDocDeleteAccessException constructor.
     * @param VKApiError $error
     */
    public function __construct(VKApiError $error) {
        parent::__construct(1151, 'Access to document deleting is denied', $error);
    }
}

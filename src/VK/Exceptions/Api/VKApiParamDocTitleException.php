<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;

class VKApiParamDocTitleException extends VKApiException {
    /**
     * VKApiParamDocTitleException constructor.
     * @param VKApiError $error
     */
    public function __construct(VKApiError $error) {
        parent::__construct(1152, 'Invalid document title', $error);
    }
}

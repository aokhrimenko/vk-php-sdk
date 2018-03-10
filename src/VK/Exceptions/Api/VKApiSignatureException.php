<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;

class VKApiSignatureException extends VKApiException {
    /**
     * VKApiSignatureException constructor.
     * @param VKApiError $error
     */
    public function __construct(VKApiError $error) {
        parent::__construct(4, 'Incorrect signature', $error);
    }
}

<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;

class VKApiUploadException extends VKApiException {
    /**
     * VKApiUploadException constructor.
     * @param VKApiError $error
     */
    public function __construct(VKApiError $error) {
        parent::__construct(22, 'Upload error', $error);
    }
}

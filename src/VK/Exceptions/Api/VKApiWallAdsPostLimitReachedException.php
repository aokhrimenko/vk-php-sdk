<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;

class VKApiWallAdsPostLimitReachedException extends VKApiException {
    /**
     * VKApiWallAdsPostLimitReachedException constructor.
     * @param VKApiError $error
     */
    public function __construct(VKApiError $error) {
        parent::__construct(224, 'Too many ads posts', $error);
    }
}

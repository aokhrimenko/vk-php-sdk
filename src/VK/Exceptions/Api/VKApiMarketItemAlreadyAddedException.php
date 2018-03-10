<?php

namespace VK\Exceptions\Api;

use VK\Client\VKApiError;

class VKApiMarketItemAlreadyAddedException extends VKApiException {
    /**
     * VKApiMarketItemAlreadyAddedException constructor.
     * @param VKApiError $error
     */
    public function __construct(VKApiError $error) {
        parent::__construct(1404, 'Item already added to album', $error);
    }
}

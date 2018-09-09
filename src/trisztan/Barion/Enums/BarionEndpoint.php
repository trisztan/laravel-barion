<?php

namespace trisztan\Barion\Enums;

interface BarionEndpoint
{
    /**
     * The Barion test environment endpoint.
     */
    const TEST = 'https://api.test.barion.com/';

    /**
     * The Barion live environment endpoint.
     */
    const LIVE = 'https://api.barion.com/';
}

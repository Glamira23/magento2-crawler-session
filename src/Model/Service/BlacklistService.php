<?php

declare(strict_types=1);

namespace FriendsOfHyva\CrawlerSession\Model\Service;

use FriendsOfHyva\CrawlerSession\Helper\Config;

class BlacklistService
{
    /**
     * @var Config
     */
    private $config;

    public function __construct(Config $config) {
        $this->config = $config;
    }

    public function isBlacklisted(string $userAgent): bool
    {
        if (in_array($userAgent, $this->config->getBlacklist())) {
            return true;
        }

        return false;
    }
}
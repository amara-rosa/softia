<?php

namespace Softia\Challenge\Browser;

use GuzzleHttp\Cookie\CookieJarInterface;
use Psr\Http\Message\UriInterface;

/**
 * Interface BrowserInterface
 */
interface BrowserInterface
{
    /**
     * @param UriInterface
     *
     * @return PageInterface
     */
    public function accessUrl(UriInterface $url): PageInterface;

    /**
     * @param UriInterface
     * @param array
     *
     * @return PageInterface
     */
    public function submitForm(UriInterface $url, array $params): PageInterface;

    /**
     * @return PageInterface
     */
    public function getCurrentPage(): PageInterface;

    /**
     * @return CookieJarInterface
     */
    public function getCookies(): CookieJarInterface; 

    /**
     * @return void
     */
    public function navigateBack(): void;

    /**
     * @return void
     */
    public function navigateForward(): void;
}

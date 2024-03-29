<?php
/**
 * @link https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license https://craftcms.github.io/license/
 */

namespace craft\web\twig\variables;

use Craft;
use craft\db\Paginator;
use craft\helpers\UrlHelper;
use yii\base\BaseObject;

/**
 * Paginate variable class.
 *
 * @property string $basePath
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since 3.0
 */
class Paginate extends BaseObject
{
    // Static
    // =========================================================================

    /**
     * Creates a new instance based on a Paginator object
     *
     * @param Paginator $paginator
     * @return static
     */
    public static function create(Paginator $paginator): self
    {
        $pageResults = $paginator->getPageResults();
        $pageOffset = $paginator->getPageOffset();

        return new static([
            'first' => $pageOffset + 1,
            'last' => $pageOffset + count($pageResults),
            'total' => $paginator->getTotalResults(),
            'currentPage' => $paginator->getCurrentPage(),
            'totalPages' => $paginator->getTotalPages(),
        ]);
    }

    // Properties
    // =========================================================================

    /**
     * @var
     */
    public $first;

    /**
     * @var
     */
    public $last;

    /**
     * @var
     */
    public $total = 0;

    /**
     * @var
     */
    public $currentPage;

    /**
     * @var
     */
    public $totalPages = 0;

    /**
     * @var string Base path
     * @see getBasePath()
     * @see setBasePath()
     */
    private $_basePath;

    // Public Methods
    // =========================================================================

    /**
     * Returns the base path that should be used for pagination URLs.
     *
     * @return string
     */
    public function getBasePath(): string
    {
        if ($this->_basePath !== null) {
            return $this->_basePath;
        }
        return $this->_basePath = Craft::$app->getRequest()->getPathInfo();
    }

    /**
     * Sets the base path that should be used for pagination URLs.
     *
     * @param string $basePath
     */
    public function setBasePath(string $basePath)
    {
        $this->_basePath = $basePath;
    }

    /**
     * Returns the URL to a specific page
     *
     * @param int $page
     * @return string|null
     */
    public function getPageUrl(int $page)
    {
        if ($page < 1 || $page > $this->totalPages) {
            return null;
        }

        $path = $this->getBasePath();
        $params = [];
        $qsPageTrigger = null;

        if ($page != 1) {
            $pageTrigger = Craft::$app->getConfig()->getGeneral()->pageTrigger;

            if (!is_string($pageTrigger) || $pageTrigger === '') {
                $pageTrigger = 'p';
            }

            // Is this query string-based pagination?
            if ($pageTrigger[0] === '?') {
                $pageTrigger = $qsPageTrigger = trim($pageTrigger, '?=');

                // Avoid conflict with the path param
                $pathParam = Craft::$app->getConfig()->getGeneral()->pathParam;
                if ($pageTrigger === $pathParam) {
                    $pageTrigger = $pathParam === 'p' ? 'pg' : 'p';
                }

                $params = [$pageTrigger => $page];
            } else {
                if ($path) {
                    $path .= '/';
                }

                $path .= $pageTrigger . $page;
            }
        }

        // Build the URL with the same query string as the current request
        // todo: remove this condition and go straight to `else` in Craft 3.2
        if ($qsPageTrigger !== null) {
            $queryString = Craft::$app->getRequest()->getQueryString();
            $parts = explode('&', $queryString);
            $pathParam = Craft::$app->getConfig()->getGeneral()->pathParam;
            foreach ($parts as $key => $part) {
                if (strpos($part, $pathParam . '=') === 0 || strpos($part, $qsPageTrigger . '=') === 0) {
                    unset($parts[$key]);
                }
            }
            $url = UrlHelper::url($path, implode('&', $parts));
        } else {
            $url = UrlHelper::url($path, Craft::$app->getRequest()->getQueryStringWithoutPath());
        }

        // Then add the page param if there is one
        if (!empty($params)) {
            $url = UrlHelper::urlWithParams($url, $params);
        }

        return $url;
    }

    /**
     * Returns the URL to the first page.
     *
     * @return string|null
     */
    public function getFirstUrl()
    {
        return $this->getPageUrl(1);
    }

    /**
     * Returns the URL to the next page.
     *
     * @return string|null
     */
    public function getLastUrl()
    {
        return $this->getPageUrl($this->totalPages);
    }

    /**
     * Returns the URL to the previous page.
     *
     * @return string|null
     */
    public function getPrevUrl()
    {
        return $this->getPageUrl($this->currentPage - 1);
    }

    /**
     * Returns the URL to the next page.
     *
     * @return string|null
     */
    public function getNextUrl()
    {
        return $this->getPageUrl($this->currentPage + 1);
    }

    /**
     * Returns previous page URLs up to a certain distance from the current page.
     *
     * @param int|null $dist
     * @return array
     */
    public function getPrevUrls(int $dist = null): array
    {
        if ($dist !== null) {
            $start = $this->currentPage - $dist;
        } else {
            $start = 1;
        }

        return $this->getRangeUrls($start, $this->currentPage - 1);
    }

    /**
     * Returns next page URLs up to a certain distance from the current page.
     *
     * @param int|null $dist
     * @return array
     */
    public function getNextUrls(int $dist = null): array
    {
        if ($dist !== null) {
            $end = $this->currentPage + $dist;
        } else {
            $end = $this->totalPages;
        }

        return $this->getRangeUrls($this->currentPage + 1, $end);
    }

    /**
     * Returns a range of page URLs.
     *
     * @param int $start
     * @param int $end
     * @return array
     */
    public function getRangeUrls(int $start, int $end): array
    {
        if ($start < 1) {
            $start = 1;
        }

        if ($end > $this->totalPages) {
            $end = $this->totalPages;
        }

        $urls = [];

        for ($page = $start; $page <= $end; $page++) {
            $urls[$page] = $this->getPageUrl($page);
        }

        return $urls;
    }
}

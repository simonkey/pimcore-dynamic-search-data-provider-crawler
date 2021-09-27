<?php

namespace DsWebCrawlerBundle\Filter\PostFetch;

use VDB\Spider\Filter\PostFetchFilterInterface;
use VDB\Spider\Resource as SpiderResource;

class MaxContentSizeFilter implements PostFetchFilterInterface
{
    /**
     * @var float|int
     */
    protected $maxFileSize = 0;

    /**
     * @param int $maxFileSize
     */
    public function __construct($maxFileSize = 0)
    {
        $this->maxFileSize = (float) $maxFileSize;
    }

    /**
     * @param SpiderResource $resource
     *
     * @return bool
     */
    public function match(SpiderResource $resource): bool
    {
        $size = $resource->getResponse()->getBody()->getSize();
        $sizeMb = $size / 1024 / 1024;

        if ($this->maxFileSize === 0 || $sizeMb <= $this->maxFileSize) {
            return false;
        }

        return true;
    }
}

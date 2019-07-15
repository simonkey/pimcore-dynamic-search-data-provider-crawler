# Dynamic Search | Data Provider: Web Crawler

[![Software License](https://img.shields.io/badge/license-GPLv3-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Latest Release](https://img.shields.io/packagist/v/dachcom-digital/dynamic-search-data-provider-crawler.svg?style=flat-square)](https://packagist.org/packages/dachcom-digital/dynamic-search-data-provider-crawler)
[![Travis](https://img.shields.io/travis/com/dachcom-digital/pimcore-dynamic-search-data-provider-crawler/master.svg?style=flat-square)](https://travis-ci.com/dachcom-digital/pimcore-dynamic-search-data-provider-crawler)
[![PhpStan](https://img.shields.io/badge/PHPStan-level%202-brightgreen.svg?style=flat-square)](#)

A Spider Crawler Extension for [Pimcore Dynamic Search](https://github.com/dachcom-digital/pimcore-dynamic-search).


## Requirements
- Pimcore >= 5.8.0
- Pimcore Dynamic Search

***

## Basic Setup

```yaml
dynamic_search:
    context:
        default:
            data_provider:
                service: 'web_crawler'
                options:
                    always:
                        own_host_only: true
                    full_dispatch:
                        seed: 'http://your-domain.test'
                        valid_links:
                            - '@^http://your-domain.test.*@i'
                        user_invalid_links:
                            - '@^http://your-domain.test\/members.*@i'
                    single_dispatch:
                        host: 'http://your-domain.test.test'
                normalizer:
                    service: 'web_crawler_localized_resource_normalizer'
```

***

## Provider Options

### always

| Name                                 | Default Value                      | Description |
|:-------------------------------------|:-----------------------------------|:------------|
|`own_host_only`                       | false                              |             |
|`allow_subdomains`                    | false                              |             |
|`allow_query_in_url`                  | false                              |             |
|`allow_hash_in_url`                   | false                              |             |
|`allowed_mime_types`                  | ['text/html', 'application/pdf']   |             |
|`allowed_schemes`                     | ['http']                           |             |
|`content_max_size`                    | 0                                  |             |

### full_dispatch

| Name                                 | Default Value | Description |
|:-------------------------------------|:--------------|:------------|
|`seed`                                | null          |             |
|`valid_links`                         | []            |             |
|`user_invalid_links`                  | []            |             |
|`max_link_depth`                      | 15            |             |
|`max_crawl_limit`                     | 0             |             |

### single_dispatch

| Name                                 | Default Value | Description |
|:-------------------------------------|:--------------|:------------|
|`host`                                | null          |             |

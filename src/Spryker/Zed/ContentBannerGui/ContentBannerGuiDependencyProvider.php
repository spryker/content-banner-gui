<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ContentBannerGui;

use Spryker\Zed\ContentBannerGui\Dependency\Facade\ContentBannerGuiToContentBannerFacadeBridge;
use Spryker\Zed\ContentBannerGui\Dependency\Service\ContentBannerGuiToUtilEncodingBridge;
use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;

/**
 * @method \Spryker\Zed\ContentBannerGui\ContentBannerGuiConfig getConfig()
 */
class ContentBannerGuiDependencyProvider extends AbstractBundleDependencyProvider
{
    /**
     * @var string
     */
    public const FACADE_CONTENT_BANNER = 'FACADE_CONTENT_BANNER';

    /**
     * @var string
     */
    public const SERVICE_UTIL_ENCODING = 'SERVICE_UTIL_ENCODING';

    public function provideCommunicationLayerDependencies(Container $container): Container
    {
        $container = $this->addContentBannerFacade($container);
        $container = $this->addUtilEncoding($container);

        return $container;
    }

    protected function addContentBannerFacade(Container $container): Container
    {
        $container->set(static::FACADE_CONTENT_BANNER, function (Container $container) {
            return new ContentBannerGuiToContentBannerFacadeBridge($container->getLocator()->contentBanner()->facade());
        });

        return $container;
    }

    protected function addUtilEncoding(Container $container): Container
    {
        $container->set(static::SERVICE_UTIL_ENCODING, function (Container $container) {
            return new ContentBannerGuiToUtilEncodingBridge($container->getLocator()->utilEncoding()->service());
        });

        return $container;
    }
}

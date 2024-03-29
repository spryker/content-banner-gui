<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ContentBannerGui;

use Spryker\Zed\Kernel\AbstractBundleConfig;

/**
 * @method \Spryker\Shared\ContentBannerGui\ContentBannerGuiConfig getSharedConfig()
 */
class ContentBannerGuiConfig extends AbstractBundleConfig
{
    /**
     * @api
     *
     * @return array<string, string>
     */
    public function getContentWidgetTemplates(): array
    {
        return $this->getSharedConfig()->getContentWidgetTemplates();
    }

    /**
     * @api
     *
     * @return string
     */
    public function getTwigFunctionName(): string
    {
        return $this->getSharedConfig()->getTwigFunctionName();
    }
}

<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\LoginAsCustomerUi\Model\Config\Source;

/**
 * @inheritdoc
 */
class StoreViewLogin implements \Magento\Framework\Data\OptionSourceInterface
{
    /**
     * @const int
     */
    private const AUTODETECT = 0;

    /**
     * @const int
     */
    private const MANUAL = 1;

    /**
     * @inheritdoc
     */
    public function toOptionArray(): array
    {
        return  [
            ['value' => self::AUTODETECT, 'label' => __('Auto-Detection (default)')],
            ['value' => self::MANUAL, 'label' => __('Manual Selection')],
        ];
    }
}

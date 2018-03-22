<?php
/**
 * GiaPhuGroup Co., Ltd.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the GiaPhuGroup.com license that is
 * available through the world-wide-web at this URL:
 * https://www.giaphugroup.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    PHPCuong
 * @package     PHPCuong_Core
 * @copyright   Copyright (c) 2018-2019 GiaPhuGroup Co., Ltd. All rights reserved. (http://www.giaphugroup.com/)
 * @license     https://www.giaphugroup.com/LICENSE.txt
 */

namespace PHPCuong\Core\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use PHPCuong\Core\Helper\Data as PHPCuongCoreHelperData;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class InstallData implements InstallDataInterface
{
    const COMPANY_NAME = 'GiaPhuGroup Co., Ltd.';

    const COPYRIGHT = 'Copyright © 2017-2019 <a href="http://www.giaphugroup.com/" target="_blank">GiaPhuGroup Co., Ltd.</a> All rights reserved.';

    const SKYPE_ID = 'cuongnq87';

    const EMAIL = 'bestearnmoney87@gmail.com';

    const RATING_IN_MAGENTO2 = '$30/hour';

    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $args = [];

        $args[] = [
            'scope' => 'default',
            'scope_id' => 0,
            'path' => PHPCuongCoreHelperData::XML_PATH_THE_COMPANY_NAME,
            'value' => self::COMPANY_NAME,
        ];

        $args[] = [
            'scope' => 'default',
            'scope_id' => 0,
            'path' => PHPCuongCoreHelperData::XML_PATH_COPYRIGHT,
            'value' => self::COPYRIGHT,
        ];

        $args[] = [
            'scope' => 'default',
            'scope_id' => 0,
            'path' => PHPCuongCoreHelperData::XML_PATH_SKYPE_ID,
            'value' => self::SKYPE_ID,
        ];

        $args[] = [
            'scope' => 'default',
            'scope_id' => 0,
            'path' => PHPCuongCoreHelperData::XML_PATH_EMAIL,
            'value' => self::EMAIL,
        ];

        $args[] = [
            'scope' => 'default',
            'scope_id' => 0,
            'path' => PHPCuongCoreHelperData::XML_PATH_RATING_IN_MAGENTO2,
            'value' => self::RATING_IN_MAGENTO2,
        ];

        foreach ($args as $arg) {
            $setup->getConnection()
                ->insertOnDuplicate($setup->getTable('core_config_data'), $arg, ['value']);
        }
    }
}

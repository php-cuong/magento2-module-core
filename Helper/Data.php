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

namespace PHPCuong\Core\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    const XML_PATH_THE_COMPANY_NAME = 'phpcuong_core/company_name';
    const XML_PATH_COPYRIGHT = 'phpcuong_core/copyright';
    const XML_PATH_SKYPE_ID = 'phpcuong_core/skype';
    const XML_PATH_EMAIL = 'phpcuong_core/email';
    const XML_PATH_RATING_IN_MAGENTO2 = 'phpcuong_core/rating_in_magento2';

    /**
     * @param \Magento\Framework\App\Helper\Context $context
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }

    /**
     * Retrieve the company name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_THE_COMPANY_NAME,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Retrieve the copyright
     *
     * @return string
     */
    public function getCopyright()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_COPYRIGHT,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Retrieve the skype
     *
     * @return string
     */
    public function getSkype()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_SKYPE_ID,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Retrieve the email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_EMAIL,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Retrieve the Rating in Magento 2 ($30/hour)
     *
     * @return string
     */
    public function getRatingInMagento2()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_RATING_IN_MAGENTO2,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
}

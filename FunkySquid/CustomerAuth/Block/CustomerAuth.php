<?php
/**
 * Copyright © Funky Squid Labs Ltd. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace FunkySquid\CustomerAuth\Block;

use Magento\Framework\View\Element\Template;
use Magento\Customer\Model\Session;

class CustomerAuth extends Template
{
    protected $customerSession;

    public function __construct(
        Template\Context $context,
        Session $customerSession,
        array $data = []
    ) {
        $this->customerSession = $customerSession;
        parent::__construct($context, $data);
    }

    public function isLoggedIn()
    {
        return $this->customerSession->isLoggedIn();
    }

    public function getLoginUrl()
    {
        return $this->getUrl('customer/account/login');
    }

    public function getLogoutUrl()
    {
        return $this->getUrl('customer/account/logout');
    }

    public function getAccountUrl()
    {
        return $this->getUrl('customer/account');
    }
}

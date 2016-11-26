<?php
/**
 * SOZO Design
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category    SOZO Design
 * @package     Sozo_JivoChat
 * @copyright   Copyright (c) 2016 SOZO Design (http://www.sozodesign.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 *
 */

namespace Sozo\JivoChat\Block;

use Magento\Framework\View\Element\Template;
use Sozo\JivoChat\Helper\Data;

class Display extends Template
{
    /**
     * @var \Sozo\JivoChat\Helper\Data
     */
    protected $chatHelper;

    public function __construct(Data $chatHelper)
    {
        $this->chatHelper = $chatHelper;
    }

    /**
     * Generate the JivoChat output
     *
     * @return string
     */
    public function _toHtml()
    {
        if ($this->chatHelper->getEnabled()) {
            $this
                ->setTemplate('chat/widget.phtml')
                ->setKey($this->chatHelper->getWidgetId()
                ->setEnabled($this->chatHelper->getEnabled()));
            return parent::_toHtml();
        }
        return '';
    }
}

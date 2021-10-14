<?php

namespace Hafiz\Product\Block\Product\View;

use Magento\Framework\View\Element\Template\Context;
use Hafiz\Product\Helper\Data;


class Viewed extends \Magento\Framework\View\Element\Template
{

  protected $helperData;
  public function __construct(
      Context $context,
      Data $helperData

  ) {
      $this->helperData = $helperData;
      parent::__construct($context);
  }


  public function getProductDisclaimer()
  {
      return $this->helperData->getProductDisclaimer();
  }

}

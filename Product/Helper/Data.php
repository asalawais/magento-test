<?php
/**
 * Helper
 *
 * Hafiz\Product\Helper
 */
 namespace Hafiz\Product\Helper;
 use Magento\Framework\App\Config\ScopeConfigInterface;
 use Magento\Framework\App\Helper\AbstractHelper;
 use Magento\Framework\App\Helper\Context;
 class Data extends AbstractHelper
 {

private $productRepository;
    public function __construct( Context $context,
    \Magento\Cms\Model\Template\FilterProvider $filterProvider,
    \Magento\Store\Model\StoreManagerInterface $storeManager,
    \Magento\Catalog\Api\ProductRepositoryInterface $productRepository
    )
    {
      $this->_filterProvider = $filterProvider;
      $this->storeManager = $storeManager;
      $this->productRepository = $productRepository;
    parent::__construct($context);
    }

    public function getProductDisclaimer($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
   {
     return $this->scopeConfig->getValue(
       'product_disclaimer/general/product_disclaimer_value',$scope);
   }





}

<?php

namespace Karunais\SubtitleSection\Block\Catalog\Product;

class SubtitleSection extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Karunais\SubtitleSection\Helper\Data
     */
    protected $_helper;

    /**
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = [],
        \Karunais\SubtitleSection\Helper\Data $helper,
        \Magento\Framework\ObjectManagerInterface $objectManager
    ) {
        parent::__construct($context, $data);

        $this->_helper
            = $helper;
        $this->_objectManager = $objectManager;
    }

    public function getBlockLabel(){
        return $this->_helper->getBlockLabel();
    }

    public function getFieldType(){
        return $this->_helper->getFieldType();
    }

    public function getFile(){
        return $this->_helper->getFile();
    }

    public function getTextAlign(){
        return $this->_helper->getTextAlign();
    }

    protected function _toHtml()
    {
       if ($this->_helper->getEnable()){
            return parent::_toHtml();
       }
        else {
            return '';
        }
    }

    public function getCollection()
    {
        $model = $this->_objectManager->create('Karunais\SubtitleSection\Model\SubtitleSection');
        $collection = $model->getCollection();

        return $collection;
    }

}

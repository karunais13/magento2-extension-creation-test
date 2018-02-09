<?php

namespace Karunais\SubtitleSection\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterfac
     */
    protected $_scopeConfig;

    CONST ENABLE      = 'karunais_subtitlesection/general/enable';
    CONST FIELD_TYPE  = 'karunais_subtitlesection/general/field_type';
    CONST BLOCK_LABEL = 'karunais_subtitlesection/general/block_label';
    CONST FILE_UP     = 'karunais_subtitlesection/general/file_upload';
    CONST TEXT_ALIGN  = 'karunais_subtitlesection/general/text_align';

    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        parent::__construct($context);

        $this->_scopeConfig = $scopeConfig;
    }

    public function getEnable(){
        return $this->_scopeConfig->getValue(self::ENABLE);
    }

    public function getFieldType(){
        return $this->_scopeConfig->getValue(self::FIELD_TYPE);
    }

    public function getBlockLabel(){
        return $this->_scopeConfig->getValue(self::BLOCK_LABEL);
    }

    public function getFile(){
        return $this->_scopeConfig->getValue(self::FILE_UP);
    }

    public function getTextAlign(){
        return $this->_scopeConfig->getValue(self::TEXT_ALIGN);
    }
}

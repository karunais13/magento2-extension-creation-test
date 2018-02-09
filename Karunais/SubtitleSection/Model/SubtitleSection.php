<?php

namespace Karunais\SubtitleSection\Model;

class SubtitleSection extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->_init('Karunais\SubtitleSection\Model\ResourceModel\SubtitleSection');
    }
}

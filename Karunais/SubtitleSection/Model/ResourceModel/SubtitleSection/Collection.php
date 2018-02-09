<?php

namespace Karunais\SubtitleSection\Model\ResourceModel\SubtitleSection;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Karunais\SubtitleSection\Model\SubtitleSection', 'Karunais\SubtitleSection\Model\ResourceModel\SubtitleSection');
    }
}

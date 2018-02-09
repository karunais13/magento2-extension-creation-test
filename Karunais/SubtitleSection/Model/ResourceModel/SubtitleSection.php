<?php

namespace Karunais\SubtitleSection\Model\ResourceModel;

class SubtitleSection extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Model Initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('karunais_subtitlesection', 'id');
    }
}

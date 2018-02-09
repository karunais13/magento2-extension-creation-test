<?php
namespace Karunais\SubtitleSection\Model\Source;

class FieldType implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array(
                'value' => '1',
                'label' => __('Image')
            ),
            array(
                'value' => '2',
                'label' => __('Text')
            )
        );
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return ['1' => __('Image'),
                '2' => __('Text')
        ];
    }
}

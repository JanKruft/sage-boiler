<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

/**
 * Example
 */
class Example extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $example = new FieldsBuilder('example');

        $example
            ->setLocation('post_type', '==', 'post');

        $example
            ->addRepeater('items')
            ->addText('item')
            ->endRepeater()
            ->addCheckbox('checkbox', ['true', 'false']);

        return $example->build();
    }
}

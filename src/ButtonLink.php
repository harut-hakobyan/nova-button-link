<?php

namespace Customfield\ButtonLink;

use Laravel\Nova\Fields\Field;

class ButtonLink extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'button-link';

    public string $label = 'OK';

    public string $path = '';

    public string $buttonClasses = '';

    public string $fieldClasses = '';

    public bool $inline = false;




    public function label($label)
    {
        $this->label = $label;

        return $this;
    }

    public function link($path)
    {
        $this->path = $path;

        return $this;
    }

    public function buttonClasses($classes)
    {
        $this->buttonClasses = $classes;

        return $this;
    }

    public function fieldClasses($classes)
    {
        $this->fieldClasses = $classes;

        return $this;
    }

    public function inline($inline = true)
    {
        $this->inline = $inline;

        return $this;
    }

    public function resolve($resource, $attribute = null)
    {
        $this->withMeta([
            'label' => $this->label,
            'path' => $this->path,
            'buttonClasses' => $this->buttonClasses,
            'fieldClasses' => $this->fieldClasses,
            'inline' => $this->inline,
        ]);
    }
}

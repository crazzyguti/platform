<?php

declare(strict_types=1);

namespace Orchid\Screen\Fields;

use Orchid\Screen\Field;

/**
 * Class Input.
 *
 * @method self accept($value = true)
 * @method self accesskey($value = true)
 * @method self autocomplete($value = true)
 * @method self autofocus($value = true)
 * @method self checked($value = true)
 * @method self disabled($value = true)
 * @method self form($value = true)
 * @method self formaction($value = true)
 * @method self formenctype($value = true)
 * @method self formmethod($value = true)
 * @method self formnovalidate($value = true)
 * @method self formtarget($value = true)
 * @method self list($value = true)
 * @method self max(int $value)
 * @method self maxlength(int $value)
 * @method self min(int $value)
 * @method self multiple($value = true)
 * @method self name(string $value = null)
 * @method self pattern($value = true)
 * @method self placeholder(string $value = null)
 * @method self readonly($value = true)
 * @method self required(bool $value = true)
 * @method self size($value = true)
 * @method self src($value = true)
 * @method self step($value = true)
 * @method self tabindex($value = true)
 * @method self type($value = true)
 * @method self value($value = true)
 * @method self help(string $value = null)
 * @method self popover(string $value = null)
 * @method self mask($value = true)
 */
class Input extends Field
{
    /**
     * @var string
     */
    public $view = 'platform::fields.input';

    /**
     * Default attributes value.
     *
     * @var array
     */
    public $attributes = [
        'class' => 'form-control',
    ];

    /**
     * Attributes available for a particular tag.
     *
     * @var array
     */
    public $inlineAttributes = [
        'accept',
        'accesskey',
        'autocomplete',
        'autofocus',
        'checked',
        'disabled',
        'form',
        'formaction',
        'formenctype',
        'formmethod',
        'formnovalidate',
        'formtarget',
        'list',
        'max',
        'maxlength',
        'min',
        'multiple',
        'name',
        'pattern',
        'placeholder',
        'readonly',
        'required',
        'size',
        'src',
        'step',
        'tabindex',
        'type',
        'value',
        'mask',
    ];

    /**
     * @param string|null $name
     *
     * @return self
     */
    public static function make(string $name = null): self
    {
        return (new static())->name($name);
    }

    /**
     * @param string|array $mask
     *
     * @return mixed
     */
    public function modifyMask($mask)
    {
        if (is_array($mask)) {
            $this->attributes['mask'] = json_encode($mask);
        }

        return $this->attributes['mask'];
    }
}

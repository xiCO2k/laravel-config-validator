<?php

namespace AshAllenDesign\ConfigValidator\App\Services;

class Rule
{
    /**
     * The config field name being validated.
     *
     * @var string
     */
    private $fieldName;

    /**
     * The validation used for validating the config field.
     *
     * @var array
     */
    private $rules = [];

    /**
     * The custom messages being used when validating the
     * config field.
     *
     * @var array
     */
    private $messages = [];

    /**
     * Rule constructor.
     *
     * @param  string  $fieldName
     */
    public function __construct(string $fieldName)
    {
        $this->fieldName = $fieldName;
    }

    /**
     * A helper method used for creating a new rule.
     *
     * @param  string  $fieldName
     * @return static
     */
    public static function make(string $fieldName): Rule
    {
        return new static($fieldName);
    }

    /**
     * Set the rules used for validating the config.
     *
     * @param  array  $rules
     * @return $this
     */
    public function rules(array $rules): self
    {
        $this->rules = array_merge($this->rules, $rules);

        return $this;
    }

    /**
     * Set the custom messages used when validating the
     * config.
     *
     * @param  array  $messages
     * @return $this
     */
    public function messages(array $messages): self
    {
        $this->messages = array_merge($this->messages, $messages);

        return $this;
    }

    /**
     * Get the config field name that this rule relates to.
     *
     * @return string
     */
    public function getFieldName(): string
    {
        return $this->fieldName;
    }

    /**
     * Get the validation rules set within this rule.
     *
     * @return array
     */
    public function getRules(): array
    {
        return $this->rules;
    }

    /**
     * Get the validation messages set within this rule.
     *
     * @return array
     */
    public function getMessages(): array
    {
        return $this->messages;
    }
}

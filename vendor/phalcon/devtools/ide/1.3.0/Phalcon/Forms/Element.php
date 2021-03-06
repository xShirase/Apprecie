<?php 

namespace Phalcon\Forms {

    /**
     * Phalcon\Forms\Element
     *
     * This is a base class for form elements
     */
    abstract class Element implements \Phalcon\Forms\ElementInterface
    {

        protected $_form;

        protected $_name;

        protected $_value;

        protected $_label;

        protected $_attributes;

        protected $_validators;

        protected $_filters;

        protected $_options;

        protected $_messages;

        /**
         * \Phalcon\Forms\Element constructor
         *
         * @param string $name
         * @param array $attributes
         */
        public function __construct($name, $attributes=null)
        {
        }


        /**
         * Sets the parent form to the element
         *
         * @param \Phalcon\Forms\Form $form
         * @return \Phalcon\Forms\ElementInterface
         */
        public function setForm($form)
        {
        }


        /**
         * Returns the parent form to the element
         *
         * @return \Phalcon\Forms\ElementInterface
         */
        public function getForm()
        {
        }


        /**
         * Sets the element's name
         *
         * @param string $name
         * @return \Phalcon\Forms\ElementInterface
         */
        public function setName($name)
        {
        }


        /**
         * Returns the element's name
         *
         * @return string
         */
        public function getName()
        {
        }


        /**
         * Sets the element's filters
         *
         * @param array|string $filters
         * @return \Phalcon\Forms\ElementInterface
         */
        public function setFilters($filters)
        {
        }


        /**
         * Adds a filter to current list of filters
         *
         * @param string $filter
         * @return \Phalcon\Forms\ElementInterface
         */
        public function addFilter($filter)
        {
        }


        /**
         * Returns the element's filters
         *
         * @return mixed
         */
        public function getFilters()
        {
        }


        /**
         * Adds a group of validators
         *
         * @param \Phalcon\Validation\ValidatorInterface[]
         * @return \Phalcon\Forms\ElementInterface
         */
        public function addValidators($validators, $merge=null)
        {
        }


        /**
         * Adds a validator to the element
         *
         * @param \Phalcon\Validation\ValidatorInterface
         * @return \Phalcon\Forms\ElementInterface
         */
        public function addValidator($validator)
        {
        }


        /**
         * Returns the validators registered for the element
         *
         * @return \Phalcon\Validation\ValidatorInterface[]
         */
        public function getValidators()
        {
        }


        /**
         * Returns an array of prepared attributes for \Phalcon\Tag helpers
         * according to the element's parameters
         *
         * @param array $attributes
         * @param boolean $useChecked
         * @return array
         */
        public function prepareAttributes($attributes=null, $useChecked=null)
        {
        }


        /**
         * Sets a default attribute for the element
         *
         * @param string $attribute
         * @param mixed $value
         * @return \Phalcon\Forms\ElementInterface
         */
        public function setAttribute($attribute, $value)
        {
        }


        /**
         * Returns the value of an attribute if present
         *
         * @param string $attribute
         * @param mixed $defaultValue
         * @return mixed
         */
        public function getAttribute($attribute, $defaultValue=null)
        {
        }


        /**
         * Sets default attributes for the element
         *
         * @param array $attributes
         * @return \Phalcon\Forms\ElementInterface
         */
        public function setAttributes($attributes)
        {
        }


        /**
         * Returns the default attributes for the element
         *
         * @return array
         */
        public function getAttributes()
        {
        }


        /**
         * Sets an option for the element
         *
         * @param string $option
         * @param mixed $value
         * @return \Phalcon\Forms\ElementInterface
         */
        public function setUserOption($option, $value)
        {
        }


        /**
         * Returns the value of an option if present
         *
         * @param string $option
         * @param mixed $defaultValue
         * @return mixed
         */
        public function getUserOption($option, $defaultValue=null)
        {
        }


        /**
         * Sets options for the element
         *
         * @param array $options
         * @return \Phalcon\Forms\ElementInterface
         */
        public function setUserOptions($options)
        {
        }


        /**
         * Returns the options for the element
         *
         * @return array
         */
        public function getUserOptions()
        {
        }


        /**
         * Sets the element label
         *
         * @param string $label
         * @return \Phalcon\Forms\ElementInterface
         */
        public function setLabel($label)
        {
        }


        /**
         * Returns the element's label
         *
         * @return string
         */
        public function getLabel()
        {
        }


        /**
         * Generate the HTML to label the element
         *
         * @return string
         */
        public function label($attributes)
        {
        }


        /**
         * Sets a default value in case the form does not use an entity
         * or there is no value available for the element in $_POST
         *
         * @param mixed $value
         * @return \Phalcon\Forms\ElementInterface
         */
        public function setDefault($value)
        {
        }


        /**
         * Returns the default value assigned to the element
         *
         * @return mixed
         */
        public function getDefault()
        {
        }


        /**
         * Returns the element's value
         *
         * @return mixed
         */
        public function getValue()
        {
        }


        /**
         * Returns the messages that belongs to the element
         * The element needs to be attached to a form
         *
         * @return \Phalcon\Validation\Message\Group
         */
        public function getMessages()
        {
        }


        /**
         * Checks whether there are messages attached to the element
         *
         * @return boolean
         */
        public function hasMessages()
        {
        }


        /**
         * Sets the validation messages related to the element
         *
         * @param \Phalcon\Validation\Message\Group $group
         * @return \Phalcon\Forms\ElementInterface
         */
        public function setMessages($group)
        {
        }


        /**
         * Appends a message to the internal message list
         *
         * @param \Phalcon\Validation\Message $message
         * @return \Phalcon\Forms\ElementInterface
         */
        public function appendMessage($message)
        {
        }


        /**
         * Clears every element in the form to its default value
         *
         * @return \Phalcon\Forms\Element
         */
        public function clear()
        {
        }


        /**
         * Magic method __toString renders the widget without attributes
         *
         * @return string
         */
        public function __toString()
        {
        }

    }
}

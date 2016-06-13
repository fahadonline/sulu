<?php

namespace ProxyManagerGeneratedProxy\__PM__\Sulu\Component\DocumentManager\Document\UnknownDocument;

class Generateda84aebfffbf882fd8bddc950faa89e05 extends \Sulu\Component\DocumentManager\Document\UnknownDocument implements \ProxyManager\Proxy\GhostObjectInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer575aa1ae25b33826768405 = null;

    /**
     * @var bool tracks initialization status - true while the object is initializing
     */
    private $initializationTracker575aa1ae25c03375400522 = false;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties575aa1ae254da642087774 = array(
        
    );

    /**
     * @var mixed[] map of default property values of the parent class
     */
    private static $publicPropertiesDefaults575aa1ae25a3a829237941 = array(
        
    );

    private static $signaturea84aebfffbf882fd8bddc950faa89e05 = 'YTozOntzOjk6ImNsYXNzTmFtZSI7czo1NToiU3VsdVxDb21wb25lbnRcRG9jdW1lbnRNYW5hZ2VyXERvY3VtZW50XFVua25vd25Eb2N1bWVudCI7czo3OiJmYWN0b3J5IjtzOjQ0OiJQcm94eU1hbmFnZXJcRmFjdG9yeVxMYXp5TG9hZGluZ0dob3N0RmFjdG9yeSI7czoxOToicHJveHlNYW5hZ2VyVmVyc2lvbiI7czo1OiIxLjAuMCI7fQ==';

    /**
     * {@inheritDoc}
     */
    public function getNodeName()
    {
        $this->initializer575aa1ae25b33826768405 && $this->callInitializer575aa1ae260cc020277461('getNodeName', array());

        return parent::getNodeName();
    }

    /**
     * {@inheritDoc}
     */
    public function getUuid()
    {
        $this->initializer575aa1ae25b33826768405 && $this->callInitializer575aa1ae260cc020277461('getUuid', array());

        return parent::getUuid();
    }

    /**
     * Triggers initialization logic for this ghost object
     */
    private function callInitializer575aa1ae260cc020277461($methodName, array $parameters)
    {
        if ($this->initializationTracker575aa1ae25c03375400522 || ! $this->initializer575aa1ae25b33826768405) {
            return;
        }

        $this->initializationTracker575aa1ae25c03375400522 = true;

        foreach (self::$publicPropertiesDefaults575aa1ae25a3a829237941 as $key => $default) {
            $this->$key = $default;
        }

        $this->initializer575aa1ae25b33826768405->__invoke($this, $methodName, $parameters, $this->initializer575aa1ae25b33826768405);

        $this->initializationTracker575aa1ae25c03375400522 = false;
    }

    /**
     * @override constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public function __construct($initializer)
    {
        $this->initializer575aa1ae25b33826768405 = $initializer;
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer575aa1ae25b33826768405 && $this->callInitializer575aa1ae260cc020277461('__get', array('name' => $name));

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            $backtrace = debug_backtrace(false);
            trigger_error('Undefined property: ' . get_parent_class($this) . '::$' . $name . ' in ' . $backtrace[0]['file'] . ' on line ' . $backtrace[0]['line'], \E_USER_NOTICE);
            return $targetObject->$name;;
            return;
        }

        $targetObject = unserialize(sprintf('O:%d:"%s":0:{}', strlen(get_parent_class($this)), get_parent_class($this)));
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __set($name, $value)
    {
        $this->initializer575aa1ae25b33826768405 && $this->callInitializer575aa1ae260cc020277461('__set', array('name' => $name, 'value' => $value));

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            return $targetObject->$name = $value;;
            return;
        }

        $targetObject = unserialize(sprintf('O:%d:"%s":0:{}', strlen(get_parent_class($this)), get_parent_class($this)));
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer575aa1ae25b33826768405 && $this->callInitializer575aa1ae260cc020277461('__isset', array('name' => $name));

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            return isset($targetObject->$name);;
            return;
        }

        $targetObject = unserialize(sprintf('O:%d:"%s":0:{}', strlen(get_parent_class($this)), get_parent_class($this)));
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer575aa1ae25b33826768405 && $this->callInitializer575aa1ae260cc020277461('__unset', array('name' => $name));

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            unset($targetObject->$name);;
            return;
        }

        $targetObject = unserialize(sprintf('O:%d:"%s":0:{}', strlen(get_parent_class($this)), get_parent_class($this)));
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
            $backtrace = debug_backtrace(true);
            $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \stdClass();
            $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer575aa1ae25b33826768405 && $this->callInitializer575aa1ae260cc020277461('__clone', array());
    }

    public function __sleep()
    {
        $this->initializer575aa1ae25b33826768405 && $this->callInitializer575aa1ae260cc020277461('__sleep', array());

        return array_keys((array) $this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer575aa1ae25b33826768405 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer575aa1ae25b33826768405;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy()
    {
        return $this->initializer575aa1ae25b33826768405 && $this->callInitializer575aa1ae260cc020277461('initializeProxy', array());
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized()
    {
        return ! $this->initializer575aa1ae25b33826768405;
    }


}

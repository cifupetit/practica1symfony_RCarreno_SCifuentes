<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Jugador extends \AppBundle\Entity\Jugador implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Jugador' . "\0" . 'equip', '' . "\0" . 'AppBundle\\Entity\\Jugador' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Jugador' . "\0" . 'nom', '' . "\0" . 'AppBundle\\Entity\\Jugador' . "\0" . 'cognom', '' . "\0" . 'AppBundle\\Entity\\Jugador' . "\0" . 'dataNaixement', '' . "\0" . 'AppBundle\\Entity\\Jugador' . "\0" . 'sou', '' . "\0" . 'AppBundle\\Entity\\Jugador' . "\0" . 'iDequip'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Jugador' . "\0" . 'equip', '' . "\0" . 'AppBundle\\Entity\\Jugador' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Jugador' . "\0" . 'nom', '' . "\0" . 'AppBundle\\Entity\\Jugador' . "\0" . 'cognom', '' . "\0" . 'AppBundle\\Entity\\Jugador' . "\0" . 'dataNaixement', '' . "\0" . 'AppBundle\\Entity\\Jugador' . "\0" . 'sou', '' . "\0" . 'AppBundle\\Entity\\Jugador' . "\0" . 'iDequip'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Jugador $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setCognom($cognom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCognom', [$cognom]);

        return parent::setCognom($cognom);
    }

    /**
     * {@inheritDoc}
     */
    public function getCognom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCognom', []);

        return parent::getCognom();
    }

    /**
     * {@inheritDoc}
     */
    public function setDataNaixement($dataNaixement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataNaixement', [$dataNaixement]);

        return parent::setDataNaixement($dataNaixement);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataNaixement()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataNaixement', []);

        return parent::getDataNaixement();
    }

    /**
     * {@inheritDoc}
     */
    public function setSou($sou)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSou', [$sou]);

        return parent::setSou($sou);
    }

    /**
     * {@inheritDoc}
     */
    public function getSou()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSou', []);

        return parent::getSou();
    }

    /**
     * {@inheritDoc}
     */
    public function setIDequip($iDequip)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIDequip', [$iDequip]);

        return parent::setIDequip($iDequip);
    }

    /**
     * {@inheritDoc}
     */
    public function getIDequip()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIDequip', []);

        return parent::getIDequip();
    }

}
<?php

namespace Proxies\__CG__\Ct\Service\MetierManagerBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class CtVisiteExtraTarif extends \Ct\Service\MetierManagerBundle\Entity\CtVisiteExtraTarif implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtVisiteExtraTarif' . "\0" . 'id', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtVisiteExtraTarif' . "\0" . 'vetAnnee', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtVisiteExtraTarif' . "\0" . 'vetPrix', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtVisiteExtraTarif' . "\0" . 'ctVisiteExtra'];
        }

        return ['__isInitialized__', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtVisiteExtraTarif' . "\0" . 'id', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtVisiteExtraTarif' . "\0" . 'vetAnnee', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtVisiteExtraTarif' . "\0" . 'vetPrix', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtVisiteExtraTarif' . "\0" . 'ctVisiteExtra'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (CtVisiteExtraTarif $proxy) {
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
    public function setVetAnnee($vetAnnee)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVetAnnee', [$vetAnnee]);

        return parent::setVetAnnee($vetAnnee);
    }

    /**
     * {@inheritDoc}
     */
    public function getVetAnnee()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVetAnnee', []);

        return parent::getVetAnnee();
    }

    /**
     * {@inheritDoc}
     */
    public function setVetPrix($vetPrix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVetPrix', [$vetPrix]);

        return parent::setVetPrix($vetPrix);
    }

    /**
     * {@inheritDoc}
     */
    public function getVetPrix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVetPrix', []);

        return parent::getVetPrix();
    }

    /**
     * {@inheritDoc}
     */
    public function setCtVisiteExtra(\Ct\Service\MetierManagerBundle\Entity\CtVisiteExtra $ctVisiteExtra = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCtVisiteExtra', [$ctVisiteExtra]);

        return parent::setCtVisiteExtra($ctVisiteExtra);
    }

    /**
     * {@inheritDoc}
     */
    public function getCtVisiteExtra()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCtVisiteExtra', []);

        return parent::getCtVisiteExtra();
    }

}

<?php

namespace Proxies\__CG__\Ct\Service\MetierManagerBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class CtReception extends \Ct\Service\MetierManagerBundle\Entity\CtReception implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'id', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'rcpMiseService', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'rcpImmatriculation', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'rcpProprietaire', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'rcpProfession', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'rcpAdresse', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'rcpNbrAssis', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'rcpNbrDebout', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'rcpNumPv', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'ctCentre', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'ctMotif', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'ctTypeReception', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'ctUser', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'ctUtilisation', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'ctVehicule', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'ctSourceEnergie', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'ctCarosserie', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'rcpNumGroup', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'ctGenre', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'rcpCreated'];
        }

        return ['__isInitialized__', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'id', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'rcpMiseService', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'rcpImmatriculation', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'rcpProprietaire', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'rcpProfession', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'rcpAdresse', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'rcpNbrAssis', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'rcpNbrDebout', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'rcpNumPv', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'ctCentre', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'ctMotif', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'ctTypeReception', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'ctUser', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'ctUtilisation', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'ctVehicule', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'ctSourceEnergie', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'ctCarosserie', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'rcpNumGroup', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'ctGenre', '' . "\0" . 'Ct\\Service\\MetierManagerBundle\\Entity\\CtReception' . "\0" . 'rcpCreated'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (CtReception $proxy) {
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
    public function setRcpMiseService($rcpMiseService)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRcpMiseService', [$rcpMiseService]);

        return parent::setRcpMiseService($rcpMiseService);
    }

    /**
     * {@inheritDoc}
     */
    public function getRcpMiseService()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRcpMiseService', []);

        return parent::getRcpMiseService();
    }

    /**
     * {@inheritDoc}
     */
    public function setRcpImmatriculation($rcpImmatriculation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRcpImmatriculation', [$rcpImmatriculation]);

        return parent::setRcpImmatriculation($rcpImmatriculation);
    }

    /**
     * {@inheritDoc}
     */
    public function getRcpImmatriculation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRcpImmatriculation', []);

        return parent::getRcpImmatriculation();
    }

    /**
     * {@inheritDoc}
     */
    public function setRcpProprietaire($rcpProprietaire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRcpProprietaire', [$rcpProprietaire]);

        return parent::setRcpProprietaire($rcpProprietaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getRcpProprietaire()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRcpProprietaire', []);

        return parent::getRcpProprietaire();
    }

    /**
     * {@inheritDoc}
     */
    public function setRcpProfession($rcpProfession)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRcpProfession', [$rcpProfession]);

        return parent::setRcpProfession($rcpProfession);
    }

    /**
     * {@inheritDoc}
     */
    public function getRcpProfession()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRcpProfession', []);

        return parent::getRcpProfession();
    }

    /**
     * {@inheritDoc}
     */
    public function setRcpAdresse($rcpAdresse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRcpAdresse', [$rcpAdresse]);

        return parent::setRcpAdresse($rcpAdresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getRcpAdresse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRcpAdresse', []);

        return parent::getRcpAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setRcpNbrAssis($rcpNbrAssis)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRcpNbrAssis', [$rcpNbrAssis]);

        return parent::setRcpNbrAssis($rcpNbrAssis);
    }

    /**
     * {@inheritDoc}
     */
    public function getRcpNbrAssis()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRcpNbrAssis', []);

        return parent::getRcpNbrAssis();
    }

    /**
     * {@inheritDoc}
     */
    public function setRcpNbrDebout($rcpNbrDebout)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRcpNbrDebout', [$rcpNbrDebout]);

        return parent::setRcpNbrDebout($rcpNbrDebout);
    }

    /**
     * {@inheritDoc}
     */
    public function getRcpNbrDebout()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRcpNbrDebout', []);

        return parent::getRcpNbrDebout();
    }

    /**
     * {@inheritDoc}
     */
    public function setRcpNumPv($rcpNumPv)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRcpNumPv', [$rcpNumPv]);

        return parent::setRcpNumPv($rcpNumPv);
    }

    /**
     * {@inheritDoc}
     */
    public function getRcpNumPv()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRcpNumPv', []);

        return parent::getRcpNumPv();
    }

    /**
     * {@inheritDoc}
     */
    public function setCtCentre(\Ct\Service\MetierManagerBundle\Entity\CtCentre $ctCentre = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCtCentre', [$ctCentre]);

        return parent::setCtCentre($ctCentre);
    }

    /**
     * {@inheritDoc}
     */
    public function getCtCentre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCtCentre', []);

        return parent::getCtCentre();
    }

    /**
     * {@inheritDoc}
     */
    public function setCtMotif(\Ct\Service\MetierManagerBundle\Entity\CtMotif $ctMotif = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCtMotif', [$ctMotif]);

        return parent::setCtMotif($ctMotif);
    }

    /**
     * {@inheritDoc}
     */
    public function getCtMotif()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCtMotif', []);

        return parent::getCtMotif();
    }

    /**
     * {@inheritDoc}
     */
    public function setCtTypeReception(\Ct\Service\MetierManagerBundle\Entity\CtTypeReception $ctTypeReception = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCtTypeReception', [$ctTypeReception]);

        return parent::setCtTypeReception($ctTypeReception);
    }

    /**
     * {@inheritDoc}
     */
    public function getCtTypeReception()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCtTypeReception', []);

        return parent::getCtTypeReception();
    }

    /**
     * {@inheritDoc}
     */
    public function setCtUser(\Ct\Service\UserBundle\Entity\User $ctUser = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCtUser', [$ctUser]);

        return parent::setCtUser($ctUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getCtUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCtUser', []);

        return parent::getCtUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setCtUtilisation(\Ct\Service\MetierManagerBundle\Entity\CtUtilisation $ctUtilisation = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCtUtilisation', [$ctUtilisation]);

        return parent::setCtUtilisation($ctUtilisation);
    }

    /**
     * {@inheritDoc}
     */
    public function getCtUtilisation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCtUtilisation', []);

        return parent::getCtUtilisation();
    }

    /**
     * {@inheritDoc}
     */
    public function setCtVehicule(\Ct\Service\MetierManagerBundle\Entity\CtVehicule $ctVehicule = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCtVehicule', [$ctVehicule]);

        return parent::setCtVehicule($ctVehicule);
    }

    /**
     * {@inheritDoc}
     */
    public function getCtVehicule()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCtVehicule', []);

        return parent::getCtVehicule();
    }

    /**
     * {@inheritDoc}
     */
    public function setCtSourceEnergie(\Ct\Service\MetierManagerBundle\Entity\CtSourceEnergie $ctSourceEnergie = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCtSourceEnergie', [$ctSourceEnergie]);

        return parent::setCtSourceEnergie($ctSourceEnergie);
    }

    /**
     * {@inheritDoc}
     */
    public function getCtSourceEnergie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCtSourceEnergie', []);

        return parent::getCtSourceEnergie();
    }

    /**
     * {@inheritDoc}
     */
    public function setCtCarosserie(\Ct\Service\MetierManagerBundle\Entity\CtCarosserie $ctCarosserie = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCtCarosserie', [$ctCarosserie]);

        return parent::setCtCarosserie($ctCarosserie);
    }

    /**
     * {@inheritDoc}
     */
    public function getCtCarosserie()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCtCarosserie', []);

        return parent::getCtCarosserie();
    }

    /**
     * {@inheritDoc}
     */
    public function setRcpNumGroup($rcpNumGroup)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRcpNumGroup', [$rcpNumGroup]);

        return parent::setRcpNumGroup($rcpNumGroup);
    }

    /**
     * {@inheritDoc}
     */
    public function getRcpNumGroup()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRcpNumGroup', []);

        return parent::getRcpNumGroup();
    }

    /**
     * {@inheritDoc}
     */
    public function setRcpCreated($rcpCreated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRcpCreated', [$rcpCreated]);

        return parent::setRcpCreated($rcpCreated);
    }

    /**
     * {@inheritDoc}
     */
    public function getRcpCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRcpCreated', []);

        return parent::getRcpCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setCtGenre(\Ct\Service\MetierManagerBundle\Entity\CtGenre $ctGenre = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCtGenre', [$ctGenre]);

        return parent::setCtGenre($ctGenre);
    }

    /**
     * {@inheritDoc}
     */
    public function getCtGenre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCtGenre', []);

        return parent::getCtGenre();
    }

}

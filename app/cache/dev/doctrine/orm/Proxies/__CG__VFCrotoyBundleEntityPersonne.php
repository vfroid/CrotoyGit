<?php

namespace Proxies\__CG__\VF\CrotoyBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Personne extends \VF\CrotoyBundle\Entity\Personne implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'VF\\CrotoyBundle\\Entity\\Personne' . "\0" . 'id', '' . "\0" . 'VF\\CrotoyBundle\\Entity\\Personne' . "\0" . 'nom', '' . "\0" . 'VF\\CrotoyBundle\\Entity\\Personne' . "\0" . 'prenom', '' . "\0" . 'VF\\CrotoyBundle\\Entity\\Personne' . "\0" . 'datene', '' . "\0" . 'VF\\CrotoyBundle\\Entity\\Personne' . "\0" . 'genre', '' . "\0" . 'VF\\CrotoyBundle\\Entity\\Personne' . "\0" . 'rue', '' . "\0" . 'VF\\CrotoyBundle\\Entity\\Personne' . "\0" . 'numero', '' . "\0" . 'VF\\CrotoyBundle\\Entity\\Personne' . "\0" . 'cp', '' . "\0" . 'VF\\CrotoyBundle\\Entity\\Personne' . "\0" . 'ville', '' . "\0" . 'VF\\CrotoyBundle\\Entity\\Personne' . "\0" . 'pays', '' . "\0" . 'VF\\CrotoyBundle\\Entity\\Personne' . "\0" . 'tel1', '' . "\0" . 'VF\\CrotoyBundle\\Entity\\Personne' . "\0" . 'tel2', '' . "\0" . 'VF\\CrotoyBundle\\Entity\\Personne' . "\0" . 'courriel'];
        }

        return ['__isInitialized__', '' . "\0" . 'VF\\CrotoyBundle\\Entity\\Personne' . "\0" . 'id', '' . "\0" . 'VF\\CrotoyBundle\\Entity\\Personne' . "\0" . 'nom', '' . "\0" . 'VF\\CrotoyBundle\\Entity\\Personne' . "\0" . 'prenom', '' . "\0" . 'VF\\CrotoyBundle\\Entity\\Personne' . "\0" . 'datene', '' . "\0" . 'VF\\CrotoyBundle\\Entity\\Personne' . "\0" . 'genre', '' . "\0" . 'VF\\CrotoyBundle\\Entity\\Personne' . "\0" . 'rue', '' . "\0" . 'VF\\CrotoyBundle\\Entity\\Personne' . "\0" . 'numero', '' . "\0" . 'VF\\CrotoyBundle\\Entity\\Personne' . "\0" . 'cp', '' . "\0" . 'VF\\CrotoyBundle\\Entity\\Personne' . "\0" . 'ville', '' . "\0" . 'VF\\CrotoyBundle\\Entity\\Personne' . "\0" . 'pays', '' . "\0" . 'VF\\CrotoyBundle\\Entity\\Personne' . "\0" . 'tel1', '' . "\0" . 'VF\\CrotoyBundle\\Entity\\Personne' . "\0" . 'tel2', '' . "\0" . 'VF\\CrotoyBundle\\Entity\\Personne' . "\0" . 'courriel'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Personne $proxy) {
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
    public function setPrenom($prenom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', [$prenom]);

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', []);

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatene($datene)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatene', [$datene]);

        return parent::setDatene($datene);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatene()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatene', []);

        return parent::getDatene();
    }

    /**
     * {@inheritDoc}
     */
    public function setGenre($genre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGenre', [$genre]);

        return parent::setGenre($genre);
    }

    /**
     * {@inheritDoc}
     */
    public function getGenre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGenre', []);

        return parent::getGenre();
    }

    /**
     * {@inheritDoc}
     */
    public function setRue($rue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRue', [$rue]);

        return parent::setRue($rue);
    }

    /**
     * {@inheritDoc}
     */
    public function getRue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRue', []);

        return parent::getRue();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumero($numero)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumero', [$numero]);

        return parent::setNumero($numero);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumero()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumero', []);

        return parent::getNumero();
    }

    /**
     * {@inheritDoc}
     */
    public function setCp($cp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCp', [$cp]);

        return parent::setCp($cp);
    }

    /**
     * {@inheritDoc}
     */
    public function getCp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCp', []);

        return parent::getCp();
    }

    /**
     * {@inheritDoc}
     */
    public function setVille($ville)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVille', [$ville]);

        return parent::setVille($ville);
    }

    /**
     * {@inheritDoc}
     */
    public function getVille()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVille', []);

        return parent::getVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setPays($pays)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPays', [$pays]);

        return parent::setPays($pays);
    }

    /**
     * {@inheritDoc}
     */
    public function getPays()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPays', []);

        return parent::getPays();
    }

    /**
     * {@inheritDoc}
     */
    public function setCourriel($courriel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCourriel', [$courriel]);

        return parent::setCourriel($courriel);
    }

    /**
     * {@inheritDoc}
     */
    public function getCourriel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCourriel', []);

        return parent::getCourriel();
    }

    /**
     * {@inheritDoc}
     */
    public function setTel1($tel1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTel1', [$tel1]);

        return parent::setTel1($tel1);
    }

    /**
     * {@inheritDoc}
     */
    public function getTel1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTel1', []);

        return parent::getTel1();
    }

    /**
     * {@inheritDoc}
     */
    public function setTel2($tel2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTel2', [$tel2]);

        return parent::setTel2($tel2);
    }

    /**
     * {@inheritDoc}
     */
    public function getTel2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTel2', []);

        return parent::getTel2();
    }

}
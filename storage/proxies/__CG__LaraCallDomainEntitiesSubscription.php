<?php

namespace DoctrineProxies\__CG__\LaraCall\Domain\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Subscription extends \LaraCall\Domain\Entities\Subscription implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'user', 'pin', 'subscriptionCreationDate', 'expirationDate', 'lastRefillDate', 'lastRefillAmount', 'id', 'createdAt', 'updatedAt'];
        }

        return ['__isInitialized__', 'user', 'pin', 'subscriptionCreationDate', 'expirationDate', 'lastRefillDate', 'lastRefillAmount', 'id', 'createdAt', 'updatedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Subscription $proxy) {
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
    public function getSubscriptionCreationDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubscriptionCreationDate', []);

        return parent::getSubscriptionCreationDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubscriptionCreationDate(\DateTimeInterface $subscriptionCreationDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubscriptionCreationDate', [$subscriptionCreationDate]);

        return parent::setSubscriptionCreationDate($subscriptionCreationDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\LaraCall\Domain\Entities\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getExpirationDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExpirationDate', []);

        return parent::getExpirationDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setExpirationDate(\DateTimeInterface $expirationDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExpirationDate', [$expirationDate]);

        return parent::setExpirationDate($expirationDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastRefillDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastRefillDate', []);

        return parent::getLastRefillDate();
    }

    /**
     * {@inheritDoc}
     */
    public function getLastRefillAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastRefillAmount', []);

        return parent::getLastRefillAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function getPin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPin', []);

        return parent::getPin();
    }

    /**
     * {@inheritDoc}
     */
    public function setPin(\LaraCall\Domain\ValueObjects\Pin $pin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPin', [$pin]);

        return parent::setPin($pin);
    }

    /**
     * {@inheritDoc}
     */
    public function refill(\ValueObjects\Money\Money $money)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'refill', [$money]);

        return parent::refill($money);
    }

    /**
     * {@inheritDoc}
     */
    public function equals(\LaraCall\Domain\Entities\Subscription $subscription = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'equals', [$subscription]);

        return parent::equals($subscription);
    }

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'jsonSerialize', []);

        return parent::jsonSerialize();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
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
    public function updatedTimeStamps()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'updatedTimeStamps', []);

        return parent::updatedTimeStamps();
    }

}

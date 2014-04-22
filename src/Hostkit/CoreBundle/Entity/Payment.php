<?php


namespace Hostkit\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="payment")
 */
class Payment
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $provider;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    protected $popupId;
    
    /**
     * @ORM\Column(type="string", length=300, nullable=true)
     */
    protected $amount;
    
    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    protected $paymentMethod;
    
    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    protected $returnUrl;
    
    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    protected $errorUrl;
	
	/**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    protected $notifyUrl;
	
	/**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    protected $url;
	
	/**
     * @ORM\Column(type="string", length=100)
     */
    protected $email;
	
	/**
     * @ORM\Column(type="string", length=100)
     */
    protected $currencyCode;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $vat;
    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set provider
     *
     * @param string $provider
     * @return Payment
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
    
        return $this;
    }

    /**
     * Get provider
     *
     * @return string 
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Set popupId
     *
     * @param string $popupId
     * @return Payment
     */
    public function setPopupId($popupId)
    {
        $this->popupId = $popupId;
    
        return $this;
    }

    /**
     * Get popupId
     *
     * @return string 
     */
    public function getPopupId()
    {
        return $this->popupId;
    }

    /**
     * Set amount
     *
     * @param string $amount
     * @return Payment
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    
        return $this;
    }

    /**
     * Get amount
     *
     * @return string 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set paymentMethod
     *
     * @param string $paymentMethod
     * @return Payment
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    
        return $this;
    }

    /**
     * Get paymentMethod
     *
     * @return string 
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Set returnUrl
     *
     * @param string $returnUrl
     * @return Payment
     */
    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl = $returnUrl;
    
        return $this;
    }

    /**
     * Get returnUrl
     *
     * @return string 
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    /**
     * Set errorUrl
     *
     * @param string $errorUrl
     * @return Payment
     */
    public function setErrorUrl($errorUrl)
    {
        $this->errorUrl = $errorUrl;
    
        return $this;
    }

    /**
     * Get errorUrl
     *
     * @return string 
     */
    public function getErrorUrl()
    {
        return $this->errorUrl;
    }

    /**
     * Set currencyCode
     *
     * @param string $currencyCode
     * @return Payment
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Get currencyCode
     *
     * @return string 
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Set notifyUrl
     *
     * @param string $notifyUrl
     * @return Payment
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;

        return $this;
    }

    /**
     * Get notifyUrl
     *
     * @return string 
     */
    public function getNotifyUrl()
    {
        return $this->notifyUrl;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Payment
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Payment
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set vat
     *
     * @param string $vat
     * @return Payment
     */
    public function setVat($vat)
    {
        $this->vat = $vat;

        return $this;
    }

    /**
     * Get vat
     *
     * @return string 
     */
    public function getVat()
    {
        return $this->vat;
    }
}

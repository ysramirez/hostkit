<?php


namespace Hostkit\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="invoice")
 */
class Invoice
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
    protected $date;
    
    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    protected $paymentDate;
    
    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    protected $amount;
	
	/**
     * @ORM\Column(type="string", length=100)
     */
    protected $userId;
	
	/**
     * @ORM\Column(type="string", length=100)
     */
    protected $orderItemId;
	
	/**
     * @ORM\Column(type="string", length=100)
     */
    protected $status;
	
	/**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    protected $paymentMethod;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    protected $invoice_id;

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
     * Set date
     *
     * @param \DateTime $date
     * @return Invoice
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set paymentDate
     *
     * @param \DateTime $paymentDate
     * @return Invoice
     */
    public function setPaymentDate($paymentDate)
    {
        $this->paymentDate = $paymentDate;

        return $this;
    }

    /**
     * Get paymentDate
     *
     * @return \DateTime 
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }

    /**
     * Set amount
     *
     * @param string $amount
     * @return Invoice
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
     * Set clientId
     *
     * @param string $clientId
     * @return Invoice
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * Get clientId
     *
     * @return string 
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Set orderItemId
     *
     * @param string $orderItemId
     * @return Invoice
     */
    public function setOrderItemId($orderItemId)
    {
        $this->orderItemId = $orderItemId;

        return $this;
    }

    /**
     * Get orderItemId
     *
     * @return string 
     */
    public function getOrderItemId()
    {
        return $this->orderItemId;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Invoice
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set paymentMethod
     *
     * @param string $paymentMethod
     * @return Invoice
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
     * Set userId
     *
     * @param string $userId
     * @return Invoice
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return string 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set invoice_id
     *
     * @param string $invoiceId
     * @return Invoice
     */
    public function setInvoiceId($invoiceId)
    {
        $this->invoice_id = $invoiceId;

        return $this;
    }

    /**
     * Get invoice_id
     *
     * @return string 
     */
    public function getInvoiceId()
    {
        return $this->invoice_id;
    }
}

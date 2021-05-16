<?php

namespace App\Model\Customer;

class Customer
{
    protected $customerNumber;
    protected $customerName;
    protected $city;
    protected $phone;
    protected $country;

    /**
     * Customer constructor.
     * @param $customerNumber
     * @param $customerName
     * @param $city
     * @param $phone
     * @param $country
     */
    public function __construct($customerNumber, $customerName, $city, $phone, $country)
    {
        $this->customerNumber = $customerNumber;
        $this->customerName = $customerName;
        $this->city = $city;
        $this->phone = $phone;
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getCustomerNumber()
    {
        return $this->customerNumber;
    }

    /**
     * @param mixed $customerNumber
     */
    public function setCustomerNumber($customerNumber): void
    {
        $this->customerNumber = $customerNumber;
    }

    /**
     * @return mixed
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @param mixed $customerName
     */
    public function setCustomerName($customerName): void
    {
        $this->customerName = $customerName;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country): void
    {
        $this->country = $country;
    }

}
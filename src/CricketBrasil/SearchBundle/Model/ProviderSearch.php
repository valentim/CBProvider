<?php

namespace CricketBrasil\SearchBundle\Model;

use Symfony\Component\HttpFoundation\Request;


/**
 * @ORM\Entity
 * @Search(repositoryClass="CricketBrasil\SearchBundle\Entity\SearchRepository\ProviderRepository")
 */


class ProviderSearch
{
    
    protected $dateFrom;

    protected $dateTo;

    protected $name;
    
    protected $email;
    
    protected $phone;
    
    public function __construct()
    {
        
        $date = new \DateTime();
        $month = new \DateInterval('P2Y');
        $date->sub($month);
        $date->setTime('00','00','00');
    
        $this->dateFrom = $date;
        $this->dateTo = new \DateTime();
        $this->dateTo->setTime('23','59','59');    
    }
        
    
    public function setDateFrom($dateFrom)
    {
        if($dateFrom != ""){
            $dateFrom->setTime('00','00','00');
            $this->dateFrom = $dateFrom;
        }
        return $this;
    }

    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    public function setDateTo($dateTo)
    {
        if($dateTo != ""){
            $dateTo->setTime('23','59','59');
            $this->dateTo = $dateTo;
        }
        return $this;
    }

    public function clearDates(){
        $this->dateTo = null;
        $this->dateFrom = null;
    }

    public function getDateTo()
    {
        return $this->dateTo;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }
    
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
    
    public function getPhone()
    {
        return $this->phone;
    }
    
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $phone;
    }
    
}
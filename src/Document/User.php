<?php

namespace App\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class User
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $firstname;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $lastname;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $email;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $password;

    /**
     * @MongoDB\Field(type="date")
     */
    protected $create_date;

    /**
     * Get id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id ?? null;
    }

    /**
     * Set id
     *
     * @param mixed $id
     * @return User
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Get firstname
     *
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname ?? null;
    }

    /**
     * Set firstname
     *
     * @param mixed $firstname
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * Get lastname
     *
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname ?? null;
    }

    /**
     * Set lastname
     *
     * @param mixed $lastname
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * Get email
     *
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email ?? null;
    }

    /**
     * Set email
     *
     * @param mixed $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get password
     *
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password ?? null;
    }

    /**
     * Set password
     *
     * @param mixed $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Get create_date
     *
     * @return mixed
     */
    public function getCreateDate()
    {
        return $this->create_date ?? null;
    }

    /**
     * Set create_date
     *
     * @param mixed $create_date
     * @return User
     */
    public function setCreateDate($create_date)
    {
        $this->create_date = $create_date;
        return $this;
    }
}

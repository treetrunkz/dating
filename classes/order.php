<?php

class Order
{
    private $_userFirst;
    private $_userLast;
    private $_userAge;
    private $_userPhone;
    private $_userGender;
    private $_userOutdoor;
    private $_userIndoor;
    private $_userEmail;

    /**
     * @return mixed
     */
    public function getUserFirst()
    {
        return $this->_userFirst;
    }

    /**
     * @param mixed $userFirst
     */
    public function setUserFirst($userFirst)
    {
        $this->_userFirst = $userFirst;
    }

    /**
     * @return mixed
     */
    public function getUserLast()
    {
        return $this->_userLast;
    }

    /**
     * @param mixed $userLast
     */
    public function setUserLast($userLast)
    {
        $this->_userLast = $userLast;
    }

    /**
     * @return mixed
     */
    public function getUserAge()
    {
        return $this->_userAge;
    }

    /**
     * @param mixed $userAge
     */
    public function setUserAge($userAge)
    {
        $this->_userAge = $userAge;
    }

    /**
     * @return mixed
     */
    public function getUserPhone()
    {
        return $this->_userPhone;
    }

    /**
     * @param mixed $userPhone
     */
    public function setUserPhone($userPhone)
    {
        $this->_userPhone = $userPhone;
    }

    /**
     * @return mixed
     */
    public function getUserGender()
    {
        return $this->_userGender;
    }

    /**
     * @param mixed $userGender
     */
    public function setUserGender($userGender)
    {
        $this->_userGender = $userGender;
    }

    /**
     * @return mixed
     */
    public function getUserOutdoor()
    {
        return $this->_userOutdoor;
    }

    /**
     * @param mixed $userOutdoor
     */
    public function setUserOutdoor($userOutdoor)
    {
        $this->_userOutdoor = $userOutdoor;
    }

    /**
     * @return mixed
     */
    public function getUserIndoor()
    {
        return $this->_userIndoor;
    }

    /**
     * @param mixed $userIndoor
     */
    public function setUserIndoor($userIndoor)
    {
        $this->_userIndoor = $userIndoor;
    }

    /**
     * @return mixed
     */
    public function getUserEmail()
    {
        return $this->_userEmail;
    }

    /**
     * @param mixed $userEmail
     */
    public function setUserEmail($userEmail)
    {
        $this->_userEmail = $userEmail;
    }

    /**
     * @return mixed
     */
    public function getUserState()
    {
        return $this->_userState;
    }

    /**
     * @param mixed $userState
     */
    public function setUserState($userState)
    {
        $this->_userState = $userState;
    }

    /**
     * @return mixed
     */
    public function getUserSex()
    {
        return $this->_userSex;
    }

    /**
     * @param mixed $userSex
     */
    public function setUserSex($userSex)
    {
        $this->_userSex = $userSex;
    }

    
}
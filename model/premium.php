<?php


class premium extends membership
{
    protected $indoor;
    protected $outdoor;

    function _construct($fname, $lname, $age, $gender,
                        $phone, $email, $state, $bio, $indoor, $outdoor)
    {
        parent::_construct($fname, $lname, $age, $gender,
                            $phone, $email, $state, $bio);
        $this->_indoor = $indoor;
        $this->_outdoor = $outdoor;
    }

    /**
     * @return mixed
     */
    public function getFname()
    {
        return membership::getFname();
    }

    /**
     * @param mixed $fname
     */
    public function setFname($fname)
    {
        membership::setFname($fname);
    }

    /**
     * @return mixed
     */
    public function getLname()
    {
        return membership::getLname();
    }

    /**
     * @param mixed $lname
     */
    public function setLname($lname)
    {
        membership::setLname($lname);
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return membership::getAge();
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        membership::setAge($age);
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return membership::getGender();
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        membership::setGender($gender);
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return membership::getPhone();
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        membership::setPhone($phone);
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return membership::getEmail();
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        membership::setEmail($email);
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return membership::getState();
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        membership::setState($state);
    }

    /**
     * @return mixed
     */
    public function getSeeking()
    {
        return membership::getSeeking();
    }

    /**
     * @param mixed $seeking
     */
    public function setSeeking($seeking)
    {
        membership::setSeeking($seeking);
    }

    /**
     * @return mixed
     */
    public function getBio()
    {
        return membership::getBio();
    }

    /**
     * @param mixed $bio
     */
    public function setBio($bio)
    {
        membership::setBio($bio);
    }

    /**
     * @return mixed
     */
    public function getIndoor()
    {
        return $this->indoor;
    }

    /**
     * @param mixed $indoor
     */
    public function setIndoor($indoor)
    {
        $this->indoor = $indoor;
    }

    /**
     * @return mixed
     */
    public function getOutdoor()
    {
        return $this->outdoor;
    }

    /**
     * @param mixed $outdoor
     */
    public function setOutdoor($outdoor)
    {
        $this->outdoor = $outdoor;
    }

}
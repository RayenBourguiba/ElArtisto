<?php

class adh
{   private $user_id;
    private $user_name;
    private $user_nickname;
    private $user_email;
    private $user_password;
    private $user_photo;
    private $registered_on;
    private $user_role;
   
   


    public function getuser_id()
    {
        return $this->user_id;
    }

    public function getuser_name()
    {
        return $this->user_name;
    }
   public function getuser_nickname()
    {
        return $this->user_nickname;
    }
  
    public function getuser_email()
    {
        return $this->user_email;
    }
    public function getuser_password()
    {
        return $this->user_password;
    }
    public function getuser_photo()
    {
        return $this->user_photo;
    }
    public function getregistered_on()
    {
        return $this->registered_on;
    }
    public function getuser_role()
    {
        return $this->user_role;
    }


    public function setuser_name($user_name)
    {
        $this->user_name = $user_name;
    }
    public function setnom($user_nickname)
    {
        $this->user_nickname = $user_nickname;
    }
    public function setuser_email($user_email)
    {
        $this->user_email = $user_email;
    }
    public function setuser_password($user_password)
    {
        $this->user_password = $user_password;
    }
    public function setuser_photo($user_photo)
    {
        $this->user_photo = $user_photo;
    }
    public function setregistered_on($registered_on)
   {
       $this->registered_on = $registered_on;
    }
    public function setuser_role($user_role)
    {
        $this->user_role = $user_role;
    }

    public function __construct($user_name,$user_nickname,$user_email,$user_password,$user_photo,$registered_on,$user_role)
    {    
        $this->user_name = $user_name;
        $this->user_nickname = $user_nickname;
        $this->user_email = $user_email;
        $this->user_password = $user_password;
        $this->user_photo = $user_photo;
        $this->registered_on = $registered_on;
        $this->user_role = $user_role;
        

        

    }
}

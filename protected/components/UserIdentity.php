<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
   private $_id;
   public function authenticate()
   {
        $record=person::model()->findByAttributes(array('user'=>$this->username));
        if($record===null)
        {
            $this->_id='user Null';
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        }
       else if($record->pass!==$this->password)
            {        
                $this->_id=$this->username;
                $this->errorCode=self::ERROR_PASSWORD_INVALID;
            }
         else if($record['status']!=='ACTIVO')
                {        
                    $err = "Su usario está inactivo";
                    $this->errorCode = $err;
                }
       else
       {  
            $this->_id=$record['id_person'];
            $this->setState('title', $record['name']);
            $this->errorCode=self::ERROR_NONE;

       }
       return !$this->errorCode;
   }

   public function getId()
   {
       return $this->_id;
   }
}
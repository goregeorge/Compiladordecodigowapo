<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
        private $id;
    
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
            $login = $this->username;
            $usuario = Usuario::model()->find('login = ?', array($login));
            
            if (!$usuario) {
                $this->errorCode=self::ERROR_USERNAME_INVALID;
            }
            else {
                $password = $this->password;
            
                $valid = $usuario->password == $password;
            
                if (!$valid) {
                    $this->errorCode=self::ERROR_PASSWORD_INVALID;
                }
                else {
                    $this->id = $usuario->id;
                    $this->setState('roles', $usuario->roles);
                    $this->errorCode = self::ERROR_NONE;
                }
                
            }
            
            return $this->errorCode == self::ERROR_NONE;
	}
        
        public function getId() {
            return $this->id;
        }
}
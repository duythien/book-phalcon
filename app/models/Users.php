<?php //namespace PhalconBook\Models;


use Phalcon\Mvc\Model\Validator\Email as Email;

class Users extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;
     
    /**
     *
     * @var string
     */
    public $username;
     
    /**
     *
     * @var string
     */
    public $email;
     
    /**
     *
     * @var string
     */
    public $password;
     
    /**
     *
     * @var string
     */
    public $mustChangePassword;
     
    /**
     *
     * @var integer
     */
    public $profilesId;
     
    /**
     *
     * @var string
     */
    public $fullName;
     
    /**
     *
     * @var string
     */
    public $banned;
     
    /**
     *
     * @var string
     */
    public $suspended;
     
    /**
     *
     * @var string
     */
    public $active;
     
    /**
     * Validations and business logic
     */
    public function validation()
    {

        $this->validate(
            new Email(
                array(
                    "field"    => "email",
                    "required" => true,
                )
            )
        );
        if ($this->validationHasFailed() == true) {
            return false;
        }
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'username' => 'username', 
            'email' => 'email', 
            'password' => 'password', 
            'mustChangePassword' => 'mustChangePassword', 
            'profilesId' => 'profilesId', 
            'fullName' => 'fullName', 
            'banned' => 'banned', 
            'suspended' => 'suspended', 
            'active' => 'active'
        );
    }

}

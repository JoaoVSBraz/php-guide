<?php 
class User{
    private $userId;
    private $login;
    private $passwd;
    private $createdAt;

    public function __construct($login = '', $passwd = '')
    {
        $this->setLogin($login);
        $this->setPasswd($passwd);
    }

    public function getUserId(){
        return $this->userId;
    }

    public function setUserId($value){
        $this->userId = $value;
    }
    
    public function getLogin(){
        return $this->login;
    }

    public function setLogin($value){
        $this->login = $value;
    }

    public function getPasswd(){
        return $this->passwd;
    }

    public function setPasswd($value){
        $this->passwd = $value;
    }

    public function getCreatedAt(){
        return $this->createdAt;
    }

    public function setCreatedAt($value){
        $this->createdAt = $value;
    }

    public function loadById($id){
        $sql = new Sql();

        $result = $sql->select('SELECT * FROM users WHERE user_id = :ID', array(':ID'=>$id));

        if(isset($result[0])){
            $this->setData($result[0]);
        }
    }

    public static function loadList(){
        $sql = new Sql();

        return $sql->select('SELECT * FROM users ORDER BY login');
    }

    public static function search($login){
        $sql = new Sql();

        return $sql->select('SELECT * FROM users WHERE login LIKE :SEARCH ORDER BY login', array(':SEARCH'=>"%" . $login . "%"));
    }

    public function login($login, $passwd){
        $sql = new Sql();

        $result = $sql->select('SELECT * FROM users WHERE login = :LOGIN AND passwd = :PASSWD', array(':LOGIN'=>$login, ':PASSWD'=>$passwd));

        if(isset($result[0])){
            $this->setData($result[0]);
        }else{
            throw new Exception('Login ou senha inválidos');
        }
    }

    public function insert(){
        $sql = new Sql();

        $results = $sql->select('CALL sp_user_insert(:LOGIN, :PASSWD)', array(
            ':LOGIN'=>$this->getLogin(),
            ':PASSWD'=>$this->getPasswd()
        ));

        if(count($results) > 0){
            $this->setData($results[0]);
        }
    }

    public function setData($data){
        $this->setUserId($data['user_id']);
        $this->setLogin($data['login']);
        $this->setPasswd($data['passwd']);
        $this->setCreatedAt(new Datetime($data['create_at']));
    }

    public function __toString(){
        return json_encode(array(
            'user_id'=>$this->getUserId(),
            'login'=>$this->getLogin(),
            'passwd'=>$this->getPasswd(),
            'create_at'=>$this->getCreatedAt()->format('d-m-Y H:i:s')
        ));
    }

}
?>
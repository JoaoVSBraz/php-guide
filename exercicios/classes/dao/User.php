<?php 
class User{
    private $userId;
    private $login;
    private $passwd;
    private $createdAt;

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
            $row = $result[0];
            $this->setUserId($row['user_id']);
            $this->setLogin($row['login']);
            $this->setPasswd($row['passwd']);
            $this->setCreatedAt(new Datetime($row['create_at']));
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
            $row = $result[0];
            $this->setUserId($row['user_id']);
            $this->setLogin($row['login']);
            $this->setPasswd($row['passwd']);
            $this->setCreatedAt(new Datetime($row['create_at']));
        }else{
            throw new Exception('Login ou senha inválidos');
        }
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
<?php
class Model_Reg extends Model{

    public function get_ajax(){
        global $mysqli;
           $login = $_POST['login'];
           $sql = "SELECT * FROM `user` WHERE `login` = '$login'";
           $result = $mysqli->query($sql);
           $row = $result->num_rows;
           if($row != 0){
            echo "1";
           }
           else{
            echo "0";
           }
    }
    public function send_data(){
        global $mysqli;
         $data = array();
         $fio = $_POST['fio'];
         $email = $_POST['email'];
         $login = $_POST['login'];
         $password = $_POST['password'];
         $password2 = $_POST['password2'];
         $sql = "INSERT INTO `user` (`id_user`,`name`,`login`,`password`,`status`,`email`) VALUES (NULL, '$fio', '$login', '$password', 0, '$email')";
         $result = $mysqli->query($sql);

        return $this->get_data();
    }
}

?>
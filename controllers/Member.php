<?php 

    include_once 'php/DBW.php';

    class Member {
        protected $db;
        private $name;
        private $username;
        private $password;
        private $table = "tbl_members";

        public function __construct() {
            $this->db = new DB();
        }

        public function setData($name, $username, $password) {
            $this->name = $name;
            $this->username = $username;
            $this->password = $password;
        }

        public function verify($username) {
            $query = "SELECT * FROM tbl_members WHERE username = '".$username."' LIMIT 1";
            $chk = $this->db->query($query);
            if(mysqli_num_rows($chk) == true){
                return false;
            } else {
                return true;
            }
        }

        public function create() {
            $query = "INSERT INTO $this->table(name, username, password) VALUES ('$this->name', '$this->username', '$this->password')";
            $insert_member = $this->db->query($query);
            return $insert_member;
        }

    }

?>
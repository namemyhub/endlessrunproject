<?php 

    include_once './config/config.php';

    class DB {
        private $host = DB_HOST;
        private $user = DB_USER;
        private $pass = DB_PASS;
        private $dbname = DB_NAME;

        public $link;
        public $error;

        public function __construct() {
            $this->connectDB();
        }

        private function connectDB() {
            $this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
            if(!$this->link) {
                echo "Connection Fail" . $this->link->connect_error;
                return false;
            }
        }

        // Insert Data
        public function query($query) {
            $insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
            if ($insert_row) {
                return $insert_row;
            } else {
                return false;
            }
        }

    }

?>
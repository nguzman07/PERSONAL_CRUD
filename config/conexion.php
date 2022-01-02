<?php
	class Conectar {
		protected $dbh;
		protected function conexion () {
			try {
                $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=crud2", "root", "");
                return $conectar;
			} catch(Exception $ex) {
                print "ERROR DATABASE: " . $e->getMessage() . "<br/>";
                die();
			}
		}

        public function set_names() {
            return $this->dbh->query("SET NAMES 'utf8'");
        }
	}
?>
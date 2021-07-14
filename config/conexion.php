<?php
    session_start();

    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try {
                //Local
				//$conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=andercode_helpdesk1","root","");
                //Produccion
                $conectar = $this->dbh = new PDO("mysql:host=localhost;dbname=castadegallos","root","");
				return $conectar;
			} catch (Exception $e) {
				print "¡Error BD!: " . $e->getMessage() . "<br/>";
				die();
			}
        }

        public function set_names(){
			return $this->dbh->query("SET NAMES 'utf8'");
        }

        public static function ruta(){
            //Local
			//return "http://localhost:90/PERSONAL_HelpDesk/";
            //Produccion
            return "http://localhost/castadegallos/";
		}

    }
?>
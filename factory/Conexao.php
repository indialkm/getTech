<?php
class Caminho{
        public static $usuario = "root";
        public static $senha = "@JNbob98";
        public static $connect = null;
        private static function Conectar(){
            try {
                self::$connect = new PDO('mysql:
                host=localhost;
                dbname=bdgetTech;',
                self::$usuario,self::$senha);
            } catch (Exception $ex) {
                echo 'Mensagem: ' .$ex->getMessage();
                die;
            }
            return self::$connect;
        }
        public function getConn(){
            return self::Conectar();
        }
    }

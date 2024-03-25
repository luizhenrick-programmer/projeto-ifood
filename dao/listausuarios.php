<?php
    include_once("conexao.php");
    class ListaUsuarios extends Conexao {
        public function listarRestaurantes() {
            $this->sql = "SELECT * FROM tb_restaurantes";
            $this->qr = self::execSQL($this->sql);
            if ($this->qr) {
                $restaurantes = array();
                while ($row = self::listQr($this->qr)) {
                    $restaurantes[] = $row;
                }
                return $restaurantes;
            } else {
                return false;
            }
        }

        public function listarCardapio() {
            $this->sql = "SELECT * FROM tb_cardapio";
            $this->qr = self::execSQL($this->sql);
            if ($this->qr) {
                $restaurantes = array();
                while ($row = self::listQr($this->qr)) {
                    $restaurantes[] = $row;
                }
                return $restaurantes;
            } else {
                return false;
            }
        }
    }
?>
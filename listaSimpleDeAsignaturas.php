<?php

include 'nodoAsignatura.php';

//Definicion de la clase lista simple
class ListaSimple{
    private $PTR;
    private $Final;

    function __construct() {
        $this->Final=null;
        $this->PTR=null;
    }

    function AgregarNodoPrincipio($p) {
        if ($this->PTR == null) {
            $this->Final=$p;
        }else{
            $p->setSig($this->PTR);
        }
        $this->PTR = $p;
    }

    function VisualizarLista() {
        $p = $this->PTR;
        $Mensaje = "";
        if($p==null){
            return "Lista Vacia";
        }else{
            while ($p != null){
                //<br> salto de linea
                $Mensaje = $Mensaje."<br>-".$p->getInfo();
                $p = $p->getSig();
            }
            return "La lista es: $Mensaje";
        }
    }

    function AgregarNodoFinal($p) {
        if ($this->PTR == null) {
            $this->PTR = $p;
        }else{
            $this->Final->setSig($p);
        }
        $this->Final = $p;
    }

    function Buscar($c){
        $p = $this->PTR;
        $encontrado=false;
        while (($p != null)&&(!$encontrado)){
            if ($p->getInfo()== $c) {
                $encontrado=true;
            }else{
                $p = $p->getSig();
            }
        }
        return $p;
    }

    function Eliminar($c) {
        $p = $this->PTR;
        $ant = $this->p;
        $encontrado = true;

        while (($p!=null)&&(!$encontrado)){
            if ($p->getInfo()==$c) {
                $encontrado = true;
            }else{
                $ant = $p;
                $p = $p->getSig();
            }
        }
        if ($p == null) {
            return false;
        }else{
            if ($p == $this->PTR) {
                $this->PTR = $this->PTR->getSig();
            }
            if ($p == $this->Final) {
                $this->Final=null;
            }else{
                $ant->getSig() = $p->getSig();
                if ($p == $this->Final) {
                    $this->Final=$ant;
                }
            }
            $p=null;
            return true;
        }
    }

    function EliminarElementosRepetidos() {
        $p = $this->PTR;
        $o = $this->null;

        while ($p != null){
            $o=$p;
            while ($o != null){
                if ($p==$o->getSig()) {
                    $this->Eliminar($o->getSig()->getInfo());
                }
                $o=$o->getSig();
            }
            $p=$p->getSig();
        }
    }

}



?>

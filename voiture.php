<?php
    class Voiture{
        private $marque;
        private $couleur;
        private $immatriculations;
        
        
        public function getMarque(){
            return $this->marque;
        }
        public function setMarque($marque2){
            $this->marque =$marque2;
        }
        public function __construct($m,$c,$i){
            $this->marque=$m;
            $this->couleur=$c;
            $this->immatriculation=$i;
        }
        public function afficher(){
            echo $this->marque;
            echo $this->couleur;
            echo $this->immatriculation;
        }
        public static function getAllVoiture(){
            $sql = 'select * from voiture2';
            $query =Model::$pdo->query($sql);
            $res=$query->fetchAll(PDO::FETCH_OBJ);
            echo "<table border='1'>";
            echo"<tr><th>marque</th>";
            echo "<th>couleur</th>";
            echo "<th>immatriculation</th>";
            foreach($res as $row => $resultats){
                echo "<tr><td>".$resultats->marque."</td>";
                echo "<td>".$resultats->couleur."</td>";
                echo "<td>".$resultats->immatriculation."</td></tr>";
            }
            echo "</table>";
        }
    }


?>
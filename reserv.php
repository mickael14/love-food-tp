<?php
echo 'reserv1';
class Reserv {
    private $_id;
    private $_nameReserv;
    private $_dateReserv;
    private $_heureReserv;
    private $_nombreReserv; 
    private $_idResto;
    private $_idUser;
  
    public function setIdResto($idResto){
        $this->_idResto = $idResto;
    }
    public function getIdResto(){
    return $this->_idResto;
}
public function setIdUser($idUser){
    $this->_idUser = $idUser;
}
public function getIdUser(){
return $this->_idUser;
}
    public function setNameReserv($nameReserv){
        $this->_nameReserv = $nameReserv;
    }

    public function getNameReserv(){
        return $this->_nameReserv;
    }

    public function setDateReserv($dateReserv){
        $this->_dateReserv = $dateReserv;
    }

    public function getDateReserv(){
        return $this->_dateReserv;
    }

    public function setHeureReserv($heureReserv){
        $this->_heureReserv = $heureReserv;
    }

    public function getHeureReserv(){
        return $this->_heureReserv;
    }

    public function setNombreReserv($nombreReserv){
        $this->_nombreReserv = $nombreReserv;
    }

    public function getNombreReserv(){
        return $this->_nombreReserv;
        
    }

 

    public function envoisDonnees($dsn, $user, $cheh){

        echo 'reserv2';
        try{
            $dbh = new PDO($dsn, $user, $cheh);
            echo 'reserv3';
        }
        catch(PDOException $e){
            $e->getMessage();

        }

        $sth = $dbh->prepare("INSERT INTO reservation(nameReservation, IDresto, dateReservation, timeReservation, nombreReservation, IDuser) VALUES (:nameReservation, :IDresto, :dateReservation, :timeReservation, :nombreReservation, :IDuser);");
        echo 'reserv4';
        $sth->bindParam(':IDresto', $this->getIdResto());
        $sth->bindParam(':nameReservation', $this->getNameReserv());
        $sth->bindParam(':dateReservation', $this->getDateReserv());
        $sth->bindParam(':timeReservation', $this->getHeureReserv());
        $sth->bindParam(':nombreReservation', $this->getNombreReserv());
        $sth->bindParam(':IDuser', $this->getIdUser());
     
     
       
        $sth->execute();  
        header("Location: merci.php");
        echo 'reserv5';

    }






    function affichereserv($dsn, $user, $password, $logs){
echo "tarace";
        try{
            $dbh= new PDO($dsn,$user,$password);
    $varget = intval($_SESSION['obj_user']['ID_user']);
        $sth = $dbh->prepare("SELECT resto.nameResto,  reservation.dateReservation, reservation.timeReservation FROM (user INNER JOIN reservation ON (user.ID_user = reservation.IDuser)) INNER JOIN resto ON (reservation.IDresto = resto.ID_resto) WHERE user.ID_user = $varget ORDER BY dateReservation ASC, timeReservation ASC;");

        echo var_dump($logs);
        $sth->execute();
        $count = $sth->rowCount();
        $sth->setFetchMode(PDO::FETCH_CLASS, new User());   
         
        $result = $sth->fetchAll();
    echo 'test';
     
        }catch(PDOException $e){
            $e->getMessage();
        }
    
        if($count == 1 && !empty($result)){
    
            $_SESSION['obj_user'] = $result;
            header("Location: profil.php");
           
    
        }else{
           
        }
            
    }

}



  
?>

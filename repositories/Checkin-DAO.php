c<?php

class CheckinDAO {
    public function create (Checkin $checkin) {
      var_dump($checkin);
      $sql = 'INSERT INTO Checkin (malas, peso_malas, peso_bagagem_de_mao, voo_id, bagagem_de_mao) VALUES (?,?,?,?,?)';
      $stmt = Conexao::getConn() -> prepare($sql);
      $stmt->bindValue(1, $checkin->getMalas());
      $stmt->bindValue(2, $checkin->getPeso_malas());
      $stmt->bindValue(3, $checkin->getPeso_mao());
      $stmt->bindValue(4, $checkin->getVoo_id());
      $stmt->bindValue(5, TRUE);

      $stmt -> execute();
    }

    public function read(){
        $sql = 'SELECT * FROM Checkin';

        $stmt = Conexao:: getConn() -> prepare($sql);
        $stmt->execute();

        if($stmt -> rowCount() > 0) {
            $resultado = $stmt -> fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        } else {
            return [];
        }
    }

    public function update(Checkin $checkin) {
        $sql = 'UPDATE checkin SET id = ?, malas = ?, peso_das_malas = ?, peso_bagagem_de_mao = ?, voo_id = ?';
        $stmt = Conexao::getConn()-> prepare ($sql);

        $stmt->bindValue(1, $checkin->getId());
        $stmt->bindValue(2, $checkin->getMalas());
        $stmt->bindValue(3, $checkin->getPeso_malas());
        $stmt->bindValue(4, $checkin->getPeso_mao());
        $stmt->bindValue(5, $checkin->getVoo_id());

        $stmt -> execute();
    }

    public function delete($id){
        $sql = 'DELETE FROM checkin WHERE id = ?';
        $stmt = Conexao::getConn() -> prepare ($sql);
        $stmt -> bindvalue(1, $id);

        $stmt -> execute();
    }
}
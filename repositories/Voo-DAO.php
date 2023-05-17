<?php

class VooDAO {
    public function create (Voo $voo) {
        $sql = 'INSERT INTO Voo (saida, chegada, rota_id, aeronave_id, tripulacao_id) VALUES (?,?,?,?,?)';
        $stmt = Conexao::getConn() -> prepare($sql);
        $stmt->bindValue(1, $voo->getSaida());
        $stmt->bindValue(2, $voo->getChegada());
        $stmt->bindValue(3, $voo->getRotaId());
        $stmt->bindValue(4, $voo->getAeronaveId());
        $stmt->bindValue(5, $voo->getTripulacaoId());

        $stmt -> execute();
    }

    public function read(){
        $sql = 'SELECT * FROM voo';

        $stmt = Conexao:: getConn() -> prepare($sql);
        $stmt->execute();

        if($stmt -> rowCount() > 0) {
            $resultado = $stmt -> fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        } else {
            return [];
        }
    }
    public Function update(Voo $voo) {
        $sql = 'UPDATE voo SET id = ?, saida = ?, chegada = ?, rota = ?, aeronave = ?, tripulacao = ?';
        $stmt = Conexao::getConn()-> prepare ($sql);

        $stmt->bindValue(1, $voo->getId());
        $stmt->bindValue(2, $voo->getSaida());
        $stmt->bindValue(3, $voo->getChegada());
        $stmt->bindValue(4, $voo->getRotaId());
        $stmt->bindValue(5, $voo->getAeronaveId());
        $stmt->bindValue(6, $voo->getTripulacaoId());

        $stmt -> execute();
    }

    public function delete($id){
        $sql = 'DELETE FROM voo WHERE id = ?';
        $stmt = Conexao::getConn() -> prepare ($sql);
        $stmt -> bindvalue(1, $id);

        $stmt -> execute();
    }
}

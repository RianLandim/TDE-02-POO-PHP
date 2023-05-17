<?php

class VooDAO {
    public function create () {
        $sql = 'INSERT INTO Voo (saida, chegada, rota) VALUES (?,?,?)';
        $stmt = Conexao::getConn() -> prepare($sql);
        $stmt->bindValue(1, '25/05/2022');
        $stmt->bindValue(2, '25/05/2022');
        $stmt->bindValue(3, 'SBJU');

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
        $stmt->bindValue(4, $voo->getRota());
        $stmt->bindValue(5, $voo->getAeronave());
        $stmt->bindValue(6, $voo->getTripulacao());

        $stmt -> execute();
    }

    public function delete($id){
        $sql = 'DELETE FROM voo WHERE id = ?';
        $stmt = Conexao::getConn() -> prepare ($sql);
        $stmt -> bindvalue(1, $id);

        $stmt -> execute();
    }
}

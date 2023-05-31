<?php

class RotasDao {
    public function create (Rotas $rotas) {
        $sql = 'INSERT INTO Rota (distancia, partida, destingo) VALUES (?,?,?)';
        $stmt = Conexao::getConn() -> prepare($sql);
        $stmt->bindValue(1, $rotas->getDistancia());
        $stmt->bindValue(2, $rotas->getPartida());
        $stmt->bindValue(3, $rotas->getDestino());
        $stmt -> execute();
    }

    public function read(){
        $sql = 'SELECT * FROM Rota';

        $stmt = Conexao:: getConn() -> prepare($sql);
        $stmt->execute();

        if($stmt -> rowCount() > 0) {
            $resultado = $stmt -> fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        } else {
            return [];
        }
    }

    public function update(Rotas $rotas) {
        $sql = 'UPDATE Rota SET id = ?, distancia = ?, partida = ?, destino = ?';
        $stmt = Conexao::getConn()-> prepare ($sql);

        $stmt->bindValue(1, $rotas->getId());
        $stmt->bindValue(2, $rotas->getDistancia());
        $stmt->bindValue(3, $rotas->getPartida());
        $stmt->bindValue(4, $rotas->getDestino());

        $stmt -> execute();
    }

    public function delete($id){
        $sql = 'DELETE FROM Rota WHERE id = ?';
        $stmt = Conexao::getConn() -> prepare ($sql);
        $stmt -> bindvalue(1, $id);

        $stmt -> execute();
    }
}

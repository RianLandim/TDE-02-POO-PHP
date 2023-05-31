<?php

class TripulacaoDAO {

    public function create (Tripulacao $tripulacao) {
        $sql = 'INSERT INTO Tripulacao (nome, funcao, horario) VALUES (?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $tripulacao->getNome());
        $stmt->bindValue(2, $tripulacao->getFuncao());
        $stmt->bindValue(3, $tripulacao->getHorario());

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM Tripulacao';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(Tripulacao $tripulacao) {
        $sql = 'UPDATE Tripulacao SET nome = ?, funcao = ?, horario = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $tripulacao->getNome());
        $stmt->bindValue(2, $tripulacao->getFuncao());
        $stmt->bindValue(3, $tripulacao->getHorario());

        $stmt->execute();
    }

    public function delete($id) {
        $sql = 'DELETE FROM Tripulacao WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);

        $stmt->execute();
    }
}
<?php

class AeronaveDAO {

    public function create (Aeronave $aeronave) {
        $sql = 'INSERT INTO Aeronave (model, ano_fabricacao, numero_assentos, outras_informacoes) VALUES (?,?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $aeronave->getmodelo());
        $stmt->bindValue(2, $aeronave->getAnoFabricacao());
        $stmt->bindValue(3, $aeronave->getNumeroAssentos());
        $stmt->bindvalue(4, $aeronave->getOutrasInformacoes());

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM Aeronave';

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(Aeronave $aeronave) {
        $sql = 'UPDATE aeronave SET modelo  = ?, ano_fabricacao = ?, numero_assentos = ? WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $aeronave->getmodelo());
        $stmt->bindValue(2, $aeronave->getAnoFabricacao());
        $stmt->bindValue(3, $aeronave->getNumeroAssentos());
        $stmt->bindvalue(4 ,$aeronave->getOutrasInformacoes());
        $stmt->bindvalue(5, $aeronave->getid());

        $stmt->execute();
    }

    public function delete($id) {
        $sql = 'DELETE FROM Aeronave WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);

        $stmt->execute();
    }
}

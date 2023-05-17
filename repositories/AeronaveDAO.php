<?php

class AeronaveDAO {

    public function create (Aeronave $aeronave) {
        $sql = 'INSERT INTO Aeronave (modelo, ano_fabricacao, numero_assentos, outras_informacoes) VALUES (?,?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $aeronave->getmodelo());
        $stmt->bindValue(2, $aeronave->getano_fabricação());
        $stmt->bindValue(3, $aeronave->getnumero_assentos());
        $stmt->bindvalue(4, $aeronave->getoutras_informações());
        $stmt->bindvalue(5, $id->getid());

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
        $stmt->bindValue(2, $aeronave->getano_fabricação());
        $stmt->bindValue(3, $aeronave->getnumero_assentos());
        $stmt->bindvalue(4 ,$aeronave->getoutras_informações());
        $stmt->bindvalue(5, $id->getid());

        $stmt->execute();
    }

    public function delete($id) {
        $sql = 'DELETE FROM Aeronave WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);

        $stmt->execute();
    }
}

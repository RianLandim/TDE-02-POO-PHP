<?php 

    require_once('./repositories/Voo-DAO.php');
    require_once('./repositories/Conexao.php');


    $vooDao = new VooDAO();
    $vooDao->create();

?>
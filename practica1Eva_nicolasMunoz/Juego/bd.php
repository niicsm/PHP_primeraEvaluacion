<?php

function conexion()
{
    $db = new mysqli("localhost", "root", "", "clase");
    if (!$db->connect_errno) {
        return $db;
    } else {
        echo "Fallo al conectar a MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
    }
}

function obtenerTema($tema)
{
    $db = conexion();
    $tema = $db->query("select $tema from temas");
    $arrayTema = array();
    foreach ($tema as $key => $value) {
        foreach ($value as $key1) {
            array_push($arrayTema, $key1);
        }
    }
    return $arrayTema;
}



function getRecord($nombreUser)
{
    $db = conexion();
    $sqlSlct = $db->query("SELECT record FROM jugadores WHERE nombreJugador='$nombreUser';");
    return mysqli_fetch_assoc($sqlSlct);
}

function setRecord($newRecord, $nombreUser)
{
    $db = conexion();
    return $db->query("UPDATE jugadores SET record='$newRecord' WHERE nombreJugador='$nombreUser';");
}

function getNumeroPartidas($nombreUser)
{
    $db = conexion();
    $sqlSlct = $db->query("SELECT partidasJugadas FROM jugadores WHERE nombreJugador='$nombreUser';");
    foreach ($sqlSlct as $key => $value) {
        foreach ($value as $key => $value) {
            return $value;
        }
    }
    
}

function setNumeroPartidas($nombreUser, $partidasJugadas)
{
    $db = conexion();
    $partidasJugadas++;
    return $db->query("UPDATE jugadores SET partidasJugadas='$partidasJugadas' WHERE nombreJugador='$nombreUser';");
}

function getRankingJugadores()
{
    $db = conexion();
    $sqlSlct =  $db->query("SELECT nombreJugador, record FROM jugadores ORDER BY RECORD ASC LIMIT 3;");
    $rankingJugadores=[];
    foreach ($sqlSlct as $key) {
        $rankingJugadores[] = $key;
    }
    return $rankingJugadores;
}

function insertarTema()
{
    $db = conexion();
    //$tema = $db->query("DELETE FROM temas");
    $colores = array("rojo", "amarillo", "azul", "verde", "naranja", "rosa", "morado", "marron", "negro", "blanco");
    $transportes = array("coche", "moto", "autobus", "bicicleta", "furgoneta", "camion", "tren", "avion", "helicoptero", "barco");
    $frutas = array("manzana", "pera", "naranja", "sandia", "melon", "coco", "fresa", "mandarina", "platano", "nuez");
    for ($i = 0; $i < 10; $i++) {
        $db->query("INSERT into temas values ('$transportes[$i]','$colores[$i]','$frutas[$i]')");
    }
}

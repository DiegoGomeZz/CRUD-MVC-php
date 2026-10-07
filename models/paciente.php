<?php

Class Paciente{

    private $conexion;

    public function __construct($conexion){
        $this->conexion = $conexion;
    }

    public function create($firstname, $lastname, $phonenumber, $email, $address, $birthdate){
        $stmt = $this->conexion->prepare("INSERT INTO paciente (firstname, lastname, phonenumber, email, address, birthdate) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $firstname, $lastname, $phonenumber, $email, $address, $birthdate);
        return $stmt->execute();
    }

    public function getAllPacientes(){
        return $this->conexion->query("SELECT * FROM paciente");
    }

    public function getPacienteById($id){
        $stmt = $this->conexion->prepare("SELECT * FROM paciente WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
    public function updatePaciente($id, $firstname, $lastname, $phonenumber, $email, $address, $birthdate){
        $stmt = $this->conexion->prepare("UPDATE paciente SET firstname = ?, lastname = ?, phonenumber = ?, email = ?, address = ?, birthdate = ? WHERE id = ?");
        $stmt->bind_param("ssssssi", $firstname, $lastname, $phonenumber, $email, $address, $birthdate, $id);
        return $stmt->execute();
    }

        public function deletePaciente($id){
            $stmt = $this->conexion->prepare("DELETE FROM paciente WHERE id = ?");
            $stmt->bind_param("i", $id);
            return $stmt->execute();
    }

}
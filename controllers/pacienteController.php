<?php
require_once '../config/database.php';
require_once '../models/paciente.php';

Class PacienteController{
    private $pacieteModel;

    public function __construct(){
        global $conexion;
        $this->pacieteModel = new Paciente($conexion);
    }

    public function create(){
        require __DIR__ . '/../views/users/create.php';
    }
    public function showPacientes(){
        $pacientes = $this->pacieteModel->getAllPacientes();
        require __DIR__ . '/../views/users/pacientes.php';
    }
    public function index(){
        require __DIR__ . '/../views/users/index.php';
    }
    public function store(){
        if(isset($_POST['store'])){
            $firstname = trim($_POST['firstname']);
            $lastname = trim($_POST['lastname']);
            $phonenumber = trim($_POST['phonenumber']);
            $email = trim($_POST['email']);
            $address = trim($_POST['address']);
            $birthdate = trim($_POST['birthdate']);

            $this->pacieteModel->create($firstname, $lastname, $phonenumber, $email, $address, $birthdate);
            header("Location: index.php?action=showPacientes"); //esta linea redirige a la página de lista de pacientes después de agregar un nuevo paciente y es obligatoria ya que de lo contrario, el formulario se volvería a enviar si el usuario recarga la página, lo que podría causar duplicados en la base de datos.
            exit; //exit es obligatorio después de header para asegurarse de que el script se detenga y no continúe ejecutándose después de la redirección.
        }
    }
    public function editPaciente(){
        $id = (int)$_GET["id"];
        $paciente = $this->pacieteModel->getPacienteById($id);
        require __DIR__ . "/../views/users/edit.php";
    }
    public function deletePaciente(){
        $id = $_GET["id"];
        $this->pacieteModel->deletePaciente($id);
        header("Location: index.php?action=showPacientes");
        exit;
    }
    public function update(){
        if(isset($_POST['update'])){
            $id = (int)$_POST['id'];
            $firstname = trim($_POST['firstname']);
            $lastname = trim($_POST['lastname']);
            $phonenumber = trim($_POST['phonenumber']);
            $email = trim($_POST['email']);
            $address = trim($_POST['address']);
            $birthdate = trim($_POST['birthdate']);

            $this->pacieteModel->updatePaciente($id, $firstname, $lastname, $phonenumber, $email, $address, $birthdate);
            header("Location: index.php?action=showPacientes");
            exit;
        }
    }
}

<?php 
    require_once '../controllers/pacienteController.php'; 

    $controller = new pacienteController();
    $action = $_GET['action'] ?? 'index';

    switch($action) {
        case 'index':
            $controller->index();
            break;
        case 'create':
            $controller->create();
            break;
        case 'store':
            $controller->store();
            break;
        case 'showPacientes':
            $controller->showPacientes();
            break;
        case 'editPaciente':
            $controller->editPaciente();
            break;
        case 'update':
            $controller->update();
            break;
        case 'deletePaciente':
            $controller->deletePaciente();
            break;
        default:
            die("Acción no encontrada.");
    }
?>
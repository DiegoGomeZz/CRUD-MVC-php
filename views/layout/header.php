<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <title>CRUD sistema bioquimicos MVC</title>
    </head>
    <body>
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <a class="navbar-brand" href="index.php?action=index">INICIO</a>
                            <div class="collapse navbar-collapse" id="navbar">
                                <ul class="navbar-nav me-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?action=showPacientes">Ver pacientes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.php?action=create">Agregar paciente</a>
                                    </li>
                                </ul>
                            </div> <!-- Cierre del div de collapse navbar-collapse -->
                        </div> <!-- Cierre del div de container-fluid -->
                    </nav>
                </div> <!-- Cierre del div de col-md-12 -->
            </div><!-- Cierre del div de row -->
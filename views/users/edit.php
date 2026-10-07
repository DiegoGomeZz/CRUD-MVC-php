<?php require_once __DIR__ . '/../layout/header.php'; ?>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="offset-md-3 col-md-7">
            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                    <h1 class="h3 mb-4">EDITAR paciente</h1>
                <form action="index.php?action=update" method="POST">
                    <input type="hidden" name="id" value="<?= htmlspecialchars($paciente["id"]) ?>">
                    <div class="mb-3">
                        <label for="firstname" class="form-label">Nombre</label>
                        <input type="text" name="firstname" id="firstname" class="form-control" value="<?= htmlspecialchars($paciente["firstname"]) ?>">
                    </div>

                    <div class="mb-3">
                        <label for="lastname" class="form-label">Apellido</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" value="<?= htmlspecialchars($paciente["lastname"]) ?>">
                    </div>

                    <div class="mb-3">
                        <label for="phonenumber" class="form-label">Teléfono</label>
                        <input type="text" name="phonenumber" id="phonenumber" class="form-control" value="<?= htmlspecialchars($paciente["phonenumber"]) ?>">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="<?= htmlspecialchars($paciente["email"]) ?>">
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Dirección</label>
                        <input type="text" name="address" id="address" class="form-control" value="<?= htmlspecialchars($paciente["address"]) ?>">
                    </div>

                    <div class="mb-4">
                        <label for="birthdate" class="form-label">Fecha de nacimiento</label>
                        <input type="date" name="birthdate" id="birthdate" class="form-control" value="<?= htmlspecialchars($paciente["birthdate"]) ?>">
                    </div>

                    <div class="d-flex gap-2">
                        <input type="submit" name="update" class="btn btn-success" value="Guardar cambios">
                        <a href="index.php?action=showPacientes" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
                </div>
            </div>

        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../layout/footer.php'; ?>
<?php require_once __DIR__ . '/../layout/header.php'; ?>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="offset-md-3 col-md-7">
            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                    <h1 class="h3 mb-4">Agregar paciente</h1>
                <form action="index.php?action=store" method="POST">
                    <div class="mb-3">
                        <label for="firstname" class="form-label">Nombre</label>
                        <input type="text" name="firstname" id="firstname" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="lastname" class="form-label">Apellido</label>
                        <input type="text" name="lastname" id="lastname" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="phonenumber" class="form-label">Teléfono</label>
                        <input type="text" name="phonenumber" id="phonenumber" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Dirección</label>
                        <input type="text" name="address" id="address" class="form-control">
                    </div>

                    <div class="mb-4">
                        <label for="birthdate" class="form-label">Fecha de nacimiento</label>
                        <input type="date" name="birthdate" id="birthdate" class="form-control">
                    </div>

                    <div class="d-flex gap-2">
                        <input type="submit" name="store" class="btn btn-success" value="Agregar paciente">
                        <a href="index.php?action=index" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
                </div>
            </div>

        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../layout/footer.php'; ?>
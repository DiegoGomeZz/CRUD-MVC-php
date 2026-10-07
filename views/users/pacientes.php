<?php require_once __DIR__ . '/../layout/header.php'; ?>

<div class="container mt-5 mb-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h2 mb-1">Lista de pacientes</h1>
        </div>
        <a href="index.php?action=create" class="btn btn-success">Agregar paciente</a>
    </div>

    <div class="table-responsive shadow-sm">
        <table class="table table-striped table-hover align-middle mb-0">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Email</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Fecha de nacimiento</th>
                    <th scope="col" class="text-nowrap">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while($paciente = $pacientes->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($paciente['firstname']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['lastname']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['phonenumber']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['email']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['address']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['birthdate']); ?></td>
                        <td class="text-nowrap">
                            <a href="index.php?action=editPaciente&id=<?php echo (int) $paciente['id']; ?>" class="btn btn-sm btn-outline-primary">Editar</a>
                            <a href="index.php?action=deletePaciente&id=<?php echo (int) $paciente['id']; ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('¿Eliminar este paciente?')">Eliminar</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once __DIR__ . '/../layout/footer.php'; ?>
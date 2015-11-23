<h1>Admin '<?= $admin['admin_name'] ?>'</h1>
<table class="table table-bordered">

    <tr>
        <th>Admin ID</th>
        <td><?= $admin['admin_id'] ?></td>
    </tr>

    <tr>
        <th>Admin name</th>
        <td><?= $admin['admin_name'] ?></td>
    </tr>

</table>

<!-- EDIT BUTTON -->
<? if ($auth->is_admin): ?>
    <form action="admin/edit/<?= $admin['admin_id'] ?>">
        <div class="pull-right">
            <button class="btn btn-primary">
                Edit
            </button>
        </div>
    </form>
<? endif; ?>
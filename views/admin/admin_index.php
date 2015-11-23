<h3>admin</h3>
<ul class="list-group">
    <? foreach ($admin as $admin): ?>
        <li class="list-group-item">
            <a href="admin/<?= $admin['admin_id'] ?>/<?= $admin['admin_name'] ?>"><?= $admin['admin_name'] ?></a>
        </li>
    <? endforeach ?>
</ul>

<?php if ($auth->is_admin): ?>
<h3>Add new admin</h3>

<form method="post" id="form">
    <form id="form" method="post">
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <td><input type="text" name="data[admin_name]" placeholder=""/></td>
            </tr>
        </table>

        <button class="btn btn-primary" type="submit">Add</button>
    </form>
    <?php endif; ?>

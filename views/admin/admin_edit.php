<? if (!$auth->is_admin): ?>
    <div class="alert alert-danger fade in">
        <button class="close" data-dismiss="alert">×</button>
        You are not an administrator.
    </div>
    <? exit(); endif; ?>
<h1>admin '<?= $admin['admin_name'] ?>'</h1>
<form id="form" method="post">
    <table class="table table-bordered">
        <tr>
            <th>adminname</th>
            <td><input type="text" name="data[admin_name]" value="<?= $admin['admin_name'] ?>"/></td>
        </tr>
    </table>
</form>

<!-- BUTTONS -->
<div class="pull-right">

    <!-- CANCEL -->
    <button class="btn btn-default"
            onclick="window.location.href = 'admin/view/<?= $admin['admin_id'] ?>/<?= $admin['adminname'] ?>'">
        Cancel
    </button>

    <!-- DELETE -->
    <button class="btn btn-danger" onclick="delete_admin(<?= $admin['admin_id'] ?>)">
        Delete
    </button>

    <!-- SAVE -->
    <button class="btn btn-primary" onclick="$('#form').submit()">
        Save
    </button>

</div>
<!-- END BUTTONS -->

<!-- JAVASCRIPT
==============================================================================-->
<script type="application/javascript">
    function delete_admin() {
        $.post('<?=BASE_URL?>admin/delete', {admin_id: <?= $admin['admin_id'] ?>}, function (response) {
            if (response == 'Ok') {
                window.location.href = '<?=BASE_URL?>admin';
            }
        })
    }
</script>
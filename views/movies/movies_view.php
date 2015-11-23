<h1>Movie '<?= $movie['movie_name'] ?>'</h1>
<table class="table table-bordered">

    <tr>
        <th>Movie ID</th>
        <td><?= $movie['movie_id'] ?></td>
    </tr>

    <tr>
        <th>Movie name</th>
        <td><?= $movie['movie_name'] ?></td>
    </tr>

</table>

<!-- EDIT BUTTON -->
<? if ($auth->is_admin): ?>
    <form action="movies/edit/<?= $movie['movie_id'] ?>">
        <div class="pull-right">
            <button class="btn btn-primary">
                Edit
            </button>
        </div>
    </form>
<? endif; ?>
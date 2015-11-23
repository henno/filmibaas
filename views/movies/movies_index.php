<h3>movie</h3>
<ul class="list-group">
    <? foreach ($movies as $movie): ?>
        <li class="list-group-item">
            <a href="movies/<?= $movie['movie_id'] ?>/<?= $movie['movie_name'] ?>"><?= $movie['movie_name'] ?></a>
        </li>
    <? endforeach ?>
</ul>

<?php if ($auth->is_admin): ?>
<h3>Add new movie</h3>

<form method="post" id="form">
    <form id="form" method="post">
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <td><input type="text" name="data[movie_name]" placeholder=""/></td>
            </tr>
        </table>

        <button class="btn btn-primary" type="submit">Add</button>
    </form>
    <?php endif; ?>

<?php include __DIR__ . '/../partials/Header.php'; ?>
<div class="container">
    <a href="/admin/articles/new" class="button is-priamry">New Article</a>
    <table class="table is-striped">
        <thead>
            <th>Id</th>
            <th>Title</th>
            <th>Actions</th>
        </thead>
        <tbody>
        <?php foreach ($articles as $article) : ?>
            <tr>
                <td><?=$article->id?></td>
                <td><?=$article->title?></td>
                <td>
                    <a class="button is-info" href="/admin/articles/view?id=<?=$article->id?>">View</a>
                    <a class="button is-warning" href="/admin/articles/edit?id=<?=$article->id?>">Edit</a>
                    <a class="button is-danger" href="/admin/articles/delete?id=<?=$article->id?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php include __DIR__ . '/../partials/footer.php'; ?>
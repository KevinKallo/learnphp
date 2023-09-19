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
                    <a class="button is-info">View</a>
                    <a class="button is-warning">Edit</a>
                    <a class="button is-danger">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php include __DIR__ . '/../partials/footer.php'; ?>
<?php include __DIR__ . '/../partials/Header.php'; ?>
<div class="container">
    <a href="/admin/users/new" class="button is-priamry">New Account</a>
    <table class="table is-striped">
        <thead>
            <th>Id</th>
            <th>Email</th>
            <th>Actions</th>
        </thead>
        <tbody>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?=$user->id?></td>
                <td><?=$user->email?></td>
                <td>
                    <a class="button is-info" href="/admin/users/view?id=<?=$user->id?>">View</a>
                    <a class="button is-warning" href="/admin/users/edit?id=<?=$user->id?>">Edit</a>
                    <a class="button is-danger" href="/admin/users/delete?id=<?=$user->id?>">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php include __DIR__ . '/../partials/footer.php'; ?>
<?php include __DIR__ . '/../partials/Header.php'; ?>
<div class="container">
    <table class="table is-striped is-fullwidth">
        <tbody>
            <tr>
                <th>Id</th>
                <th><?=$user->id?></th>
            </tr>
            <tr>
                <th>Email</th>
                <th><?=$user->email?></th>
            </tr>
            <tr>
                <th>Password</th>
                <th><?=$user->password?></th>
            </tr>
        </tbody>

    </table>
</div>
<?php include __DIR__ . '/../partials/footer.php'; ?>




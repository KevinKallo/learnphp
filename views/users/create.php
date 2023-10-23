<?php include __DIR__ . '/../partials/header.php'; ?>
<div class="container">
<h1 class="is-size-1">New account</h1>

    <form action="/admin/users" method="POST">
        <div class="field">
            <label class="label" for="email">Email</label>
            <div class="control">
                <input class="input" type="email" placeholder="Email" name="email" id="email">
            </div>
        </div>
        <div class="field">
            <label class="label" for="password">Password</label>
            <div class="control">
                <input class="input" type="password" name="password" id="password">
            </div>
        </div>
        <div class="field">
            <label class="label" for="password_confirm">Password Confirm</label>
            <div class="control">
                <input class="input" type="password" name="password_confirm" id="password_confirm">
            </div>
        </div>
        <div class="field">
            <div class="control">
                <input class="button is-primary" type="submit" value="Register">
            </div>
        </div>
    </form>
</div>
<?php include __DIR__ .  '/../partials/footer.php'; ?>
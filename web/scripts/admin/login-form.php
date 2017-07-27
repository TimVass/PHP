<?= !empty($message) ? $message : null ?>

<form method="post" action="<?= url('admin')?>">
    <p>
        <input type="password" name="password">
    </p>

    <p>
        <input type="submit" value="Prihlásiť" name="admin_login">
    </p>


</form>
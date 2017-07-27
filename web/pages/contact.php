
<?php

if (isset($_POST['contact_form'])){
    $name = getPostParam('name');
    $email = getPostParam('email');
    $text = getPostParam('text');

    $message ='';
    if(empty($name)
        || empty($email)
        || empty($text)
    ){
        $message = 'Prosim vyplnte vsetky udaje';
    }else{
        $file = fopen('data/contact.csv', 'a');

        $data = [$name, $email, $text];
        fputcsv($file, $data, ';');
        fclose($file);

        unset($name);
        unset($email);
        unset($text);


        $message = 'Dakujem ze ste nas kontaktovali';
    }
}


?>

<?= !empty($message) ? $message : null ?>

    <form method="post" action="<?= url('contact')?>">
        <p>
        <label>Meno :</label>
        <input type="text" name="name" value="<?=isset($name) ? $name : null ?>">
        </p>

        <p>
            <label>Email :</label>
            <input type="email" name="email" value="<?=isset($email) ? $email : null ?>">
        </p>

        <p>
            <label>Text:</label>
            <textarea name="text">
                <?=isset($text) ? $text : null ?>
            </textarea>

        </p>
        <input type="submit" name="contact_form" value="odoslat">

    </form>


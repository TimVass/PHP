
<ul>
    <?php
        foreach (getArticlesConfig() as $article)
        {
    ?>

            <li>
                <strong>
                    <?= $article['label'] ?>
                </strong>
                <p>
                    <?= $article['description'] ?>
                </p>
            </li>

    <?php
        }
    ?>
</ul>
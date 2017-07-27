

<ul>
    <?php
        foreach (getNavigationConfig() as $item)
        {
    ?>
            <li>
                <a href="
                <?= $item['href']
                ?>
                " >
                    <?= $item['label'] ?>
                </a>

            </li>
    <?php
        }
    ?>

</ul>
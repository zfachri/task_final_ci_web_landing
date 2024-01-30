<ul class="naviagation">
    <a class="<?= ($url == "/admin/index.php" ? "active" : "") ?>" href="index.php" style="text-decoration: none">
        <li>
            <i class="fa-solid fa-house"></i> Home
        </li>

        <a class="<?= ($url == "/admin/trending.php" ? "active" : "") ?>" href="trending.php" style="text-decoration: none">
            <li>
                <i class="fa-solid fa-star"></i> Trending Isu
            </li>
        </a>
        <a href="python.php" style="text-decoration: none">
            <li class="<?= ($url == "/admin/python.php" ? "active" : "") ?>">
                <i class="fa-solid fa-gear"></i> Python Analysis Playground
            </li>
        </a>
        <a class="<?= ($url == "/admin/tag.php" ? "active" : "") ?>" href="tag.php" style="text-decoration: none">
            <li>
                <i class="fa-solid fa-star"></i> Awan Kata
            </li>
        </a>
        <a class="<?= ($url == "/admin/about_me.php" ? "active" : "") ?>" href="about_me.php" style="text-decoration: none">
            <li>
                <i class="fa-solid fa-user"></i> About Me
            </li>
        </a>

        <?php  ?>

</ul>
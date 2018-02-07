<aside>
    <h2>Courses</h2>
    <ul>
        <!-- display links for all categories -->
        <?php foreach ($courses as $course) : ?>
        <li>
            <a href="<?php echo $app_path . 'catalog' . 
                '?action=list_products' .
                '&amp;category_id=' . $category['categoryID']; ?>">
                <?php echo $category['categoryName']; ?>
            </a>
        </li>
        <?php endforeach; ?>
        <li>&nbsp;</li>
    </ul>
</aside>

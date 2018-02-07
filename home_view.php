<?php include 'view/header.php'; ?>
<?php $courses = get_courses(); ?>

<aside>
    <h2>Courses</h2>
    <ul>
        <!-- display links for all categories -->
        <?php foreach ($courses as $course) : ?>
        <li>
            <!--<a href="<?php echo $app_path . 'course' . 
                           '?action=list_courses' .
                           '&amp;course_id='.$course['courseID']; ?>">
                            <?php echo $course['courseID']; ?>
            </a>-->

            <?php echo $course['courseID']; ?>
        </li>
        <?php endforeach; ?>
        <li>&nbsp;</li>
    </ul>
</aside>

<section>
    <h1>Student List</h1>
    <!--<table>
    <?php foreach ($products as $product) :
        // Get product data
        $list_price = $product['listPrice'];
        $discount_percent = $product['discountPercent'];
        $description = $product['description'];
        
        // Calculate unit price
        $discount_amount = round($list_price * ($discount_percent / 100.0), 2);
        $unit_price = $list_price - $discount_amount;

        // Get first paragraph of description
        $description_with_tags = add_tags($description);
        $i = strpos($description_with_tags, "</p>");
        $description_paragraph = substr($description_with_tags, 3, $i-3);
    ?>
        <tr>
            <td class="product_image_cell">
                <img src="images/<?php echo $product['productCode']; ?>_s.png"
                     alt="&nbsp;">
            </td>
            <td class="product_info_cell">
                <p>
                    <a href="catalog?action=view_product&amp;product_id=<?php 
                              echo $product['productID']; ?>">
                        <?php echo $product['productName']; ?>
                    </a>
                </p>
                <p>
                    <b>Your price:</b>
                    $<?php echo number_format($unit_price, 2); ?>
                </p>
                <p>
                    <?php echo $description_paragraph; ?>
                </p>
            </td>
        </tr>
    <?php endforeach; ?>
    </table>-->
</section>
<?php include 'view/footer.php'; ?>
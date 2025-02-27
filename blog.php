<?php

include('./header.php');

?>

<!-- slider Area Start-->
<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/law_hero2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Our Blog</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->

<!--================Blog Area =================-->
<?php
include('./db.php');

// Fetch blog posts from the database
$sql = "SELECT * FROM posts ORDER BY date DESC LIMIT 5"; // Adjust limit as per your needs
$result = $conn->query($sql);
?>

<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">

                    <?php
                    // Loop through the blog posts
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                    ?>

                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0" src="assets/img/blog/<?php echo $row['image']; ?>" alt="">
                            <a href="#" class="blog_item_date">
                                <h3><?php echo date('d', strtotime($row['date'])); ?></h3>
                                <p><?php echo date('M', strtotime($row['date'])); ?></p>
                            </a>
                        </div>
                        <div class="blog_details">
                            <a class="d-inline-block" href="single-blog.php?id=<?php echo $row['id']; ?>">
                                <h2><?php echo $row['title']; ?></h2>
                            </a>
                            <p><?php echo substr($row['content'], 0, 150); ?>...</p>
                            <ul class="blog-info-link">
                                <li><a href="#"><i class="fa fa-user"></i> <?php echo $row['category']; ?></a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> <?php echo $row['comments']; ?>
                                        Comments</a></li>
                            </ul>
                        </div>
                    </article>

                    <?php
                        }
                    } else {
                        echo "<p>No posts available.</p>";
                    }
                    ?>

                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Previous">
                                    <i class="ti-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Next">
                                    <i class="ti-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <!-- Your sidebar code here -->
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Close the database connection
$conn->close();
?>

<!--================Blog Area =================-->

<?php

include('./footer.php');

?>
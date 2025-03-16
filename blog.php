<?php

include('./header.php');
include('./db.php');

// Pagination setup
$limit = 5; // Posts per page
$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Fetch blog posts with category names
$sql = "SELECT posts.*, categories.name AS category_name 
        FROM posts 
        JOIN categories ON posts.category_id = categories.id 
        ORDER BY date DESC 
        LIMIT $limit OFFSET $offset";
$result = $conn->query($sql);
?>

<!-- Blog Area -->
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">

                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                    ?>

                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0"
                                src="../Case-ManageMent/blog/uploads/<?php echo $row['image']; ?>"
                                alt="../Case-ManageMent/blog/uploads/<?php echo $row['image']; ?>">
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
                                <li><a href="#"><i class="fa fa-user"></i> <?php echo $row['category_name']; ?></a></li>
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

                    <!-- Pagination -->
                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <?php
                            $total_posts_query = "SELECT COUNT(*) AS total FROM posts";
                            $total_posts_result = $conn->query($total_posts_query);
                            $total_posts = $total_posts_result->fetch_assoc()['total'];
                            $total_pages = ceil($total_posts / $limit);

                            for ($i = 1; $i <= $total_pages; $i++) {
                                echo '<li class="page-item ' . ($page == $i ? "active" : "") . '">
                                        <a href="index.php?page=' . $i . '" class="page-link">' . $i . '</a>
                                      </li>';
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Categories</h4>
                        <ul class="list cat-list">
                            <?php
                            // Fetch categories
                            $category_sql = "SELECT categories.id, categories.name, COUNT(posts.id) AS post_count 
                                             FROM categories 
                                             LEFT JOIN posts ON categories.id = posts.category_id 
                                             GROUP BY categories.id";
                            $category_result = $conn->query($category_sql);

                            if ($category_result->num_rows > 0) {
                                while ($category = $category_result->fetch_assoc()) {
                                    echo '<li>
                                            <a href="index.php?category_id=' . $category['id'] . '" class="d-flex">
                                                <p>' . $category['name'] . '</p>
                                                <p>(' . $category['post_count'] . ')</p>
                                            </a>
                                          </li>';
                                }
                            }
                            ?>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$conn->close();
include('./footer.php');
?>
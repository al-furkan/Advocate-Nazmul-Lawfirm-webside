<?php
include('./header.php');
include('./db.php');  // Include your database connection

// Get the post ID from the URL
$post_id = isset($_GET['id']) ? $_GET['id'] : 0;

if ($post_id <= 0) {
    // Redirect to the blog index page if the post ID is invalid
    header("Location: blog.php");
    exit();
}

// Fetch the post details from the database
$sql = "SELECT * FROM posts WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $post_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $post = $result->fetch_assoc();
} else {
    echo "Post not found.";
    exit();
}

// Fetch the category for the post
$category_sql = "SELECT name FROM categories WHERE id = ?";
$category_stmt = $conn->prepare($category_sql);
$category_stmt->bind_param("i", $post['category_id']);
$category_stmt->execute();
$category_result = $category_stmt->get_result();
$category = $category_result->fetch_assoc();

// Fetch comments for the post
$comment_sql = "SELECT * FROM comments WHERE post_id = ? ORDER BY created_at DESC";
$comment_stmt = $conn->prepare($comment_sql);
$comment_stmt->bind_param("i", $post_id);
$comment_stmt->execute();
$comment_result = $comment_stmt->get_result();
$comment_count = $comment_result->num_rows;

// Fetch the previous post
$prev_sql = "SELECT id, title FROM posts WHERE id < ? ORDER BY id DESC LIMIT 1";
$prev_stmt = $conn->prepare($prev_sql);
$prev_stmt->bind_param("i", $post_id);
$prev_stmt->execute();
$prev_post = $prev_stmt->get_result()->fetch_assoc();

// Fetch the next post
$next_sql = "SELECT id, title FROM posts WHERE id > ? ORDER BY id ASC LIMIT 1";
$next_stmt = $conn->prepare($next_sql);
$next_stmt->bind_param("i", $post_id);
$next_stmt->execute();
$next_post = $next_stmt->get_result()->fetch_assoc();

// Close the statements
$stmt->close();
$category_stmt->close();
$comment_stmt->close();
$prev_stmt->close();
$next_stmt->close();
?>

<!-- slider Area Start -->
<div class="slider-area">
    <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/law_hero2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Single Blog</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End -->

<!-- Blog Area Start -->
<section class="blog_area single-post-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="feature-img">
                        <img class="img-fluid"
                            src="../Case-ManageMent/blog/uploads/<?= htmlspecialchars($post['image']) ?>" alt="">
                    </div>
                    <div class="blog_details">
                        <h2><?= htmlspecialchars($post['title']) ?></h2>
                        <ul class="blog-info-link mt-3 mb-4">
                            <li><a href="#"><i class="fa fa-user"></i> <?= htmlspecialchars($category['name']) ?></a>
                            </li>
                            <li><a href="#"><i class="fa fa-comments"></i> <?= $comment_count ?> Comments</a>
                            </li>
                        </ul>
                        <p class="excert">
                            <?= nl2br(htmlspecialchars($post['content'])) ?>
                        </p>
                    </div>
                </div>

                <div class="navigation-top">
                    <div class="d-sm-flex justify-content-between text-center">
                        <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                            people like this</p>
                        <div class="col-sm-4 text-center my-2 my-sm-0"></div>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fas fa-globe"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                    <div class="navigation-area">
                        <div class="row">
                            <div
                                class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                <div class="thumb">
                                    <a href="single-blog.php?id=<?= $prev_post['id'] ?>">
                                        <img class="img-fluid" src="assets/img/post/preview.png" alt="">
                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="single-blog.php?id=<?= $prev_post['id'] ?>">
                                        <span class="lnr text-white ti-arrow-left"></span>
                                    </a>
                                </div>
                                <div class="detials">
                                    <p>Prev Post</p>
                                    <a href="single-blog.php?id=<?= $prev_post['id'] ?>">

                                    </a>
                                </div>
                            </div>
                            <div
                                class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                <div class="detials">
                                    <p>Next Post</p>
                                    <a href="single-blog.php?id=<?= $next_post['id'] ?>">

                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="single-blog.php?id=<?= $next_post['id'] ?>">
                                        <span class="lnr text-white ti-arrow-right"></span>
                                    </a>
                                </div>
                                <div class="thumb">
                                    <a href="single-blog.php?id=<?= $next_post['id'] ?>">
                                        <img class="img-fluid" src="assets/img/post/next.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Blog Author Section -->
                <div class="blog-author">
                    <div class="media align-items-center">
                        <img src="assets/img/blog/author.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Harvard Milan</h4>
                            </a>
                            <p>Second divided from form fish beast made. Every of seas all gathered use saying you're,
                                he our dominion.</p>
                        </div>
                    </div>
                </div>

                <!-- Comments Section -->
                <div class="comments-area">
                    <h4><?= $comment_count ?> Comments</h4>
                    <?php while ($comment = $comment_result->fetch_assoc()): ?>
                    <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="assets/img/comment/comment_1.png" alt="">
                                </div>
                                <div class="desc">
                                    <p class="comment"><?= nl2br(htmlspecialchars($comment['content'])) ?></p>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h5><a href="#"><?= htmlspecialchars($comment['author']) ?></a></h5>
                                            <p class="date"><?= htmlspecialchars($comment['created_at']) ?></p>
                                        </div>
                                        <div class="reply-btn">
                                            <a href="#" class="btn-reply text-uppercase">reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>

                <!-- Leave a Comment Form -->
                <div class="comment-form">
                    <h4>Leave a Reply</h4>
                    <form class="form-contact comment_form" action="post_comment.php" method="POST">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                        placeholder="Write Comment" required></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text" placeholder="Name"
                                        required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email" placeholder="Email"
                                        required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="website" id="website" type="text"
                                        placeholder="Website">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send
                                Message</button>
                        </div>
                    </form>
                </div>

            </div>

            <!-- Sidebar Section -->
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <!-- Search Widget -->
                    <aside class="single_sidebar_widget search_widget">
                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Search Keyword'>
                                    <div class="input-group-append">
                                        <button class="btn" type="button"><i class="ti-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                type="submit">Search</button>
                        </form>
                    </aside>
                    <!-- Categories Widget -->
                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Category</h4>
                        <ul class="list cat-list">
                            <li><a href="#" class="d-flex justify-content-between">
                                    <p>Law</p>
                                    <p>37</p>
                                </a></li>
                            <li><a href="#" class="d-flex justify-content-between">
                                    <p>Food</p>
                                    <p>10</p>
                                </a></li>
                            <li><a href="#" class="d-flex justify-content-between">
                                    <p>Technology</p>
                                    <p>5</p>
                                </a></li>
                        </ul>
                    </aside>
                    <!-- Recent Posts Widget -->
                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Recent Posts</h3>
                        <div class="media post_item">
                            <img src="assets/img/post/post_1.png" alt="post">
                            <div class="media-body">
                                <a href="single-blog.php?id=1">
                                    <h3>Space The Final Frontier</h3>
                                </a>
                                <p>Jan 12, 2025</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="assets/img/post/post_2.png" alt="post">
                            <div class="media-body">
                                <a href="single-blog.php?id=2">
                                    <h3>Telescopes 101</h3>
                                </a>
                                <p>Feb 5, 2025</p>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Area End -->

<?php
include('./footer.php');
?>
<?php
    include_once 'account-header.php';
    $get_posts = $con->query("SELECT * from posts order by id desc ");
?>
            <div class="dashboard-content">
                <!--* Blog*-->
                <section id="mt_blog" class="">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="blog_post_sec blog_post_inner">
                                    <div class="row">
                                        <?php 
                                            while ($post = $get_posts->fetch_assoc()) {
                                                $user_id = $post['user_id'];
                                                $get_user = $con->query("SELECT name from users where id = '$user_id' LIMIT 1 ");
                                                $row = mysqli_fetch_assoc($get_user);
                                                $post_owner = $row['name'];
                                            
                                        ?>
                                        <div class="col-md-6 col-sm-12 mar-bottom-30">
                                            <div class="blog-post_wrapper image-wrapper">
                                                <div class="blog-post-image">
                                                    <img src="../post_images/<?php echo $post['image']  ?> " alt="image" class="img-responsive center-block post_img" />
                                                </div>
                                                <div class="post-content">
                                                    <div class="post-category">
                                                        <ul>
                                                            <li class="cat-yellow"><a href="#" class="white"><?php echo $post['category']  ?></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="post-date">
                                                        <p><a href="#"><?php echo $post['created_at']  ?></a></p>
                                                    </div>
                                                    <h2 class="entry-title">
                                                        <a href="post.php?id=<?php echo $post['id']?> " class="white"><?php echo $post['title']  ?></a>
                                                    </h2>
                                                    <div class="item-meta white">
                                                        <span>by</span>
                                                        <a class="author-name white" href="author.html"><?php echo $post_owner  ?></a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <?php 
                                            }
                                     ?>
                                    </div>    
                                </div>
                            </div>
                        </div>    
                </section>
                <!--* End Blog*-->
            </div>

            
<?php
    include_once 'account-footer.php';
?>
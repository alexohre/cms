<div class="sidebar-box">
<h3 class="heading">Recent Posts</h3>
<div class="post-entry-sidebar">


<?php  
$query = "SELECT * FROM posts ORDER BY post_id DESC LIMIT 5";
$result = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($result)) {

  $post_id = $row['post_id'];
  $post_title = $row['post_title'];
  $post_author = $row['post_author'];
  $post_category = $row['post_category'];
  $post_tags = $row['post_tags'];
  $post_content = $row['post_content'];
  $post_status = $row['post_status'];
  $post_image = $row['post_image'];

  $date = $row['post_date'];

  $post_views = $row['post_views'];
  $post_comment_count = $row['post_comment_count'];

?>     
       
       
       
       
       
              
                  <ul>
                    <li>
                      <a href="blog-single.php?post=<?php echo $post_title ?>">
                        <img src="admin/images/<?php echo $post_image ?>" alt="Image placeholder" class="mr-4">
                        <div class="text">
                          <h4><?php echo $post_title ?></h4>
                          <div class="post-meta">
                            <span class="mr-2"><?php echo $date ?> </span>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
               
<?php }

?>

</div>
</div>
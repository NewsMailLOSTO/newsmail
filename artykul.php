<?php
    include ('head.php');
    include ('top.php');
    include ('db.php');


    $news_id = $_GET['id'];

    mysql_select_db($db_database, $db) or die(mysql_error($db)); 
    $query = mysql_query("SELECT * FROM `news` WHERE `id_news`= " . $news_id, $db);
    if ($query) {
	$row = mysql_fetch_assoc($query);
    } else {
	echo '<div class="notif-warning">' . mysql_error() . '</div>';
    }    
?>
<div class="col-lg-8 col-md-8">
    <div class="content_bottom_left">
	<!-- Ostatnio dodane -->        
	<div class="single_category wow fadeInDown">
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#"><?php echo $row['tytul']; ?></a> </h2>
            
		<ul class="fashion_catgnav">
		    <li>
			<div class="catgimg2_container"> <a href="artykul.php?id=<?php echo $news_id ?>"><img alt="" src="images/390x240x1.jpg"></a> </div>
			<div class="comments_box"> <span class="meta_date"><?php echo $row['data']; ?></span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> 
			    <h4><?php echo $row['wstep']; ?></h4>
			    <p><?php echo $row['tresc']; ?></p>
			</div>

		    </li>
		</ul>
            

	</div>


    </div>
</div>

<?php
    include ('prawy.php');
    include('foot.php');
?>
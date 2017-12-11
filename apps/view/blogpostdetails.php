

<div class="contentsection contemplete clear container">
		<div class="maincontent clear">

				<?php 

					foreach ($postbyid as $key => $value) {
						
					

				?>
			<div class="about">
				<h2><?php echo $value['title'];?></h2>
				<p> Category :<a href="<?php echo BASE_URL;?>/Showpage/showpostbycat/<?php echo $value['id'];?>"><?php echo $value['name'];?> </a></p>
				<h4><?php echo $value['date'];?>, By <a href="#"><?php echo $value['author'];?></a></h4>
				<img src="<?php echo $value['image'];?>" alt="MyImage"/>
				<p><?php echo $value['description'];?></p>

				<?php } ?>
				
				<div class="relatedpost clear">
					<h2>Related articles</h2>
					<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
					<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
					<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
					<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
					<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
					<a href="#"><img src="images/post1.jpg" alt="post image"/></a>
				</div>
		</div>



		</div>
		
<div class="sidebar clear">
			<div class="samesidebar clear container">
				<h2>Categories</h2>
					<ul>

					<?php 

						foreach ($catlist as $key => $value) {
							
						

					?>
						<li><a href="<?php echo BASE_URL;?>/index.php?url=Showpage/showpostbycat/<?php echo $value['id']; ?>"><?php echo $value['name'];?></a></li>


						<?php } ?>					
					</ul>
			</div>
			
			<div class="samesidebar clear">
				<h2>Latest articles</h2>

					<?php 

						foreach ($latestpost as $key => $value) {
							
						

					?>

					<div class="popular clear">
						<h3><a href="<?php echo BASE_URL;?>/index.php?url=Showpage/postdetails/<?php echo $value['id']; ?>"><?php echo $value['title'];?></a></h3>
						<a href=""><img src="images/post1.jpg" alt="post image"/></a>
						<p><?php

							$text=$value['description'];

							if(strlen($text)>40){

								$text=substr($text,0,40);

								echo $text;
							}

					 ?>
</p>	
					</div>
					
					<?php } ?>
			</div>
			
		</div>
	</div>
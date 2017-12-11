
	<div class="contentsection contemplete clear container">
		<div class="maincontent clear">

				<?php 

					foreach ($allpost as $key => $value) {
						
					
				?>

			<div class="samepost clear">
				<h2><a href="<?php echo BASE_URL;?>/index.php?url=Showpage/postdetails/<?php echo $value['id']; ?>"><?php echo $value['title'];?></a></h2>
				<h4><?php echo $value['date'];?>, By <a href="#"><?php echo $value['author'];?></a></h4>
				 <a href="#"><img src="<?php echo $value['image'];?>" alt="post image"/></a>
				<p>
				
					<?php

							$text=$value['description'];

							if(strlen($text)>200){

								$text=substr($text,0,200);

								echo $text;
							}

					 ?>

				</p>
				<div class="readmore clear">
					<a href="<?php echo BASE_URL;?>/index.php?url=Showpage/postdetails/<?php echo $value['id']; ?>">Read More</a>
				</div><br/><br/>

				
			</div>
			
			<?php  }  ?>

		</div>
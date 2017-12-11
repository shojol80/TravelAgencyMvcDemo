<div class="grid_10">
		
            <div class="box round first grid">
                <h2>Update category</h2>
                <div class="block">               
                  
     
              <?php

                    if(isset($catbyid)){

                    foreach ($catbyid as $value) {
                        
                    
                ?>      

    <form method="post" action="<?php echo BASE_URL;?>/index.php?url=Admin/updatecategory/<?php echo $value['id'];?>">

        <table class="form">   

                   
                        <tr>
                            <td>
                                <input type="text" name="name" value="<?php echo $value['name'];?>" placeholder="Enter Category Name..." class="medium" />
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="text" name="title" value="<?php echo $value['title'];?>" placeholder="Enter Category title..." class="medium" />
                            </td>
                        </tr>
                        <tr> 
                            <td>
                                <input type="submit" name="submit" Value="Update" />
                            </td>
                        </tr>

                       
                    </table>
                    </form>

                     <?php } } ?>

            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
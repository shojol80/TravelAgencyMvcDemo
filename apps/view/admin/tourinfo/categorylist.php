<div class="grid_10">
		
            <div class="box round first grid">
                <h2>Category Lst</h2>

                    <?php

                   /* if(!empty($_GET['msg'])){

                        $msg= unserialize(urldecode($_GET['msg']));

                        foreach ($msg as $key => $value) {
                            echo "<span style='color:blue;font-weight:bold'>". $value."</span>";
                        }
                    }*/
    
                        
                            
                    ?>

                <div class="block">               
                  
                  <table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th>Serial No.</th>
                            <th>Category Name</th>
                        
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php 

                        $i=0;

                        foreach ($cat as $key => $value) {
                            $i++;
                        
                    ?>
                    
                        <tr class="even gradeC">
                            <td><?php echo $i;?></td>
                            <td><?php echo $value['name'];?></td>

                            
                            <td><a href="<?php echo BASE_URL;?>/index.php?url=Admin/editcategory/<?php echo $value['id'];?>">Edit</a> || <a href="<?php echo BASE_URL;?>/index.php?url=Admin/deletecategory/<?php echo $value['id'];?>">Delete</a></td>
                        </tr>

                             <?php } ?>

                        </tbody>

                        

                        </table>

                </div>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
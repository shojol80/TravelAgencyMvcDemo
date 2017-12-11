<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Post List | Admin</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/nav.css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
    <link href="css/table/demo_page.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN: load jquery -->
    <script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.sortable.min.js" type="text/javascript"></script>
    <script src="js/table/jquery.dataTables.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
    <script type="text/javascript" src="js/table/table.js"></script>
    <script src="js/setup.js" type="text/javascript"></script>
</head>



<div class="grid_10">
            <div class="box round first grid">
                <h2>Post List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th width="15" align="centre">Post Title</th>
							<th width="22%"align="centre">Description</th>
							<th width="15%"align="left">Category</th>
							<th width="10%"align="left">Image</th>
                            <th width="10%"align="left">Date</th>

                            <th width="10%"align="left">Author</th>
							<th width="18%"align="left">Action</th>
						</tr>
					</thead>
					<tbody>

                            <?php 

                       

                        foreach ($listpost as $key => $value) {
                            
                    ?>

						<tr class="odd gradeX">
							<td><?php echo $value['title'] ;?></td>


							<td><?php 

                                $text=$value['description'];

                                if(strlen($text)>40){

                                $text=substr($text,0,40);

                                echo $text;
                            }

                            ?>
                                

                            </td>


							<td>
                                <?php

                                    foreach ($catlist as $key => $cat) {
                                        if($cat['id']==$value['category']){

                                            echo $cat['name'];
                                        }
                                    }

                                // echo $value['category']; 


                                 ?>
                                

                            </td>



							<td><img src="<?php echo $value['image'];?>"height="50px" width="80px" /></td>

                            <td><?php echo $value['date']; ?></td>

                            <td><?php echo $value['author']; ?></td>


							<td><a href="">Edit</a> || <a href="">Delete</a></td>
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
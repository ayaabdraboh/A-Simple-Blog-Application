<?php
require "connect.php";
$user=User::find('all');
$post=Post::find('all');
$comment=Comment::find('all');
require 'header.php';
?>
   <table class="table table-dark">
        <thead>
            <tr>
                
                <th>First Name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <?php
          
            foreach ($user as $key){
            
               ?>
                <tr>
                  
                    <td><?= $key->f_name?></td>
                    <td><?= $key->l_name?></td>
                    <td><?= $key->email ?></td>
                    <td><?php if($key->status ==0){ echo "InActive";} elseif($key->status ==1){ echo "Active";}?></td>

                    <td>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                       
                       <label class="btn btn-secondary ">
                            <a href="active.php?id=<?= $key->uid?>"> Active </a> 
                                 
                        </label>
                        <label class="btn btn-secondary">
                           <a href="inactive.php?id=<?= $key->uid?>">Not Active </a> 
                            
                        </label>
                      
                    </div>
                    </td>
                </tr>
               <?php
            }
        ?>
   </table>
   <pre>
   
   
   </pre>
   <table class="table table-dark">
        <thead>
            <tr>
                 <th>#</th>
                <th>Content</th>
                <th>User Name</th>
                <th>Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <?php
            $i=0;
            foreach ($post as $pkey){
             
                $i++;
                
               ?>
                <tr>
                    <td><?= $i;?></td>
                    <td><?= $pkey->p_content?></td>
                     <td><?= User::find(array($pkey->u_id))->f_name;?></td>
                    <td><?= $pkey->p_date->format('Y-m-d');?></td>
                   
                   
                    <td><?php if($pkey->p_status ==0){ echo "InActive";} elseif($pkey->p_status ==1){ echo "Active";}?></td>

                    <td>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                       
                       <label class="btn btn-secondary ">
                            <a href="active.php?sid=<?= $pkey->pid?>"> Active </a> 
                                 
                        </label>
                        <label class="btn btn-secondary">
                           <a href="inactive.php?sid=<?= $pkey->pid?>">Not Active </a> 
                            
                        </label>
                      
                    </div>
                    </td>
                </tr>
               <?php
            }
        ?>
   </table>
    <pre>
   
   <h1>Comments</h1>
   
   </pre>

   <table class="table table-dark">
        <thead>
            <tr>
                 <th>#</th>
                <th>Content</th>
                <th>User Name</th>
                <th>Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <?php
            $i=0;
            foreach ($comment as $ckey){
             
                $i++;
                
               ?>
                <tr>
                    <td><?= $i;?></td>
                    <td><?= $ckey->c_content?></td>
                     <td><?= User::find(array($ckey->u_id))->f_name;?></td>
                    <td><?= $ckey->c_date->format('Y-m-d');?></td>
                   
                   
                    <td><?php if($ckey->c_status ==0){ echo "InActive";} elseif($ckey->c_status ==1){ echo "Active";}?></td>

                    <td>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                       
                       <label class="btn btn-secondary ">
                            <a href="active.php?cid=<?= $ckey->cid?>"> Active </a> 
                                 
                        </label>
                        <label class="btn btn-secondary">
                           <a href="inactive.php?cid=<?= $ckey->cid?>">Not Active </a> 
                            
                        </label>
                      
                    </div>
                    </td>
                </tr>
               <?php
            }
        ?>
   </table>
   </div>
   <script src="design/js/bootstrap.min.js"></script>
</body>
</html>
<?php



?>

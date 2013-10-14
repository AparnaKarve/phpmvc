<!-- File : /app/View/Users/index.ctp -->

<h1> My Blog Posts </h1>

<?php echo $this->Html->link(
    'Add Post',
    array('controller' => 'posts', 'action' => 'add')
);

?>

<table>
  <tr>
     <th>Id</th>
     <th>username</th>
     <th>role</th>
  </tr>

  <!-- Loop through $users arr to print out users info -->
  
  

  <ol>
  <?php 

  foreach($users as $user) {
  ?>

  <tr>
     <td><?php echo $user['User']['id']; ?></td>
     <td> <?php echo $user['User']['username']; ?> </td>
     <td> <?php echo $user['User']['role']; ?> </td>
        
  </tr>
  <?php } ?>
  </ol>
  
  <?php unset($user); ?>
</table>

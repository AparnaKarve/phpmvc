<!-- File : /app/View/Posts/index.ctp -->

<h1> My Blog Posts </h1>

<?php echo $this->Html->link(
    'Add Post',
    array('controller' => 'posts', 'action' => 'add')
);

?>

<table>
  <tr>
     <th>Id</th>
     <th>Title</th>
     <th>Created</th>
     <th>Operation</th>
     <th>User</th>
  </tr>

  <!-- Loop through $posts arr to print out posts info -->
  
  <h2>Latest Posts</h2>
  <?php $posts = $this->requestAction('posts/index/sort:created/direction:dsc/limit:10'); ?>

  <ol>
  <?php 

  foreach($posts as $post) {
  ?>

  <tr>
     <td><?php echo $post['Post']['id']; ?></td>
     <td>
         <?php echo $this->Html->link($post['Post']['title'],
           array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
         
      </td>
      <td> <?php echo $post['Post']['created']; ?> </td>
      <td> 
          <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $post['Post']['id']),
                array('confirm' => 'Are you sure?'));
          ?>
         
         <?php echo $this->Html->link('Edit',
           array('controller' => 'posts', 'action' => 'edit', $post['Post']['id'])); ?>
      </td>  
      <td><?php echo $post['User']['username'] ?> </td>
  </tr>
  <?php } ?>
  </ol>
  
  <?php unset($post); ?>
</table>

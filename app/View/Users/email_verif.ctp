   <?php if(!empty($users[0]['User']['email'])){?>
   	
 	 <p style="color:red">	An account already exists with this email. Please <?php echo $this->Html->link('Log in',array('controller'=>'users','action'=>'login')) ?> to continue..</p>
 	 
   <?php } ?>
 	  


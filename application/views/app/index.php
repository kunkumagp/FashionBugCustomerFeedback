<?php include 'inc/header.php';?>

<body>
<a href="<?php echo base_url().'Shutdown';?>" id="exitbtn"><div>exit</div></a>
<div class="container">  
  <form id="contact" action="" method="post">
    <h3>Fashion Bug Customer Feedback</h3>
    <h4>Please select your language</h4>
    
    <div class="col-lg-4"><a href="<?php echo base_url().'Language-English';?>"><div id="langlink">English</div></a></div>
    <div class="col-lg-4"><a href="<?php echo base_url().'Language-Sinhala';?>"><div id="langlink">සිංහල</div></a></div>
    <div class="col-lg-4"><a href="<?php echo base_url().'Language-Tamil';?>"><div id="langlink">தமிழ்</div></a></div>

	<br/><br/>
    <?php include 'inc/footer.php';?>
    
    
  </form>
  
  
  
</div>
</body>
</html>

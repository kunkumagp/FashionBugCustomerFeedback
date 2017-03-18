<?php include 'inc/header.php';?>

<body onload="startTime()">

<div class="container">  

  <form id="contact" action="<?php echo base_url().'App/datasubmit';?>" method="post" style="margin:50px 0 !important;">
  <input name="language" type="hidden" id="language" value="<?php echo $language; ?>">
  <input name="branchCode" type="hidden" id="branchCode" value="<?php echo $location->branchCode;?>">
      <h3>Fashion Bug Customer Feedback</h3>
    <h4>What would you you like to share with us..?</h4>
    <div class="style-1">
    	Time : <b id="txt"></b >&nbsp;&nbsp;
        Location : <b><?php echo $location->branchTitle;?></b>
    </div>
    <br/>
    <div class="col-lg-4">
    	<div class="input-group">
  			<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
  			<input name="name" type="text" required="" id="name" placeholder="Your name" tabindex="1">
		</div>
    </div>
	<div class="col-lg-4">
    	<div class="input-group">
  			<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>
  			<input name="email" type="email" required="" id="email" placeholder="Your Email Address" tabindex="2">
		</div>
    </div>
	<div class="col-lg-4">
    	<div class="input-group">
  			<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span></span>
  			<input name="phone" type="tel" required="" id="phone" placeholder="Your Phone Number" tabindex="3">
		</div>
    </div>
    <br/><br/>
	
   
    
    <fieldset class="radioboxstyles">
    
    <div class="col-lg-4"><label class="ques">Friendliness of Staff</label></div>
    
    <div>
    <input type="radio" name="fofs" id="fofs1" class="css-checkbox" value="e" /><label for="fofs1" class="css-label radGroup1">Excellent</label>
    <input type="radio" name="fofs" id="fofs2" class="css-checkbox" value="g" /><label for="fofs2" class="css-label radGroup1">Good</label>
    <input type="radio" name="fofs" id="fofs3" class="css-checkbox" value="a" /><label for="fofs3" class="css-label radGroup1">Average</label>
    <input type="radio" name="fofs" id="fofs4" class="css-checkbox" value="p" /><label for="fofs4" class="css-label radGroup1">Poor</label>
    </div>
    </fieldset>
    
    <fieldset class="radioboxstyles">
    <div class="col-lg-4"><label class="ques">Quality of Products</label></div>
    <div>
    
    <input type="radio" name="qofp" id="qofp1" class="css-checkbox" value="e" /><label for="qofp1" class="css-label radGroup1">Excellent</label>
    <input type="radio" name="qofp" id="qofp2" class="css-checkbox" value="g" /><label for="qofp2" class="css-label radGroup1">Good</label>
    <input type="radio" name="qofp" id="qofp3" class="css-checkbox" value="a" /><label for="qofp3" class="css-label radGroup1">Average</label>
    <input type="radio" name="qofp" id="qofp4" class="css-checkbox" value="p" /><label for="qofp4" class="css-label radGroup1">Poor</label>
    </div>
    </fieldset>
    <fieldset class="radioboxstyles">
    <div class="col-lg-4"><label class="ques">Value for Money</label></div>
    <div>
    <input type="radio" name="vform" id="vform1" class="css-checkbox" value="e" /><label for="vform1" class="css-label radGroup1">Excellent</label>
    <input type="radio" name="vform" id="vform2" class="css-checkbox" value="g" /><label for="vform2" class="css-label radGroup1">Good</label>
    <input type="radio" name="vform" id="vform3" class="css-checkbox" value="a" /><label for="vform3" class="css-label radGroup1">Average</label>
    <input type="radio" name="vform" id="vform4" class="css-checkbox" value="p" /><label for="vform4" class="css-label radGroup1">Poor</label>
    </div>
    </fieldset>
    <fieldset class="radioboxstyles">
    <div class="col-lg-4"><label class="ques">Good choice of products within each rage</label></div>
    <div>
    <input type="radio" name="gcofpwer" id="gcofpwer1" class="css-checkbox" value="e" /><label for="gcofpwer1" class="css-label radGroup1">Excellent</label>
    <input type="radio" name="gcofpwer" id="gcofpwer2" class="css-checkbox" value="g" /><label for="gcofpwer2" class="css-label radGroup1">Good</label>
    <input type="radio" name="gcofpwer" id="gcofpwer3" class="css-checkbox" value="a" /><label for="gcofpwer3" class="css-label radGroup1">Average</label>
    <input type="radio" name="gcofpwer" id="gcofpwer4" class="css-checkbox" value="p" /><label for="gcofpwer4" class="css-label radGroup1">Poor</label>
    </div>
    </fieldset>
    <fieldset class="radioboxstyles">
    <div class="col-lg-4"><label class="ques">Speed of service</label></div>
    <div>
    <input type="radio" name="sofsisg" id="sofsisg1" class="css-checkbox" value="e" /><label for="sofsisg1" class="css-label radGroup1">Excellent</label>
    <input type="radio" name="sofsisg" id="sofsisg2" class="css-checkbox" value="g" /><label for="sofsisg2" class="css-label radGroup1">Good</label>
    <input type="radio" name="sofsisg" id="sofsisg3" class="css-checkbox" value="a" /><label for="sofsisg3" class="css-label radGroup1">Average</label>
    <input type="radio" name="sofsisg" id="sofsisg4" class="css-checkbox" value="p" /><label for="sofsisg4" class="css-label radGroup1">Poor</label>
    </div>
    </fieldset>
    <fieldset>
      <textarea name="msg" id="msg" placeholder="Type your message here...." tabindex="5"></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    
    <?php include 'inc/footer.php';?>
  </form>
</div>
</body>
</html>

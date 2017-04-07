  <?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
  <div class="row">
  
  <div class="col-sm-4"></div>
  
  <div id="calcbg" class="col-sm-4">
  <form id="submitbtn" action="<?=$calculation;?>" method="post" class="form-horizontal">
  
  <div class="form-group">
  <label for="val1"><?=$label1;?></label>
  <input name="val1" type="text" class="form-control" id="val1">
</div>

  <div id="symbol"><?=" ".$symbol." ";?></div>
  
    <div class="form-group">
  <label for="val2"><?=$label2;?></label>
  <input name="val2" type="text" class="form-control" id="val2">
</div>

  <div id="submitbtn"><button type="submit" class="btn btn-default">Submit</button></div>
  </form>
  </div>
  <div class="col-sm-4">
  <?  if($result===true): ?>
  		
  <h2>The Result</h2>
  <div id="result">
  <?
echo $val1."<br>".$symbol."<br>".$val2."<br>=<br>".$total;
 ?>
 </div><? endif;?>
 
 
  </div> <!--end right column -->
  
</div>

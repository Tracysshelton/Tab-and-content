<!-- this is a include file for the main index page for the product content section -->
<!-- start of the content section -->
<div class="overviewContainer">
	<!-- Tabs -->
    <ul class="productInfoBar" id="tabLayout">
        <li><a href="#0" onclick="openProductInfo('overview')">Overview</a></li>
        <li><a href="#0" onclick="openProductInfo('components')">In The Box</a></li>
        <li><a href="#0" onclick="openProductInfo('fitmentTable')">Fitment Table</a></li>
        <li><a href="#0" onClick="openProductInfo('productInstructions')">Instructions</a></li>
        <li><a href="#0" onclick="openProductInfo('video')">Video</a></li>
        <li><a href="#0" onclick="openProductInfo('faq')">F.A.Q.</a></li>
    </ul>
    <!-- content section-->
    <div id="overview" class="productInfo">
    	<ul style="list-style:none;margin:0 auto;">
        	<li><?php echo $feature_point_1; ?></li>
            <li><?php echo $feature_point_2; ?></li>
            <li><?php echo $feature_point_3; ?></li>
            <li><?php echo $feature_point_4; ?></li>
            <li><?php echo $feature_point_5; ?></li>
            <li><?php echo $feature_point_6; ?></li>
            <li><?php echo $feature_point_7; ?></li>
            <li><?php echo $feature_point_8; ?></li>
            <li><?php echo $feature_point_9; ?></li>
        </ul>
        <!--<h2>Spec</h2>
        <h2>Notes</h2>-->
    </div>
    <div id="components" class="productInfo">
        <h2>Whats In the Box</h2>
    </div>
    <div id="fitmentTable" class="productInfo">
        <table width="720" border="1" cellpadding="2">
          <tbody>
            <tr>
              <th width="180" scope="col">Years</th>
              <th width="110" scope="col">Drive</th>
              <th width="200" scope="col">Make</th>
              <th width="230" scope="col">Model</th>
            </tr>
            	<!-- generate the fitment table body here -->
            	<?php echo $body_output; ?>
          <?php echo $footer_output; ?>
    </div>
    <div id="productInstructions" class="productInfo">
    	<!-- The line point to a pdf for download-->
    	<h2>Instuctions for <?php echo $product; ?></h2>
    </div>
    <div id="video" class="productInfo">
    	<div style="width:560px;height:315px;margin:0px auto;">
        	<!-- using Youtube video that is being looped -->
        	<iframe width="560" height="315" src="https://www.youtube.com/embed/X10cE-Ceaw4?rel=0&loop=1" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <div id="faq" class="productInfo">
    	 <h2>F.A.Q.</h2>
    </div>
</div>

<script>
	openProductInfo("overview");
	
	function openProductInfo(ProductInfoName) {
		var i;
		var x = document.getElementsByClassName("productInfo");
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";
		}
		document.getElementById(ProductInfoName).style.display = "block";
	}
</script>


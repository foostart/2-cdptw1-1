<!DOCTYPE html >
<head>


<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/jqFancyTransitions.1.8.min.js" type="text/javascript"></script>
<a href="css/bootstrap.css.map"></a>
<a href="css/bootstrap.min.css.map"></a>
<?php
        if (!class_exists('lessc')) {
            include ( './libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/style.less', 'css/style.css');
        ?>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
<title>Mod_CusTom_04</title>
</head>
<body> 
<div class="mod_custom_04">
<div class="topbar" style="font-family: tahoma, verdana, arial; background-color: #333; padding: 10px; overflow: auto; zoom: 1; color: white;">
	<div style="width: 1000px; margin: 0 auto; ">
	
		<h2 style="float: left; margin: 0;">Workshop.rs</h2>
		
		<h2 style="float: right; margin: 0">
			<a href="#">This is demo page for jqFancyTransitions plugin. Read more details on workshop.rs</a>
		</h2>
	
	</div>
</div >

<div class="row">
    

<div id="head">
    <div class="col-md-6">
	<h1><i>jqFancyTransitions</i><br />
	<small>slideshow with strip effects</small></h1>
	
	<p class="headText">
	<strong>jqFancyTransitions</strong> is easy-to-use <a href="#" target="_blank">jQuery</a> 
	plugin for displaying your photos as slideshow with fancy transition effects.
	</p>
	
	<p class="headText">
	<strong>jqFancyTransitions</strong> is compatible and fully tested with Safari 2+, Internet Explorer 6+, Firefox 2+, Google Chrome 3+, Opera 9+.
	</p>
	<br />
	<p class="download headText">
	<a href="#">Documentation, Download and Discussion</a>
	
	</p>

</div>
        </div>

<div id="ftHolder">

	<div id="ft">
            <div class="col-md-6">
            <img src="image/terrace_view_marko_manojlovic.jpg" 
			 alt="<i>Terrace View <a href='#'>by Marko Manojlovic</a></i>" />
		<a href='#'></a>
		<img src="image/nbg1_goran_jovanovic.jpg" 
			 alt="NBG #1 <i><a href='#'>by Goran Jovanovic</a></i>" />
		<a href='#'></a>
		<img src="image/zakynthos_ivan_jekic.jpg" 
			 alt="Navagio beach Zakynthos <i><a href='#'><img src='http://refer.istockphoto.com/traffic_record.php?lc=058071042431004651&atid=39617%7CBannerID%3D39617%7CReferralMethod%3DLink' border='0'/>by Ivan Jekic - iStockPhoto</a></i>" />
		<a href='#'></a>			 
		<img src="image/blue_window_igor_srdanovic.jpg" 
			 alt="Blue Window <i><a href='#'>by Igor Srdanovic</a></i>" />
		<a href='#'></a>
	</div>
	
</div>
    </div>
</div>

<br clear="all" />

<script>

	$('#ft').jqFancyTransitions({ navigation: true, links : true });

</script>


<br clear="all" />
<div class="row">
    
<div id="examples">
    <div class="col-md-6">
	<h1>Examples<br />
	<small>wait few seconds before animation start</small>
	</h1>
	<br />
<br />

	<div class="exampleMenu">
	    <a href="javascript:void(0);" id="effWave" class="eEff">wave</a>
	    <a href="javascript:void(0);" id="effZipper" class="eEff">zipper</a>	
	    <a href="javascript:void(0);" id="effCurtain" class="eEff">curtain</a>	        
		<a href="javascript:void(0);" id="effFountainTop" class="eComb">fountain top</a> 
		<a href="javascript:void(0);" id="effRandomTop" class="eComb">random top</a>
		<a href="javascript:void(0);" id="effCurtainAlternate" class="eComb exampleActive">curtain alternate</a>
		<a href="javascript:void(0);" id="effLeftTop" class="eComb">left top</a>
		<a href="javascript:void(0);" id="effRightBottom" class="eComb">right bottom</a>		
	</div>
</div>
    
	<div id="example">
            <div class="col-md-6">
		<img src="image/terrace_view_marko_manojlovic.jpg" 
			 alt="<i>Terrace View <a href='#'>by Marko Manojlovic</a></i>" />
		<img src="image/nbg1_goran_jovanovic.jpg" 
			 alt="NBG #1 <i><a href='#'>by Goran Jovanovic</a></i>" />
		<img src="image/zakynthos_ivan_jekic.jpg" 
			 alt="Navagio beach Zakynthos <i><a href='#'>by Ivan Jekic</a></i>" />			 
		<img src="image/blue_window_igor_srdanovic.jpg" 
			 alt="Blue Window <i><a href='#'>by Igor Srdanovic</a></i>" />
	</div>
	</div>
    </div>
    </div>

	<script>
		$('#example').jqFancyTransitions({ position: 'curtain' });

		$('#effCurtainAlternate').click( function(){
			$('#example').jqFancyTransitions({ position: 'curtain', direction: 'alternate' });
			$('#positionDyn').html('curtain');
			$('#directionDyn').html('alternate');
		});

		$('#effFountainTop').click( function(){
			$('#ft-title-example, .ft-example').remove();
			$('#example').jqFancyTransitions({ position: 'top', direction: 'fountain' });
			$('#positionDyn').html('top');
			$('#directionDyn').html('fountain');
		});	

		$('#effRandomTop').click( function(){
			$('#ft-title-example, .ft-example').remove();
			$('#example').jqFancyTransitions({ position: 'top', direction: 'random' });
			$('#positionDyn').html('random');
			$('#directionDyn').html('top');
		});	

		$('#effLeftTop').click( function(){
			$('#ft-title-example, .ft-example').remove();
			$('#example').jqFancyTransitions({ position: 'top', direction: 'left' });
			$('#positionDyn').html('left');
			$('#directionDyn').html('top');
		});	

		$('#effRightBottom').click( function(){
			$('#ft-title-example, .ft-example').remove();
			$('#example').jqFancyTransitions({ position: 'bottom', direction: 'right' });
			$('#positionDyn').html('right');
			$('#directionDyn').html('bottom');
		});			

		$('.eComb').click( function(){
			$('#eComb').show();
			$('#eEff').hide();
			$('.eComb').removeClass('exampleActive');
			$('.eEff').removeClass('exampleActive');			
			$(this).addClass('exampleActive');
		});	

		$('.eEff').click( function(){
			$('#eComb').hide();
			$('#eEff').show();
			$('.eEff').removeClass('exampleActive');
			$('.eComb').removeClass('exampleActive');			
			$(this).addClass('exampleActive');			
		});	

		$('#effWave').click( function(){
			$('#ft-title-example, .ft-example').remove();
			$('#example').jqFancyTransitions({ effect: 'wave' });
			$('#effDyn').html('wave');
		});		

		$('#effZipper').click( function(){
			$('#ft-title-example, .ft-example').remove();
			$('#example').jqFancyTransitions({ effect: 'zipper' });
			$('#effDyn').html('zipper');
		});		

		$('#effCurtain').click( function(){
			$('#ft-title-example, .ft-example').remove();
			$('#example').jqFancyTransitions({ effect: 'curtain' });
			$('#effDyn').html('curtain');
		});	
		
	</script>
	
	


<br clear="all" />


<br clear="all" />

<div class="topbar" style="font-family: tahoma, verdana, arial; background-color: #333; padding: 10px; overflow: auto; zoom: 1; color: white;">
	<div style="width: 1000px; margin: 0 auto; ">
	
		<h2 style="float: left; margin: 0;">Workshop.rs</h2>
		
		<h2 style="float: right; margin: 0">
			<a href="#">This is demo page for jqFancyTransitions plugin. Read more details on workshop.rs</a>
		</h2>
	</div>
	</div>
</div>
	
</div>
</div>
</body>
</html>
<?php

$page = <<<PAGEACCUEIL
<main id="main" class="site-main" role="main">
		
	<div id="rev_slider_3_1_wrapper" class="rev_slider_wrapper fullscreen-container" style="background-color:#E9E9E9;padding:0px;">
		<div id="rev_slider_3_1" class="rev_slider fullscreenbanner" style="display:none;">
			<ul>
				<li data-transition="fade" data-slotamount="7" data-masterspeed="300" >
					<img src="images/transparent.png"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
					<div class="tp-caption tp-fade fullscreenvideo"
						data-x="0"
						data-y="0"
						data-speed="300"
						data-start="0"
						data-easing="Power3.easeInOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.1"
						data-endelementdelay="0.1"
						data-endspeed="300"
						data-autoplay="true"
						data-autoplayonlyfirsttime="false"
						data-forceCover="1" data-aspectratio="16:9"	style="z-index: 2;">					
						<!--<video class="HasListener" loop="" controls="" preload="" width="100%" height="100%" poster="" style="display: block;">-->
							<!--<source src="http://www.knacc.co/media/show-tell-teaser.mp4" type="video/mp4">-->
							<iframe width="500" height="281" src="https://www.youtube.com/embed/JjkE91UHY1Q?controls=0" frameborder="0" allowfullscreen></iframe>
						<!--</video>-->
					</div>
				</li>
				<li data-transition="fade" data-slotamount="7" data-masterspeed="300" >
					<img src="images/show-tell-pic-1.jpg"  alt=""  data-bgposition="100% 50%" data-kenburns="on" data-duration="9000" data-ease="Linear.easeNone" data-bgfit="120" data-bgfitend="120" data-bgpositionend="center center">
				</li>
			</ul>
			<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	
		</div>
	</div>			
	<script type="text/javascript">

		var tpj=jQuery;				
		tpj.noConflict();				
		var revapi3;
		
		tpj(document).ready(function() {
						
		if(tpj('#rev_slider_3_1').revolution == undefined)
			revslider_showDoubleJqueryError('#rev_slider_3_1');
		else
		   revapi3 = tpj('#rev_slider_3_1').show().revolution(
			{
				dottedOverlay:"none",
				delay:9000,
				startwidth:0,
				startheight:0,
				hideThumbs:200,
				
				thumbWidth:100,
				thumbHeight:50,
				thumbAmount:4,
				
				navigationType:"bullet",
				navigationArrows:"solo",
				navigationStyle:"round",
				
				touchenabled:"on",
				onHoverStop:"on",
				
				swipe_velocity: 0.7,
				swipe_min_touches: 1,
				swipe_max_touches: 1,
				drag_block_vertical: false,
										
				keyboardNavigation:"off",
				
				navigationHAlign:"center",
				navigationVAlign:"bottom",
				navigationHOffset:0,
				navigationVOffset:20,

				soloArrowLeftHalign:"left",
				soloArrowLeftValign:"center",
				soloArrowLeftHOffset:20,
				soloArrowLeftVOffset:0,

				soloArrowRightHalign:"right",
				soloArrowRightValign:"center",
				soloArrowRightHOffset:20,
				soloArrowRightVOffset:0,
						
				shadow:0,
				fullWidth:"off",
				fullScreen:"on",

				spinner:"spinner5",
				
				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,

				
				shuffle:"off",
				
										
				forceFullWidth:"off",						
				fullScreenAlignForce:"off",						
				minFullScreenHeight:"",						
				hideTimerBar:"on",						
				hideThumbsOnMobile:"off",
				hideNavDelayOnMobile:1500,						hideBulletsOnMobile:"off",
				hideArrowsOnMobile:"off",
				hideThumbsUnderResolution:0,
				
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				startWithSlide:0,
				videoJsPath:"http://demo.knacc.co/show-tell/wp-content/plugins/revslider/rs-plugin/videojs/",
				fullScreenOffsetContainer: ""	
			});
		
		});
	</script>
</main>

PAGEACCUEIL;

templateSite($page);

?>

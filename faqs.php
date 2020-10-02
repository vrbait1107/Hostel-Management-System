<!DOCTYPE html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HOSTEL MANAGEMENT SYSTEM | FAQ</title>

	<!-- Include HeaderScripts -->
	<?php include_once "includes/headerScripts.php";?>

</head>

<body
	class="html not-front not-logged-in one-sidebar sidebar-second page-node page-node- page-node-8875 node-type-page custom-background">






	<div class="container-fluid university-page">
		<div class="container">
			<div class="row margin-left-none margin-right-none">
				<div class="col-md-12">


					<div id="content" class="column responsive-container">
						<div class="section">
							<div class="tabs">
							</div>

							<div class="region region-content">
								<div id="block-system-main" class="block block-system">


									<div class="content">
										<div id="node-8875" class="node node-page node-full clearfix"
											about="/aboutus/hostel-faqs" typeof="foaf:Document">

											<span property="dc:title" content="FAQs"
												class="rdf-meta element-hidden"></span><span property="sioc:num_replies"
												content="0" datatype="xsd:integer"
												class="rdf-meta element-hidden"></span>

											<div class="content clearfix">
												<div
													class="field field-name-body field-type-text-with-summary field-label-hidden">
													<div class="field-items">
														<div class="field-item even" property="content:encoded">
															<p>
																<script type="text/javascript"
																	src="http://www.srmuniv.ac.in/sites/all/themes/srmuniversity/js/jquery-1.10.2.min.js"></script>
																<script type="text/javascript">

																	$(document).ready(function () {

																		// get the total number of images
																		var images = $('#photos img');

																		// set up list that will display the dots based on number of images
																		var output = '<ul id="dots">';

																		// create dots while adding classes to both the dots list and the images
																		for (var i = 0; i < images.length; i++) {
																			// if its the first item
																			if (i === 0) {

																				// add a class of current to the image and selected to the dots list + numeric class so we can link the dots list and images
																				$('#photos img').eq(i).addClass('current 1');
																				output += '<li class="selected 1">';

																			} else {

																				// else just add numeric class
																				$('#photos img').eq(i).addClass(i);
																				output += '<li class="' + [i + 1] + '">';
																			}

																			// close out the list item
																			output += '</li>';
																		}

																		// end list
																		output += '</ul>';

																		// add the list below the images
																		$('#photos').after(output);

																		// set up the listeners for button and dot clicks
																		$('#next').click(newImg);
																		$('#prev').click(newImg);
																		$('#dots li').click(selectImg);

																		// timer fade - currently set to 4 seconds
																		setInterval(function () { moveImg() }, 4000);

																		$('.accordion-close').click(function () {
																			//NO MATTER WHAT WE CLOSE ALL OPEN SLIDES
																			$('.accordionContent').slideUp('normal');
																			//REMOVE THE ON CLASS FROM ALL BUTTONS
																			$('.accordionButton').removeClass('on');
																		});
																		//ACCORDION BUTTON ACTION (ON CLICK DO THE FOLLOWING)
																		$('.accordionButton').click(function () {
																			//REMOVE THE ON CLASS FROM ALL BUTTONS
																			$('.accordionButton').removeClass('on');
																			//NO MATTER WHAT WE CLOSE ALL OPEN SLIDES
																			$('.accordionContent').slideUp('normal');
																			//IF THE NEXT SLIDE WASN'T OPEN THEN OPEN IT
																			if ($(this).next().is(':hidden') == true) {
																				//ADD THE ON CLASS TO THE BUTTON
																				$(this).addClass('on');
																				//OPEN THE SLIDE
																				$(this).next().slideDown('normal');
																			}
																		});
																		$('.accordionContent').hide();
																	});

																	function selectImg() {

																		// remove the selected class
																		$('#dots li.selected').removeClass('selected');

																		// grab the remaining class - which in this case is a numeric value
																		var q = this.className;

																		// match 0 based array but decrementing numeric value
																		q--;

																		// set the current photo and dot
																		var oCurPhoto = $('#photos img.current');
																		var oNxtPhoto = $('#photos img').eq(q);


																		// add the class selected to the new dot
																		$(this).addClass('selected');

																		// remove the current class from the current image and add animation
																		oCurPhoto.removeClass('current').addClass('previous');
																		oNxtPhoto.css({ opacity: 0.0 }).addClass('current').animate({ opacity: 1.0 }, 1000,
																			function () {
																				oCurPhoto.removeClass('previous');
																			});

																	}

																	function newImg() {

																		// Get the id of the button that was pushed - this way we only use one function with conditional statements
																		var oChangePhoto = this.id;

																		var oCurDot = $('#dots li.selected').removeClass('selected');
																		var oCurPhoto = $('#photos img.current');

																		// depending on button pushed show next / previous image and change dot class
																		if (oChangePhoto == 'next') {

																			// set the next photo and dot items to the next in the list
																			var oNxtPhoto = oCurPhoto.next();
																			var oNxtDot = oCurDot.next();

																			// if there are no more list items go to the first
																			if (oNxtPhoto.length == 0) {
																				oNxtPhoto = $('#photos img:first');
																				oNxtDot = $('#dots li:first');
																			}

																		} else if (oChangePhoto == 'prev') {

																			// set the next photo and dot items to the previous in the list
																			var oNxtPhoto = oCurPhoto.prev();
																			var oNxtDot = oCurDot.prev();
																			if (oNxtPhoto.length == 0) {

																				// if there are no more list items go to the last item
																				oNxtPhoto = $('#photos img:last');
																				oNxtDot = $('#dots li:last');
																			}
																		};

																		// add the class selected to the new dot
																		oNxtDot.addClass('selected');

																		// remove the current class from the current image and add animation
																		oCurPhoto.removeClass('current').addClass('previous');
																		oNxtPhoto.css({ opacity: 0.0 }).addClass('current').animate({ opacity: 1.0 }, 1000,
																			function () {
																				oCurPhoto.removeClass('previous');
																			});
																	}

																</script>
															<div class="accordionButton">
																<span>1) What room furnishings are provided by the
																	hostel?</span></div>
															<div class="accordionContent">
																<div
																	class="col-xs-12 col-sm-4 col-md-4 col-lg-12 offices rtejustify">
																	The rooms come equipped with a table, chair, cot and
																	a cupboard for each student. All the rooms are
																	triple sharing with 2 fans and sufficient sockets. A
																	big sized mirror is provided in each room.

																</div>
															</div>
															<div class="accordionButton">
																<span>2) What necessary items must students bring to the
																	hostel?</span></div>
															<div class="accordionContent">
																<div
																	class="col-xs-12 col-sm-4 col-md-4 col-lg-12 offices rtejustify">
																	The bed and bathroom accessories, such as
																	mattresses, pillows, bed covers, buckets, mugs etc.,
																	need to be purchased by the students. The students
																	can purchase the same at the college shops within
																	the campus.</div>
															</div>
															<div class="accordionButton">
																<span>3) What are the facilities available for the
																	students in the hostel?</span></div>
															<div class="accordionContent">
																<div
																	class="col-xs-12 col-sm-4 col-md-4 col-lg-12 offices rtejustify">
																	Each hostel block has a common room provided with TV
																	along with other sources of entertainment like
																	carrom board etc. It also contains water cooler and
																	Solar Heater in each floor. Hence pure drinking
																	water and hot water for bath are available. The
																	hostels are Wi-Fi enabled.</div>
															</div>
															<div class="accordionButton">
																<span>4) What are the recreational facilities available
																	in the hostel?</span></div>
															<div class="accordionContent">
																<div
																	class="col-xs-12 col-sm-4 col-md-4 col-lg-12 offices rtejustify">
																	There are separate \91Gymnasiums\92 for Boys hostel
																	and Girls hostel. In addition to the above, sports
																	materials such as Cricket Bats, Shuttlecocks, Throw
																	balls, Volley balls and Indoor games are available
																	in each block. Each hostel has an open badminton
																	court. Movies are arranged periodically at the
																	common area of the hostels (or) University open
																	auditorium. Student activity centre and incubation
																	centers are available in the college complex. </div>
															</div>
															<div class="accordionButton">
																<span>5) What are the Hostel Mess Facilities?</span>
															</div>
															<div class="accordionContent">
																<div
																	class="col-xs-12 col-sm-4 col-md-4 col-lg-12 offices rtejustify">
																	The Hostel Mess is run by the management. Menu will
																	be displayed on the notice board. Changes to the
																	menu can be made through the Mess Committee. In
																	addition to the Mess service, Canteens and Food
																	courts are also available for students\92 use.</div>
															</div>
															<div class="accordionButton">
																<span>6) Is there a Laundry Service available in the
																	hostel?</span></div>
															<div class="accordionContent">
																<div
																	class="col-xs-12 col-sm-4 col-md-4 col-lg-12 offices rtejustify">
																	Hostel provides laundry and dry cleaning service to
																	the hostellers. Equipped with state-of-the art
																	machinery, every kind of cloth and fabric can be
																	serviced. </div>
															</div>
														</div>
														<p>&nbsp;</p>
													</div>
												</div>
											</div>
										</div>



									</div>
								</div>
							</div>
						</div>


					</div>
				</div> <!-- /.section, /#content -->
				<div id="sidebar-second" class="column sidebar">
					<!--<div class="section col-lg-12 col-md-3 col-sm-4 col-xs-12 adjuest-leftside  padding-left-none padding-right-none">-->
					<div class="section col-lg-12 col-md-3 col-sm-4 col-xs-12 adjuest-leftside">
						<div class="region region-sidebar-second">
							<div id="block-block-12" class="block block-block">



							</div>
						</div>
					</div>
				</div> <!-- /.section, /#sidebar-second -->

			</div> <!-- /#main, /#main-wrapper -->

		</div>
	</div>
	</div>

	</div>
	</div>

	<!-- Include FooterScripts -->
	<?php include_once "includes/footerScripts.php";?>

</body>

</html>
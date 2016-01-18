<?php include_once("functions/import_info.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="UCC Robotics">
		<title>Schedule | UCC Robotics</title>
		<link rel="icon" href="css/favicon.ico" />
		<?php include_once("functions/stylesheet.php") ?>
		
		<link rel="stylesheet" type="text/css" href="css/calendar_style.css">
	</head>

	<body>
		<?php include_once("navbar.php")  ?>
		<?php include_once("footer.php")  ?>
		<div class="container">
			<?php include_once("site_wide.php") ?>
			<h1 class="page-header"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Club Calendar <small>2016</small></h1>
			
			<div class= "calendar-div table-responsive">
				<table class= "table calendar-table">
			<nav>
				<ul class="pagination">
					<li>
						<a href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					<li><a id="JanButton" href="#">January</a></li>
					<li><a id="FebButton" href="#">February</a></li>
					<li><a id="MarButton" href="#">March</a></li>
					<li><a id="AprButton" href="#">April</a></li>
					<li><a id="MayButton" href="#">May</a></li>
					<li>
						<a href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
				</ul>
			</nav>
			<div id="January" class = "table-responsive ">
				<table class = "table">
					<tr>
						<td>Sunday</td>
						<td>Monday</td>
						<td>Tuesday</td>
						<td>Wednesday</td>
						<td>Thursday</td>
						<td>Friday</td>
						<td>Saturday</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>2</td>
					</tr>
					<tr>
						<td>3</td>
						<td>4</td>
						<td>5</td>
						<td>6</td>
						<td class="bg-primary" style="color:white;">7
							</br><a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Horizons Robotics" data-content="<a href='horizons_about.php'>Horizons Robotics</a> in room 304 gives club members an opportunity to give back to the community, by teaching younger students about Robotics. In order to participate, members must have attended a Horizons training session first." data-html="true" style="color:inherit;"><h6>Horizons Robotics</h6></a>
						</td>
						<td>8</td>
						<td>9</td>
					</tr>
					<tr> 
						<td>10</td>
						<td>11</td>
						<td>12</td>
						<td>13</td>
						<td class="bg-primary" style="color:white;">14
							</br><a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Horizons Robotics" data-content="<a href='horizons_about.php'>Horizons Robotics</a> in room 304 gives club members an opportunity to give back to the community, by teaching younger students about Robotics. In order to participate, members must have attended a Horizons training session first." data-html="true" style="color:inherit;"><h6>Horizons Robotics</h6></a>
						</td>
						<td>15</td>
						<td>16</td>
					</tr>
					<tr> 
						<td>17</td>
						<td>18</td>
						<td>19</td>
						<td>20</td>
						<td class="bg-primary" style="color:white;">21
							</br><a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Horizons Robotics" data-content="<a href='horizons_about.php'>Horizons Robotics</a> in room 304 gives club members an opportunity to give back to the community, by teaching younger students about Robotics. In order to participate, members must have attended a Horizons training session first." data-html="true" style="color:inherit;"><h6>Horizons Robotics</h6></a>
						</td>
						<td>22</td>
						<td class="bg-success" style="color:white;">23
							</br><a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="VEX Competition @ Holy Cross" data-content="Our competition on the 23rd is our first competition this year! We'll compete in a round-robin, and hopefully the playoffs, of the VEX Nothing But Net competition at Holy Cross. To learn more, contact <a href='mailto:matthew.wang@ucc.on.ca'>Matthew Wang</a>." data-html="true" style="color:inherit;"><h6>VEX Competition @ Holy Cross</h6></a>
						</td>
					</tr>
					<tr> 
						<td>24</td>
						<td>25</td>
						<td>26</td>
						<td>27</td>
						<td class="bg-primary" style="color:white;">28
							</br><a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Horizons Robotics" data-content="<a href='horizons_about.php'>Horizons Robotics</a> in room 304 gives club members an opportunity to give back to the community, by teaching younger students about Robotics. In order to participate, members must have attended a Horizons training session first." data-html="true" style="color:inherit;"><h6>Horizons Robotics</h6></a>
						</td>
						<td>29</td>
						<td>30</td>
					</tr>
					<tr>
						<td>31</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
				</table>
			</div>
			<div id="Febuary" class = "table-responsive ">
				<table class = "table">
					<tr>
						<td>Sunday</td>
						<td>Monday</td>
						<td>Tuesday</td>
						<td>Wednesday</td>
						<td>Thursday</td>
						<td>Friday</td>
						<td>Saturday</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>2</td>
					</tr>
					<tr>
						<td>3</td>
						<td>4</td>
						<td>5</td>
						<td>6</td>
						<td class="bg-primary" style="color:white;">7
							</br><a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Horizons Robotics" data-content="<a href='horizons_about.php'>Horizons Robotics</a> in room 304 gives club members an opportunity to give back to the community, by teaching younger students about Robotics. In order to participate, members must have attended a Horizons training session first." data-html="true" style="color:inherit;"><h6>Horizons Robotics</h6></a>
						</td>
						<td>8</td>
						<td>9</td>
					</tr>
					<tr> 
						<td>10</td>
						<td>11</td>
						<td>12</td>
						<td>13</td>
						<td class="bg-primary" style="color:white;">14
							</br><a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Horizons Robotics" data-content="<a href='horizons_about.php'>Horizons Robotics</a> in room 304 gives club members an opportunity to give back to the community, by teaching younger students about Robotics. In order to participate, members must have attended a Horizons training session first." data-html="true" style="color:inherit;"><h6>Horizons Robotics</h6></a>
						</td>
						<td>15</td>
						<td>16</td>
					</tr>
					<tr> 
						<td>17</td>
						<td>18</td>
						<td>19</td>
						<td>20</td>
						<td class="bg-primary" style="color:white;">21
							</br><a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Horizons Robotics" data-content="<a href='horizons_about.php'>Horizons Robotics</a> in room 304 gives club members an opportunity to give back to the community, by teaching younger students about Robotics. In order to participate, members must have attended a Horizons training session first." data-html="true" style="color:inherit;"><h6>Horizons Robotics</h6></a>
						</td>
						<td>22</td>
						<td class="bg-success" style="color:white;">23
							</br><a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="VEX Competition @ Holy Cross" data-content="Our competition on the 23rd is our first competition this year! We'll compete in a round-robin, and hopefully the playoffs, of the VEX Nothing But Net competition at Holy Cross. To learn more, contact <a href='mailto:matthew.wang@ucc.on.ca'>Matthew Wang</a>." data-html="true" style="color:inherit;"><h6>VEX Competition @ Holy Cross</h6></a>
						</td>
					</tr>
					<tr> 
						<td>24</td>
						<td>25</td>
						<td>26</td>
						<td>27</td>
						<td class="bg-primary" style="color:white;">28
							</br><a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Horizons Robotics" data-content="<a href='horizons_about.php'>Horizons Robotics</a> in room 304 gives club members an opportunity to give back to the community, by teaching younger students about Robotics. In order to participate, members must have attended a Horizons training session first." data-html="true" style="color:inherit;"><h6>Horizons Robotics</h6></a>
						</td>
						<td>29</td>
						<td>30</td>
					</tr>
					<tr>
						<td>31</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
				</table>
			</div>
				<div id="March" class = "table-responsive ">
				<table class = "table">
					<tr>
						<td>Sunday</td>
						<td>Monday</td>
						<td>Tuesday</td>
						<td>Wednesday</td>
						<td>Thursday</td>
						<td>Friday</td>
						<td>Saturday</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>2</td>
					</tr>
					<tr>
						<td>3</td>
						<td>4</td>
						<td>5</td>
						<td>6</td>
						<td class="bg-primary" style="color:white;">7
							</br><a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Horizons Robotics" data-content="<a href='horizons_about.php'>Horizons Robotics</a> in room 304 gives club members an opportunity to give back to the community, by teaching younger students about Robotics. In order to participate, members must have attended a Horizons training session first." data-html="true" style="color:inherit;"><h6>Horizons Robotics</h6></a>
						</td>
						<td>8</td>
						<td>9</td>
					</tr>
					<tr> 
						<td>10</td>
						<td>11</td>
						<td>12</td>
						<td>13</td>
						<td class="bg-primary" style="color:white;">14
							</br><a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Horizons Robotics" data-content="<a href='horizons_about.php'>Horizons Robotics</a> in room 304 gives club members an opportunity to give back to the community, by teaching younger students about Robotics. In order to participate, members must have attended a Horizons training session first." data-html="true" style="color:inherit;"><h6>Horizons Robotics</h6></a>
						</td>
						<td>15</td>
						<td>16</td>
					</tr>
					<tr> 
						<td>17</td>
						<td>18</td>
						<td>19</td>
						<td>20</td>
						<td class="bg-primary" style="color:white;">21
							</br><a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Horizons Robotics" data-content="<a href='horizons_about.php'>Horizons Robotics</a> in room 304 gives club members an opportunity to give back to the community, by teaching younger students about Robotics. In order to participate, members must have attended a Horizons training session first." data-html="true" style="color:inherit;"><h6>Horizons Robotics</h6></a>
						</td>
						<td>22</td>
						<td class="bg-success" style="color:white;">23
							</br><a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="VEX Competition @ Holy Cross" data-content="Our competition on the 23rd is our first competition this year! We'll compete in a round-robin, and hopefully the playoffs, of the VEX Nothing But Net competition at Holy Cross. To learn more, contact <a href='mailto:matthew.wang@ucc.on.ca'>Matthew Wang</a>." data-html="true" style="color:inherit;"><h6>VEX Competition @ Holy Cross</h6></a>
						</td>
					</tr>
					<tr> 
						<td>24</td>
						<td>25</td>
						<td>26</td>
						<td>27</td>
						<td class="bg-primary" style="color:white;">28
							</br><a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Horizons Robotics" data-content="<a href='horizons_about.php'>Horizons Robotics</a> in room 304 gives club members an opportunity to give back to the community, by teaching younger students about Robotics. In order to participate, members must have attended a Horizons training session first." data-html="true" style="color:inherit;"><h6>Horizons Robotics</h6></a>
						</td>
						<td>29</td>
						<td>30</td>
					</tr>
					<tr>
						<td>31</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
				</table>
			</div>
				<div id="April" class = "table-responsive ">
				<table class = "table">
					<tr>
						<td>Sunday</td>
						<td>Monday</td>
						<td>Tuesday</td>
						<td>Wednesday</td>
						<td>Thursday</td>
						<td>Friday</td>
						<td>Saturday</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>2</td>
					</tr>
					<tr>
						<td>3</td>
						<td>4</td>
						<td>5</td>
						<td>6</td>
						<td class="bg-primary" style="color:white;">7
							</br><a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Horizons Robotics" data-content="<a href='horizons_about.php'>Horizons Robotics</a> in room 304 gives club members an opportunity to give back to the community, by teaching younger students about Robotics. In order to participate, members must have attended a Horizons training session first." data-html="true" style="color:inherit;"><h6>Horizons Robotics</h6></a>
						</td>
						<td>8</td>
						<td>9</td>
					</tr>
					<tr> 
						<td>10</td>
						<td>11</td>
						<td>12</td>
						<td>13</td>
						<td class="bg-primary" style="color:white;">14
							</br><a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Horizons Robotics" data-content="<a href='horizons_about.php'>Horizons Robotics</a> in room 304 gives club members an opportunity to give back to the community, by teaching younger students about Robotics. In order to participate, members must have attended a Horizons training session first." data-html="true" style="color:inherit;"><h6>Horizons Robotics</h6></a>
						</td>
						<td>15</td>
						<td>16</td>
					</tr>
					<tr> 
						<td>17</td>
						<td>18</td>
						<td>19</td>
						<td>20</td>
						<td class="bg-primary" style="color:white;">21
							</br><a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Horizons Robotics" data-content="<a href='horizons_about.php'>Horizons Robotics</a> in room 304 gives club members an opportunity to give back to the community, by teaching younger students about Robotics. In order to participate, members must have attended a Horizons training session first." data-html="true" style="color:inherit;"><h6>Horizons Robotics</h6></a>
						</td>
						<td>22</td>
						<td class="bg-success" style="color:white;">23
							</br><a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="VEX Competition @ Holy Cross" data-content="Our competition on the 23rd is our first competition this year! We'll compete in a round-robin, and hopefully the playoffs, of the VEX Nothing But Net competition at Holy Cross. To learn more, contact <a href='mailto:matthew.wang@ucc.on.ca'>Matthew Wang</a>." data-html="true" style="color:inherit;"><h6>VEX Competition @ Holy Cross</h6></a>
						</td>
					</tr>
					<tr> 
						<td>24</td>
						<td>25</td>
						<td>26</td>
						<td>27</td>
						<td class="bg-primary" style="color:white;">28
							</br><a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Horizons Robotics" data-content="<a href='horizons_about.php'>Horizons Robotics</a> in room 304 gives club members an opportunity to give back to the community, by teaching younger students about Robotics. In order to participate, members must have attended a Horizons training session first." data-html="true" style="color:inherit;"><h6>Horizons Robotics</h6></a>
						</td>
						<td>29</td>
						<td>30</td>
					</tr>
					<tr>
						<td>31</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
				</table>
			</div>
				<div id="May" class = "table-responsive ">
				<table class = "table">
					<tr>
						<td>Sunday</td>
						<td>Monday</td>
						<td>Tuesday</td>
						<td>Wednesday</td>
						<td>Thursday</td>
						<td>Friday</td>
						<td>Saturday</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>2</td>
					</tr>
					<tr>
						<td>3</td>
						<td>4</td>
						<td>5</td>
						<td>6</td>
						<td class="bg-primary" style="color:white;">7
							</br><a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Horizons Robotics" data-content="<a href='horizons_about.php'>Horizons Robotics</a> in room 304 gives club members an opportunity to give back to the community, by teaching younger students about Robotics. In order to participate, members must have attended a Horizons training session first." data-html="true" style="color:inherit;"><h6>Horizons Robotics</h6></a>
						</td>
						<td>8</td>
						<td>9</td>
					</tr>
					<tr> 
						<td>10</td>
						<td>11</td>
						<td>12</td>
						<td>13</td>
						<td class="bg-primary" style="color:white;">14
							</br><a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Horizons Robotics" data-content="<a href='horizons_about.php'>Horizons Robotics</a> in room 304 gives club members an opportunity to give back to the community, by teaching younger students about Robotics. In order to participate, members must have attended a Horizons training session first." data-html="true" style="color:inherit;"><h6>Horizons Robotics</h6></a>
						</td>
						<td>15</td>
						<td>16</td>
					</tr>
					<tr> 
						<td>17</td>
						<td>18</td>
						<td>19</td>
						<td>20</td>
						<td class="bg-primary" style="color:white;">21
							</br><a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Horizons Robotics" data-content="<a href='horizons_about.php'>Horizons Robotics</a> in room 304 gives club members an opportunity to give back to the community, by teaching younger students about Robotics. In order to participate, members must have attended a Horizons training session first." data-html="true" style="color:inherit;"><h6>Horizons Robotics</h6></a>
						</td>
						<td>22</td>
						<td class="bg-success" style="color:white;">23
							</br><a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="VEX Competition @ Holy Cross" data-content="Our competition on the 23rd is our first competition this year! We'll compete in a round-robin, and hopefully the playoffs, of the VEX Nothing But Net competition at Holy Cross. To learn more, contact <a href='mailto:matthew.wang@ucc.on.ca'>Matthew Wang</a>." data-html="true" style="color:inherit;"><h6>VEX Competition @ Holy Cross</h6></a>
						</td>
					</tr>
					<tr> 
						<td>24</td>
						<td>25</td>
						<td>26</td>
						<td>27</td>
						<td class="bg-primary" style="color:white;">28
							</br><a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Horizons Robotics" data-content="<a href='horizons_about.php'>Horizons Robotics</a> in room 304 gives club members an opportunity to give back to the community, by teaching younger students about Robotics. In order to participate, members must have attended a Horizons training session first." data-html="true" style="color:inherit;"><h6>Horizons Robotics</h6></a>
						</td>
						<td>29</td>
						<td>30</td>
					</tr>
					<tr>
						<td>31</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
				</table>
			</div>
			<!--
			<div class="embed-responsive embed-responsive-4by3" style="height:80%;">
				<iframe class="embed-responsive-item" src="https://www.google.com/calendar/embed?src=ucc.on.ca_r775k1cnuvvf95314vcbomcuuk%40group.calendar.google.com&ctz=America/Toronto"></iframe>
			</div>
			-->

		</div>
		
		<script src="js/jquery.js"></script>
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/nav-collapse.js"></script>
		<script src="js/schedule_switch.js"></script>
		<script>
			$(function () {
				$('[data-toggle="popover"]').popover()
			})
		</script>
	</body>
</html>
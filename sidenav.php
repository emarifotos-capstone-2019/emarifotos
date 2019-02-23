<nav style="width:103.25%; margin-top:-2%; margin-left:-2%; background-color:#F0F8FF;">

			  <div class="container-fluid">

				<ul class="nav navbar-nav">

				  <li data-toggle="dropdown-toggle"><a data-toggle="modal"><h4 style="cursor:pointer; color:#00008B; font-family:'Trebuchet MS', Helvetica, sans-serif; padding-top:5px; padding-right:10px; padding-left: -10px" onclick="openNav()"><i class="fa fa-bars"></i> Menu</h4></a></li>

				  

				  <li class="dropdown "><a data-toggle="dropdown" href="#"><h4 style="color:gray; font-family:'Trebuchet MS', Helvetica, sans-serif; padding-top:5px;">File</h4></a>

								<ul class="dropdown-menu " style="display: none;">

								<li><a href="#" data-toggle="modal" data-target="#myModal">Upload</a></li>

								<li><a>Print</a>

									<ul id="ulPrint"><div class="dt-buttons" style="padding: 0; border: none; background: none;"><a class="dt-button buttons-print actionbtn2 btn btn-default" tabindex="0" aria-controls="myTable" href="#" style="height: 100%; width: 100%"><span>All</span></a><a class="dt-button buttons-print actionbtn2 btn btn-default" tabindex="0" aria-controls="myTable" href="#" style="height: 100%; width: 100%"><span>Selected</span></a></div></ul>

								</li>

								<li><a id="ulSave"><div class="dt-buttons"></div></a>

									<ul></ul>

								</li>

								</ul>

				  </li>

				  <li class="dropdown"><a data-toggle="dropdown" href="#"><h4 style="color:gray; font-family:'Trebuchet MS', Helvetica, sans-serif; padding-top:5px;">Application Status</h4> </a>

							  <ul class="dropdown-menu">

								<li><a href="google.php?show=''&amp;id=1854">All (380)</a></li>

								<li><a href="google.php?show=Pending&amp;id=1854">Pending (131)</a></li>

								<li><a href="google.php?show=Initial Interview&amp;id=1854">Initial Interview (6)</a></li>

								<li><a href="google.php?show=Second Interview&amp;id=1854">Second Interview (8)</a></li>

								<li><a href="google.php?show=Third Interview&amp;id=1854">Third Interview (1)</a></li>

								<li><a href="google.php?show=Final Interview&amp;id=1854">Final Interview (0)</a></li>

								<li><a href="google.php?show=Hired&amp;id=1854">Hired(21)</a></li>

								<!--<li><a href="google.php?show=Fail">Fail (0)</a></li>-->

								<li><a href="google.php?show=No Show&amp;id=1854">No Show (89)</a></li>

								<li><a href="google.php?show=Rejected&amp;id=1854">Rejected (4)</a></li>

								<li><a href="google.php?show=Declined&amp;id=1854">Declined (6)</a></li>

								<li><a href="google.php?show=Archived&amp;id=1854">Archived (2039)</a></li>

							  </ul>

				  </li>

					<li class="dropdown"><a data-toggle="dropdown" href="#"><h4 style="color:gray; font-family:&quot;Trebuchet MS&quot;, Helvetica, sans-serif; padding-top:5px;">Show/Hide Column</h4> </a>

						<ul class="dropdown-menu">

						<li><a class="showHideColumn" href="#" data-columnindex="1">Name<input type="checkbox" style="float:right;" class="ddcheckbox"></a></li>

						<li><a class="showHideColumn" href="#" data-columnindex="2">Reference Code<input type="checkbox" style="float:right;" class="ddcheckbox deact"></a></li>

						<li><a class="showHideColumn" href="#" data-columnindex="3">Course<input type="checkbox" style="float:right" class="ddcheckbox deact"></a></li>

						<li><a class="showHideColumn" href="#" data-columnindex="4">Email<input type="checkbox" style="float:right" class="ddcheckbox"></a></li>

						<li><a class="showHideColumn" href="#" data-columnindex="5">Phone<input type="checkbox" style="float:right" class="ddcheckbox deact"></a></li>

						<li><a class="showHideColumn " href="#" data-columnindex="6">Address<input type="checkbox" style="float:right" class="ddcheckbox"></a></li>

						<li><a class="showHideColumn" href="#" data-columnindex="7">Age<input type="checkbox" style="float:right" class="ddcheckbox"></a></li>

						<li><a class="showHideColumn" href="#" data-columnindex="8">Job Title<input type="checkbox" style="float:right" class="ddcheckbox deact"></a></li>

						<li><a class="showHideColumn " href="#" data-columnindex="9">Previous Jobs<input type="checkbox" style="float:right" class="ddcheckbox"></a></li>

						<li><a class="showHideColumn" href="#" data-columnindex="10">Schedule<input type="checkbox" style="float:right" class="ddcheckbox"></a></li>

						<li><a class="showHideColumn" href="#" data-columnindex="11">Note<input type="checkbox" style="float:right" class="ddcheckbox"></a></li>

						</ul>

					</li>

					<!--START-->

					<li>
					    
						<style>
						h4{
							color:gray;
							font-family:Trebuchet MS;
							Helvetica;
							sans-serif; 
							padding-top:5px;
						}
						</style>
						<a href="ViewInterviewStatus.php?id=1854"><h4>View Interview Status</h4></a>					</li>

					<li>
                        
						<style>
						h4{
							color:gray;
							font-family:Trebuchet MS;
							Helvetica;
							sans-serif; 
							padding-top:5px;
						}
						</style>
						<a href="vis.php?id=1854"><h4>Exam Results</h4></a>
					</li>

					<!--END-->

				</ul>

				<div id="repo" style="display:inline-block; float:right;margin-top:2%"><div style="float:left"><button data-toggle="modal" data-target="#googlequery" class="btn btn-info btn-raised btn-sm" style="margin-right:10px;  background-color:#00008B;"><i class="fa fa-search"></i> Filter</button></div><div id="reposition" style="float:right;"><input type="search" class="form-control input-sm" placeholder="  Search here..." aria-controls="myTable" style="border-radius: 30px;"></div></div></div>

			</nav>
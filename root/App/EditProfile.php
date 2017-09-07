<html>
<style>

.container
	{
		width:100%;
		margin-left:5%;
		margin-right:5%;
		
	}

.wrap 
	{
		width: 90%;
		<!--overflow:auto;-->
		position: absolute;
		float: center;	
		background:white;
	
	}
	
label 
{
    width:130px;
    clear:left;
    text-align:left;
    padding-right:10px;
	padding-bottom:10px
	
}

input, label 
{
    float:left;
}

.box {
    position:relative;
}
.btn {
    position:absolute;
    bottom:0;
    right:0;
	font-size: 16px;
}
.btn2 {
    position:absolute;
    bottom:0;
    right:80;
	font-size: 16px;
}


</style>


<body>


<div class="container">

	<div class="wrap">
		
					<h1 align="Center">Edit Profile</h1>
					<hr>
			
						<h4 align="left"> <u> Basic </u> </h4>
							</br>
						<div align="center">		
							
							<table style="width:100%">
							
								<tr>
									<td>
									<label> Name </label>
									<input type="text" name="name" size="25" />
									
									<label> Email </label>
									<input type="text" name="email" size="25" />
									
									
									<label> Phone No. </label>
									<input type="text" name="phnNo" size="25" />
									
									<label> Address </label>
									<input type="text" name="address" size="25" />
									</td>
									
									<td>
									<img id="blah" alt="your image" width="140" height="120" />
									<br>
									<input type="file" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
									
										
									</td>
								</tr>
								
								
							</table>
							
							
							
						</div>
						<div>
							<table>

								<label> Gender</label>
																		
									<tr>

										<td>
										<input type="radio" name="gender" value="male"> 
										Male 
										</td>
										<td>
										<input type="radio" name="gender" value="female"> 
										Female
										</td>

								</tr>
								</table>
						</div>
						
						<h4 align="left"> <u> Education </u> </h4>
							</br>
						<div align="center">		
							
							<table style="width:100%">
							
								<tr>
									<td>
										<label> Degree : BSc </label>
										
										
										<label> University </label>
										<input type="text" name="university" size="25" />
										
										<label> Passing Year </label>
										<input type="text" name="passingYear" size="25" />
										
										<label> Grade/GPA </label>
										<input type="text" name="gpa" size="25" />
										
										<label> Dept./Division </label>
										<input type="text" name="dept" size="25" />
									</td>
									
									<td>
										
										<table style="width:100%">
									
											<tr>
												<td>
										
													<label> Degree : HSC  </label>
													
													
													<label> College </label>
													<input type="text" name="college" size="25" />
													
													<label> Passing Year </label>
													<input type="text" name="passingYear" size="25" />
													
													<label> GPA </label>
													<input type="text" name="gpa" size="25" />
													
													<label> Division </label>
													<input type="text" name="dept" size="25" />
												</td>
											
												<td>
													
													<label> Degree : SSC </label>
																				
													<label> School </label>
													<input type="text" name="school" size="25" />
													
													<label> Passing Year </label>
													<input type="text" name="passingYear" size="25" />
													
													<label> GPA </label>
													<input type="text" name="gpa" size="25" />
													
													<label> Division </label>
													<input type="text" name="dept" size="25" />
												</td>
												
									</td>
									
											</tr>
								
										</table>
										
										
										
									</td>
								</tr>
								
							</table>
							
						</div>
						
						<h4 align="left"> <u> Additional </u> </h4>
							</br>
												
						<div align="left">
						
							<table>
							
								<tr>
									
									<td>
										
										<label> Bio </label>
										<input  style="height:150px;" type="text" name="bio" size="25" />
											<br>
										
									</td>
									
								</tr>	
								
							</table>
							<br>
							<table>
							
								<tr>
									
								
										<label> Currtent Status </label>
										
										<td>
										<input type="text" name="currentStatus" size="25"/>
										
									</td>
									
								</tr>	
								
							</table>
								
							<br>	
								<table>
								
									<label> Preferred Medium </label>
									<tr>
																				
									
									
									
										<td>
										<input type="radio" name="medium" value="bangla"> 
									
										
										<span> Bangla </span>
										</td>
										<td>
										<input type="radio" name="medium" value="english"> 
										<span> English </span>
										</td>
										<td>
										<input type="radio" name="medium" value="both"> 
										<span> Both </span>
										</td>
									
										
									</tr>	
									
							</table>
							<br>
							
							<table>
							
								<label> Location </label>
										
									<select>
									  <option value="Mirpur">Mirpur</option>
									  <option value="Malibag">Malibag</option>
									  <option value="Dhanmondi">Dhanmondi</option>
									  <option value="Mohammadpur">Mohammadpur</option>
									  <option value="Shyamoli">Shyamoli</option>
									  <option value="Kalabagan">Kalabagan</option>
									  <option value="Panthopath">Panthopath</option>
									  <option value="ElephantRoad">Elephant Road</option>
									  <option value="Kalshi">Kalshi</option>
									  <option value="Banani">Banani</option>
									  <option value="Gulshan">Gulshan</option>
									  <option value="Baridhara">Baridhara</option>
									  <option value="Bashundhara">Bashundhara</option>
									  <option value="Uttara">Uttara</option>
									  <option value="Azompur">Azompur</option>
									  <option value="Abdullahpur">Abdullahpur</option>
									</select>
							
							
							</table>
							
							<br>
							<table width="1000">
									
																				
										
										<label> Preferred Subject </label>
										
										
									
									
										 <tr>
											 <td><input type="checkbox" name="bangla" value="bangla">Bangla</td>
											 <td><input type="checkbox" name="english" value="english">English</td>
											 <td><input type="checkbox" name="math" value="math">Math</td>
											 <td><input type="checkbox" name="ict" value="ict">ICT</td>
											 <td><input type="checkbox" name="highermath" value="bangla">Higher Math</td>
											 <td><input type="checkbox" name="socialSciene" value="math">Social Science</td>
										</tr>	 
											
										<tr>	
											 <td><input type="checkbox" name="religion" value="ict">Religion</td>
											 <td><input type="checkbox" name="physics" value="bangla">Physics</td>
											 <td><input type="checkbox" name="chemistry" value="ict">Chemistry</td>
											 <td><input type="checkbox" name="biology" value="bangla">Biology</td>
											 <td><input type="checkbox" name="physicalExcercise" value="bangla">Physical Excercise</td>
											 <td><input type="checkbox" name="career" value="bangla">Career</td>
											 
										</tr>
										
										
									
							</table>
							
							
							<br>
							
						
							<table width="1000">
									
																				
										
										<label> Preferred Classes </label>
										
										
									
									
										 <tr>
											 <td><input type="checkbox" name="one" value="bangla">class 1</td>
											 <td><input type="checkbox" name="two" value="english">class 2</td>
											 <td><input type="checkbox" name="three" value="math">class 3</td>
											 <td><input type="checkbox" name="four" value="ict">class 4</td>
											 <td><input type="checkbox" name="five" value="bangla">class 5</td>
											 <td><input type="checkbox" name="six" value="math">class 6</td>
										</tr>	 
											
										<tr>	
											 <td><input type="checkbox" name="seven" value="ict">class 7</td>
											 <td><input type="checkbox" name="eight" value="bangla">class 8</td>
											 <td><input type="checkbox" name="nine" value="ict">class 9</td>
											 <td><input type="checkbox" name="ten" value="bangla">class 10</td>
											 <td><input type="checkbox" name="eleven" value="bangla">class 11</td>
											 <td><input type="checkbox" name="twelve" value="bangla">class 12</td>
											 
										</tr>
										
										
									
							</table>
							<br>
							<table>
									
																				
										
								<label> Expected Salary </label>
								
								<tr>
									
									<td>
										<input type="text" name="gpa" size="20" /> <span> /hour </span>
									</td>
									
									
								<tr>
									
										
							</table>
							

						</div>

							<br>
							<br>
						<div class="box">
							<input class="btn2" type="submit" name="cancel" value="Back">
							<input class="btn" type="submit">
						</div>
						
					
		
	</div>
</div>


</body>

</html>
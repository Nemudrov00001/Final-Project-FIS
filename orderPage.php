<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="images/36449961.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="style/order_page_style.css" />
	<title>FLYBERRY/Order</title>
</head>
<body>
<div class="boxS">
<div class="mainBox">
<p class="p1">Where to deliver?</p>
		<form action="insert.php" method="post">
		<div class="mainBoxDisplay">
		    <div>
		         <p>
          	        <label for="firstName" class="qq1">Name:<span class="red">*</span></label><p class="q1"></p>
          	        <span class="qqq1"><input type="text" name="first_name" id="firstName" placeholder="Name"></span>
                 </p>
            </div>
		    <div class="paddingBetweenNameAndSurname">
		         <p>
            		<label for="lastName" class="ww1">Surname:<span class="red">*</span></label><p class="q1"></p>
           			<input type="text" name="last_name" id="lastName" placeholder="Surname">
           		</p>
           	</div>
		</div>
		<br>
		<p class="SecondBoxDisplay">
			<label for="Address">Enter your address:<span class="red">*</span></label><p class="q1"></p>
			<span class="ee1"><input type="text" name="address" id="Address" placeholder="Street"></span>
		</p>

		<div class="FirstBoxDisplay">
		    <div class="rrr1">
        	     <p>
                   	<label for="House"></label>
               		<input type="number" name="house_number" id="houseNumber" placeholder="House number"><span class="red">*</span>
           		 </p>
        	</div>
        	<div class="rrr1">
        	     <p>
                    <label for="Flat"></label>
                    <input type="number" name="flat" id="FlatQ" placeholder="Flat"><span class="red">*</span>
                 </p>
        	</div>
        	<div class="rrr1">
        	     <p>
                    <label for="Entrance"></label>
                    <input type="number" name="entrance" id="entranceQ" placeholder="Entrance"><span class="red">*</span>
                 </p>
        	</div>
        	<div class="rrr1">
        	     <p>
                    <label for="DoorCode"></label>
                    <input type="number" name="door_code" id="doorCode" placeholder="Door code"><span class="red">*</span>
                 </p>
            </div>
        	<div>
        	     <p>
                    <label for="Floor"></label>
                    <input type="number" name="floor" id="FloorQ" placeholder="Floor"><span class="red">*</span>
                 </p>
            </div>
        	</div>
            <br>
            <p class="SecondBoxDisplay">
                <label for="PhoneNumber">Phone number:<span class="red">*</span></label><p class="q1"></p>
                <span class="aa1"><input type="number" name="phone_number" id="phoneNumber" placeholder="Phone number"></span>
            </p>
            <br>
		    <p>
			    <label for="emailAddress">Email address:</label><p class="q1"></p>
			    <span class="mmm1"><input type="text" name="email" id="emailAddress" placeholder="email"></span>
		    </p>
			<div class="submitButtonPad"><input type="submit" value="SUBMIT" class="submitButton"></div>
</form>
</div>
</div>
</body>
</html>
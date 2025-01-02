<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Academic Year Data</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    
    /* Style for the tab navigation */
    .tabs {
  display: flex;
  margin-bottom: 20px;
}

.tab {
  padding: 10px 20px;
  cursor: pointer;
  background: linear-gradient(45deg, #ff5733, #ff8c00); /* Red-Orange Gradient */
  border: 1px solid #ccc;
  color: white;
  border-radius: 5px 5px 0 0;
  margin-right: 10px;
  text-align: center;
  position: relative;
  overflow: hidden;
  transition: all 0.3s ease;
}

.tab:hover {
  background-color: white;
  color: white;
  border-color: #ff5733; /* Red border on hover */
  box-shadow: 0 4px 15px rgba(255, 87, 51, 0.3);
  transition: all 0.3s ease;
}

.tab:hover::before {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(45deg, #ff5733, #ff8c00); /* Red-Orange Gradient */
  z-index: -1;
}

.tab.active {
  background: white;
  border: 2px solid #ff5733;
  color:#ff5733;
}

.tab.active span {
  background: linear-gradient(45deg, #ff5733, #ff8c00); /* Red-Orange Gradient */
  -webkit-background-clip: text; /* Apply gradient to text */
  color: orange; /* Make text transparent to show the gradient */
  font-weight: bold;
}



    /* Hide all tab content by default */
    .tab-content {
      display: none;
    }

    /* Show the active tab content */
    .tab-content.active {
      display: block;
    }

/* Style for the table */
/* Style for the table */
table {
  width: 100%;

  margin-top: 20px;
  font-family: Arial, sans-serif;
  border-radius: 20px; /* Apply corner radius to the table */
  overflow: hidden; /* Prevent content from spilling over the rounded corners */
}


/* Style for table and its borders */
table,tr {
  border: 1px solid #ddd;
  
}

/* Styling for table header with a gradient */
th {
  padding: 15px;
  text-align: left;
 
  color: white; /* Text color for the header */
}
thead {
  background:  linear-gradient(0deg, rgba(84,217,66,0.8856792717086834) 0%, rgba(14,188,221,1) 100%); /* Gradient from Purple-Blue to Light Blue */
  color: white; /* Text color for the header */
}
tbody{
    background-color: white;
}
/* Styling for table cells */
td {
  padding: 10px;
  text-align: left;
  color: #333; /* Dark text color for readability */
}

  </style>
</head>
<body>
  <div class="tabs">
    <div class="tab " onclick="opentab('2023-2024')">2023-2024</div>
    <div class="tab" onclick="opentab('2022-2023')">2022-2023</div>
    <div class="tab" onclick="opentab('2021-2022')">2021-2022</div>
  </div>
<br>
  <div id="2023-2024" class="tab-content active year">
    <table>
      <thead>
        <tr>
          <th>S.No</th>
          <th>Name</th>
          <th>Department</th>
          <th>Name of Idea/Innovation/Start-up</th>
          <th>CIN (in case it is Start-up)</th>
          <th>Contact</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Nishanth G</td>
          <td>ECE</td>
          <td>GeniRa</td>
          <td>UDYAM-TN-10-0026236</td>
          <td>geninishanth@gmail.com<br>9841532021</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jeyakumar P</td>
          <td>ECE</td>
          <td>JK Tech Solutions & Consultancy</td>
          <td>UDYAM-TN-10-0026374</td>
          <td>jktechsolutionspvtltd@gmail.com<br>9994723025</td>
        </tr>
      </tbody>
    </table>
  </div>

  <div id="2022-2023" class="tab-content year">
    <table>
      <thead>
        <tr>
          <th>S.No</th>
          <th>Name</th>
          <th>Department</th>
          <th>Name of Idea/Innovation/Start-up</th>
          <th>CIN (in case it is Start-up)</th>
          <th>Contact</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Kalaiarasan K</td>
          <td>IT</td>
          <td>Augmatics AR</td>
          <td>UDYAM-TN-10-0011076</td>
          <td>kalaiarasank.it@mkce.ac.in<br>7708331331</td>
        </tr>
      </tbody>
    </table>
  </div>

  <div id="2021-2022" class="tab-content year">
    <table>
      <thead>
        <tr>
          <th>S.No</th>
          <th>Name</th>
          <th>Department</th>
          <th>Name of Idea/Innovation/Start-up</th>
          <th>CIN (in case it is Start-up)</th>
          <th>Contact</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Pradeep D</td>
          <td>CSE</td>
          <td>MKCS DigitTech Solutions</td>
          <td>UDYAM-TN-10-0005619</td>
          <td>pradeepd.cse@mkce.ac.in<br>pradeepdurai.vdr@gmail.com<br>9841707467</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Karthikeyan K</td>
          <td>ECE</td>
          <td>Onnano technologies</td>
          <td>UDYAM-TN-10-0003513</td>
          <td>karthimems@gmail.com<br>9944477213</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Shanmuga vadivel G</td>
          <td>ECE</td>
          <td>NetG Solutions</td>
          <td>UDYAM-TN-10-0003509</td>
          <td>g.shanmuga@gmail.com<br>9894318661</td>
        </tr>
        <tr>
          <td>4</td>
          <td>Mohanraj S</td>
          <td>ECE</td>
          <td>VIRUKSHAM TECHNOLOGIES PRIVATE LIMITED</td>
          <td>CIN: U72900TN2020PTC139797<br>Registration NO: 139797</td>
          <td>director@viruksham.co.in<br>mohanraj@viruksham.co.in<br>9976775159</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Sabarish Sanjeevi</td>
          <td>IT</td>
          <td>Tech Codes India</td>
          <td>UDYAM-TN-10-0000653</td>
          <td>sabarishsanjeevi@gmail.com<br>9943840844</td>
        </tr>
        <tr>
          <td>6</td>
          <td>Kalaiarasan K</td>
          <td>IT</td>
          <td>Augmatics AR</td>
          <td>UDYAM-TN-10-0011076</td>
          <td>kalaiarasank.it@mkce.ac.in<br>7708331331</td>
        </tr>
        <tr>
          <td>7</td>
          <td>Maohanraj C</td>
          <td>MECH</td>
          <td>Validyn Engineering Solution Private Ltd</td>
          <td>UDYAM-TN-10-0002794</td>
          <td>mohan.aero@gmail.com<br>9600897787</td>
        </tr>
        <tr>
          <td>8</td>
          <td>Logeshwaran.S</td>
          <td>MBA</td>
          <td>1947 Technologies</td>
          <td>UDYAM-TN-10-0000658</td>
          <td>logeshwarans.mba@gmail.com<br>9994187406</td>
        </tr>
      </tbody>
    </table>
  </div>

  <script>
function opentab(yearName) {
  var i;
  
  // Hide all tab content
  var x = document.getElementsByClassName("year");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }

  // Remove "active" class from all tabs
  var tabs = document.getElementsByClassName("tab");
  for (i = 0; i < tabs.length; i++) {
    tabs[i].classList.remove("active");
  }

  // Show the selected tab content
  document.getElementById(yearName).style.display = "block";

  // Add "active" class to the clicked tab
  var clickedTab = Array.from(tabs).find(tab => tab.innerText === yearName);
  if (clickedTab) {
    clickedTab.classList.add("active");
  }
}

</script>
</body>
</html>
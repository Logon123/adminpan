<!DOCTYPE html>
<html lang="en">
<head>  <!-- https://sites.google.com/view/hpprinter-supp0rtus  Printer Website-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./img/admin_favicon-.png"  type="image/x-icon" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=close" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> -->
    <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="lineicons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@latest/dist/apexcharts.css">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@latest"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <style>
        table {width: 100%; border-collapse: collapse; height: 20%; margin-right: 20px;}
        th, td {border: 1px solid black;padding: 10px;text-align: center; }
        th {background-color: #f2f2f2;}
        .gr{background-color:green;} .bl{background-color:blue; color: white;} .yel{background-color:yellow;}
        #chart {max-width: 800px; margin: 35px auto; }
        #records tbody tr {   height: auto; /* Ensure row height is auto */    }
    </style>
    </head>
<body>
    <div class="container">
        <!-- Aside Section-->
        <aside>
            <div class="top">
                <div class="logo">
                    <h2><span class="inf"><img src="img/logos-.png" height="80" width="150"></span></h2>
                </div>
                <div class="toggle-button">
                    <span class="material-icons">menu</span>
                </div>
            </div>
            <!-- aSide End-->
        </aside>

        <!--Main Section Start-->
        <main>
            <!-- Side bar-->
            <div class="sidebar1 data-toggle=collapse">
                <a href="index.html">
                    <span class="material-icons active">home</span>
                    <span class="text">Home</span>
                </a>
                <a href="report.html">
                    <span class="material-icons">report_gmailerrorred</span>
                    <span class="text">Report</span>
                </a>
                <a href="transaction.html">
                    <span class="material-icons">trending_up</span>
                    <span class="text">Transaction</span>
                </a>
                <a href="sale.html">
                    <span class="material-icons">sell</span>
                    <span class="text">Sale</span>
                </a>
                <a href="item.html">
                    <span class="material-icons">receipt_long</span>
                    <span class="text">Items</span>
                </a>
                <a href="customer.html">
                    <span class="material-icons">group</span>
                    <span class="text">Customer</span>
                </a>
                <a href="team.html">
                    <span class="material-icons">groups</span>
                    <span class="text">Team</span>
                </a>
                <a href="staff.html">
                    <span class="material-icons">diversity_2</span>
                    <span class="text">Staff</span>
                </a>
                <a href="setting.html">
                    <span class="material-icons">admin_panel_settings</span>
                    <span class="text">Setting</span>
                </a>
            </div>
        </main>
        <!--Main Section End-->

        <!--Div Right Start-->
        <div class="div-right">
            <div class="profile">
                <i class="fas fa-circle" style="font-size:14px; color:green; position:absolute; top:55px !important;"></i>
                <img src="img/profile-.png" alt="Profile Picture" class="profile-image" onclick="toggleDropdown()" />
                <div class="profile-info">
                    <span class="name">Yogesh Kumar</span>
                    <div class="dropdown">
                        <div class="dropdown-content" id="dropdown">
                            <span class="dropdown-name">Yogesh Kumar</span>
                            <a href="#"><i class='fas fa-user-circle' style='font-size:16px; color:blue'></i> Admin</a>
                            <a href="#"> <i class='fas fa-wrench' style='font-size:16px; color:blue'></i> Profile Settings</a>
                            <a href="#"><i class='fa fa-sign-out' style='font-size:16px; color:blue'></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Div Right End-->

    </div>
    <!-- https://www.youtube.com/watch?v=_MdlBXSN7tA    Excel File Fetch Data--> 
    <div class="space" emoji_food_beverage>Staff</div>
    <div class="container2 col-lg-12">
        
        <div class="settings-container">
            <div class="left-div">
                <h3 class="material-icons" style="color: blue; font-size: 34px; margin-top: 0px;">manage_accounts</h3>&nbsp;<b style="font-size: 26px; color: blue;">Employee Details</b>
                
                <form id="profile-form" action="submit.php" method="post">
                    <label for="name">First Name</label>
                    <input type="text" name="first_name" id="name" value="Yogesh" require />
                
                    <label for="name">Last Name</label>
                    <input type="text" name="last_name" id="name" value="Kumar" require/>
                
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="info@example.com" require />
                
                    <label for="password">Phone Number</label>
                    <input type="text" name="phone_number" id="password" value="1234567890"  require/>
                
                    <label for="designate">Designation</label>
                    <input type="text" name="designation" id="designate" value="Designation" />
                
                    <label for="type">Type</label>
                    <input type="text" name="type" id="type" value="FullTime" />
                
                    <label for="resturant">Restaurant</label>
                    <input type="text" name="restaurant" id="restaurant" />
                
                    <button type="submit">Submit</button>
                </form>
            </div>
        
            <div class="right-div">
                <h3 class="material-icons" style="color: blue; font-size: 34px; margin-top: 0px;">restaurant</h3>&nbsp;<b style="font-size: 26px; color: blue;">Food Details</b>
                <form id="company-form">
                    <label for="foodno">Item No:</label>
                    <input type="text" id="foodno" value="no" />
        
                    <label for="foodname">Food Name:</label>
                    <input type="text" id="foodname" />
        
                    <label for="Categories">Categories</label>
                    <select id="Categories">
                        <option value="veg">Veg</option>
                        <option value="nonveg">Non-Veg</option>
                        <option value="fastfood">Fast Food</option>
                        <option value="desserts">Desserts</option>
                        <option value="desserts">Beverages</option>
                        <!-- Add more countries as needed -->
                    </select>
                            
                    <label for="foodprice">Food Price</label>
                    <input type="text" id="foodprice" />
        
                    <label for="table">Table No</label>
                    <input type="text" id="table" />

                    <label for="unit">Unit of Measurement</label>
                    <input type="text" id="unit" value="e.g., kg, lbs, each"/>
        
                    <label for="payment">Payment Method:</label>
                    <select id="payment">
                        <option value="cash">Cash</option>
                        <option value="Card">Card</option>
                        <option value="other">Other</option>
                    </select>
        
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
        

    
    </div>
    
    <?php
        /* error_reporting(E_ALL);
        ini_set('display_errors', 1); */

        include 'db.php'; // Include your database connection file

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Collect and sanitize form data
            $first_name = htmlspecialchars($_POST['first_name']);
            $last_name = htmlspecialchars($_POST['last_name']);
            $email = htmlspecialchars($_POST['email']);
            $phone_number = htmlspecialchars($_POST['phone_number']);
            $designation = htmlspecialchars($_POST['designation']);
            $types = htmlspecialchars($_POST['types']);
            $restaurant = htmlspecialchars($_POST['restaurant']);

            // Prepare and bind the SQL statement
            $stmt = $conn->prepare("INSERT INTO employees (first_name, last_name, email, phone_number, designation, types, restaurant) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $first_name, $last_name, $email, $phone_number, $designation, $types, $restaurant);

            // Execute the statement
            if ($stmt->execute()) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $stmt->error; // This will help you see what went wrong
            }

            // Close the statement and connection
            $stmt->close();
            $conn->close();
        }
?>
    <script>
        // Dropdown toggle function
        function toggleDropdown() {
            const dropdownContent = document.getElementById('dropdown');
            dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
        }
        // Close dropdown on outside click
        window.onclick = function (event) {
            if (!event.target.matches('.profile-image')) {
                const dropdownContent = document.getElementById('dropdown');
                if (dropdownContent.style.display === 'block') {
                    dropdownContent.style.display = 'none';
                }
            }
        };
    
        document.querySelector('.toggle-button').addEventListener('click', function () {
            const sidebar = document.querySelector('.sidebar1');
            sidebar.classList.toggle('active');
   
        });
    
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
        
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>  <!-- https://sites.google.com/view/hpprinter-supp0rtus  Printer Website-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=close" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> -->
    <link rel="shortcut icon" href="./img/admin_favicon-.png"  type="image/x-icon" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@latest/dist/apexcharts.css">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@latest"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/read-excel-file@5.0.0/dist/read-excel-file.min.js"></script>
    <script src="https://unpkg.com/browse/read-excel-file@5.8.6/bundle/read-excel-file.min.js"></script>
    <style>
    table { width: 100%; border-collapse: collapse;  }
    th, td { border: 1px solid black;  padding: 10px; text-align: left;  }
    th {  background-color: blue; color:white     }
    .gr { background-color: green;      }
    .bl { background-color: blue;  color: white;    }
    .yel { background-color: yellow;     }
    .container2 {
        max-width: 100%; 
        overflow-x: auto;
        height: 400px; /* Set a fixed height for the table container */
        margin: 0 auto;
        padding: 10px;
        border: 1px solid #ddd; /* Optional styling */
        background-color: #f9f9f9;
        /* max-width: max-content !important; */
    }
    .recents_ord {
    width: 100%;  /* Default width for larger screens */
}
    /* .recents_ord{
      width: 100%;  
    } */
    #records {
        width: 100%;
        table-layout: auto;
        border-collapse: collapse;
        word-wrap: break-word;
    }
    #output {
        margin-bottom: 20px;
    }
    .button-container {
        margin-bottom: 20px; /* Space between buttons and the table */
        display: flex;
        justify-content: flex-start; /* Align buttons to the left */
        gap: 10px; /* Space between buttons */
    }
    .btn {
        padding: 10px 20px;
        font-size: 16px;
        background-color: blue; /* Green background */
        color: white;
        border: 1px dotted blue;
        text-align: center;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .btn:hover {         background-color: #11979d;     }
    .btn:focus {         outline: none;     }
    /* Mobile responsive styles */
    @media (max-width: 768px) {
            .sidebar1 { width: 100%;  height: auto;  position: relative;  }
            .sidebar1 a {   padding: 10px;  font-size: 14px;     }
            #records {  width: 100%; margin-left: 0;  }
            .button-container { justify-content: space-between;  width: 100%;  }
            .profile-info { margin-left: 0;  margin-top: 10px;  }
            .div-right {    padding-left: 20px;   }
        }
    @media (max-width: 480px) {
            #table { width: 50%;}
            .sidebar1 { padding-top: 10px;         }
            .button-container {  flex-direction: column; gap: 5px;   }
            .btn {    width:55%;  padding: 10px;  font-size: 11px; }
            #records {
                font-size: 12px; /* Make text smaller */
                overflow-x: auto;
                     }
            th, td {
                padding: 8px; /* Reduce padding */
                font-size: 12px; /* Reduce font size further */
    }
            .recents_ord{ width:100% !important; margin: 0 auto;}
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.5);
        }
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 400px;
            border-radius: 8px;
            text-align: left;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover, .close:focus {
            color: #000;
            cursor: pointer;
        }
    </style>
    
</head>
<body>
    <div class="container">
        <!-- Aside Section-->
        <aside>
            <div class="top">
                <div class="logo">
                    <h2><span class="inf"><a href="index.html"><img src="img/logos-.png" height="80" width="150"></a></span></h2>
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
                <a href="item.php">
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
                <a href="#">
                    <span class="material-icons">settings</span>
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

<!-- Add Item Modal HTML structure -->
<div id="addItemModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('addItemModal')">&times;</span>
            <h2>Add New Food Item</h2>
            <form id="addItemForm">
                <label for="itemName">Name:</label>
                <input type="text" id="itemName" name="itemName" required><br><br>

                <label for="itemPrice">Price:</label>
                <input type="number" id="itemPrice" name="itemPrice" required><br><br>

                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>

    <!-- Add Section Modal HTML structure -->
    <div id="addSectionModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('addSectionModal')">&times;</span>
            <h2 style="color:blue">Add New Section</h2>
            <form id="addSectionForm">
                <label for="sectionName">Section Name:</label>
                <input type="text" id="sectionName" name="sectionName" required><br><br>

                <label for="sectionType">Category:</label>
                <input type="text" id="sectionType1" name="sectionType1" required><br><br>

                <!-- <label for="sectionType2">Type 2:</label>
                <input type="text" id="sectionType2" name="sectionType2"><br><br> -->

                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>

    <!-- https://www.youtube.com/watch?v=_MdlBXSN7tA    Excel File Fetch Data--> 
    <div class="container2 col-lg-12">
        <div class="recents_ord col-lg-12">
            <h1>Item Details Records</h1>
            
            <div class="button-container">
                <button id="addNewItemBtn" class="btn">Add New Item</button>
                <button id="addSectionBtn" class="btn">Add Section</button>
            </div>
            <div id="output" class="mt-3"></div>
            
            <table id="records" style="background-color: #a31414;">
                <!-- <thead>
                    <tr>
                        <th>ID</th>
                        <th>ItemName</th>
                        <th>Total No.</th>
                    </tr>
                </thead> -->
                <tbody>
                <?php include 'fetchs_datas.php'; ?> <!-- Sample records will be inserted here -->
                </tbody>
            </table>
        </div>
        
    </div>
    
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
        
 // Sample Data retrieve from Jquery Code
 
/* $(document).ready(function() {
    // Sample records to display
    const sampleRecords = [
        { id: 1, name: "Electronics", description: "85.", className: "gr"},
        { id: 2, name: "Grocery", description: "49 .",className: "bl" },
        { id: 3, name: "Garments", description: "51", className: "yel" },
    ];

    // Loop through sample records and append to the table body
    sampleRecords.forEach(record => {
        $('#records tbody').append(`
            <tr class="${record.className}">
                <td >${record.id}</td>
                <td >${record.name}</td>
                <td >${record.description}</td>
            </tr>
        `);
    });
});
 */

 // JavaScript to handle modal open and close for Add Item
 document.getElementById('addNewItemBtn').addEventListener('click', function() {
            document.getElementById('addItemModal').style.display = 'block';
        });

        // JavaScript to handle modal open and close for Add Section
        document.getElementById('addSectionBtn').addEventListener('click', function() {
            document.getElementById('addSectionModal').style.display = 'block';
        });

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }

        // Close modal when clicking outside of it
        window.onclick = function(event) {
            const addItemModal = document.getElementById('addItemModal');
            const addSectionModal = document.getElementById('addSectionModal');

            if (event.target === addItemModal) {
                addItemModal.style.display = 'none';
            }
            if (event.target === addSectionModal) {
                addSectionModal.style.display = 'none';
            }
        }

        // Form submit actions
        document.getElementById('addItemForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('New item added!');
            closeModal('addItemModal');
        });

        document.getElementById('addSectionForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('New section added!');
            closeModal('addSectionModal');
        });


// add button code
document.getElementById('addNewItemBtn').addEventListener('click', function() {
    // alert('Add New Item button clicked');
    // Add your functionality for adding a new item here
});

document.getElementById('addSectionBtn').addEventListener('click', function() {
    // alert('Add Section button clicked');
    // Add your functionality for adding a new section here
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
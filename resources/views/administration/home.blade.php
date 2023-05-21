<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    {{-- <link rel="stylesheet" href="../css/home.css">
    <link rel="shortcut icon" href="../images/sipi.png" type="image/x-icon"> --}}
    <!-- <link rel="stylesheet" href="https://kit.fontawesome.com/b3e3482d82.css" crossorigin="anonymous"> -->

    <title>SIPI Management</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <li class="nav-item">
                            <a class="tab nav-link" onclick="openTab(event, 'Tab1')" id="defaultOpen">
                                <i class="fs-4 bi-grid"></i>
                                <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a class="tab nav-link" onclick="openTab(event, 'Tab2')">
                                <i class="fs-4 bi-mortarboard"></i>
                                <span class="ms-1 d-none d-sm-inline">Student</span>
                            </a>
                        </li>
                        <li>
                            <a class="tab nav-link" onclick="openTab(event, 'Tab3')">
                                <i class="fs-4 bi-people"></i>
                                <span class="ms-1 d-none d-sm-inline">Teacher</span>
                            </a>
                        </li>
                        <li>
                            <a class="tab nav-link" onclick="openTab(event, 'Tab4')">
                                <i class="fs-4 bi-bell"></i>
                                <span class="ms-1 d-none d-sm-inline">Notice</span>
                            </a>
                        </li>
                        <li>
                            <a class="tab nav-link" onclick="openTab(event, 'Tab5')">
                                <i class="fs-4 bi-bar-chart-line-fill"></i>
                                <span class="ms-1 d-none d-sm-inline">Results</span>
                            </a>
                        </li>
                        <li>
                            <a class="tab nav-link" onclick="openTab(event, 'Tab6')">
                                <i class="fs-4 bi-currency-dollar"></i>
                                <span class="ms-1 d-none d-sm-inline">Deposit</span>
                            </a>
                        </li>
                        <li>
                            <a class="tab nav-link" onclick="openTab(event, 'Tab7')">
                                <i class="fs-4 bi-people"></i>
                                <span class="ms-1 d-none d-sm-inline">Book List</span>
                            </a>
                        </li>
                        <li>
                            <a class="tab nav-link" href="../download/">
                                <i class="fs-4 bi-download"></i>
                                <span class="ms-1 d-none d-sm-inline">Download</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col py-3">

                <div id="Tab1" class="tabcontent">

                    {{-- <img src="../images/sipi.png" class="rounded mx-auto d-block" alt="..."> --}}
                    <h1 class="text-center fw-bold">Shyamoli Ideal Polytechnic Institute</h1>
                    <h3 class="text-center">Dhaka</h3>

                    <strong>
                        <p class="text-center fs-5" id="date"></p>
                    </strong>

                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col-md-3">
                            <div class="card text-center bg-primary bg-opacity-75">
                                <div class="card-body">
                                    <h5 class="card-title">Total Student</h5>
                                    <p class="card-text fs-3">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center bg-success bg-opacity-75">
                                <div class="card-body">
                                    <h5 class="card-title">Total Teacher</h5>
                                    <p class="card-text fs-3">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center bg-danger bg-opacity-75">
                                <div class="card-body">
                                    <h5 class="card-title">Running Notice</h5>
                                    <p class="card-text fs-3">

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center bg-warning bg-opacity-75">
                                <div class="card-body">
                                    <h5 class="card-title">Today Total Deposit</h5>
                                    <p class="card-text fs-3">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center bg-warning bg-opacity-75">
                                <div class="card-body">
                                    <h5 class="card-title">Today My Deposit</h5>
                                    <p class="card-text fs-3">
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!--  -->
                <div id="Tab2" class="tabcontent">

                    <div class="container text-center">
                        <h3 class="text-center">Student Section</h3>
                    </div>

                    <hr>

                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col-md-3">
                            <div class="card text-center bg-warning bg-opacity-75">
                                <a class="text-decoration-none" href="{{ route('student.add_page') }}">
                                    <div class="card-body text-black">
                                        <i class="fs-4 bi-person-fill-add"></i>
                                        <h5 class="card-title">Add Student</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center bg-primary bg-opacity-50">
                                <a class="text-decoration-none" href="../other/administration/student_list.php">
                                    <div class="card-body text-black">
                                        <i class="fs-4 bi-people"></i>
                                        <h5 class="card-title">All Student</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center bg-info bg-opacity-75">
                                <a class="text-decoration-none" href="../other/administration/student_search.php">
                                    <div class="card-body text-black">
                                        <i class="fs-4 bi-search"></i>
                                        <h5 class="card-title">Search Student</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center bg-danger bg-opacity-75">
                                <a class="text-decoration-none" href="../other/administration/update_semester.php">
                                    <div class="card-body text-black">
                                        <i class="fs-4 bi-pencil-square"></i>
                                        <h5 class="card-title">Update Semester</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center bg-info bg-opacity-75">
                                <a class="text-decoration-none" href="../other/administration/attendance_history.php">
                                    <div class="card-body text-black">
                                        <i class="fs-4 bi-table"></i>
                                        <h5 class="card-title">Attendance History</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Tab End -->

                <!--  -->
                <div id="Tab3" class="tabcontent">

                    <div class="container text-center">
                        <h3 class="text-center">Teacher Section</h3>
                    </div>

                    <hr>

                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col-md-3">
                            <div class="card text-center bg-warning bg-opacity-75">
                                <a class="text-decoration-none" href="../other/administration/teacher_add.php">
                                    <div class="card-body text-black">
                                        <i class="fs-4 bi-person-fill-add"></i>
                                        <h5 class="card-title">Add Teacher</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center bg-primary bg-opacity-50">
                                <a class="text-decoration-none" href="../other/administration/teacher_list.php">
                                    <div class="card-body text-black">
                                        <i class="fs-4 bi-people"></i>
                                        <h5 class="card-title">All Teacher</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center bg-info bg-opacity-75">
                                <a class="text-decoration-none" href="../other/administration/teacher_search.php">
                                    <div class="card-body text-black">
                                        <i class="fs-4 bi-search"></i>
                                        <h5 class="card-title">Search Teacher</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Tab End -->

                <!--  -->
                <div id="Tab4" class="tabcontent">

                    <div class="container text-center">
                        <h3 class="text-center">Notice Section</h3>
                    </div>

                    <hr>

                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col-md-3">
                            <div class="card text-center bg-warning bg-opacity-75">
                                <a class="text-decoration-none" href="../other/notice_add.php">
                                    <div class="card-body text-black">
                                        <i class="fs-4 bi-plus-circle-fill"></i>
                                        <h5 class="card-title">Add Notice</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center bg-info bg-opacity-75">
                                <a class="text-decoration-none" href="../other/notice_all.php">
                                    <div class="card-body text-black">
                                        <i class="fs-4 bi-table"></i>
                                        <h5 class="card-title">All Notice</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Tab End -->

                <!--  -->
                <div id="Tab5" class="tabcontent">

                    <div class="container text-center">
                        <h3 class="text-center">Result Section</h3>
                    </div>

                    <hr>

                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col-md-3">
                            <div class="card text-center bg-warning bg-opacity-75">
                                <a class="text-decoration-none" href="../other/administration/result_publish.php">
                                    <div class="card-body text-black">
                                        <i class="fs-4 bi-pencil-square"></i>
                                        <h5 class="card-title">Result Publish</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center bg-info bg-opacity-75">
                                <a class="text-decoration-none" href="../other/administration/result_check.php">
                                    <div class="card-body text-black">
                                        <i class="fs-4 bi-bar-chart-line-fill"></i>
                                        <h5 class="card-title">Results</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Tab End -->

                <!--  -->
                <div id="Tab6" class="tabcontent">

                    <div class="container text-center">
                        <h3 class="text-center">Fees Deposit Section</h3>
                    </div>

                    <hr>

                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col-md-3">
                            <div class="card text-center bg-warning bg-opacity-75">
                                <a class="text-decoration-none"
                                    href="../other/administration/fees_depositor_find.php">
                                    <div class="card-body text-black">
                                        <i class="fs-4 bi-currency-dollar"></i>
                                        <h5 class="card-title">Fees Deposit</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center bg-info bg-opacity-75">
                                <a class="text-decoration-none"
                                    href="../other/administration/daily_deposit_query.php">
                                    <div class="card-body text-black">
                                        <i class="fs-4 bi-currency-dollar"></i>
                                        <h5 class="card-title">Daily Deposit query</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-center bg-info bg-opacity-75">
                                <a class="text-decoration-none"
                                    href="../other/administration/daily_deposit_query_own.php">
                                    <div class="card-body text-black">
                                        <i class="fs-4 bi-currency-dollar"></i>
                                        <h5 class="card-title">My Deposit query</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Tab End -->



                <!--  -->
                <div id="Tab7" class="tabcontent">

                    <div class="container text-center">
                        <h3 class="text-center">Course Section</h3>
                    </div>

                    <hr>

                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col-md-3">
                            <div class="card text-center bg-info bg-opacity-75">
                                <a class="text-decoration-none" href="../other/administration/book_list.php">
                                    <div class="card-body text-black">
                                        <i class="fs-4 bi-book"></i>
                                        <h5 class="card-title">Book List</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Tab End -->










            </div>
        </div>
    </div>











    <script>
        function openTab(evt, tabName) {
            // Get all elements with class="tabcontent" and hide them
            let tabcontent = document.getElementsByClassName("tabcontent");
            for (let i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            // Get all elements with class="tab" and remove the class "active"
            let tablinks = document.getElementsByClassName("tab");
            for (let i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        // Open the default tab (Tab 1)
        document.getElementById("defaultOpen").click();
    </script>

    <script>
        n = new Date();
        y = n.getFullYear();
        m = n.getMonth() + 1;
        d = n.getDate();
        document.getElementById("date").innerText = n;
    </script>


    <!-- Notice Item Delete -->
    <script>
        var deleteButtons = document.getElementsByClassName("dlt-notice");
        for (var i = 0; i < deleteButtons.length; i++) {
            deleteButtons[i].onclick = function() {
                var id = this.id.split("-")[1];
                var btn = 'hos';
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "../delete/dlt_notice.php", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        var response = JSON.parse(xhr.responseText);
                        if (response.status === "success") {
                            alert("Selected Item Delete Successfully");
                            location.reload();
                        } else {
                            alert("Error deleting item");
                        }
                    }
                }
                xhr.send("id=" + id);
            }
        }
    </script>


    <!-- Bootstrap Script Link -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>

    <!-- Bootstrap Script Link -->
</body>

</html>

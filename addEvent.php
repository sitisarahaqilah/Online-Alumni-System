<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="manage-add-viewEvents.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>FCSIT UM Alumni</title>
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
</head>

<body>
    <header class="navbar sticky-top navbar-expand-md navbar-light">
        <a class="navbar-brand col-md-3 col-lg-2 me-auto px-3 py-2" href="#"><img src="image/UM_Logo.png" alt="UM Logo" width="44" height="48"><img src="image/FSKTM_Logo.png" alt="FSKTM Logo" width="92" height="48"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="logout.php" class="btn btn-logout text-white">log out</a>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="navbarCollapse" class="col-md-3 col-lg-2 d-md-block sidebar collapse navbar-collapse">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item px-2 py-1">
                            <a class="nav-link" href="AdminMembers.php">
                            <span data-feather="users"></span>
                            Manage Alumni
                            </a>
                        </li>
                        <li class="nav-item px-2 py-1">
                            <a class="nav-link active" aria-current="page" href="manageEvents.php">
                            <span data-feather="calendar"></span>
                            Manage Events
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pb-4 mb-5">
                    <div class="container-fluid">
                        
                        <div class="card-event shadow px-5 text-center">
                            <div class="card-body">
                                <h2 class="card-event-title py-3">New event details</h2>
                                <form action="processEvent.php" method="POST" class="row g-3 text-center" enctype="multipart/form-data">
                                    <div class="picture-container d-flex justify-content-center">
                                        <div class="picture">
                                            <img src="image/blankImage.png" class="card-img-left" id="addImagePreview" alt="add image preview">
                                            <input type="file" id="addImage" name="event_image" class="form-control h-100 position-absolute top-0" 
                                                onchange="document.getElementById('addImagePreview').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <label for="inputEventName" class="form-label"></label>
                                    <input type="text" class="form-control" id="inputEventName" name="event_name" placeholder="Event name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputOrg" class="form-label"></label>
                                        <input type="text" class="form-control" id="inputOrg" name="event_organiser" placeholder="Organiser" required>
                                    </div>                       
                                    <div class="col-md-2">
                                    <label for="inputDate" class="form-label"></label>
                                    <input type="date" class="form-control" id="inputDate" name="event_date" required>
                                    </div>
                                    <div class="col-md-2">
                                    <label for="inputStartTime" class="form-label"></label>
                                    <input type="time" class="form-control" id="inputStartTime" name="event_start" required>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="inputEndTime" class="form-label"></label>
                                        <input type="time" class="form-control" id="inputEndTime" name="event_end" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputVenue" class="form-label"></label>
                                        <input type="text" class="form-control" id="inputVenue" name="event_venue" placeholder="Venue" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputDesc" class="form-label"></label>
                                        <textarea class="form-control" id="inputDesc" name="event_description" rows="3" placeholder="Write a short description here..."></textarea>
                                    </div>
                                    <div class="col text-center">
                                        <button type="submit" name="add" class="btn btn-add-submit">add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <a href="manageEvents.php" class="btn btn-previous">&laquo;</a>

                </div>
            </main>
        </div>
    </div>

    <footer class="footer mt-auto py-0 fixed-bottom text-white">
    <p class="float-end"><small><i><a class="text-white" href="#" onclick="topFunction(); return false;">Back to top</a></i></small></p>
    <p><small><i>&copy; 2021 All Right Reserved. Designed and Developed by Afifah & Friends</i></small></p>
    </footer>      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script>
        feather.replace()
    </script>

</body>
</html>
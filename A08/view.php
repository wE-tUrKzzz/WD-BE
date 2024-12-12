<?php
// Include the database connection file
include("connect.php");

if (isset($_GET['islandOfPersonalityID'])) {
    $islandID = $_GET['islandOfPersonalityID'];

    // Query to fetch the island data based on islandOfPersonalityID
    $islandQuery = "SELECT * FROM islandsofpersonality WHERE islandOfPersonalityID = '$islandID'";
    $islandResult = mysqli_query($conn, $islandQuery);

    // Fetch the Data from Island Personality
    if (mysqli_num_rows($islandResult) > 0) {
        $islandRow = mysqli_fetch_assoc($islandResult);
        $islandName = $islandRow['name'];
        $image = $islandRow['image'];
        $mainColor = $islandRow['color'];
        $longDescription = $islandRow['longDescription'];
    } else {
        echo "Island not found.";
    }

    // Query to fetch content from islandcontents table
    $islandContentQuery = "SELECT * FROM islandcontents WHERE islandOfPersonalityID = '$islandID'";
    $islandContentResults = mysqli_query($conn, $islandContentQuery);

    // Fetch the Data from Island Content
    if (mysqli_num_rows($islandContentResults) > 0) {
        $contentArray = [];
        while ($row = mysqli_fetch_assoc($islandContentResults)) {
            // Store each content and image in an array for later use
            $contentArray[] = [
                'content' => $row['content'],
                'image' => $row['image'],
                'contentColor' => $row['color']
            ];
        }
    } else {
        $contentArray = [];
    }
} else {
    echo "No island ID provided.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Island's Inside Out</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        @font-face {
            font-family: 'InsideOut';
            src: url('dir/font/GOODGIRL.TTF') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        body,
        .card,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        ul,
        li,
        a {
            font-family: 'Poppins', sans-serif;
        }

        body,
        .card {
            background-color: #E9EBB7;

        }

        footer .social-icons a {
            color: white;
            margin: 10px;
            font-size: 25px;
        }
    </style>
</head>

<body class="w3-black">




    <!-- Page Content -->
    <div class="w3" id="main">
        <header class="w3-container w3-padding-32 w3-center animate__animated animate__fadeIn"
            id="home" style="background-color:<?php echo $mainColor ?>; width: 100%; margin: 0;">
            <!-- Dynamic Island Name -->
            <h1 class="w3-jumbo animate__animated animate__zoomIn" style=" color: black; font-family: InsideOut, sans-serif;"><?php echo $islandName; ?>
                <br>Island
            </h1>
            <img src="dir/img/shared/<?php echo $image; ?>" alt="Island Image" class="me-pic animate__animated animate__zoomIn">
        </header>

        <!-- About Section -->
        <div class="container py-5 animate__animated animate__fadeInUp" id="about">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2 class="text-light">About</h2>
                    <hr style="width: 200px" class="mx-auto opacity-75">
                </div>
                <div class="col-12 col-md-8 offset-md-2">
                    <p class="text" style="color:white;"><?php echo $longDescription; ?></p>
                </div>
            </div>
        </div>

        <!-- Portfolio Section -->
        <div class="container py-5 animate__animated animate__fadeInUp" id="photos">
            <h2 class="text-light text-center">My Photos</h2>
            <hr style="width:200px" class="mx-auto opacity-75">

            <!-- Grid for photos -->
            <div class="w3-row-padding" style="margin:0 -16px">
                <?php if (count($contentArray) > 0): ?>
                    <?php foreach ($contentArray as $contentItem): ?>
                        <div class="w3-half mb-4 animate__animated animate__fadeIn">
                            <!-- Card Structure -->
                            <div class="card" style="background-color: <?php echo $contentItem['contentColor']; ?>;">
                                <!-- Card Image -->
                                <img src="dir/img/<?php echo htmlspecialchars($islandName) . '/' . htmlspecialchars($contentItem['image']); ?>"
                                    class="wow card-img-top animate__animated animate__zoomIn" alt="Island Content Image">
                                <!-- Card Body -->
                                <div class="wow card-body">
                                    <p class="card-text text-center p-3">
                                        <?php echo htmlspecialchars($contentItem['content']); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="animate__animated animate__fadeIn">No photos available for this island.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer class="text-center" style="background-color: #000000;">
        <div class="container pt-4">
            <section class="social-icons d-flex justify-content-center align-items-center mb-2">
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=louisito75@gmail.com&su=Hello&body=I%20would%20like%20to%20connect."
                    target="_blank" role="button"><i class="fab fa-google"></i></a>
                <a href="https://www.linkedin.com/in/louis-santos-0a733b259/" target="_blank" role="button"><i
                        class="fab fa-linkedin"></i></a>
                <a href="https://github.com/wE-tUrKzzz" target="_blank" role="button"><i class="fab fa-github"></i></a>
            </section>
            <div class="text-center p-4">
                <a style="color: rgb(255, 255, 255)">Website is just a project. All Rights Reserved.</a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Wow Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init(); // Initialize WOW.js
    </script>
</body>

</html>
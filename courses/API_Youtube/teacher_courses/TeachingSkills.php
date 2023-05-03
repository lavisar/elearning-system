<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elearn | Teacher</title>
</head>


<body>
    <?php
    session_start();
    $username = $_SESSION['username'];
    include "../../layout.php";
    include "../../sidebar.php";
    ?>
    <div class="content-wrapper p-3">
        <h1 class="text-center mb-4">Welcome To Teaching skills Course</h1>
        <div class="row " style="margin: 0;">

            <?php
            // API key
            $apiKey = "AIzaSyBi3LKHg1Xn1Eflq6kYGDe8vo4WUVti2tU";

            //playlistId 
            $keyword  = "kỹ+năng+giảng+dạy+sư+phạm";

            // Truy vấn Youtube API
            $url = "https://www.googleapis.com/youtube/v3/search?part=snippet&maxResults=35&q=" . $keyword . "&key=" . $apiKey;
            $response = file_get_contents($url);
            // Chuyển đổi phản hồi JSON thành đối tượng PHP
            $videos = json_decode($response)->items;


            // Hiển thị các video
            foreach ($videos as $video) {
                $title = $video->snippet->title;
                $videoId = $video->id->videoId;
                echo '<div class="col-md-3">';
                echo '<div class="embed-responsive embed-responsive-1by1">';
                echo '<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/' . $videoId . '?rel=0" allowfullscreen></iframe>';
                echo '</div>';
                echo '<p>' . $title . '</p>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</body>

</html>
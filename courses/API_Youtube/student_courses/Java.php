<div class="row" style="margin: 0;">
    <?php
    // API key
    $apiKey = "AIzaSyBi3LKHg1Xn1Eflq6kYGDe8vo4WUVti2tU";

    //playlistId 
    $playlistId = "PLyxSzL3F748401hWFgJ8gKMnN6MM8QQ7F";

    // Truy vấn Youtube API
    $url = "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=10&playlistId=" .
        $playlistId . "&key=" . $apiKey;
    $response = file_get_contents($url);

    // Chuyển đổi phản hồi JSON thành đối tượng PHP
    $videos = json_decode($response)->items;


    // Hiển thị các video
    foreach ($videos as $video) {
        $title = $video->snippet->title;
        $videoId = isset($video->id->videoId) ? $video->id->videoId : null;
        echo '<div class="col-md-2">';
        echo '<div class="embed-responsive embed-responsive-1by1">';
        echo '<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/' . $videoId . '?rel=0" allowfullscreen></iframe>';
        echo '</div>';
        echo '<p>' . $title . '</p>';
        echo '</div>';
    }
    ?>
</div>
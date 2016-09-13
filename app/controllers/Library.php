<?php
    if(isset($_POST['submit']) && $_POST['submit'] == 'Delete')
    {
        try {
            $filesToDelete = $_POST['checkimage'];
            foreach ($filesToDelete as $key => $value) {
                if (is_file($value))  $delete = unlink($value);
                else echo 'No Such File<br>';
            }
            if(isset($delete) && $delete == TRUE)
                echo "Files successfuly deleted.";
            } catch (Exception $exc) { echo $exc->getMessage(); }
     } else {
    $imagesDirecotry = "../uploads/images/";
    $imagesdir = scandir($imagesDirecotry);
    $scImagesDir = array_diff($imagesdir, array('..', '.'));
    
    $videosDirecotry = "../uploads/videos/";
    $videosdir = scandir($videosDirecotry);
    $scVideosDir = array_diff($videosdir, array('..', '.'));
    // display images
   $extimage = array('jpg', 'png','jpeg');
   $extvideo = array('mp4','MP4','mkv','MKV');
   $dirVideos = $scVideosDir;
   $dirImages = $scImagesDir;
  $images = array ();
  $video = array ();
  $j=0;
	for ( $i = 2; $i<count($dirImages)+2 ; $i++)
	{ 
	 $arr = explode('.' , $dirImages[$i]) ; 
	   if ( in_array( $arr[1],$extimage))
			 $images[$j] = $dirImages[$i];
			 $j++;
      }
	  $j=0;
	for ( $i = 2 ; $i<count($dirVideos)+2 ; $i++)
	{ 
	 $arr = explode('.' , $dirVideos[$i]) ; 
	   if ( in_array( $arr[1],$extvideo))
			 $video[$j] = $dirVideos[$i];
			 $j++;
      }
include './veiws/library.php';
}
// 84
?>
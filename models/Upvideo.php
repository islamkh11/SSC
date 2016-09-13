<?php
/*
 * Display to get the requested data from the databse
 *
 * @author Ali7amdi
 */
class  Upvideo {

   public $link;
    public function __construct($file) {
                   // = $_FILES['cover'];
                    $allowedExts = array('mp4','3gp');
                   echo $uploadsDirecotry = "../uploads/videos/";
                    $maxSize = 100000000;
                    
                    die;
                    $upload = new Upload($file, $allowedExts, $uploadsDirecotry, $maxSize);
                    $upload->uploadFile();
                    $this->link = $uploadsDirecotry . $upload->getFileUrl();
	}
	
	public function link ()
	{
                    return $this->link;
    }


}



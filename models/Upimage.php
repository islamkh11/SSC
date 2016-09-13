<?php
/*
 * Display to get the requested data from the databse
 *
 * @author Ali7amdi
 */
class  Upimage {

   public $link;
    public function __construct($file) {
                   // = $_FILES['cover'];
                    $allowedExts = array('jpg', 'png', 'gif', 'jpeg');
                    $uploadsDirecotry = "../uploads/images/";
                    $maxSize = 4000000;
                    $upload = new Upload($file, $allowedExts, $uploadsDirecotry, $maxSize);
                    $upload->uploadFile();
                    $this->link = $uploadsDirecotry . $upload->getFileUrl();
	}
	
	public function link ()
	{
                    return $this->link;
    }


}



<?php  
///////////////////
// OUTSIDE PICTURE
///////////////////


//  if(!file_exists('images/'.date("YmdHis"))) {
    if(!file_exists('images/'.$mansion->id)) {
                mkdir('images/'.$mansion->id, 0777);
            }


    foreach($_FILES['outsides']['name'] as $i => $name) {

        $name = $_FILES['outsides']['name'][$i];
        $size = $_FILES['outsides']['size'][$i];
        $type = $_FILES['outsides']['type'][$i];
        $tmp = $_FILES['outsides']['tmp_name'][$i];

        $explode = explode('.', $name);

        $ext = end($explode);


        $path = 'images/'.$mansion->id.'/'.'outside/';

        $path = $path .basename( $explode[0]  .'.'. $ext);
        
        $errors = array();

        if(empty($_FILES['outsides']['tmp_name'][$i])) {
            $errors[] = 'Please choose at least 1 file to be uploaded.';
        }else {

            $allowed = array('jpg','jpeg','gif','bmp','png');

            $max_size = 4000000; // 4MB

            if(in_array($ext, $allowed) === false) {
                $errors[] = 'The file <b>'.$name.'</b> extension is not allowed.';
            }

            if($size > $max_size) {
                $errors[] = 'The file <b>'.$name.'</b> size is too hight.';
            }

        }

        if(empty($errors)) {

            if(!file_exists('images/'.$mansion->id.'/'.'outside')) {
                mkdir('images/'.$mansion->id.'/'.'outside', 0777);
            }
            

            if(move_uploaded_file($tmp, $path)) {
                echo '<p>The file <b>'.$name.'</b> successfully uploaded</p>';
            }else {
                echo 'Something went wrong while uploading the file <b>'.$name.'</b>';
            }

        }else {
            foreach($errors as $error) {
                echo '<p>'.$error.'<p>';
            }
        }
    }

///////////////////
//  ROOM 1 
///////////////////


    foreach($_FILES['rooms1']['name'] as $i => $name) {

        $name = $_FILES['rooms1']['name'][$i];
        $size = $_FILES['rooms1']['size'][$i];
        $type = $_FILES['rooms1']['type'][$i];
        $tmp = $_FILES['rooms1']['tmp_name'][$i];

        $explode = explode('.', $name);

        $ext = end($explode);


        $path = 'images/'.$mansion->id.'/'.'room1/';

        $path = $path .basename( $explode[0]  .'.'. $ext);
        
        $errors = array();

        if(empty($_FILES['rooms1']['tmp_name'][$i])) {
            $errors[] = 'Please choose at least 1 file to be uploaded.';
        }else {

            $allowed = array('jpg','jpeg','gif','bmp','png');

            $max_size = 4000000; // 4MB

            if(in_array($ext, $allowed) === false) {
                $errors[] = 'The file <b>'.$name.'</b> extension is not allowed.';
            }

            if($size > $max_size) {
                $errors[] = 'The file <b>'.$name.'</b> size is too hight.';
            }

        }

        if(empty($errors)) {

            if(!file_exists('images/'.$mansion->id.'/'.'room1')) {
                mkdir('images/'.$mansion->id.'/'.'room1', 0777);
            }
            

            if(move_uploaded_file($tmp, $path)) {
                echo '<p>The file <b>'.$name.'</b> successfully uploaded</p>';
            }else {
                echo 'Something went wrong while uploading the file <b>'.$name.'</b>';
            }

        }else {
            foreach($errors as $error) {
                echo '<p>'.$error.'<p>';
            }
        }

    }

///////////////////
//  ROOM 2 
///////////////////


    foreach($_FILES['rooms2']['name'] as $i => $name) {

        $name = $_FILES['rooms2']['name'][$i];
        $size = $_FILES['rooms2']['size'][$i];
        $type = $_FILES['rooms2']['type'][$i];
        $tmp = $_FILES['rooms2']['tmp_name'][$i];

        $explode = explode('.', $name);

        $ext = end($explode);


        $path = 'images/'.$mansion->id.'/'.'room2/';

        $path = $path .basename( $explode[0]  .'.'. $ext);
        
        $errors = array();

        if(empty($_FILES['rooms2']['tmp_name'][$i])) {
            $errors[] = 'Please choose at least 1 file to be uploaded.';
        }else {

            $allowed = array('jpg','jpeg','gif','bmp','png');

            $max_size = 4000000; // 4MB

            if(in_array($ext, $allowed) === false) {
                $errors[] = 'The file <b>'.$name.'</b> extension is not allowed.';
            }

            if($size > $max_size) {
                $errors[] = 'The file <b>'.$name.'</b> size is too hight.';
            }

        }

        if(empty($errors)) {

            if(!file_exists('images/'.$mansion->id.'/'.'room2')) {
                mkdir('images/'.$mansion->id.'/'.'room2', 0777);
            }
            

            if(move_uploaded_file($tmp, $path)) {
                echo '<p>The file <b>'.$name.'</b> successfully uploaded</p>';
            }else {
                echo 'Something went wrong while uploading the file <b>'.$name.'</b>';
            }

        }else {
            foreach($errors as $error) {
                echo '<p>'.$error.'<p>';
            }
        }

    }
///////////////////
//  ROOM 3 
///////////////////


    foreach($_FILES['rooms3']['name'] as $i => $name) {

        $name = $_FILES['rooms3']['name'][$i];
        $size = $_FILES['rooms3']['size'][$i];
        $type = $_FILES['rooms3']['type'][$i];
        $tmp = $_FILES['rooms3']['tmp_name'][$i];

        $explode = explode('.', $name);

        $ext = end($explode);


        $path = 'images/'.$mansion->id.'/'.'room3/';

        $path = $path .basename( $explode[0]  .'.'. $ext);
        
        $errors = array();

        if(empty($_FILES['rooms3']['tmp_name'][$i])) {
            $errors[] = 'Please choose at least 1 file to be uploaded.';
        }else {

            $allowed = array('jpg','jpeg','gif','bmp','png');

            $max_size = 4000000; // 4MB

            if(in_array($ext, $allowed) === false) {
                $errors[] = 'The file <b>'.$name.'</b> extension is not allowed.';
            }

            if($size > $max_size) {
                $errors[] = 'The file <b>'.$name.'</b> size is too hight.';
            }

        }

        if(empty($errors)) {

            if(!file_exists('images/'.$mansion->id.'/'.'room3')) {
                mkdir('images/'.$mansion->id.'/'.'room3', 0777);
            }
            

            if(move_uploaded_file($tmp, $path)) {
                echo '<p>The file <b>'.$name.'</b> successfully uploaded</p>';
            }else {
                echo 'Something went wrong while uploading the file <b>'.$name.'</b>';
            }

        }else {
            foreach($errors as $error) {
                echo '<p>'.$error.'<p>';
            }
        }

    }
    ///////////////////
//  ROOM 4 
///////////////////


    foreach($_FILES['rooms4']['name'] as $i => $name) {

        $name = $_FILES['rooms4']['name'][$i];
        $size = $_FILES['rooms4']['size'][$i];
        $type = $_FILES['rooms4']['type'][$i];
        $tmp = $_FILES['rooms4']['tmp_name'][$i];

        $explode = explode('.', $name);

        $ext = end($explode);


        $path = 'images/'.$mansion->id.'/'.'room4/';

        $path = $path .basename( $explode[0]  .'.'. $ext);
        
        $errors = array();

        if(empty($_FILES['rooms4']['tmp_name'][$i])) {
            $errors[] = 'Please choose at least 1 file to be uploaded.';
        }else {

            $allowed = array('jpg','jpeg','gif','bmp','png');

            $max_size = 4000000; // 4MB

            if(in_array($ext, $allowed) === false) {
                $errors[] = 'The file <b>'.$name.'</b> extension is not allowed.';
            }

            if($size > $max_size) {
                $errors[] = 'The file <b>'.$name.'</b> size is too hight.';
            }

        }

        if(empty($errors)) {

            if(!file_exists('images/'.$mansion->id.'/'.'room4')) {
                mkdir('images/'.$mansion->id.'/'.'room4', 0777);
            }
            

            if(move_uploaded_file($tmp, $path)) {
                echo '<p>The file <b>'.$name.'</b> successfully uploaded</p>';
            }else {
                echo 'Something went wrong while uploading the file <b>'.$name.'</b>';
            }

        }else {
            foreach($errors as $error) {
                echo '<p>'.$error.'<p>';
            }
        }

    }
    ///////////////////
//  ROOM 5
///////////////////


    foreach($_FILES['rooms5']['name'] as $i => $name) {

        $name = $_FILES['rooms5']['name'][$i];
        $size = $_FILES['rooms5']['size'][$i];
        $type = $_FILES['rooms5']['type'][$i];
        $tmp = $_FILES['rooms5']['tmp_name'][$i];

        $explode = explode('.', $name);

        $ext = end($explode);


        $path = 'images/'.$mansion->id.'/'.'room5/';

        $path = $path .basename( $explode[0]  .'.'. $ext);
        
        $errors = array();

        if(empty($_FILES['rooms5']['tmp_name'][$i])) {
            $errors[] = 'Please choose at least 1 file to be uploaded.';
        }else {

            $allowed = array('jpg','jpeg','gif','bmp','png');

            $max_size = 4000000; // 4MB

            if(in_array($ext, $allowed) === false) {
                $errors[] = 'The file <b>'.$name.'</b> extension is not allowed.';
            }

            if($size > $max_size) {
                $errors[] = 'The file <b>'.$name.'</b> size is too hight.';
            }

        }

        if(empty($errors)) {

            if(!file_exists('images/'.$mansion->id.'/'.'room5')) {
                mkdir('images/'.$mansion->id.'/'.'room5', 0777);
            }
            

            if(move_uploaded_file($tmp, $path)) {
                echo '<p>The file <b>'.$name.'</b> successfully uploaded</p>';
            }else {
                echo 'Something went wrong while uploading the file <b>'.$name.'</b>';
            }

        }else {
            foreach($errors as $error) {
                echo '<p>'.$error.'<p>';
            }
        }

    }
///////////////////
//              ///
///////////////////
///
///////////////////
//  APPEARANCE 1 
///////////////////


    foreach($_FILES['appearances1']['name'] as $i => $name) {

        $name = $_FILES['appearances1']['name'][$i];
        $size = $_FILES['appearances1']['size'][$i];
        $type = $_FILES['appearances1']['type'][$i];
        $tmp = $_FILES['appearances1']['tmp_name'][$i];

        $explode = explode('.', $name);

        $ext = end($explode);


        $path = 'images/'.$mansion->id.'/'.'appearance1/';

        $path = $path .basename( $explode[0]  .'.'. $ext);
        
        $errors = array();

        if(empty($_FILES['appearances1']['tmp_name'][$i])) {
            $errors[] = 'Please choose at least 1 file to be uploaded.';
        }else {

            $allowed = array('jpg','jpeg','gif','bmp','png');

            $max_size = 4000000; // 4MB

            if(in_array($ext, $allowed) === false) {
                $errors[] = 'The file <b>'.$name.'</b> extension is not allowed.';
            }

            if($size > $max_size) {
                $errors[] = 'The file <b>'.$name.'</b> size is too hight.';
            }

        }

        if(empty($errors)) {

            if(!file_exists('images/'.$mansion->id.'/'.'appearance1')) {
                mkdir('images/'.$mansion->id.'/'.'appearance1', 0777);
            }
            

            if(move_uploaded_file($tmp, $path)) {
                echo '<p>The file <b>'.$name.'</b> successfully uploaded</p>';
            }else {
                echo 'Something went wrong while uploading the file <b>'.$name.'</b>';
            }

        }else {
            foreach($errors as $error) {
                echo '<p>'.$error.'<p>';
            }
        }

    }
    ///////////////////
//  APPEARANCE 2 
///////////////////


    foreach($_FILES['appearances2']['name'] as $i => $name) {

        $name = $_FILES['appearances2']['name'][$i];
        $size = $_FILES['appearances2']['size'][$i];
        $type = $_FILES['appearances2']['type'][$i];
        $tmp = $_FILES['appearances2']['tmp_name'][$i];

        $explode = explode('.', $name);

        $ext = end($explode);


        $path = 'images/'.$mansion->id.'/'.'appearance2/';

        $path = $path .basename( $explode[0]  .'.'. $ext);
        
        $errors = array();

        if(empty($_FILES['appearances2']['tmp_name'][$i])) {
            $errors[] = 'Please choose at least 1 file to be uploaded.';
        }else {

            $allowed = array('jpg','jpeg','gif','bmp','png');

            $max_size = 4000000; // 4MB

            if(in_array($ext, $allowed) === false) {
                $errors[] = 'The file <b>'.$name.'</b> extension is not allowed.';
            }

            if($size > $max_size) {
                $errors[] = 'The file <b>'.$name.'</b> size is too hight.';
            }

        }

        if(empty($errors)) {

            if(!file_exists('images/'.$mansion->id.'/'.'appearance2')) {
                mkdir('images/'.$mansion->id.'/'.'appearance2', 0777);
            }
            

            if(move_uploaded_file($tmp, $path)) {
                echo '<p>The file <b>'.$name.'</b> successfully uploaded</p>';
            }else {
                echo 'Something went wrong while uploading the file <b>'.$name.'</b>';
            }

        }else {
            foreach($errors as $error) {
                echo '<p>'.$error.'<p>';
            }
        }

    }
    ///////////////////
//  APPEARANCE 3 
///////////////////


    foreach($_FILES['appearances3']['name'] as $i => $name) {

        $name = $_FILES['appearances3']['name'][$i];
        $size = $_FILES['appearances3']['size'][$i];
        $type = $_FILES['appearances3']['type'][$i];
        $tmp = $_FILES['appearances3']['tmp_name'][$i];

        $explode = explode('.', $name);

        $ext = end($explode);


        $path = 'images/'.$mansion->id.'/'.'appearance3/';

        $path = $path .basename( $explode[0]  .'.'. $ext);
        
        $errors = array();

        if(empty($_FILES['appearances3']['tmp_name'][$i])) {
            $errors[] = 'Please choose at least 1 file to be uploaded.';
        }else {

            $allowed = array('jpg','jpeg','gif','bmp','png');

            $max_size = 4000000; // 4MB

            if(in_array($ext, $allowed) === false) {
                $errors[] = 'The file <b>'.$name.'</b> extension is not allowed.';
            }

            if($size > $max_size) {
                $errors[] = 'The file <b>'.$name.'</b> size is too hight.';
            }

        }

        if(empty($errors)) {

            if(!file_exists('images/'.$mansion->id.'/'.'appearance3')) {
                mkdir('images/'.$mansion->id.'/'.'appearance3', 0777);
            }
            

            if(move_uploaded_file($tmp, $path)) {
                echo '<p>The file <b>'.$name.'</b> successfully uploaded</p>';
            }else {
                echo 'Something went wrong while uploading the file <b>'.$name.'</b>';
            }

        }else {
            foreach($errors as $error) {
                echo '<p>'.$error.'<p>';
            }
        }

    }
    ///////////////////
//  APPEARANCE 4 
///////////////////


    foreach($_FILES['appearances4']['name'] as $i => $name) {

        $name = $_FILES['appearances4']['name'][$i];
        $size = $_FILES['appearances4']['size'][$i];
        $type = $_FILES['appearances4']['type'][$i];
        $tmp = $_FILES['appearances4']['tmp_name'][$i];

        $explode = explode('.', $name);

        $ext = end($explode);


        $path = 'images/'.$mansion->id.'/'.'appearance4/';

        $path = $path .basename( $explode[0]  .'.'. $ext);
        
        $errors = array();

        if(empty($_FILES['appearances4']['tmp_name'][$i])) {
            $errors[] = 'Please choose at least 1 file to be uploaded.';
        }else {

            $allowed = array('jpg','jpeg','gif','bmp','png');

            $max_size = 4000000; // 4MB

            if(in_array($ext, $allowed) === false) {
                $errors[] = 'The file <b>'.$name.'</b> extension is not allowed.';
            }

            if($size > $max_size) {
                $errors[] = 'The file <b>'.$name.'</b> size is too hight.';
            }

        }

        if(empty($errors)) {

            if(!file_exists('images/'.$mansion->id.'/'.'appearance4')) {
                mkdir('images/'.$mansion->id.'/'.'appearance4', 0777);
            }
            

            if(move_uploaded_file($tmp, $path)) {
                echo '<p>The file <b>'.$name.'</b> successfully uploaded</p>';
            }else {
                echo 'Something went wrong while uploading the file <b>'.$name.'</b>';
            }

        }else {
            foreach($errors as $error) {
                echo '<p>'.$error.'<p>';
            }
        }

    }




?>
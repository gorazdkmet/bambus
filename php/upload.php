<?php

if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    $id = $_GET['id'];  
    $fileName = $file['name'];
    $filetype = $file['type'];
    $fileTmpName = $file['tmp_name'];
    $fileError = $file['error'];
    $fileSize = $file['size'];
        
    $fileExt = strtolower(end(explode('.',$fileName)));
    
    $allowed = array( 'jpg', 'jpeg','png');
    
    if (in_array($fileExt, $allowed)) {
        
        if ($fileError === 0) {
            
            if ($fileSize < 1000000) {
                
                $fileNameNew = uniqid('', true).'.'.$fileExt;
                $fileDestination = '../img/menu/'.$id.'/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header('Location: meal.php?id='.$id);
                
            } else { echo 'Obrázok je príliž veľký'; }
            
        } else { echo 'Nahrávanie zlyhalo, prosím zopakujte ho'; }
        
    } else { echo 'Prosím nahrajte obrázok vo formáte jpg, jpeg alebo png'; }
}

?>

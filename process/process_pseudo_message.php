<?php



if(!empty($_POST['pseudo'])
    && !empty($_POST['message'])) {

        require_once('../utils/db_connect.php');

        $ip = $_SERVER['REMOTE_ADDR'];

        $sql = "INSERT INTO messages (datehour, id_user, textmessage) VALUES (:datehour, :id_user, :textmessage)";
        $request = $pdo->prepare($sql);
        $isSuccess = $request->execute([
                'datehour' => date('Y-m-d H:i:s'),
                'id_user' => $_POST['pseudo'],
                'textmessage' => $_POST['message']
        ]);

        
        $sql = "INSERT INTO users (pseudo) VALUES (:pseudo)";
        $request = $pdo->prepare($sql);
        $isSuccess = $request->execute([                    
            'pseudo' => $_POST['pseudo']
        ]);

        if ($isSuccess) {

            $sql = "SELECT textmessage, id_user FROM messages WHERE pseudo = :pseudo, id_user = :user_id";

            $request = $pdo->prepare($sql);
            $isSuccess = $request->execute();       
            
        
    } 





?>
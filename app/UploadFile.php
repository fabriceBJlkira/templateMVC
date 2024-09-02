<?php
namespace App;

class UploadFile
{
    /**
     * maka ilay fichier atao upload
     * 
     * @param mixed $file fichier efa avahana am anarany ohatra $_FILES['photos']
     * @return string
     */
    public static function makeUpload($file)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($file)) { 
            /**
             * tsy maintsy atao anaty dossier public an le react
             * ny lalana anaovana an ilay dossier uploads
             * @var string
             */
            $uploadDir = "../public/uploads/";
        
            // Check if the directory exists, if not, create it
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }
        
            $fileName = time().basename($file['name']);
            $filePath = $uploadDir . $fileName;
            
            if (move_uploaded_file($file['tmp_name'], $filePath)) {
                echo json_encode(['status' => 'success', 'message' => 'File uploaded successfully']);
                return $fileName;
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to upload file']);
                return '';
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
            return '';
        }
    }
}
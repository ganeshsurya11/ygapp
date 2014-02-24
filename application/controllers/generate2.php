<?php

class Generate2 extends CI_Controller
{

   public function safeUp()
{
    $handle = fopen('users.csv', "r");
    if (false !== $handle) {
        fgetcsv($handle, 1000); // Skip header row
        while (false !== ($row = fgetcsv($handle, 1000))) {
            $sql="insert into users(id,username,phone)values('".$row[0]."','".$row[1]."','".$row[2]."')";
			mysql_query($sql);
			/*$this->insert('users', array(
                'id' => $row[0], 
                'firstname' => $row[1],
				'email' => $row[2]
            ));*/
        }
        fclose($handle);
    }
}
}
?>
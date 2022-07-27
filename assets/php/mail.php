<?php
     
                if (isset($_POST['leads_sbmit_btn'])) {
                		$host = "premium167.web-hosting.com";
                		$username="cruiwbab_best_online_class_helper";
                		$password="y7oIKsIG)Vg@";
                		$db = "cruiwbab_best_online_class_helps";
                
                		$connect = new mysqli($host, $username, $password, $db);
                		if ($connect->connect_error) {
                				die("Connection failed: " . $connect->connect_error);
                		}
                
                		$cname = $_POST['Lead_Name'];
                		$email = $_POST['Lead_Email'];
                		$num = $_POST['Lead_Phone'];
                		$sub = $_POST['Lead_Subject'];
                		$msg = $_POST['Lead_Message'];
                
                		$sql = "INSERT INTO `Leads_table` (Name, Email, Phone, Subject, Message) VALUES ('".$cname."', '".$email."', '".$num."', '".$sub."', '".$msg."')";
                		if (mysqli_query($connect, $sql)) {
                		    mysqli_close($connect);
                		    
                			$hosta = "premium167.web-hosting.com";
                			$usernamea="cruiwbab_CRM_User";
                			$passworda="+P8yl:MmA2o";
                			$dba = "cruiwbab_Cruiser_CRM";
                
                			$connecta = new mysqli($hosta, $usernamea, $passworda, $dba);
                			if ($connecta->connect_error) {
                				die("Connection failed: " . $connecta->connect_error);
                			}
                			date_default_timezone_set("Asia/Karachi");
                			$date = date('F j, Y, g:i a');
                			$username = "From Google";
                            $lead_number = 0;
                			$lead_Numb = "";
                			$abbr = "BOCH";
                            $array = array();
                			$querya = "SELECT * FROM Lead_OCG ORDER BY ID DESC LIMIT 1";
                			$resulta = mysqli_query($connecta, $querya);
                			while ($row = mysqli_fetch_array($resulta)){
                				$array[] = $row;
                			}
                			$lead_number = $array[0]['Lead_numb'];
                
                			if (empty($lead_number)) {
                				$lead_number = 1000;
                				$lead_Numb = $abbr.'-'.$lead_number;
                			}else {
                				$lead_number = $lead_number + 1;
                				$lead_Numb = $abbr.'-'.$lead_number;
                			}
                
                
                			$client_name = $_POST['Lead_Name'];
                			$client_phone = $_POST['Lead_Phone'];
                			$client_email = $_POST['Lead_Email'];
                			$brand_select = "Best Online Class Help";
                			$team_select = "From PPC";
                			$description = $_POST['Lead_Message'];
                			
                			$queryaa = "INSERT INTO `Lead_OCG` (Lead_Code, Client_Name, Email_address, Phone_Number, website, Team, description, Created_at, Created_by, Lead_numb) VALUES ('$lead_Numb', '$client_name', '$client_email', '$client_phone', '$brand_select', '$team_select', '$description', '$date', '$username', '$lead_number')";
                		
                		    if(mysqli_query($connecta, $queryaa)){
                		        
                		        $hosta = "premium167.web-hosting.com";
                			$usernamea="cruiwbab_CRM_User";
                			$passworda="+P8yl:MmA2o";
                			$dba = "cruiwbab_Cruiser_CRM";
                
                			$connecta = new mysqli($hosta, $usernamea, $passworda, $dba);
                			if ($connecta->connect_error) {
                				die("Connection failed: " . $connecta->connect_error);
                			}
                			date_default_timezone_set("Asia/Karachi");
                			$date = date('F j, Y, g:i a');
                			$username = "From Google";
                            $lead_number = 0;
                			$lead_Numb = "";
                			$abbr = "BOCH";
                            $array = array();
                			$querya = "SELECT * FROM Lead_OCG ORDER BY ID DESC LIMIT 1";
                			$resulta = mysqli_query($connecta, $querya);
                			while ($row = mysqli_fetch_array($resulta)){
                				$array[] = $row;
                			}
                			$lead_number = $array[0]['Lead_numb'];
                
                			if (empty($lead_number)) {
                				$lead_number = 1000;
                				$lead_Numb = $abbr.'-'.$lead_number;
                			}else {
                				$lead_number = $lead_number + 1;
                				$lead_Numb = $abbr.'-'.$lead_number;
                			}
                
                
                			$client_name = $_POST['Lead_Name'];
                			$client_phone = $_POST['Lead_Phone'];
                			$client_email = $_POST['Lead_Email'];
                			$brand_select = "Hire Course help";
                			$team_select = "From PPC";
                			$description = $_POST['Lead_Message'];
                			
                			$queryaa = "INSERT INTO `Lead_OCG` (Lead_Code, Client_Name, Email_address, Phone_Number, website, Team, description, Created_at, Created_by, Lead_numb) VALUES ('$lead_Numb', '$client_name', '$client_email', '$client_phone', '$brand_select', '$team_select', '$description', '$date', '$username', '$lead_number')";
                		
                		    if(mysqli_query($connecta, $queryaa)){
                		        $ClientName = $_POST["Lead_Name"];
        $PhoneNumber = $_POST["Lead_Phone"];
        $EmailAddress = $_POST["Lead_Email"];
        $SelectedBrand = "Best Online Class Help";
        $LeadComments = $_POST["Lead_Message"];
        $UserName = "From PPC";
        
        $url = "https://mmactd.com/assets/php/APIs/api-insert-data.php"; 
        $client = curl_init($url);
        $form_data = array(
                                'ClientName'  => $ClientName,
                                'PhoneNumber' => $PhoneNumber,
                                'EmailAddress'  => $EmailAddress,
                                'SelectedBrand' => $SelectedBrand,
                                'LeadComments'  => $LeadComments,
                                'UserName' => $UserName
                            );
        curl_setopt($client, CURLOPT_POST, true);
                    
        curl_setopt($client, CURLOPT_POSTFIELDS, json_encode($form_data));
                    
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
                    
        $response = curl_exec($client);
                    
        curl_close($client);
        
                		        header("location: /ASAP-Contact-You.php");
                                exit();
                		    } else{
                		        echo "ERROR: Could not able to execute " .$queryaa. "<br>" . mysqli_error($connecta);
                		    }
                		} else {
                			echo "ERROR: Could not able to execute " .$sql. "<br>" . mysqli_error($connect);
                		}
                
            
                	} else {
                		header("location: /index.php?error=Not-Clicked");
                        exit();
                	}  
?>
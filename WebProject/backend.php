<?php
session_start();
if (isset($_FILES['file']['name'])) {
    if (0 < $_FILES['file']['error']) {
        echo '<span style="color:red;">Error during file upload ' . $_FILES['file']['error'] . '</span>';
    } else {
        $curl = curl_init();
        $img_file = $_FILES['file']['name'];
        $img_data = file_get_contents($img_file);
        $data = json_encode(array("file" => base64_encode($img_data)));
        
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.aiforthai.in.th/thaifood",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
                "apikey: iLunGSAq17uuj37tzA7KAQ2O6LMfxGdK"
            )
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            // echo $response;
            $test = json_decode($response, true);
            // print_r($test);
            foreach ($test as $key => $value) {
        
                if (is_array($value)) {
                    //print_r($value);
                    foreach ($value[0] as $key => $value) {
                        print_r($key . ': ' . $value . ',');
                    }
                }
            }
        }
        
        curl_close($curl);
        
    }
} else {
    echo '<span style="color:red;">Please choose a file</span>';
}
echo nl2br("\n");

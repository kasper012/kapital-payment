<?php
include 'connection.php';

    #REQUEST
    
    
	function xmlRequest($request)
    {
      $url = "https://e-commerce.kapitalbank.az:5443/exec";
      $keyFile = "test.key";
      $certFile = "test.crt";
      $ch = curl_init();
          $options = array(
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_SSL_VERIFYHOST => false,
          CURLOPT_SSL_VERIFYPEER => false,
          CURLOPT_USERAGENT => 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)',
          CURLOPT_URL => $url ,
          CURLOPT_SSLCERT => $certFile ,
          CURLOPT_SSLKEY => $keyFile ,
          CURLOPT_POSTFIELDS => $request,
          CURLOPT_POST => true
          );
          curl_setopt_array($ch , $options);
          $output = curl_exec($ch);
          $array_data = json_decode(json_encode(simplexml_load_string($output)), true);
      //print_r($array_data['Response']['Order']);
      
      return $array_data;

     }

     $amount = $_POST['amount'];
     $desc = $_POST['desc'];

     $request = "
     <TKKPG>
      <Request>
              <Operation>CreateOrder</Operation>
              <Language>az</Language>
              <Order>
                    <OrderType>Purchase</OrderType>
                    <Merchant>E1000010</Merchant>
                    <Amount>" .$_POST['amount']*100 ."</Amount>
                    <Currency>944</Currency>
                    <Description>".$_POST['desc']."</Description>
                    <ApproveURL>http://kasper012.beget.tech/approve.php</ApproveURL>
                    <CancelURL>http://kasper012.beget.tech/cancel.php</CancelURL>
                    <DeclineURL>http://kasper012.beget.tech/decline.php</DeclineURL>
              </Order>
      </Request>
	</TKKPG>";
     $result = xmlRequest($request);
     
    $orderID = $result['Response']['Order']['OrderID'];
    $sessionID = $result['Response']['Order']['SessionID'];
    $url = $result['Response']['Order']['URL'];
      

    $resultUrl = "{$url}" . "?SessionID={$sessionID}&OrderID={$orderID}";

    $current_datetime = date("Y/m/d H:i:sa"); 
    // INSERTING DATA TO DATABASE

    
     $sql = "INSERT INTO purchases (  order_id, session_id, order_desc, card_number, date, order_status, response_description, amount)
        VALUES ( '$orderID', '$sessionID','' ,'','$current_datetime','','','$amount')";
    
    if ($conn->query($sql) === TRUE) {
        # Redirect
         header("Location: {$resultUrl}");
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close(); 
      

?>
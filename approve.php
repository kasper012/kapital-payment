<?php

include 'connection.php';

#$response = print_r(array_slice($_POST, 0));
//echo $_POST[xmlmsg];




echo '<br/>';
echo '<br/>';

$xml = @simplexml_load_string($_POST[xmlmsg]);
//print_r($xmlToArray);
echo '<br/>';
$xmlmsgs = @simplexml_load_string(base64_decode($_REQUEST['xmlmsg']));
$data = (json_decode(
            json_encode(
                (array)$xml
            ),
            false
        ));
        $xmlmsg = new SimpleXMLElement($_REQUEST['xmlmsg']);
        
$data = (array)$xmlmsg;
print_R($data);

echo '<br/>';
echo '<br/>';
foreach((array)$xmlmsg[date] as $orderDate) {
};
foreach((array)$xmlmsg->OrderID as $orderID) {
};
foreach((array)$xmlmsg->SessionID as $sessionID) {
};
foreach((array)$xmlmsg->ResponseDescription as $responseDescription) {
};
foreach((array)$xmlmsg->PurchaseAmountScr as $amount) {
};
foreach((array)$xmlmsg->OrderStatus as $orderStatus) {
};
foreach((array)$xmlmsg->OrderDescription as $orderDescription) {
};
foreach((array)$xmlmsg->PAN as $pan) {
};



echo '<br/>';
echo "Order date";
echo '<br/>';
echo $orderDate;
echo '<br/>';
echo "------";

echo '<br/>';
echo "Order ID:";
echo '<br/>';
echo $orderID;
echo '<br/>';
echo "------";

echo '<br/>';
echo "Session ID:";
echo '<br/>';
echo $sessionID;
echo '<br/>';
echo "------";


echo '<br/>';
echo "PAN:";
echo '<br/>';
echo $pan;
echo '<br/>';
echo "------";


echo '<br/>';
echo "Order Description:";
echo '<br/>';
echo $orderDescription;
echo '<br/>';
echo "------";


echo '<br/>';
echo "Amount:";
echo '<br/>';
echo $amount;
echo '<br/>';
echo "------";

echo '<br/>';
echo "OrderStatus:";
echo '<br/>';
echo $orderStatus;
echo '<br/>';
echo "------";


echo '<br/>';
echo "response_description:";
echo '<br/>';
echo $responseDescription;
echo '<br/>';
echo "------";
/*
//print_r($xmlToArray["@attributes"]);

*/
    // INSERTING DATA TO DATABASE

    
     $sql = "UPDATE purchases SET 
         session_id='$sessionID', 
         order_desc='$orderDescription', 
         card_number='$pan', 
         order_status='$orderStatus', 
         response_description='$responseDescription', 
         amount='$amount'
         WHERE order_id=$orderID
";
    
    if ($conn->query($sql) === TRUE) {
        echo "
            <!DOCTYPE html>
            <html>
            <head>
            
                <title>Document</title>
            </head>
            <body>
                <script>
                    window.location.replace('/index.php');
                </script>
            </body>
            </html>
        ";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close(); 
        heaeder('Location: /index.php');





<?php
if( isset($_POST) ){

    $postData = $_POST;
    $mailgun = sendMailgun($postData);

    if($mailgun) {
    echo "Great success.";
    ChromePhp::log('yar great sucess');
  } else {
    echo "Mailgun did not connect properly.";
    ChromePhp::log('yar mailgun did not connect properly');
  }
}

function sendMailgun($data) {

  $api_key = 'key-f7acafb3e383ad74d6ebae41b0279ab4';
  // $api_domain = 'sandbox609bf34abd6640728a1f5fdb87ea800c.mailgun.org';
  $api_domain = 'millsvalue.com';

 
  $send_to = 'cam.mills@millsvalue.com';

    // sumbission data
        $ipaddress = $_SERVER['REMOTE_ADDR'];
        $date = date('d/m/Y');
        $time = date('H:i:s');

    // form data
        $postcontent = $data['data'];
        $reply = $data['senderAddress'];  

  $messageBody = "<p>You have received a new message from the contact form on your website.</p>
                {$postcontent}
                <p>This message was sent from the IP Address: {$ipaddress} on {$date} at {$time}</p>";

  $config = array();
  $config['api_key'] = $api_key;
  $config['api_url'] = 'https://api.mailgun.net/v2/'.$api_domain.'/messages';

  $message = array();
  $message['from'] = $reply;
  $message['to'] = $send_to;
  $message['h:Reply-To'] = $reply;
  $message['subject'] = "New Message from your Mailgun Contact Form";
  $message['html'] = $messageBody;

  $curl = curl_init();

  curl_setopt($curl, CURLOPT_URL, $config['api_url']);
  curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
  curl_setopt($curl, CURLOPT_USERPWD, "api:{$config['api_key']}");
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($curl, CURLOPT_POST, true); 
  curl_setopt($curl, CURLOPT_POSTFIELDS,$message);

  $result = curl_exec($curl);
  curl_close($curl);
  return $result;
}
?>


		<?php
			 $to = "oyekanmikhadijat@gmail.com";
			 $name = $_POST['fullname'];
             $email= $_POST['email'];
			  $phone= $_POST['phone'];
			  $gender= $_POST['gender'];
			  $level= $_POST['level'];
			  $employment= $_POST['employmwnt'];
			  $history= $_POST['history'];
			  $maybe= $_POST['maybe'];
			  $training= $_POST['training'];
			  $course= $_POST['course'];
			  $pbag= $_POST['pbag'];
			  $hbag= $_POST['hbag'];
			  $scbag= $_POST['scbag'];
			  $sbag= $_POST['sbag'];
			  $lbag= $_POST['lbag'];
			  $s= $_POST['s'];
			  $p= $_POST['p'];
			  $all= $_POST['all'];
			  $headers = 'From: '.$email . "\r\n";


              $body = "name : ".$name. "\r\n" .
			          "email : ".$email. "\r\n" .
					  "Phone : ".$phone. "\r\n" .
    		          "name : ".$name. "\r\n" .
    		          "gender : " .$gender "\r\n" .
    		          "level : ".$level. "\r\n" .
    		          "employment : ".$employment. "\r\n" .
					  "history : ".$history. "\r\n" .
					  "maybe : ".$maybe. "\r\n" .
					  "training : ".$training. "\r\n" .
					  "course : ".$course. "\r\n" .
					  "pbag : ".$pbag. "\r\n" .
					  "hbag : ".$hbag. "\r\n" .
					  "scbag : ".$scbag. "\r\n" .
					  "sbag : ".$sbag. "\r\n" .
					  "lbag : ".$lbag. "\r\n" .
					  "sourvenir : ".$s. "\r\n" .
					  "p : ".$p. "\r\n" .
					  "All : ".$all. "\r\n" .
				function filter_email_header($form_field) { 
					return preg_replace('/[nr|!/<>^$%*&]+/','',$form_field);
				}
             $email  = filter_email_header($email);

			 $sent = mail('oyekanmikhadijat@gmail.com', $body, $headers)
    
             if(mail($to, $body , $headers)){
        ?><html>
			<head>
				<title>Thank You</title>
        	</head>
        	<body>
        		<h1>Thank You</h1>
				<p>Your information has been Submitted.</p>
        	</body>
        </html>
       <?php
       } else {
          ?><html>
          		<head>
          			<title>Something went wrong<title>
          		</head>
          		<body>
          			<h1>Something went wrong</h1>
          			<p>We could not send your information. Please try again.</p>
          		</body>
          </html>
          <?php
        }

     ?>
   
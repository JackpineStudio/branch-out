<html>
<head>
<link href="css/style.css" rel="stylesheet">
<meta charset="UTF-8">
<link href='http://fonts.googleapis.com/css?family=Lato:400,900' rel='stylesheet' type='text/css'>
<meta name="description" content="Branch Out Bakery. Delicious vegan &amp; gluten free baked goodies, delivered by bicycle. Based in Ottawa, Canada.">
<meta name="keywords"  content="Branch out bakery, branchoutbakery, bicycle, vegetarian, ottawa, gluten-free, vegan, cookies, squares, farmers market, bike, local, baked goods, delicious, food, order, chocolate chip, date square, glebe, trish ">
<link rel="shortcut icon" href="favicon.ico"/>
<meta name="author" content="Jackpine">
<meta name="handheldfriendly" content="true">
<meta name="mobileoptimized" content="320">
<meta name="viewport" content="width=device-width,initial-scale=1,target-densitydpi=device-dpi">

<meta charset="UTF-8">

<title>Branch Out Bakery</title>
</head>

<body>
<div class="wrapper">
    <header>      
        <div class="header">
            <h1>Branch Out Bakery</h1>
            <div class="logo"><img width="300" src="images/branch-out-logo.png" alt="Branch Out Logo"></div>
            <div class="social">
                <a href="https://twitter.com/BranchOutBakery" target="_blank"><img src="images/twitter.png"></a> 
                <a href="https://www.facebook.com/BranchOutBakery?fref=ts" target="_blank"><img src="images/facebook.png"></a> 
                <a href="mailto:branchoutbakery@gmail.com" target="_blank"><img src="images/email.png"></a>
            </div>
        </div>
    </header>
    <footer>
    <div class="header slide" >
        <h3 >Delicious vegan &amp; gluten free baked goodies, delivered by bicycle.</h3>
    </div>
    <div class="content" id="container">

        <h2>Order</h2>
        <p><em>Please fill out the form below to order our baked goods.</em></p>
                
            <form method="post" action="index.php#container">
                        <fieldset>
                            <legend>Contact info</legend>
                            <label  for="Fname">Name</label><input id="Fname" name="Fname" type="text"></input>
                            <label  for="Uemail">Email</label><input id="email" name="Uemail" type="text"></input>
                            <label  for="phone">Phone</label><input id="phone" name="phone" type="text"></input>
                            <label  for="address">Address</label><input id="address" name="address" type="text"></input>

                        </fieldset>
                        <fieldset>
                            <legend>Your order</legend>
                            <label for="flavour">Flavour</label>
                            <select id="flavour" name="flavour">
                                <option>Chocolate Chip</option>
                                <option>Not your grandma's</option>
                                <option>After eight</option>
                                <option>Garam in the house</option>
                            </select>

                            <label for="quantity">Quantity:</label>
                            <select id="quantity" name="quantity"  type="text">
                                <option>Half dozen</option>
                                <option>Dozen</option>
                                <option>Two Dozen</option>
                                <option>Other - Please specify in the message section</option>
                            </select>

                           

                            <label for="message" >Message</label>
                            <textarea id="message" name="message" type="text" cols="30" rows="5"></textarea>

                            <input type="submit" value="Send an order" name="submit" id="submit" class="button" >
                        </fieldset>
                    </form>
                    <?php
                            define('BR', '<br />');

                            $Fname = $_POST['Fname'];
                            $Uemail = $_POST['Uemail'];
                            $phone = $_POST['phone'];
                            $address = $_POST['address'];

                            $flavour = $_POST['flavour'];
                            $quantity = $_POST['quantity'];
                            $message = $_POST['message'];

                            //Assemble headers
                            $headers = 'MIME-Version: 1.0' . "\r\n";
                            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                            $headers .= "From: $Fname <$Uemail>" . "\r\n";

                            $msg = '' . BR;
                            $msg .= '<b>Contact info</b>';
                            $msg .= 'Name: ' . $Fname . BR;
                            $msg .= 'Email: ' . $Uemail . BR;
                            $msg .= 'Phone: ' . $phone . BR . BR;
                            $msg .= '<b>Inqury info</b>' . BR;
                            $msg .= 'Flavour: ' . $flavour . BR;
                            $msg .= 'Quantity: ' . $quantity . BR;
                            $msg .= 'Message: ' . $message . BR;

                            //send via PHP's mail() function
                            $mailsent = @mail('branchoutbakery@gmail.com', 'Web Message', $msg, $headers);
                            // $mailsent = @mail('taulant.sulko@gmail.com', 'Web Message', $msg, $headers);

                            // if ($mailsent) {
                            //     echo 'Your message was successfully sent!';
                            // } else {
                            //     echo 'There was an error sending you message, please try again later!';
                            // }
                    ?>
  
    </div>  
    
       
   
    </footer>
</div>
</body>
</html>

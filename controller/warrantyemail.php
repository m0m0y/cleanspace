<?php
class mailTemplate{
    public function warranty($name, $email, $mobile_num, $phone_num, $address, $item, $purchase_form, $purchase_price, $order_number, $distributor, $purchase_date, $serial_num, $aware, $factors, $packaging, $satisfaction, $message) {
        $mail ='
        <!DOCTYPE html>
        <html>
            <header>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>CleanSpace Warranty Register</title>
            </header>
        
            <body>
                <table width="100%" cellpadding="0" cellspacing="0" style="min-width:100%;">
        
                    <center>
                        <table class="container500" cellpadding="0" cellspacing="0" border="0" width="100%" style="width:calc(100%);max-width:calc(620px);margin: 0 auto;">
                            <tr>
                                <td width="100%" style="text-align: left;">
            
                                <table width="100%" cellpadding="0" cellspacing="0" style="min-width:100%;">
                                    <tr>
                                        <td style="background-color:#FFFFFF;color:#000000;padding:20px;">
                                            <center>
                                                <img alt="CleanSpace" src="https://senz-medical.com/cleanspace_dev/assets/img/logo.png" width="150" style="display: block;" />
                                            </center>
                                        </td>
                                    </tr>
                                </table>
            
                                <table width="100%" cellpadding="0" cellspacing="0" style="min-width:100%;">
                                    <tr>
                                        <td style="padding:20px;background-color:#F8F7F0;">
            
                                                <table width="100%" cellpadding="0" cellspacing="0" style="min-width:100%;">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;line-height:30px;text-align:left;">Name:</th>
                                                        <th scope="col" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;line-height:30px;text-align:left;">'.$name.'</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;">Email:</td>
                                                        <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;">'.$email.'</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;">Phone / Mobile:</td>
                                                        <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;">'.$phone_num.' / '.$mobile_num.'</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;">Address:</td>
                                                        <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;">'.$address.'</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;">Product Name:</td>
                                                        <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;">'.$item.'</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;">Purchased From:</td>
                                                        <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;">'.$purchase_form.'</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;">Product Price:</td>
                                                        <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;">Php '.number_format($purchase_price,2).'</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;">Order Number:</td>
                                                        <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;">'.$order_number.'</td>
                                                    </tr>
            
                                                    <tr>
                                                        <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;">Distributors:</td>
                                                        <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;">'.$distributor.'</td>
                                                    </tr>
            
            
                                                    <tr>
                                                        <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;">Purchased Date:</td>
                                                        <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;">'.$purchase_date.'</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;">Serial Number:</td>
                                                        <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;">'.$serial_num.'</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                        </td>
                                    </tr>
                                </table>
            
                                <table width="100%" cellpadding="0" cellspacing="0" style="min-width:100%;">
                                    <tr>
                                        <td style="padding:20px;background-color:#F8F7F0;">
            
                                                <table width="100%" cellpadding="0" cellspacing="0" style="min-width:100%;">
                                                    <tbody>
                                                    <tr>
                                                        <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;"><b>How did you first become aware of Products?</b></td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;">'.$aware.'</td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;"><b>What Factor(s) Influenced you to purchase CleanSpace Products</b></td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;">'.$factors.'</td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;"><b>How would you rate the packaging of Products?</b></td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;">'.$packaging.'</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;"><b>Overall how satisfied are you with the products and services that we provide?</b></td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;">'.$satisfaction.'</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 16px; line-height:20px;"><b>Comments: </b>'.$message.'</td>
                                                    </tr>
                                                    
                                                    </tbody>
                                                </table>
                                        </td>
                                    </tr>
                                </table>
        
                                </td>
                            </tr>
                        </table>
        
                        <table class="container500" cellpadding="0" cellspacing="0" border="0" width="100%" style="width:calc(100%);max-width:calc(620px);margin: 0 auto;">
                            <tr>
                                <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 12px; line-height:20px;">
                                    <p>200 C. Raymundo Avenue Caniogan, Pasig City 1606 Philippines.</p>
                                </td>
                                <td valign="top" style="padding:5px; font-family: Arial,sans-serif; font-size: 12px; line-height:20px;">
                                    <p>© Progressive Medical Corporation 2021</p>
                                </td>
                            </tr>
                        </table>
                    </center>
                </table>
            </body>
        </html>
        ';

        return $mail;
    }
} 

?>
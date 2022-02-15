<?php 
require("assets/common/header.php"); 
require("controller/captcha.php");
?>

    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
	    <div class="container d-flex align-items-center justify-content-between">
			<?php require("assets/common/navbar.php") ?>
	    </div>
	</header>

	<section id="warranty">
		<div class="container">
	      <div class="row justify-content-between">
	        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center animated">
	        	<div data-aos="zoom-out" class="hero_text">
		            <h1><span>WARRANTY</span></h1>
	            </div>
	        </div>
	        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos-delay="300">
	          <img src="assets/img/" class="img-fluid animated" alt="">
	        </div>
	      </div>
	    </div>
	</section>

    <section id="active" class="details">
        <div class="container">
            <div class="content">
                <div class="warranty-registration-form">
                    <div class="section-title">
                        <h2 class="uppercase">CleanSpace</h2>
                        <p>Warranty Registration</p>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-sm-12 form-group">
                            <h3>Contact Information</h3>
                            <input type="text" name="c_name" id="name" class="form-control mt-3" placeholder="Your Full Name*" onkeyup="txtvalidator(this)" required>
                            <span class="error" id="c_name"></span>

                            <input type="email" id="email" class="form-control mt-3" name="c_email" placeholder="Email Address*" onkeyup="txtvalidator(this)" required>
                            <span class="error" id="c_email"></span>

                            <input type="email" id="confirm_email" class="form-control mt-3" name="c_confirm_email" placeholder="Confirm Email*" onkeyup="txtvalidator(this)" required>
                            <span class="error" id="c_confirm_email"></span>

                            <input type="text" id="complete_add" class="form-control mt-3" name="c_address" placeholder="Complete Address*" onkeyup="txtvalidator(this)" required>
                            <span class="error" id="c_address"></span>

                            <input type="number" id="mobile_num" class="form-control mt-3" name="c_mobile_num" placeholder="Mobile Number*" onkeyup="txtvalidator(this)"  required>
                            <span class="error" id="c_mobile_num"></span>

                            <input type="number" class="form-control mt-3" id="phone_num" name="c_phone_num" placeholder="Phone Number">
                        </div>

                        <div class="col-md-6 col-sm-12 form-group mt-3 mt-md-0">
                            <h3>Product Information</h3>
                            <input type="text" id="product_item" class="form-control mt-3" name="c_item" placeholder="Product / Item*" onkeyup="txtvalidator(this)" required>
                            <span class="error" id="c_item"></span>

                            <input type="text" id="purchase_form" class="form-control mt-3" name="c_purchase_form" placeholder="Purchase Form*" onkeyup="txtvalidator(this)" required>
                            <span class="error" id="c_purchase_form"></span>

                            <input type="number" id="purchase_price" class="form-control mt-3" name="c_purchase_price" placeholder="Purchase Price*" onkeyup="txtvalidator(this)" required>
                            <span class="error" id="c_purchase_price"></span>

                            <div class="row mt-3">
                                <div class="col-md-6 form-group">
                                    <input type="number" id="order_num" class="form-control" name="c_order_number" placeholder="Order No.*" onkeyup="txtvalidator(this)" required>
                                    <span class="error" id="c_order_number"></span>
                                </div>

                                <div class="col-md-6 form-group mt-md-0">
                                    <select name="c_distributor" id="distributor" class="form-select" onkeyup="txtvalidator(this)" required>
                                        <option value="" disabled selected>Distributor*</option>
                                        <option value="The Medical Shop">The Medical Shop</option>
                                        <option value="Panamed Philippines Inc.">Panamed Philippines Inc.</option>
                                        <option value="Inmed Corporation">Inmed Corporation</option>
                                        <option value="Shopee">Shopee</option>
                                        <option value="Lazada">Lazada</option>
                                    </select>
                                    <span class="error" id="c_distributor"></span>
                                </div>
                            </div>

                            <input type="date" id="purchase_date" class="form-control mt-3" name="c_purchase_date" placeholder="Purchase Date*" required onkeyup="txtvalidator(this)">
                            <span class="error" id="c_purchase_date"></span>

                            <input type="text" id="serial_num" class="form-control mt-3" name="c_serial_num" placeholder="Serial Number*" required onkeyup="txtvalidator(this)">
                            <span class="error" id="c_serial_num"></span>
                        </div>
                    </div>

                    <div class="row pt-5"> 
                        <div class="col-md-6 col-sm-12 form-group mt-3 mt-md-0">
                            <p class="title">How did you first become aware of these products</p>
                        
                            <input class="form-check-input rad" name="radio" type="radio" value="Website" checked>
                            <label class="form-check-label">
                                Website
                            </label>
                            
                            <br/><br/>

                            <input class="form-check-input rad" name="radio" type="radio" value="Social Media">
                            <label class="form-check-label">
                                Social Media
                            </label>
                            
                            <br/><br/>
                            
                            <input class="form-check-input rad" name="radio" type="radio" value="Friend / Relative">
                            <label class="form-check-label">
                                Friend / Relative
                            </label>
                            
                            <br/><br/>
                            
                            <input class="form-check-input rad" name="radio" type="radio" value="Google">
                            <label class="form-check-label">
                                Google
                            </label>

                            <br/><br/>

                            <input class="form-check-input others" name="radio" type="radio" value="Others">
                            <label class="form-check-label">
                                Others
                            </label>


                            <div id="field">
                                <input type="text" id="others" class="form-control mt-3" name="other_input" placeholder="Please Specify Here.. " onkeyup="txtvalidator(this)" required>
                                <span class="error" id="other_input"></span>
                            </div>

                            <br/><br/>

                            <p class="title">What Factor(s) Influenced you to purchase CleanSpace Products?</p>
                            <div class="input-group">
                                <label class="input-group-text">Options</label>
                                <select name="c_factors" id="factors" class="form-select" onkeyup="txtvalidator(this)" required>
                                    <option value="" disabled selected>Choose factors*</option>
                                    <option value="Flyers">Flyers</option>
                                    <option value="Brochure">Brochure</option>
                                    <option value="Internet">Internet</option>
                                    <option value="Low Price / on Sale">Low Price / on Sale</option>
                                    <option value="Bonus Item / offer with Product">Bonus Item / offer with Product</option>
                                    <option value="Style Appearance">Style Appearance</option>
                                    <option value="Previous Customer">Previous Customer</option>
                                    <option value="Features of CleanSpace Products">Features of CleanSpace Products</option>
                                    <option value="Field that I'm in">Field that I'm in</option>
                                </select>
                            </div>
                            <span class="error" id="c_factors"></span>
                            
                            <br/>

                            <?php echo "Please type <b>".$rand."</b> in the field:"; ?>
                            <input type="hidden" class="form-control" name="captcha_validate" id="captcha_validate" value="<?php echo $rand; ?>" readonly>
                            <input type="text" class="form-control" name="c_captcha" id="captcha" placeholder="Captcha*" onkeyup="txtvalidator(this)">
                            <span class="error" id="c_captcha"></span>
                        </div>

                        <div class="col-md-6 col-sm-12 form-group mt-3 mt-md-0">
                            <p class="title">How would you rate the packaging of Products?</p>
                        
                            <input class="form-check-input" id="packaging" name="packaging" type="radio" value="Good" checked>
                            <label class="form-check-label">
                                Good
                            </label>
                            
                            <br/><br/>

                            <input class="form-check-input" id="packaging" name="packaging" type="radio" value="Poor">
                            <label class="form-check-label">
                                Poor
                            </label>
                            
                            <br/><br/>

                            <p class="title">Overall how satisfied are you with the products and services that we provide:</p>

                            <div class="input-group mb-3">
                                <div class="star-widget">
                                    <input type="radio" class="star-rating" name="satisfaction" id="rate-5" value="5-star">
                                    <label for="rate-5" class="fas fa-star"></label>
                                    <input type="radio" class="star-rating"  name="satisfaction" id="rate-4" value="4-star" checked>
                                    <label for="rate-4" class="fas fa-star"></label>
                                    <input type="radio" class="star-rating"  name="satisfaction" id="rate-3" value="3-star">
                                    <label for="rate-3" class="fas fa-star"></label>
                                    <input type="radio" class="star-rating"  name="satisfaction" id="rate-2" value="2-star">
                                    <label for="rate-2" class="fas fa-star"></label>
                                    <input type="radio" class="star-rating"  name="satisfaction" id="rate-1" value="1-star">
                                    <label for="rate-1" class="fas fa-star"></label>
                                </div>
                            </div>


                            <p class="title">Comments:</p>
                            <textarea class="form-control" name="c_message" rows="5" id="message" placeholder="Message" onkeyup="txtvalidator(this)"></textarea>
                            <span class="error" id="c_message"></span>
                        </div>
                    </div>

                    <br/>

                    <div id="sendingValidation"></div>

                    <br/>

                        <input type="submit" class="btn btn-md btn-primary" name="send" value="Submit" id="warranty_send">              
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <hr class="solid"></hr>
    </div>

    <section id="active" class="details">
        <div class="container">
            <div class="content" data-aos="fade-right">
                <div class="pt-4">
                    <h5>CleanSpace Products are covered by a limited warranty.</h5>
                    <p>To report a fault with a CleanSpace product please complete our Warranty Returns form and a CleanSpace customer service representative will contact you.</p>
                    <h5>CleanSpace Warranty Policy</h5>
                    <p>The CleanSpace Technology Pty Ltd warranty covers defects in materials and workmanship during the warranty period in every CleanSpace product you purchase, provided that the products has been used, cleaned and maintained in accordance with the CleanSpace instructions and CleanSpace’s recommendations.</p>
                    <p>The Company has the right to reject any Warranty claim made by a Purchaser pursuant to this Warranty where the Purchaser is unable to verify that the claim is made within the warranty period by providing proof of purchase documentation for the Product from an authorised distributor or reseller of CleanSpace, which clearly shows the date and place of purchase.</p>
                    <p>CleanSpace’s warranty period commences from the date of purchase as determined by the date on the packing slip or invoice. This warranty does not include consumable parts, such as filters and face masks, which must be replaced regularly by the user. Consumable parts are warranted up to the point of use, provided they have been stored correctly and are within their expiry date. CleanSpace may change the availability of limited warranties, at our discretion, but any changes we make will not be applied retrospectively. Please note that we do not provide warranty coverage for:</p>
                    <ul>
                        <li><i class="bi bi-check"></i> Problems that result from external causes such as accident, abuse or misuse</li>
                        <li><i class="bi bi-check"></i> Usage that is not in accordance with the CleanSpace product instructions</li>
                        <li><i class="bi bi-check"></i> Products with missing or altered serial numbers</li>
                        <li><i class="bi bi-check"></i> Products which have had their housings opened or otherwise tampered with</li>
                        <li><i class="bi bi-check"></i> Problems caused by using third party accessories, parts or components</li>
                    </ul>
                    <p>CleanSpace Technology Pty Ltd does not warrant that its products will operate without interruption or will be error-free, or that all errors may be corrected. CleanSpace’s sole liability and your sole remedy, for breach of the limited warranty will be repair or replacement of the product, at CleanSpace’s option, or if neither of the foregoing are reasonably available, a refund of the amount you paid less amounts attributed to your prior use.</p>
                    <p>
                    <p>Except as expressly set forth in the license agreement, CleanSpace makes no warranties, whether express, implied, statutory or otherwise, with respect to its products. CleanSpace and its suppliers hereby specifically disclaim all other express, statutory and implied warranties and conditions, including the implied warranties of merchantability, fitness for a particular purpose, non-infringement, and the implied condition of satisfactory quality.</p>
                    <p>Some jurisdictions do not allow a limitation on implied warranties, and so the foregoing disclaimer may not apply to you. In any event, any implied warranties that may exist under the laws of your jurisdiction are limited to the year period, specified in the user manual under product warranty, set forth in this limited warranty. </p>
                    <p>Any claim under this limited warranty must be made by contacting CleanSpace by phone or in writing by mail or email to the address below within the warranty period, specified in the user manual, from the date of purchase of the product. You must provide proof of purchase verifying that the claim is made within the warranty period. If CleanSpace requests, you must ship the allegedly defective product freight pre-paid to the address provided to you by the CleanSpace claim representative.</p>
                    <p>This warranty is given by:</p>
                    <p> 
                    CleanSpace Technology Pty Ltd<br/>
                    (ABN 24 146 453 554)<br/>
                    P | +63 (2) 8656 6888<br/>
                    A | 200 C. Raymundo Avenue Caniogan, Pasig City 1606 Philippines.<br/>
                    E | info@pmc.ph<br/>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        const form1 = document.getElementById("my-form-1");
        const outputDisplay1 = document.getElementById("form-data-display-1");

        const form2 = document.getElementById("my-form-2");
        const outputDisplay2 = document.getElementById("form-data-display-2");

        const noDataWarning = "No data selected";

        const onSubmit = ({ formElem, displayElem }) => (event) => {
        event.preventDefault();
        const data = Array.from(new FormData(formElem));
        const serializedData = data
            .map(([fieldName, value]) => `${fieldName} = ${value}`)
            .join("\n");
        displayElem.insertAdjacentText(
            "beforeend",
            !!data.length ? serializedData + "\n" : noDataWarning + "\n"
        );
        };

        form1.addEventListener(
        "submit",
        onSubmit({ formElem: form1, displayElem: outputDisplay1 })
        );

        form2.addEventListener(
        "submit",
        onSubmit({ formElem: form2, displayElem: outputDisplay2 })
        );
    </script>

<?php require("assets/common/contact.php"); ?>
<?php require("assets/common/footer.php"); ?>


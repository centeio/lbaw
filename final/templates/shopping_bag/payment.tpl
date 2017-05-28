{include file='common/header.tpl'}

<div id="CheckoutPayment" class="container wrapper">
    <div id="Steps" class="row form-group">
        <div class="col-xs-12">
            <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                <li class="checked"><a href="checkout_basket.php">
                    <h4 class="list-group-item-heading"><i class="fa fa-shopping-bag" aria-hidden="true"></i></h4>
                    <p class="list-group-item-text">Shopping Cart</p>
                </a></li>
                <li class="active"><a href="checkout_payment.php">
                    <h4 class="list-group-item-heading"><i class="fa fa-credit-card-alt" aria-hidden="true"></i></h4>
                    <p class="list-group-item-text">Payment</p>
                </a></li>
                <li class="disabled"><a href="receipt.php">
                    <h4 class="list-group-item-heading"><i class="fa fa-check" aria-hidden="true"></i></h4>
                    <p class="list-group-item-text">Thank you!</p>
                </a></li>
            </ul>
        </div>
    </div> 

    <div class="row">
        <form id="payment" class="form-horizontal" method="post" action="receipt.php" onsubmit="return validateForm()">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                <!--REVIEW ORDER-->
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Review Order
                    </div>
                    <div class="panel-body">
                        {foreach $products as $product}
                        <div class="form-group">
                            <div class="col-sm-3 col-xs-3">
                                <img class="img-responsive" src="{$BASE_URL}images/thumbnails/{$product.image}" />
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="col-xs-12">{$product.name}</div>
                                <div class="col-xs-12"><small>Quantity:<span> {$product.quantity}</span></small></div>
                            </div>
                            <div class="col-sm-3 col-xs-3 text-right">
                                <span>{$product.total}€</span>
                            </div>
                        </div>
                        <div class="form-group"><hr /></div>
                        {/foreach}
                        <div class="form-group">
                            <div class="col-xs-12">
                                <strong>Subtotal</strong>
                                <div class="pull-right"><span>{$subTotal}€</span></div>
                            </div>
                            <div class="col-xs-12">
                                <small>Shipping</small>
                                <div class="pull-right"><span>{$shipping}€</span></div>
                            </div>
                        </div>
                        <div class="form-group"><hr /></div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <strong>Order Total</strong>
                                <div class="pull-right"><span>{$total}€</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--REVIEW ORDER END-->
                <!--CREDIT CART PAYMENT-->
                <div class="panel panel-info">
                    <div class="panel-heading"><span><i class="fa fa-lock" aria-hidden="true"></i></span>Secure Payment</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="col-md-12"><strong>Card Type:</strong></div>
                            <div class="col-md-12">
                                <select id="CreditCardType" name="CreditCardType" class="form-control">
                                    <option value="5">Visa</option>
                                    <option value="6">MasterCard</option>
                                    <option value="7">American Express</option>
                                    <option value="8">Discover</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12"><strong>Credit Card Number:</strong></div>
                            <div class="col-md-12"><input type="text" class="form-control" name="car_number" value="" /></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12"><strong>Card CVV:</strong></div>
                            <div class="col-md-12"><input type="text" class="form-control" name="car_code" value="" /></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <strong>Expiration Date</strong>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="">
                                    <option value="">Month</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                            </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" name="">
                                    <option value="">Year</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                            </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!--CREDIT CART PAYMENT END-->
            </div>
            
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                <div class="panel panel-info">
                    <div class="panel-heading">Address</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="col-md-12">
                                <select class="predifined" id="predifinedBillingAddress">
                                    <option value="-1">New Address</option>
                                </select>
                            </div>
                        </div>
                        <!--BILLING FORM-->
                        <div id="billing">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <h4>Billing Address</h4>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Address:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="address" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>City:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="city" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Zip / Postal Code:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="zip_code" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Country:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="country" value="" />
                                </div>
                            </div>
                        </div>
                        <!--BILLING FORM END-->
                        <input type="checkbox" id="addressesAreTheSame">  My Shipping address is the same as my billing address.</input>
                        
                        <!--SHIPPING FORM-->
                        <div id="shipping">
                            <hr>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <select class="predifined" id="predifinedShippingAddress">
                                        <option value="-1">New Address</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <h4>Shipping Address</h4>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Address:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="address" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>City:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="city" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Zip / Postal Code:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="zip_code" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Country:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="country" value="" />
                                </div>
                            </div>
                        </div>
                    <!--SHIPPING FORM END-->
                    </div>
                </div>
            </div>
        </form>
        <button type="submit" form="payment" value="Submit">Confirm</button>
    </div> 
</div>


<script>
    var addresses = {$addresses|json_encode};

{literal}
    $.each(addresses, function (i, address) {
        $('.predifined').append($('<option>', { 
            value: i,
            text : address.address 
        }));
    });

    $('#predifinedBillingAddress').change(function(e) {
        
        if(this.value != -1){
            var address = addresses[this.value];
            
            $('#billing input[name=address]').val(address.address);
            $('#billing input[name=city]').val(address.city);
            $('#billing input[name=zip_code]').val(address.zipnumber);
            $('#billing input[name=country]').val(address.country);
        }
        else{
            $('#billing input[name=address]').val("");
            $('#billing input[name=city]').val("");
            $('#billing input[name=zip_code]').val("");
            $('#billing input[name=country]').val("");
        }
    });
    
    $('#predifinedShippingAddress').change(function(e) {
        
        if(this.value != -1){
            var address = addresses[this.value];
            
            $('#shipping input[name=address]').val(address.address);
            $('#shipping input[name=city]').val(address.city);
            $('#shipping input[name=zip_code]').val(address.zipnumber);
            $('#shipping input[name=country]').val(address.country);
        }
        else{
            $('#shipping input[name=address]').val("");
            $('#shipping input[name=city]').val("");
            $('#shipping input[name=zip_code]').val("");
            $('#shipping input[name=country]').val("");
        }
    });
    
    $('#addressesAreTheSame').click(function() {
        $('#shipping').toggle();
    });
    
    function validateForm() {
        if($('#addressesAreTheSame').is(':checked')){
            $('#shipping input[name=address]').val( $('#billing input[name=address]').val());
            $('#shipping input[name=city]').val($('#billing input[name=city]').val());
            $('#shipping input[name=zip_code]').val($('#billing input[name=zip_code]').val());
            $('#shipping input[name=country]').val($('#billing input[name=country]').val());
        }
    };
</script>
{/literal}

{include file='common/footer.tpl'}
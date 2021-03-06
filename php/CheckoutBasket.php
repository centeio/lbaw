<html>
    <head>
        <title>Charlie&Wonka</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Niconne" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Parisienne" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Italianno" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cardo" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Mate+SC" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cormorant+Upright" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Della+Respira" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/518af292f4.js"></script>

        <link href="../css/header.css" rel="stylesheet">
        <link href="../css/CheckoutBasket.css" rel="stylesheet">
    </head>
    <body>

       <div id="wrapper">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="MainPage.html"> &bull;Charlie&Wonka&bull;</a>
                    </div>
                    <div id="myNavbar" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-center">
                            <li class="active"><a href="#">Products</a></li>
                            <li><a href="#">Special Occasions</a></li>
                            <li><a href="AboutPage.html">About</a></li>
                            <li><a href="#">Contact</a></li>
                            <li class="navbar-text"><a href="#">Search</a></li>
                            <li class="navbar-text"><a href="#">Login/Register</a></li>
                            <li class="navbar-text"><a href="#">Shopping Bag</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="navbar-icon"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                            <li class="navbar-icon"><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                            <li class="navbar-icon"><a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="CheckoutBasket" class="container">
                <div id="Steps" class="row form-group">
                    <div class="col-xs-12">
                        <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                            <li class="active"><a href="#">
                                <h4 class="list-group-item-heading"><i class="fa fa-shopping-bag" aria-hidden="true"></i></h4>
                                <p class="list-group-item-text">Shopping Cart</p>
                            </a></li>
                            <li class="checked"><a href="CheckoutPayment.html">
                                <h4 class="list-group-item-heading"><i class="fa fa-credit-card-alt" aria-hidden="true"></i></h4>
                                <p class="list-group-item-text">Payment</p>
                            </a></li>
                            <li class="disabled"><a href="#step-3">
                                <h4 class="list-group-item-heading"><i class="fa fa-check" aria-hidden="true"></i></h4>
                                <p class="list-group-item-text">Thank you!</p>
                            </a></li>
                        </ul>
                    </div>
                </div> 

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Total</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="col-sm-11 col-md-6 col-xs-11 col-lg-6">
                                        <div class="media">
                                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="images/FirstProduct.jpeg"> </a>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="#">Mackie Bars</a></h4>
                                                <span>Status: <span class="text-success"><strong>In Stock</strong></span></span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="col-xs-1 col-sm-1 col-md-1" style="text-align: center">
                                        <input type="email" class="form-control" id="exampleInputEmail1" value="1">
                                    </td>
                                    <td class="col-sm-6 col-md-1 text-center"><strong>$24.99</strong></td>
                                    <td class="col-sm-6 col-md-1 text-center"><strong>$24.99</strong></td>
                                    <td class="col-sm-1 col-md-1">
                                        <button type="button" class="btn remove">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-6">
                                        <div class="media">
                                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="images/SecondProduct.jpg"> </a>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="#">Hot Chocolate</a></h4>
                                                <span>Status: <span class="text-success"><strong>In Stock</strong></span></span>
                                            </div>
                                        </div></td>
                                        <td class="col-md-1" style="text-align: center">
                                        <input type="email" class="form-control" id="exampleInputEmail1" value="1">
                                        </td>
                                        <td class="col-md-1 text-center"><strong>$64.99</strong></td>
                                        <td class="col-md-1 text-center"><strong>$64.99</strong></td>
                                        <td class="col-md-1">
                                        <button type="button" class="btn remove">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-6">
                                        <div class="media">
                                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="images/ThirdProduct.jpg"> </a>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="#">Doisy&Dam</a></h4>
                                                <span>Status: <span class="text-success"><strong>In Stock</strong></span></span>
                                            </div>
                                        </div></td>
                                        <td class="col-md-1" style="text-align: center">
                                        <input type="email" class="form-control" id="exampleInputEmail1" value="1">
                                        </td>
                                        <td class="col-md-1 text-center"><strong>$74.99</strong></td>
                                        <td class="col-md-1 text-center"><strong>$74.99</strong></td>
                                        <td class="col-md-1">
                                        <button type="button" class="btn remove">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-6">
                                        <div class="media">
                                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="images/FifthProduct.jpg"> </a>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="#">Strawberry Bundle II</a></h4>
                                                <span>Status: <span class="text-warning"><strong>Leaves warehouse in 2 - 3 weeks</strong></span></span>
                                            </div>
                                        </div></td>
                                        <td class="col-md-1" style="text-align: center">
                                        <input type="email" class="form-control" id="exampleInputEmail1" value="2">
                                        </td>
                                        <td class="col-md-1 text-center"><strong>$94.99</strong></td>
                                        <td class="col-md-1 text-center"><strong>$189.98</strong></td>
                                        <td class="col-md-1">
                                        <button type="button" class="btn remove">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table total-price">
                            <tbody>
                                <tr>
                                    <td class="col-lg-9 col-md-9"> </td>
                                    <td><h5>Subtotal</h5></td>
                                    <td class="text-right"><h5><strong>$354.95</strong></h5></td>
                                </tr>
                                <tr>
                                    <td class="col-lg-9 col-md-9"> </td>
                                    <td><h5>Shipping</h5></td>
                                    <td class="text-right"><h5><strong>$6.94</strong></h5></td>
                                </tr>
                                <tr>
                                    <td class="col-lg-9 col-md-9"> </td>
                                    <td><h3 id="Total">Total</h3></td>
                                    <td class="text-right"><h3><strong>$361.89</strong></h3></td>
                                </tr>
                                <tr>
                                    <td class="col-lg-9 col-md-9"> </td>
                                    <td>
                                    <button type="button" class="btn btn-default">
                                        <i class="fa fa-shopping-bag" aria-hidden="true"></i> Continue Shopping
                                    </button></td>
                                    <td>
                                    <button type="button" class="btn btn-success">
                                        Payment <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                    </button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div id="footer" class="container-fluid">
                <div id="SocialMedia" class="col-md-12">
                    <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
                <div id="Copyrights" class="col-md-12"> 
                    <span> ©2017 Charlie&Wonka.com. All rights reserved. </span>
                </div>
            </div>
        </div>
    </body>
</html>
<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="icon" type="image/png" href="images/DB_16х16.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Socket Version</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">


    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">


    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link href='css/google_font.css' rel='stylesheet'
          type='text/css'>
    <link href="css/icon.css" rel="stylesheet">
    <!-- inject:css -->
    <link rel="stylesheet" href="css/lib/getmdl-select.min.css">
    <link rel="stylesheet" href="css/lib/nv.d3.min.css">
    <link rel="stylesheet" href="css/application.min.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- endinject -->

</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header is-small-screen">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <label class="mdl-button" >
                Traker Coin Version Socket
            </label>
            <div class="mdl-layout-spacer"></div>
            <!-- Search-->
            

            <!-- Notifications dropdown-->
            
            <!-- Messages dropdown-->
            
            
            <div class="avatar-dropdown" id="icon">
                <span >About</span>
            </div>
            <!-- Account dropdawn-->
            <ul class="mdl-menu mdl-list mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-shadow--2dp account-dropdown"
                for="icon">
               
                <div class="about-jaspe">
                    <h5>About 2021</h5>
                    <div ><a href="http://www.getmdl.io">Jose Jaspe</a></div>
                    <div ><a href="http://www.getmdl.io">Material Design Lite</a></div>
                    <div ><a href="">Google Font</a></div>
                    <div ><a href="https://www.cryptocompare.com">CryptoCompare API</a></div>
                    <div ><a href="web_version.php">Vesion PHP</a></div>
                </div>
                
            </ul>
 <!--span class="jaspe-about">About</span>
            <span class="jaspe-about">2021</span>
            <span >Jose Jaspe</span>
            <span ><a href="http://www.getmdl.io">Material Design Lite</a></span>
            <span ><a href="http://www.getmdl.io" url="http://www.getmdl.io">Material Design Lite</a></span-->
           
        </div>
    </header>


    <main style="margin: 0px;" class="mdl-layout__content">
        <div class="jaspe-center">

            <div class=" mdl-grid dashboard">
    
                <div class="mdl-grid mdl-cell mdl-cell--9-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone mdl-cell--top">
    
                    
                    <div class="mdl-cell mdl-cell--8-col-desktop mdl-cell--8-col-tablet mdl-cell--8-col-phone">
                        <div class="mdl-card mdl-shadow--2dp ">
                            <div class="mdl-card__title">
                                <h2 class="mdl-card__title-text">Configuracion</h2>
                                <div class="mdl-layout-spacer"></div>
                                <div class="mdl-card__subtitle-text">
                                    <a href="https://www.cryptocompare.com/coins/guides/how-to-use-our-api/" >Obten tu KEY</a>
                                </div>
                               
                            </div>
                            <div class="mdl-card__supporting-text">
                                
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size is-dirty is-upgraded" data-upgraded=",MaterialTextfield">
                                    <input id="api_key" style="margin-top: 10px;" class="mdl-textfield__input" type="text" placeholder="Aqui va tu API KEY de CriptoCompare" >
                                    <label style="color: rgb(200,200,200) !important" class="mdl-textfield__label">API KEY</label>
                                </div>
                                <div class=" mdl-grid dashboard">
                                    <div class="mdl-cell mdl-cell--6-col-desktop mdl-cell--6-col-tablet mdl-cell--2-col-phone">
                                        <button onclick="iniciar_socket()" id="bplay"  style="width: 100%; text-align:center" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-light-blue">
                                            Play
                                        </button>
                                    </div>
                                    <div  onclick="stop_ws()" class="mdl-cell mdl-cell--6-col-desktop mdl-cell--6-col-tablet mdl-cell--2-col-phone">
                                        <button disabled id="bstop" style="width: 100%; text-align:center" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-red" data-upgraded=",MaterialButton,MaterialRipple">
                                            Stop
                                        </button>
                                    </div>
                                </div>
    
                            </div>
                            
                        </div>
                    </div>
                    <!-- Trending widget-->
                    <div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--4-col-tablet mdl-cell--12-col-phone">
                        <div class="mdl-card mdl-shadow--2dp trending">
                            <div class="mdl-card__title">
                                <h2 class="mdl-card__title-text">Precios</h2>
                            </div>
                            <div class="mdl-card__supporting-text">
                                <ul class="mdl-list">
                                    <li id="BTC" class="mdl-list__item">
                                        <span class="mdl-list__item-primary-content list__item-text">BTC</span>
                                        <span class="mdl-list__item-secondary-content">
                                            <i class="material-icons trending__arrow-up" role="presentation">&#xE5C7</i>
                                        </span>
                                        <span  style="width: auto;" class="mdl-list__item-secondary-content trending__percent">--$</span>
                                    </li>
                                    <li id="XRP" class="mdl-list__item list__item--border-top">
                                        <span class="mdl-list__item-primary-content list__item-text">XRP</span>
                                        <span class="mdl-list__item-secondary-content">
                                        <i class="material-icons trending__arrow-down" role="presentation">&#xE5C5</i>
                                        </span>
                                        <span style="width: auto;" class="mdl-list__item-secondary-content trending__percent">--$
                                        </span>
                                    </li>
                                    <li id="ETH" class="mdl-list__item list__item--border-top">
                                        <span class="mdl-list__item-primary-content list__item-text ">ETH</span>
                                        <span class="mdl-list__item-secondary-content">
                                            <i class="material-icons trending__arrow-up" role="presentation">&#xE5C7</i>
                                        </span>
                                        <span  style="width: auto;" class="mdl-list__item-secondary-content trending__percent">--$
                                        </span>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
    
            </div>
        </div>

    </main>

</div>

<!-- inject:js -->
<script src="js/d3.min.js"></script>
<script src="js/getmdl-select.min.js"></script>
<script src="js/material.min.js"></script>
<script src="js/nv.d3.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/main.js"></script>
<!-- endinject -->

</body>
</html>

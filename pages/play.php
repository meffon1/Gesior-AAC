
<!-- saved from url=(0072)https://secure.tibia.com/account/?subtopic=play&name=Sain+Galus&window=2 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <title>Tibia Flash Client</title>
    <meta name="description" content="Tibia is a free massive multiplayer online role playing game (MMORPG). Join this fascinating game that has thousands of fans from all over the world! - http://www.tibia.com">
    <meta name="author" content="CipSoft GmbH">
    <meta http-equiv="content-language" content="en">
    <meta name="google-site-verification" content="DnO3wR8m-XUPrU02NoZt9x3vMB0fjpOXXJshbKucEj8">
    <link rel="shortcut icon" href="https://a248.e.akamai.net/cipsoft.download.akamai.com/118500/tibia/static.tibia.com/images/global/general/favicon.ico" type="image/x-icon">
    <link rel="icon" href="https://a248.e.akamai.net/cipsoft.download.akamai.com/118500/tibia/static.tibia.com/images/global/general/favicon.ico" type="image/x-icon">
    <script type="text/javascript" src="./Tibia Flash Client_files/jquery.js"></script><style type="text/css"></style>
    <style type="text/css">
      body {
        margin: 0px;
        padding:  0px;
        background-color: #051122;
      }
      #BackgroundContainer {
        background-repeat: no-repeat;
        background-position: center center;
        background-attachment: fixed;
        background-size: auto 100%;

        background-color: #051122;
        width: 100%;
        height: 100%;
      }
      #FlashClientBackgroundOverlay {
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: #181E22;
        filter: alpha(opacity=50);
        opacity: 0.50;
        -moz-opacity: 0.50;
      }
      .FlashClientBox {
        position: absolute;
        top: 50%;
        left: 50%;
        background-position: 0 0;
        background-attachment: scroll;
        background-repeat: no-repeat;
        font-family: Verdana, Arial, Times New Roman, sans-serif;
      }
      #FlashClientErrorBox {
        height: 162px;
        width: 300px;
        margin-left: -150px;
        margin-top: -81px;
      }
      #FlashClientDialogBox {
        height: 310px;
        width: 350px;
        margin-left: -175px;
        margin-top: -159px;
      }
      .FlashClientBoxHeadline {
        font-weight: bold;
        font-size: 10pt;
        color: #C9BDAB;
        position: absolute;
        top: 6px;
        left: 9px;
        height: 15px;
        width: 280px;
      }
      #FlashClientErrorBoxText {
        font-size: 7pt;
        color: #C9BDAB;
        position: absolute;
        top: 32px;
        left: 9px;
        height: 100px;
        width: 280px;
      }
      #FlashClientErrorBoxButton {
        font-weight: bold;
        font-size: 8pt;
        color: #F2AF4E;
        position: absolute;
        top: 139px;
        left: 120px;
        height: 16px;
        width: 57px;
        text-align: center;
        cursor: pointer;
        text-decoration: none;
      }
      #FlashClientDialogBoxText {
        font-size: 10px;
        color: #C9BDAB;
        position: absolute;
        top: 32px;
        left: 3px;
        height: 246px;
        width: 343px;
        overflow-y: auto;
      }
      .FlashClientDialogBoxButton {
        font-weight: bold;
        font-size: 8pt;
        color: #F2AF4E;
        position: absolute;
        top: 287px;
        height: 16px;
        width: 58px;
        text-align: center;
        cursor: pointer;
        text-decoration: none;
      }
      #FlashClientDialogBoxButton_1 {
        left: 100px;
      }
      #FlashClientDialogBoxButton_2 {
        right: 100px;
      }
      .CharacterListEntry {
        display: block;
        height: 15px;
        padding-bottom: 8px;
        margin-left: -16px;
      }
      .CharacterListEntry input {
        visibility: hidden;
      }
      .CharacterListSelectedEntry {
        background-color: #3F474D;
      }
      .CharacterListEntry:hover {
        background-color: #32373A;
      }
      #FlashClientDialogBox a {
        text-decoration: none;
        color: #C9BDAB;
      }
      #FlashClientDialogBox a:hover {
        text-decoration: none;
        color: #C9BDAB;
      }
      #placeholder2 {
        display: none;
        visibility: hidden;
      }
    </style>
    <script type="text/javascript" src="./Tibia Flash Client_files/flashclienthelper.js"></script>
    <script type="text/javascript" src="./Tibia Flash Client_files/swfobject.js"></script>
    <script type="text/javascript">
      window.onresize = function(e)
      {
        var w = e.currentTarget.innerWidth,
            h = e.currentTarget.innerHeight;

        if (w > 1.25 * h) {
          $('#BackgroundContainer').css('background-size', 'auto 100%');
        } else {
          $('#BackgroundContainer').css('background-size', '100% auto');
        }
      }

      function ShowSWFLoadingError()
      {
        document.getElementById("placeholder2").style.display = "block";
        document.getElementById("placeholder2").style.visibility = "visible";
        if (document.getElementById('placeholder1')) {
          document.getElementById("placeholder1").style.display = "none";
          document.getElementById("placeholder1").style.visibility = "hidden";
        }
      }
      function SWFStatusAction(e)
      {
        if (e.success == false) {
          ShowSWFLoadingError();
        }
      }
    </script>
  <style type="text/css" media="screen">#placeholder1 {visibility:hidden}</style></head>
  <body>
    <div id="BackgroundContainer" style="background-image: url(https://a248.e.akamai.net/cipsoft.download.akamai.com/118500/tibia/static.tibia.com/images/account/play-background_artwork.png); background-size: auto 100%;">
              <object type="application/x-shockwave-flash" id="FlashClient" name="FlashClient" data="https://secure.tibia.com/flash-regular-bin/preloader.swf?nocache=a83028ad01492b3da3d827e5c2bb3622" width="100%" height="100%"><param name="allowscriptaccess" value="sameDomain"><param name="wmode" value="direct"><param name="flashvars" value="tutorial=false&amp;sessionKey=mLtKzzoeA2y9CPMv2WSI0qmHqRoscm&amp;sessionRefreshURL=https://secure.tibia.com/account/?subtopic=refresh&amp;accountData=%3CaccountData%3E%3Cworld+id%3D%220%22+name%3D%22Eldera%22+address%3D%2266.150.54.94%22+port%3D%227171%22+previewstate%3D%220%22+%2F%3E%3Ccharacter+name%3D%22Sain+Galus%22+worldid%3D%220%22+selected%3D%22true%22+%2F%3E%3C%2FaccountData%3E&amp;backgroundColor=332066&amp;backgroundImage=https://a248.e.akamai.net/cipsoft.download.akamai.com/118500/tibia/static.tibia.com/images/account/play-background_artwork.png&amp;closeClientURL="></object>
        <div id="placeholder2">
          <div id="FlashClientBackgroundOverlay"></div><div id="FlashClientErrorBox" class="FlashClientBox" style="background-image: url(https://a248.e.akamai.net/cipsoft.download.akamai.com/118500/tibia/static.tibia.com/images/account/flashclient_error_box.png);">  <div class="FlashClientBoxHeadline">Error</div>  <div id="FlashClientErrorBoxText">The Flash client could not be loaded!<br>Please try again later.  </div>    <div id="FlashClientErrorBoxButton" onclick="window.close();">Close</div></div>        </div>
          </div>
    <script>
                // check if the preloader exists using AJAX
          var l_Request = false;
          if (window.XMLHttpRequest) {
            l_Request = new XMLHttpRequest;
          } else if (window.ActiveXObject) {
            l_Request = new ActiveXObject("Microsoft.XMLHttp");
          }
          try {
            l_Request.open("HEAD", "https://secure.tibia.com/flash-regular-bin/preloader.swf", false);
            l_Request.onreadystatechange=function() {
              if (l_Request.readyState == 4) {
                if (l_Request.status == 200 || l_Request.status == 304) {
                  // try to embed the preloader
                  swfobject.embedSWF("https://secure.tibia.com/flash-regular-bin/preloader.swf?nocache=a83028ad01492b3da3d827e5c2bb3622",
                      "placeholder1",
                      "100%",
                      "100%",
                      "11.2.0",
                      null,
                      {
                        tutorial:           false,
                        sessionKey:         "mLtKzzoeA2y9CPMv2WSI0qmHqRoscm",
                        sessionRefreshURL:  "https://secure.tibia.com/account/?subtopic=refresh",
                        accountData:        "%3CaccountData%3E%3Cworld+id%3D%220%22+name%3D%22Eldera%22+address%3D%2266.150.54.94%22+port%3D%227171%22+previewstate%3D%220%22+%2F%3E%3Ccharacter+name%3D%22Sain+Galus%22+worldid%3D%220%22+selected%3D%22true%22+%2F%3E%3C%2FaccountData%3E",
                        backgroundColor:    0x051122,
                        backgroundImage:    "https://a248.e.akamai.net/cipsoft.download.akamai.com/118500/tibia/static.tibia.com/images/account/play-background_artwork.png",
                        closeClientURL:     ""
                                                                      },
                      {
                        allowscriptaccess:  "sameDomain",
                        wmode:              "direct"
                      },
                      {
                        id:                 "FlashClient",
                        name:               "FlashClient"
                      },
                      SWFStatusAction);
                } else {
                 // preloader not found: show the corresponding error message
                  ShowSWFLoadingError();
                }
              }
            }
            l_Request.send(null);
          } catch (er) {
            // preloader not found: show the corresponding error message
            ShowSWFLoadingError();
          }
          </script>
      
</body></html>
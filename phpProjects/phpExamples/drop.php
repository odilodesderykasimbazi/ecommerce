<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DropDownMenu</title>
    <style>
        *{
            padding:0;
            margin:0;
            box-sizing: border-box;
        }
        body
        {
            background-image:url(Tecno.png);
            background-size:cover;
            background-position:center;
            font-family:sanserif;
        }
        .menu-bar{
            background-color:rgb(0,100,0);
            text-align:center;
        }
        .menu-bar ul{
            display:inline-flex;
            list-style:none;
            color:#fff;
        }
        .menu-bar ul li{
            width:90px;
            margin:15px;
            padding:15px;
        }
        .menu-bar ul li a{
            text-decoration:none;
             color:#fff;
        }
        .active, .menu-bar ul li:hover{
            background:#2bc20d;
            border-radius:3px;
        }
        .sub-menu-1{
            display:none;
        }
        .menu-bar ul li:hover .sub-menu-1{
            display:block;
            position:absolute;
            background:rgb(0,100,0);
            margin-top:10px;
            margin-left:-15px;
        }
        .menu-bar ul li:hover .sub-menu-1 ul{
            display:block;
            margin:10px;
        }
        .menu-bar ul li:hover .sub-menu-1 ul li{
            width:80px;
            padding:1px;
            border-bottom:1px dotted #fff;
            background:transparent;
            border-radius:2px;
            text-align:center;
        }
        .menu-bar ul li:hover .sub-menu-1 ul li:last-child{
            border-bottom:none;
        }

    </style>
</head>
<body>
    <div class="menu-bar">
    <ul>
        <li class="active"><a href="#">home</a></li>
        <li><a href="#">Services</a>
          <div class="sub-menu-1">
              <ul>
                <li>css</li>
                <li>HTML</li>
                <li>Java</li>
                <li>Python</li>
              </ul>
          </div>
       </li>
        <li><a href="#">AboutUs</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Tutorials</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Clients</a></li>
        <li><a href="#">Investers</a></li>
        <li><a href="#">Training</a></li>
    </ul>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hnadlooms and Handicrafts</title>
        <link rel="stylesheet" href="styleh.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" charset="utf-8"></script>
        <style>*{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }
        
        section{
            padding: 20px 100px;
        }
        
        .section-home{
            position: relative;
            min-height: 100vh;
            background: url(assets/img2.jpg)no-repeat;
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .section-home h1{
            color:#710c2f;
            font-size: 10vw;
            font-weight: 800;
            text-shadow: 0 10px 25px rgb(0 0 0 / 20%);
            opacity: 0.5;
        }
        
        header{
            z-index: 999;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #c3a2a2;
            box-shadow: 0 5px 25px rgb(0 0 0 / 20%);
            padding: 0 100px;
            transition: 0.6s;
        }
        
        header .NAVATÁ{
           color: #430101;
           font-size: 1.8em;
           font-weight: 700;
           text-transform: uppercase;
           text-decoration: none;
           letter-spacing: 2px;
        }
        
        header .navigation{
            position: relative;
            line-height: 75px;
        }
        
        header .navigation .menu{
            position: relative;
            display: flex;
            justify-content: center;
            list-style: none;
            user-select: none;
        }
        
        .menu-item > a{
            color: #08004f;
            font-size: 1em;
            text-decoration: none;
            margin: 20px;
            padding: 25px 0;
        }
        
        .menu-item > a:hover{
            color:#710c2f;
            transition: 0.3s;
        }
        
        .menu-item .sub-menu{
            position: absolute;
            background: #f0ba98;
            top: 74px;
            line-height: 40px;
            list-style: none;
            border-radius: 0 0 8px 8px;
            box-shadow: 0 5px 25px rgb(0 0 0 / 194, 231, 244);
            pointer-events: none;
            transform: translateY(20px);
            opacity: 0;
            transition: 0.3s;
            transition-property: transform, opacity;
        }
        
        .menu-item:hover .sub-menu{
            pointer-events: all;
            transform: translateY(0);
            opacity: 1;
        }
        
        .menu-item .sub-menu .sub-item{
            position: relative;
            padding: 7px 0;
            cursor: pointer;
            box-shadow: inset 0px -30px 5px -30px rgba(56, 56, 92, 0.203);
        }
        
        .menu-item .sub-menu .sub-item a{
            color: #05004f;
            font-size: 1em; 
            text-decoration: none;
            padding: 15px 30px;
        }
        
        .menu-item .sub-menu .sub-item:hover{
            background: #ebd49fd0;
        }
        
        .menu-item .sub-menu .sub-item:last-child:hover{
            border-radius: 0 0 8px 8px;
        }
        
        .Living .Living-menu{
            position: absolute;
            background:#e4b886;
            list-style: none;
            top: 0;
            left: 100%;
            white-space: nowrap;
            border-radius: 0 8px 8px 8px;
            overflow: hidden;
            pointer-events: none;
            transform: translateY(20px);
            opacity: 0;
            transition: 0.3s;
            transition-property: transform, opacity;
        }
        
        .Living:hover .Living-menu{
            pointer-events: all;
            transform: translateY(0);
            opacity: 1;
        }
        
        .Living .Living-menu .Living-item{
            padding: 7px 0;
            box-shadow: inset 0px -30px 5px -30px rgba(44, 4, 4, 0.301);
            transition: 0.3s;
        }
        
        .Living .Living-menu .Living-item:hover{
            background: #e4a48b;
        }
        
        .Decor .Decor-menu{
            position: absolute;
            background:#e4b886;
            list-style: none;
            top: 0;
            left: 100%;
            white-space: nowrap;
            border-radius: 0 8px 8px 8px;
            overflow: hidden;
            pointer-events: none;
            transform: translateY(20px);
            opacity: 0;
            transition: 0.3s;
            transition-property: transform, opacity;
        }
        
        .Decor:hover .Decor-menu{
            pointer-events: all;
            transform: translateY(0);
            opacity: 1;
        }
        
        .Decor .Decor-menu .Decor-item{
            padding: 7px 0;
            box-shadow: inset 0px -30px 5px -30px rgba(44, 4, 4, 0.301);
            transition: 0.3s;
        }
        
        .Decor .Decor-menu .Decor-item:hover{
            background: #e4a48b;
        }
        
        .Furniture .Furniture-menu{
            position: absolute;
            background:#e4b886;
            list-style: none;
            top: 0;
            left: 100%;
            white-space: nowrap;
            border-radius: 0 8px 8px 8px;
            overflow: hidden;
            pointer-events: none;
            transform: translateY(20px);
            opacity: 0;
            transition: 0.3s;
            transition-property: transform, opacity;
        }
        
        .Furniture:hover .Furniture-menu{
            pointer-events: all;
            transform: translateY(0);
            opacity: 1;
        }
        
        .Furniture .Furniture-menu .Furniture-item{
            padding: 7px 0;
            box-shadow: inset 0px -30px 5px -30px rgba(44, 4, 4, 0.301);
            transition: 0.3s;
        }
        
        .Furniture .Furniture-menu .Furniture-item:hover{
            background: #e4a48b;
        }
        
        .Paintings .Paintings-menu{
            position: absolute;
            background: #e4b886;
            list-style: none;
            top: 0;
            left: 100%;
            white-space: nowrap;
            border-radius: 0 8px 8px 8px;
            overflow: hidden;
            pointer-events: none;
            transform: translateY(20px);
            opacity: 0;
            transition: 0.3s;
            transition-property: transform, opacity;
        }
        
        .Paintings:hover .Paintings-menu{
            pointer-events: all;
            transform: translateY(0);
            opacity: 1;
        }
        
        .Paintings .Paintings-menu .Paintings-item{
            padding: 7px 0;
            box-shadow: inset 0px -30px 5px -30px rgba(44, 4, 4, 0.301);
            transition: 0.3s;
        }
        
        .Paintings .Paintings-menu .Paintings-item:hover{
            background: #e4a48b;
        }
        
        .Textiles .Textiles-menu{
            position: absolute;
            background:#e4b886;
            list-style: none;
            top: 0;
            left: 100%;
            white-space: nowrap;
            border-radius: 0 8px 8px 8px;
            overflow: hidden;
            pointer-events: none;
            transform: translateY(20px);
            opacity: 0;
            transition: 0.3s;
            transition-property: transform, opacity;
        }
        
        .Textiles:hover .Textiles-menu{
            pointer-events: all;
            transform: translateY(0);
            opacity: 1;
        }
        
        .Textiles .Textiles-menu .Textiles-item{
            padding: 7px 0;
            box-shadow: inset 0px -30px 5px -30px rgba(44, 4, 4, 0.301);
            transition: 0.3s;
        }
        
        .Textiles .Textiles-menu .Textiles-item:hover{
            background: #e4a48b;
        }</style>
    </head>
    <body>

        <header>
            <a href="#" class="NAVATÁ">NAVATÁ</a>
            <div class="navigation">
                <ul class="menu">
                    <li class="menu-item"><a href="#">HOME</a></li>
                    <li class="menu-item">
                        <a class="sub-btn" href="#">CATEGORIES <i class="fas fa-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li class="sub-item Living">
                                <a class="Living-btn" href="#">Living <i class="fas fa-angle-right"></i></a>
                                <ul class="Living-menu">
                                    <li class="Living-item"><a href="wall shelf.html">Wall Shelf</a></li>
                                    <li class="Living-item"><a href="lighting.html">Lighting</a></li>
                                    <li class="Living-item"><a href="instruments.html">Instruments</a></li>
                                    <li class="Living-item"><a href="kitchen&dining.html">Kitchen & Dining</a></li>
                                    <li class="Living-item"><a href="Floor Covering.html">Floor Covering</a></li>
                                </ul>
                            </li>
                            <li class="sub-item Decor">
                                <a class="Decor-btn" href="#">Decor <i class="fas fa-angle-right"></i></a>
                                <ul class="Decor-menu">
                                    <li class="Decor-item"><a href="pottery.html">Pottery</a></li>
                                    <li class="Decor-item"><a href="sculptures.html">Sculptures</a></li>
                                    <li class="Decor-item"><a href="leatherpuppets.html">Leather Toys</a></li>
                                    <li class="Decor-item"><a href="kondapalli bommalu.html">Kondapalli Bommalu</a></li>
                                </ul>
                            </li>
                            <li class="sub-item Furniture">
                                <a class="Furniture-btn" href="#">Furniture <i class="fas fa-angle-right"></i></a>
                                <ul class="Furniture-menu">
                                    <li class="Furniture-item"><a href="cabinets.html">Cabinets</a></li>
                                    <li class="Furniture-item"><a href="swings.html">Swings</a></li>
                                    <li class="Furniture-item"><a href="desks.html">Desks</a></li>
                                    <li class="Furniture-item"><a href="sofas.html">Sofas</a></li>
                                    <li class="Furniture-item"><a href="benches.html">Benches</a></li>
                                </ul>
                            </li>
                            <li class="sub-item Paintings">
                                <a class="Paintings-btn" href="#">Paintings <i class="fas fa-angle-right"></i></a>
                                <ul class="Paintings-menu">
                                    <li class="Paintings-item"><a href="paintings.html">Acrylic Paintings</a></li>
                                    <li class="Paintings-item"><a href="handembroidary.html">Hand Embroidery</a></li>
                                </ul>
                            </li>
                            <li class="sub-item Textiles">
                                <a class="Textiles-btn" href="#">Textiles <i class="fas fa-angle-right"></i></a>
                                <ul class="Textiles-menu">
                                    <li class="Textiles-item"><a href="ethnic wear.html">Ethnic Wear</a></li>
                                    <li class="Textiles-item"><a href="bags.html">Bags</a></li>
                                    <li class="Textiles-item"><a href="footwears.html">FootWears</a></li>
                                    <li class="Textiles-item"><a href="accessories.html">Accessories</a></li>
                                    <li class="Textiles-item"><a href="mufflers.html">Mufflers & Scarfs</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item"><a href="blog.html">BLOG</a></li>
                    <li class="menu-item"><a href="contactus.html">CONTACT US</a></li>
                    <li class="menu-item"><a href="about.html">ABOUT</a></li>
                    <li class="menu-item"><a href="profilea.php">PROFILE</a></li>
                    <li class="menu-item"><a href="admin.php">SIGN OUT</a></li>
                </ul>
            </div>
        </header>

        <section class="section-home">
            <h1>HandLooms & HandiCrafts</h1>
        </section>
    </body>
</html>
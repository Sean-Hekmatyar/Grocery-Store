<!DOCTYPE html>
<html>
    <head>
        <title>Menu Page</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body id='cataloguestyle'>
        <h1 style="text-align:center">Grocery Store Menu</h1>
        <form action="product.php" method="get" target="topright">
            <div class="navbar">
                <div class="dropdown">
                    <div class="dropbtn">Frozen Food</div>
                    <div class="dropdown-category">
                        <button class="dropBtnPro" type="submit" name="item" value="1002">Hamburger Patties</button>
                        <div id="set1" class="dropBtnCat">Fish Fingers
                        <div class="dropdown-product">
                            <button class="dropBtnPro" type="submit" name="item" value="1000">500 Gram</button>
                            <button class="dropBtnPro" type="sumbit" name="item" value="1001">1000 Gram</button>
                        </div>
                        </div>
                        <button class="dropBtnPro" type="submit" name="item" value="1003" >Shell Prawns</button>
                        <div id="set2" class="dropBtnCat">Tub Ice Cream
                        <div class="dropdown-product">
                            <button class="dropBtnPro" type="submit" name="item" value="1004">1 litre</button>
                            <button class="dropBtnPro" type="submit" name="item" value="1005">2 litre</button>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="dropdown">
                    <div class="dropbtn">Fresh Food</div>
                    <div class="dropdown-category">
                        <button class="dropBtnPro" type="submit" name="item" value="3002">T'Bone Steak</button>
                        <div id="set1" class="dropBtnCat">Cheddear Cheese
                        <div class="dropdown-product">
                            <button class="dropBtnPro" type="submit" name="item" value="3000">500 Gram</button>
                            <button class="dropBtnPro" type="submit" name="item" value="3001">1000 Gram</button>
                        </div>
                        </div>
                        <div id="set2" class="dropBtnCat">Fruits
                        <div class="dropdown-product">
                            <button class="dropBtnPro" type="submit" name="item" value="3003">Navel Oranges</button>
                            <button class="dropBtnPro" type="submit" name="item" value="3004">Bananas</button>
                            <button class="dropBtnPro" type="submit" name="item" value="3006">Grapes</button>
                            <button class="dropBtnPro" type="submit" name="item" value="3007">Apples</button>
                            <button class="dropBtnPro" type="submit" name="item" value="3005">Peaches</button>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="dropdown">
                    <div class="dropbtn">Beverages</div>
                    <div class="dropdown-category">
                        <div id="set1" class="dropBtnCat">Coffee
                        <div class="dropdown-product">
                            <button class="dropBtnPro" type="submit" name="item" value="4003">200 Gram</button>
                            <button class="dropBtnPro" type="submit" name="item" value="4004">500 Gram</button>
                        </div>
                        </div>
                        <div id="set2" class="dropBtnCat">Earl Grey Tea Bags
                        <div class="dropdown-product">
                            <button class="dropBtnPro" type="submit" name="item" value="4000">Pack 25</button>
                            <button class="dropBtnPro" type="submit" name="item" value="4001">Pack 100</button>
                            <button class="dropBtnPro" type="submit" name="item" value="4002">Pack 200</button>
                        </div>
                        </div>
                        <button class="dropBtnPro" type="submit" name="item" value="4005">Chocolate Bar</button>
                    </div>
                </div>
                
                <div class="dropdown">
                    <div class="dropbtn">Home Health</div>
                    <div class="dropdown-category">
                        <button class="dropBtnPro" type="submit" name="item" value="2002">Bath Soap</button>
                        <div id="set1" class="dropBtnCat">Panadol
                        <div class="dropdown-product">
                            <button class="dropBtnPro" type="submit" name="item" value="2000">Pack 24</button>
                            <button class="dropBtnPro" type="submit" name="item" value="2001">Bottle 50m</button>
                        </div>
                        </div>
                        <button class="dropBtnPro" type="submit" name="item" value="2005">Washing Powder</button>
                        <div id="set2" class="dropBtnCat">Garbage Bags
                        <div class="dropdown-product">
                            <button class="dropBtnPro" type="submit" name="item" value="2003">Small (Pack 10)</button>
                            <button class="dropBtnPro" type="submit" name="item" value="2004">Large (Pack 50)</button>
                        </div>
                        </div>
                        <button class="dropBtnPro" type="submit" name="item" value="2006">Laundry Bleach</button>
                    </div>
                </div>
                
                <div class="dropdown">
                    <div class="dropbtn">Pet Food</div>
                    <div class="dropdown-category">
                        <button class="dropBtnPro" type="submit" name="item" value="5002">Bird Food</button>
                        <button class="dropBtnPro" type="submit" name="item" value="5003">Cat Food</button>
                        <div id="set2" class="dropBtnCat">Dry Dog Food
                        <div class="dropdown-product">
                            <button class="dropBtnPro" type="submit" name="item" value="5001">1kg. Pack</button>
                            <button class="dropBtnPro" type="submit" name="item" value="5000">5kg. Pack</button>
                        </div>
                        </div>
                        <button class="dropBtnPro" type="submit" name="item" value="5004">Fish Food</button>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
<template>
    <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="panel-group" id="accordionNo">
            <!--Category-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a data-toggle="collapse" href="#collapseCategory"
                                                class="collapseWill active ">
                        <span class="pull-left"> <i class="fa fa-caret-right"></i></span> Category </a></h4>
                </div>
                <div id="collapseCategory" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked tree">
                            <li class="active dropdown-tree open-tree"><a class="dropdown-tree-a"> <span
                                    class="badge pull-right">42</span> WOMEN COLLECTION </a>
                                <ul class="category-level-2 dropdown-menu-tree">
                                    <li class="dropdown-tree"><a class="dropdown-tree-a" href="sub-category.html">
                                        Tshirt</a></li>
                                    <li><a> Shoes</a></li>
                                    <li><a> Shirt</a></li>
                                    <li><a>T shirt</a></li>
                                    <li><a href="sub-category.html"> Shirt</a></li>
                                    <li><a href="sub-category.html">Fragrances</a></li>
                                    <li><a href="sub-category.html">Scarf</a></li>
                                    <li><a href="sub-category.html">Sandal</a></li>
                                    <li><a href="sub-category.html">Underwear</a></li>
                                    <li><a href="sub-category.html">Winter Collection</a></li>
                                    <li><a href="sub-category.html">Men Accessories</a></li>
                                </ul>
                            </li>
                            <li><a href="#"> <span class="badge pull-right">42</span> MEN COLLECTION </a></li>
                            <li><a href="#"> <span class="badge pull-right">42</span> Baby & Kids </a></li>
                            <li><a href="#"> <span class="badge pull-right">42</span> Home & Kitchen </a></li>
                            <li><a href="#"> <span class="badge pull-right">42</span> Baby & Kids </a></li>
                            <li><a href="#"> <span class="badge pull-right">42</span> More Stores </a></li>
                            <li><a href="#"> <span class="badge pull-right">42</span> Offers Zone </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/Category menu end-->

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a class="collapseWill active " data-toggle="collapse"
                                                href="#collapsePrice">
                        Price <span class="pull-left"> <i class="fa fa-caret-right"></i></span> </a> <span
                            class="pull-right clearFilter  label-danger"> Clear </span></h4>
                </div>
                <div id="collapsePrice" class="panel-collapse collapse in">
                    <div class="panel-body priceFilterBody">
                        <!-- -->
                        <label>
                            <input type="radio" name="agree" value="0"/>
                            100$ - 500$</label>
                        <br>
                        <label>
                            <input type="radio" name="agree" value="1"/>
                            500$ - 1000$</label>
                        <br>
                        <label>
                            <input type="radio" name="agree" value="2"/>
                            1000$ - 1500$</label>
                        <br>
                        <label>
                            <input type="radio" name="agree" value="3"/>
                            1500$ - 2000$</label>
                        <br>
                        <label>
                            <input type="radio" name="agree" value="4"/>
                            2000$ - 2500$</label>
                        <br>
                        <label>
                            <input type="radio" name="agree" value="5"/>
                            2500$ - 3000$</label>
                        <br>
                        <label>
                            <input type="radio" name="agree" value="6" disabled checked/>
                            Don't know</label>
                        <hr>
                        <p>Enter a Price range </p>

                        <form class="form-inline " role="form">
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputEmail2"
                                        placeholder="2000 $">
                            </div>
                            <div class="form-group sp"> -</div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputPassword2"
                                        placeholder="3000 $">
                            </div>
                            <button type="submit" class="btn btn-default pull-right">check</button>
                        </form>
                    </div>
                </div>
            </div>
            <!--/price panel end-->

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a data-toggle="collapse" href="#collapseBrand"
                                                class="collapseWill active ">
                        Brand <span class="pull-left"> <i class="fa fa-caret-right"></i></span> </a></h4>
                </div>
                <div id="collapseBrand" class="panel-collapse collapse in">
                    <div class="panel-body smoothscroll maxheight300">
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="0"/>
                                Armani </label>
                        </div>
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="1"/>
                                Gucci </label>
                        </div>
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="2"/>
                                Louis Vuitton </label>
                        </div>
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="3"/>
                                Chanel </label>
                        </div>
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="3"/>
                                Roberto Cavalli </label>
                        </div>
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="3"/>
                                Valentino </label>
                        </div>
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="3"/>
                                Ralph Lauren </label>
                        </div>
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="3"/>
                                Miu Miu </label>
                        </div>
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="3"/>
                                McQueen </label>
                        </div>
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="3"/>
                                adidas </label>
                        </div>
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="3"/>
                                Nike </label>
                        </div>
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="3"/>
                                Jimmy Choo </label>
                        </div>
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="3"/>
                                Bottega Veneta </label>
                        </div>
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="3"/>
                                Donna Karan </label>
                        </div>
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="3"/>
                                Oscar de la Renta </label>
                        </div>
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="3"/>
                                Tods </label>
                        </div>
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="3"/>
                                Burberry </label>
                        </div>
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="3"/>
                                Michael Kors </label>
                        </div>
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="3"/>
                                Mulberry </label>
                        </div>
                        <div class="block-element">
                            <label> &nbsp; </label>
                            <!-- keep it blank // -->
                        </div>
                    </div>
                </div>
            </div>
            <!--/brand panel end-->

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a data-toggle="collapse" href="#collapseColor"
                                                class="collapseWill active ">
                        Color <span class="pull-left"> <i class="fa fa-caret-right"></i></span> </a></h4>
                </div>
                <div id="collapseColor" class="panel-collapse collapse in">
                    <div class="panel-body smoothscroll maxheight300 color-filter">
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="0"/>
                                <small style="background-color:#333333"></small>
                                Black <span>(123)</span> </label>
                        </div>
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="1"/>
                                <small style="background-color:#1664c4"></small>
                                Blue (434) </label>
                        </div>
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="2"/>
                                <small style="background-color:#c00707"></small>
                                Red (338) </label>
                        </div>
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="3"/>
                                <small style="background-color:#6fcc14"></small>
                                Green (253) </label>
                        </div>
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="3"/>
                                <small style="background-color:#943f00"></small>
                                Brown (240) </label>
                        </div>
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="3"/>
                                <small style="background-color:#ff1cae"></small>
                                Pink (212) </label>
                        </div>
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="3"/>
                                <small style="background-color:#f5f5dc"></small>
                                Beige (176) </label>
                        </div>
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="3"/>
                                <small style="background-color:#adadad"></small>
                                Grey (154) </label>
                        </div>
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="3"/>
                                <small style="background-color:#5d00dc"></small>
                                Purple (132) </label>
                        </div>
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="3"/>
                                <small style="background-color:#f1f40e"></small>
                                Yellow (104) </label>
                        </div>
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="3"/>
                                <small style="background-color:#ffc600"></small>
                                Orange (77) </label>
                        </div>
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="3"/>
                                <small style="background-color:#9b1d00"></small>
                                Maroon (76) </label>
                        </div>
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="3"/>
                                <small style="background-color:#0a43a3"></small>
                                Navy Blue (68) </label>
                        </div>
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="3"/>
                                <small style="background-color:#ede4b2"></small>
                                Tan (67) </label>
                        </div>
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="3"/>
                                <small style="background-color:#ecf1ef"></small>
                                Silver (49) </label>
                        </div>
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="3"/>
                                <small style="background-color:#f3f1e7"></small>
                                Off White (44) </label>
                        </div>
                        <div class="block-element">
                            <label> &nbsp; </label>
                        </div>
                    </div>
                </div>
            </div>
            <!--/color panel end-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a data-toggle="collapse" href="#collapseThree"
                                                class="collapseWill active ">
                        Discount <span class="pull-left"> <i class="fa fa-caret-right"></i></span> </a></h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="3"/>
                                Non-Discounted items </label>
                        </div>
                        <div class="block-element">
                            <label>
                                <input type="checkbox" name="tour" value="3"/>
                                Discounted items </label>
                        </div>
                    </div>
                </div>
            </div>
            <!--/discount  panel end-->
        </div>
    </div>
</template> 
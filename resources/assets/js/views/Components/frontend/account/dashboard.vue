<template>
    <div>
      	<div class="container main-container headerOffset">
            <div class="row">
                <div class="breadcrumbDiv col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="account-1.html">Authentication</a></li>
                        <li class="active"> My account</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-7">
                    <h1 class="section-title-inner"><span><i class="fa fa-unlock-alt"></i> My account </span></h1>
                    <div class="row userInfo">
                        <div class="col-xs-12 col-sm-12">
                            <p> Your account has been created. </p>

                            <h2 class="block-title-2"><span>Welcome to your account. Here you can manage all of your personal information and orders.</span>
                            </h2>
                            <ul class="myAccountList row ">
                                <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center ">
                                    <div class="thumbnail">
                                        <router-link v-bind:to="'/account/orderlist'" title="Orders">
                                            <i class="fa fa-calendar"></i> Order history 
                                        </router-link>
                                    </div>
                                </li>
                                <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center ">
                                    <div class="thumbnail">
                                        <router-link v-bind:to="'/account/addressmy'" title="My addresses">
                                             <i class="fa fa-map-marker"></i> My addresses
                                        </router-link>
                                       
                                    </div>
                                </li>
                                <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center ">
                                    <div class="thumbnail">
                                        <router-link v-bind:to="'/account/addressadd'" title="Add address">
                                            <i class="fa fa-edit"> </i> Add address
                                        </router-link>
                                    </div>
                                </li>
                                <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center ">
                                    <div class="thumbnail">
                                        <router-link v-bind:to="'/account/informationuser'" title="Add address">
                                            <i class="fa fa-cog"></i>My Personal
                                        </router-link>
                                    </div>
                                </li>
                                <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4  text-center ">
                                    <div class="thumbnail">
                                        <router-link v-bind:to="'/account/wishlist'" title="My wishlists">
                                            <i
                                            class="fa fa-heart"></i> My wishlists 
                                        </router-link>
                                    </div>
                                </li>
                            </ul>
                            <div class="clear clearfix"></div>
                        </div>
                    </div>
                    <!--/row end-->

                </div>
                <div class="col-lg-3 col-md-3 col-sm-5"></div>
            </div>
            <!--/row-->

            <div style="clear:both"></div>
        </div>
        <!-- /wrapper -->
        <!-- <div class="gap"></div> -->
    </div>
</template>
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

       

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            




                <li id="mainNav">
                    <a href="{{route('dashboard')}}">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>

                </li>


                <li id="brandNav">
                    <a href="http://localhost/pos/public/pos">
                        <i class="fa fa-shopping-cart"></i><span>Sale</span>
                    </a>
                </li>

                <li id="brandNav">
                    <a href="http://localhost/pos/public/manage/sale">
                        <i class="fa fa-shopping-cart"></i><span>Manage Sale </span>
                    </a>
                </li>


                <li class="treeview" id="mainNav">
                    <a href="#">
                        <i class="fa fa-users"></i>
                        <span>Users</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li id="mainNav"><a href="{{route('user')}}"><i class="fa fa-circle-o"></i>
                                Add
                                Users</a></li>

                        <li id="mainNav"><a href="{{route('user.usermanage')}}"><i
                                    class="fa fa-circle-o"></i>
                                Manage Users</a></li>
                    </ul>
                </li>


                <li class="treeview" id="mainNav">
                    <a href="#">
                        <i class="fa fa-users"></i>
                        <span>Customers</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li id="mainNav"><a href="{{route('customer')}}"><i
                                    class="fa fa-circle-o"></i> Add
                                Customers</a></li>

                        <li id="mainNav"><a href="{{route('customer.manage')}}"><i
                                    class="fa fa-circle-o"></i> Manage Customers</a></li>
                    </ul>
                </li>



                <li class="treeview" id="mainNav">
                    <a href="#">
                        <i class="fa fa-users"></i>
                        <span>Suppliers</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li id="mainNav"><a href="{{route('suppler')}}"><i
                                    class="fa fa-circle-o"></i>
                                Add Suppliers </a></li>

                        <li id="mainNav"><a href="{{route('supplier.manage')}}"><i
                                    class="fa fa-circle-o"></i> Manage Suppliers</a></li>
                    </ul>
                </li>





                <li id="categoryNav">
                    <a href="{{route('type')}}">
                        <i class="fa fa-files-o"></i> <span>Medicine Type</span>
                    </a>
                </li>

                <li id="categoryNav">
                    <a href="{{route('generic')}}">
                        <i class="fa fa-files-o"></i> <span>Medicine Generic</span>
                    </a>
                </li>


                <li id="categoryNav">
                    <a href="http://localhost/pos/public/stock">
                        <i class="fa fa-files-o"></i> <span>Stocks</span>
                    </a>
                </li>



                <li class="treeview" id="">
                    <a href="#">
                        <i class="fa fa-medkit"></i>
                        <span>Medicines</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li id="addMedicineNav"><a href="{{route('medicine')}}"><i
                                    class="fa fa-circle-o"></i>
                                Add Medicines</a></li>
                        <li id="manageMedicinNav"><a href="{{route('medicine.manage')}}"><i
                                    class="fa fa-circle-o"></i> Manage Medicines</a></li>
                    </ul>
                </li>



                <li class="treeview" id="">
                    <a href="#">
                        <i class="fa fa-cube"></i>
                        <span>Purchase</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li id="addPurchaseNav"><a href="http://localhost/pos/public/purchase"><i
                                    class="fa fa-circle-o"></i> Add Purchase</a></li>
                        <li id="managePurchaseNav"><a href="http://localhost/pos/public/purchaseadd"><i
                                    class="fa fa-circle-o"></i> Manage Purchase</a></li>
                    </ul>
                </li>


                <li class="treeview" id="mainOrdersNav">
                    <a href="#">
                        <i class="fa fa-dollar"></i>
                        <span>Payments</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>

                    <ul class="treeview-menu">

                        <li id="managepayment"><a href="http://localhost/pos/public/payment/manage"><i
                                    class="fa fa-circle-o"></i> Supplier
                                Payment</a></li>

                        <li id="managepayment"><a href="http://localhost/pos/public/payment/manage/customer"><i
                                    class="fa fa-circle-o"></i> Customer
                                Payment</a></li>

                    </ul>
                    <ul class="treeview-menu">

                        <li id="managepayment"><a href="http://localhost/pos/public/payment/manage"><i
                                    class="fa fa-circle-o"></i> Supplier
                                Payment</a></li>
                    </ul>
                </li>



                <li class="treeview" id="mainOrdersNav">
                    <a href="#">
                        <i class="glyphicon glyphicon-stats"></i>
                        <span>Report</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>

                    <ul class="treeview-menu">

                        <li id="managepayment"><a href="http://localhost/pos/public/report/sales"><i
                                    class="fa fa-circle-o"></i>Sale Report</a></li>

                        <li id="managepayment"><a href="http://localhost/pos/public/report/purchase"><i
                                    class="fa fa-circle-o"></i>Purchase Report</a></li>

                    </ul>

                </li>



                <li>
                    <a href="http://localhost/pos/public/logout"><i class="glyphicon glyphicon-log-out"></i> </i>
                        <span>Logout</span>
                    </a>
                </li>
            


            

        


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
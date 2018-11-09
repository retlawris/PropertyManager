<style>

    .table-block{margin-top:20px}
    .table-block table{border-collapse:collapse;margin:0;padding:0;width:100%;table-layout:fixed}
    /*.table-block :hover{box-shadow:0px 5px 43px rgba(0,0,0,0.18) !important}*/
    .table-block table th{font-size:.65rem !important;font-weight:700;color: black}
    .table-block table td{font-size:.75rem;font-weight:600;color:#4a4a4a;padding:.825rem .625em !important}
    .table-block table tr{background:#fcfcfc;border-bottom:1px solid #ededed;padding:.35em}
    .table-block table th,.table-block table td{padding:.625em;text-align:center}
    .table-block table th{font-size:.85em;letter-spacing:.1em;text-transform:uppercase}

    @media screen and (max-width: 600px){
        .table-block table{border:0}
        .table-block table caption{font-size:1.3em}
        .table-block table thead{border:none;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}
        .table-block table tr{border-bottom:3px solid #ddd;display:block;margin-bottom:.625em}
        .table-block table td{border-bottom:1px solid #ddd;display:block;font-size:.8em;text-align:right}
        .table-block table td:before{content:attr(data-label);float:left;font-weight:bold;text-transform:uppercase}
        .table-block table td:last-child{border-bottom:0}
    }

    .is-account-grid {
        margin-top:20px;
        padding: 0 15px 0 15px;
    }

    .table-block .btn {
        font-size: 10px;
    }

</style>




<!-- FAB -->
<div id="quickview-trigger"  class="menu-fab is-hidden-mobile">
    <a class="hamburger-btn" href="javascript:void(0);">
                <span class="menu-toggle">
                    <span class="icon-box-toggle">
                        <span class="rotate">
                            <i class="icon-line-top"></i>
                            <i class="icon-line-center"></i>
                            <i class="icon-line-bottom"></i>
                        </span>
                    </span>
                </span>
    </a>
</div><!-- /FAB -->

<!-- Categories Right quickview -->
<div class="category-quickview">
    <div class="inner">
        <ul class="category-menu">
            <li><a href="<?php echo base_url(); ?>backend/account">Account</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Logout</a></li>
            <li></li>
            <li></li>
        </ul>

        <!--div class="all-categories is-hidden-mobile">
            <a href="products.html">Show all categories</a>
            <div class="centered-divider"></div>
        </div-->
    </div>
</div>

<!-- Main wrapper -->
<div class="shop-wrapper">

    <!-- Main section -->
    <div class="section">
        <!-- Container -->
        <div class="container">

            <!-- Account Layout -->
            <div class="columns account-header">
                <div class="column is-10 is-offset-1 is-tablet-landscape-padded">
                    <!-- Title -->
                    <div class="account-title">
                        <h2>Owners</h2>
                    </div>

                    <!-- Account tabs -->
                    <div class="tabs account-tabs has-controls">
                        <ul>
                            <li><a href="<?php echo base_url(); ?>backend/dashboard">Dashboard</a></li>
                            <li class="is-active"><a href="<?php echo base_url(); ?>backend/owners">Owners</a></li>
                            <li><a href="<?php echo base_url(); ?>backend/properties">Properties</a></li>
                            <li><a href="<?php echo base_url(); ?>backend/tenants">Tenants</a></li>
                            <li><a href="<?php echo base_url(); ?>backend/account">Account</a></li>
                        </ul>
                    </div>

                    <!-- Account layout -->
                    <div class="columns is-account-grid is-multiline">

                        <div class="button-wrapper">
                            <button class="button feather-button primary-button upper-button raised" onclick="location.href='<?php echo base_url(); ?>backend/owners/add'">
                                <span>New Owner</span>
                            </button>
                        </div>

                        <!-- Dynamic Table Full Pagination -->
                        <div class="table-block animated preFadeInUp fadeInUp">
                            <table id="data-table2" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Telephone</th>
                                    <th>Address</th>
                                    <th>Location</th>

                                    <th>Property</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td data-label="ID">1</td>
                                    <td data-label="Name"><a href="<?php echo base_url(); ?>backend/owners/view">James Kamau</a></td>
                                    <td data-label="Email">james@gmail.com</td>
                                    <td data-label="Telephone">0723433222</td>
                                    <td data-label="Address">2345-00100 Nairobi</td>
                                    <td data-label="Location">Ngummo</td>

                                    <td data-label="Property">Walsh</td>
                                    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="location.href='<?php echo base_url(); ?>backend/owners/edit'"><span class="glyphicon glyphicon-pencil gi"></span></button></p></td>
                                    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash gi"></span></button></p></td>
                                </tr>
                                <tr>
                                    <td data-label="ID">2</td>
                                    <td data-label="Name"><a href="<?php echo base_url(); ?>backend/owners/view">Anne Mwiti</a></td>
                                    <td data-label="Email">anne@gmail.com</td>
                                    <td data-label="Telephone">0789123456</td>
                                    <td data-label="Address">3745-00100 Nairobi</td>
                                    <td data-label="Location">Highrise</td>

                                    <td data-label="Property">Laxcon</td>
                                    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="location.href='<?php echo base_url(); ?>backend/owners/edit'"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                                </tr>
                                <tr>
                                    <td data-label="ID">3</td>
                                    <td data-label="Name"><a href="<?php echo base_url(); ?>backend/owners/view">Allan Lang'at</a></td>
                                    <td data-label="Email">allan@gmail.com</td>
                                    <td data-label="Telephone">0778124209</td>
                                    <td data-label="Address">4545-00100 Nairobi</td>
                                    <td data-label="Location">South B</td>

                                    <td data-label="Property">Walsh</td>
                                    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="location.href='<?php echo base_url(); ?>backend/owners/edit'"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                                </tr>
                                <tr>
                                    <td data-label="ID">4</td>
                                    <td data-label="Name"><a href="<?php echo base_url(); ?>backend/owners/view">Kevin Mwaura</a></td>
                                    <td data-label="Email">kev@gmail.com</td>
                                    <td data-label="Telephone">0778945456</td>
                                    <td data-label="Address">937-00200 Nairobi</td>
                                    <td data-label="Location">Kenyatta</td>

                                    <td data-label="Property">Esipil</td>
                                    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="location.href='<?php echo base_url(); ?>backend/owners/edit'"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                                </tr>
                                <tr>
                                    <td data-label="ID">5</td>
                                    <td data-label="Name"><a href="<?php echo base_url(); ?>backend/owners/view">Kobi Kyrie</a></td>
                                    <td data-label="Email">kobi.kyrie@gmail.com</td>
                                    <td data-label="Telephone">0785643345</td>
                                    <td data-label="Address">87344-00100 Nairobi</td>
                                    <td data-label="Location">South C</td>

                                    <td data-label="Property">Tyto's</td>
                                    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="location.href='<?php echo base_url(); ?>backend/owners/edit'"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                                </tr>
                                <tr>
                                    <td data-label="ID">6</td>
                                    <td data-label="Name"><a href="<?php echo base_url(); ?>backend/owners/view">Winny Wambua</a></td>
                                    <td data-label="Email">winny@gmail.com</td>
                                    <td data-label="Telephone">0777345120</td>
                                    <td data-label="Address">3745-00100 Nairobi</td>
                                    <td data-label="Location">Roysambu</td>

                                    <td data-label="Property">Laxcon</td>
                                    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="location.href='<?php echo base_url(); ?>backend/owners/edit'"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                                </tr>
                                <tr>
                                    <td data-label="ID">7</td>
                                    <td data-label="Name"><a href="<?php echo base_url(); ?>backend/owners/view">Jaqueline Omondi</a></td>
                                    <td data-label="Email">j.omondi@gmail.com</td>
                                    <td data-label="Telephone">0712567289</td>
                                    <td data-label="Address">7450-00100 Nairobi</td>
                                    <td data-label="Location">Embakasi</td>

                                    <td data-label="Property">Walsh</td>
                                    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="location.href='<?php echo base_url(); ?>backend/owners/edit'"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                                </tr>
                                </tbody>
                            </table>
                        <!-- END Dynamic Table Full Pagination -->

                    </div>
                </div>
            </div>
        </div>
        <!-- /Container -->
    </div>
    <!-- /Main section -->
</div>
<!-- /Main wrapper -->

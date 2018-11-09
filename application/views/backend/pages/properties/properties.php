<style>

    .is-account-grid {
        margin-top:20px;
        padding: 0 15px 0 15px;
    }
	.button-wrapper {
            width: 100%;
        }

    #data-table_wrapper {
        width: 100%;
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
                        <h2>PROPERTIES</h2>
                    </div>

                    <!-- Account tabs -->
                    <div class="tabs account-tabs has-controls">
                        <ul>
                            <li><a href="<?php echo base_url(); ?>backend/dashboard">Dashboard</a></li>
                            <li><a href="<?php echo base_url(); ?>backend/owners">Owners</a></li>
                            <li class="is-active"><a href="<?php echo base_url(); ?>backend/properties">Properties</a></li>
                            <li><a href="<?php echo base_url(); ?>backend/tenants">Tenants</a></li>
                            <li><a href="<?php echo base_url(); ?>backend/account">Account</a></li>
                        </ul>
                    </div>

                    <!-- Account layout -->
                    <div class="columns is-account-grid is-multiline">

                        <div class="button-wrapper">
                            <button class="button feather-button primary-button upper-button raised" onclick="location.href='<?php echo base_url(); ?>backend/properties/add'">
                                <span>New Property</span>
                            </button>
                        </div>

                        <!-- Dynamic Table -->
                        <table id="data-table1" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Type</th>
                                <th>Property</th>
                                <th>Price</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Laxcon</td>
                                <td>Property</td>
                                <td>3B</td>
                                <td>Park</td>
                                <td>KSH 500</td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="location.href='<?php echo base_url(); ?>backend/properties/edit'"><span class="glyphicon glyphicon-pencil gi"></span></button></p></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash gi"></span></button></p></td>
                            </tr>
                            <tr>
                                <td>Laxcon</td>
                                <td>Property</td>
                                <td>2B</td>
                                <td>Lav</td>
                                <td>KSH 500</td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="location.href='<?php echo base_url(); ?>backend/properties/edit'"><span class="glyphicon glyphicon-pencil gi"></span></button></p></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash gi"></span></button></p></td>
                            </tr>
                            <tr>
                                <td>Walsh</td>
                                <td>Property</td>
                                <td>4B</td>
                                <td>Espo</td>
                                <td>KSH 500</td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="location.href='<?php echo base_url(); ?>backend/properties/edit'"><span class="glyphicon glyphicon-pencil gi"></span></button></p></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash gi"></span></button></p></td>
                            </tr>
                            <tr>
                                <td>Walsh</td>
                                <td>Property</td>
                                <td>Pent</td>
                                <td>Squad</td>
                                <td>KSH 700</td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="location.href='<?php echo base_url(); ?>backend/properties/edit'"><span class="glyphicon glyphicon-pencil gi"></span></button></p></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash gi"></span></button></p></td>
                            </tr>
                            <tr>
                                <td>Walsh</td>
                                <td>Property</td>
                                <td>Comm</td>
                                <td>500sq</td>
                                <td>KSH 1500</td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="location.href='<?php echo base_url(); ?>backend/properties/edit'"><span class="glyphicon glyphicon-pencil gi"></span></button></p></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash gi"></span></button></p></td>
                            </tr>
                            <tr>
                                <td>Laxcon</td>
                                <td>Property</td>
                                <td>Comm</td>
                                <td>1500sq</td>
                                <td>KSH 600</td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="location.href='<?php echo base_url(); ?>backend/properties/edit'"><span class="glyphicon glyphicon-pencil gi"></span></button></p></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash gi"></span></button></p></td>
                            </tr>
         					<tr>
                            	<td>Laxcon</td>
                            	<td>Poperty</td>
                            	<td>Comm</td>
                            	<td>2000sq</td>
                            	<td>KSH 600</td>
                            	<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="location.href='<?php echo base_url(); ?>backend/properties/edit'"><span class="glyphicon glyphicon-pencil gi"></span></button></p></td>
                            	<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash gi"></span></button></p></td>
                            </tr>
                            <tr>
                            	<td>Walsh</td>
                            	<td>Property</td>
                            	<td>Comm</td>
                            	<td>1500sq</td>
                            	<td>KSH 600</td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="location.href='<?php echo base_url(); ?>backend/properties/edit'"><span class="glyphicon glyphicon-pencil gi"></span></button></p></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash gi"></span></button></p></td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Type</th>
                                <th>Property</th>
                                <th>Price</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </tfoot>
                        </table>
                        <!-- END Dynamic Table -->

                    </div>
                </div>
            </div>
            <!-- /Container -->
        </div>
        <!-- /Main section -->
    </div>
    <!-- /Main wrapper -->

<div class="panel panel-default sidebar-menu">
    <!-- panel panel-default sidebar-menu Begin -->

    <div class="panel-heading">
        <!-- panel-heading Begin -->
        <h3 class="panel-title">
            Manufactures

            <div class="pull-right">
                <!-- pull-right Begin -->

                <a href="JavaScript:Void(0)" style="color:black;">

                    <span class="nav-toggle hide-show">
                        <!-- nav-toggle hide-show Begin -->

                        Hide

                    </span><!-- nav-toggle hide-show Finish -->

                </a>

            </div><!-- pull-right Finish -->

        </h3>
    </div><!-- panel-heading Finish -->

    <div class="panel-collapse collapse-data">
        <!-- panel-collapse collapse-data Begin -->

        <div class="panel-body">
            <!-- panel-body Begin -->

            <div class="input-group">
                <!-- input-group Begin -->

                <input type="text" class="form-control" id="dev-table-filter" data-filters="#dev-manufacturer"
                    data-action="filter" placeholder="Filter Manufactures">

                <a class="input-group-addon">
                    <!-- input-group-addon Begin -->

                    <i class="fa fa-search"></i>

                </a><!-- input-group-addon Finish -->

            </div><!-- input-group Finish -->

        </div><!-- panel-body Finish -->

        <div class="panel-body scroll-menu">
            <!-- panel-body Begin -->

            <ul class="nav nav-pills nav-stacked category-menu" id="dev-manufacturer">
                <!-- nav nav-pills nav-stacked category-menu Begin -->

                <?php getManufactures() ?>

            </ul><!-- nav nav-pills nav-stacked category-menu Finish -->

        </div><!-- panel-body Finish -->

    </div><!-- panel-collapse collapse-data Finish -->

</div><!-- panel panel-default sidebar-menu Finish -->

<div class="panel panel-default sidebar-menu">
    <!-- panel panel-default sidebar-menu Begin -->

    <div class="panel-heading">
        <!-- panel-heading Begin -->
        <h3 class="panel-title">
            Categories

            <div class="pull-right">
                <!-- pull-right Begin -->

                <a href="JavaScript:Void(0)" style="color:black;">

                    <span class="nav-toggle hide-show">
                        <!-- nav-toggle hide-show Begin -->

                        Hide

                    </span><!-- nav-toggle hide-show Finish -->

                </a>

            </div><!-- pull-right Finish -->

        </h3>
    </div><!-- panel-heading Finish -->

    <div class="panel-collapse collapse-data">
        <!-- panel-collapse collapse-data Begin -->

        <div class="panel-body">
            <!-- panel-body Begin -->

            <div class="input-group">
                <!-- input-group Begin -->

                <input type="text" class="form-control" id="dev-table-filter" data-filters="#dev-cat"
                    data-action="filter" placeholder="Filter Categories">

                <a class="input-group-addon">
                    <!-- input-group-addon Begin -->

                    <i class="fa fa-search"></i>

                </a><!-- input-group-addon Finish -->

            </div><!-- input-group Finish -->

        </div><!-- panel-body Finish -->

        <div class="panel-body scroll-menu">
            <!-- panel-body Begin -->

            <ul class="nav nav-pills nav-stacked category-menu" id="dev-cat">
                <!-- nav nav-pills nav-stacked category-menu Begin -->

                <?php getCats() ?>

            </ul><!-- nav nav-pills nav-stacked category-menu Finish -->

        </div><!-- panel-body Finish -->

    </div><!-- panel-collapse collapse-data Finish -->

</div><!-- panel panel-default sidebar-menu Finish -->

<div class="panel panel-default sidebar-menu">
    <!-- panel panel-default sidebar-menu Begin -->

    <div class="panel-heading">
        <!-- panel-heading Begin -->
        <h3 class="panel-title">
            Product Categories

            <div class="pull-right">
                <!-- pull-right Begin -->

                <a href="JavaScript:Void(0)" style="color:black;">

                    <span class="nav-toggle hide-show">
                        <!-- nav-toggle hide-show Begin -->

                        Hide

                    </span><!-- nav-toggle hide-show Finish -->

                </a>

            </div><!-- pull-right Finish -->

        </h3>
    </div><!-- panel-heading Finish -->

    <div class="panel-collapse collapse-data">
        <!-- panel-collapse collapse-data Begin -->

        <div class="panel-body">
            <!-- panel-body Begin -->

            <div class="input-group">
                <!-- input-group Begin -->

                <input type="text" class="form-control" id="dev-table-filter" data-filters="#dev-p-cat"
                    data-action="filter" placeholder="Filter Product Category">

                <a class="input-group-addon">
                    <!-- input-group-addon Begin -->

                    <i class="fa fa-search"></i>

                </a><!-- input-group-addon Finish -->

            </div><!-- input-group Finish -->

        </div><!-- panel-body Finish -->

        <div class="panel-body scroll-menu">
            <!-- panel-body Begin -->

            <ul class="nav nav-pills nav-stacked category-menu" id="dev-p-cat">
                <!-- nav nav-pills nav-stacked category-menu Begin -->

                <?php getPCats() ?>

            </ul><!-- nav nav-pills nav-stacked category-menu Finish -->

        </div><!-- panel-body Finish -->

    </div><!-- panel-collapse collapse-data Finish -->

</div><!-- panel panel-default sidebar-menu Finish -->
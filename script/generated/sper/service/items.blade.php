<div class="row-pd-5 row">
    <div class="service-item col-md-15" ng-repeat="service in services">
        <div class="panel panel-default mb-2">
            <div class="panel-heading pd-0">
                <div class="embed-responsive embed-responsive-4by3" style="overflow:hidden;">
                    <img class="img-responsive" ng-src="%%service.serviceimg%%" />
                </div>
            </div>
            <div class="panel-body">
                <a class="service-heading" href="#">
                    <h4>
                        %%service.servicename%%
                    </h4>
                </a>
                <address class="service-address">
                    %%service.address_identifier.addressname%%
                </address>
                <div class="clearfix">
                    <div class="pull-left">
                        <span class="glyphicon glyphicon-map-marker"></span>
                         2 chi nhanh
                    </div>
                    <div class="pull-right">
                        %%selectedCategory.categoryname%%
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="clearfix">
                    <div class="pull-left">
                        <span class="fa fa-heart-o fa-1x"></span>
                         200 
                        <span class="fa fa-comments-o fa-1x"></span>
                         200 
                        <span class="fa fa-share-alt fa-1x"></span>
                         200 
                    </div>
                    <div class="pull-right">
                        <span class="fa fa-bookmark fa-1x"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
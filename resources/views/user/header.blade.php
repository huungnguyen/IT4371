<ul class="x-navigation x-navigation-horizontal x-navigation-panel" ng-controller="NotificationController as controller" ng-cloak>
    <li class="xn-icon-button">
        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
    </li>
    <li class="xn-icon-button pull-right">
        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
    </li>
    {{--<li class="xn-icon-button pull-right">--}}
        {{--<a href="#"><span class="fa fa-comments"></span></a>--}}
        {{--<div class="informer informer-danger">@{{ controller.notifications.length }}</div>--}}
        {{--<div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">--}}
            {{--<div class="panel-heading">--}}
                {{--<h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>--}}
                {{--<div class="pull-right">--}}
                    {{--<span class="label label-danger">@{{ controller.notifications.length }} new</span>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">--}}
                {{--<a href="#" class="list-group-item">--}}
                    {{--<div class="list-group-status status-online"></div>--}}
                    {{--<img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe"/>--}}
                    {{--<span class="contacts-title">John Doe</span>--}}
                    {{--<p>Praesent placerat tellus id augue condimentum</p>--}}
                {{--</a>--}}
                {{--<a href="#" class="list-group-item">--}}
                    {{--<div class="list-group-status status-away"></div>--}}
                    {{--<img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk"/>--}}
                    {{--<span class="contacts-title">Dmitry Ivaniuk</span>--}}
                    {{--<p>Donec risus sapien, sagittis et magna quis</p>--}}
                {{--</a>--}}
                {{--<a href="#" class="list-group-item">--}}
                    {{--<div class="list-group-status status-away"></div>--}}
                    {{--<img src="assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali"/>--}}
                    {{--<span class="contacts-title">Nadia Ali</span>--}}
                    {{--<p>Mauris vel eros ut nunc rhoncus cursus sed</p>--}}
                {{--</a>--}}
                {{--<a href="#" class="list-group-item">--}}
                    {{--<div class="list-group-status status-offline"></div>--}}
                    {{--<img src="assets/images/users/user6.jpg" class="pull-left" alt="Darth Vader"/>--}}
                    {{--<span class="contacts-title">Darth Vader</span>--}}
                    {{--<p>I want my money back!</p>--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="panel-footer text-center">--}}
                {{--<a href="pages-messages.html">Show all messages</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</li>--}}
    <li class="xn-icon-text pull-right">
        <div class="text-info-account">
            <span> Số dư: @{{ controller.bankAccount.balance | number }}</span>
        </div>
    </li>
    <li class="xn-icon-text pull-right">
        <div class="text-info-account">
            <span>Số tài khoản: @{{ controller.bankAccount.account_number }}</span>
        </div>
    </li>
</ul>
<style>
    .text-info-account{
        font-size: 20px;
        color: white;
        padding-top: 12px;
        margin-right: 22px;
    }
    @media only screen and (max-width: 1024px) {
        .x-navigation.x-navigation-panel li.xn-icon-text{
            width: auto;
        }
        .text-info-account{
            font-size: 11.2px;
            padding-top: 20px;
            margin-right: 6px;
        }
    }
</style>
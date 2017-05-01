<ul class="x-navigation">
    <li class="xn-logo">
        <a href="/">STAFF</a>
        <a href="#" class="x-navigation-control"></a>
    </li>
    <li class="xn-profile">
        <a href="#" class="profile-mini">
            <img src="{{url(Auth::guard('staff')->user()->avatar)}}"/>
        </a>
        <div class="profile">
            <div class="profile-image" id="choose_profile">
                <label for="chooseFile" >
                    <img src="{{url(Auth::guard('staff')->user()->avatar)}}"/>
                </label>
                <input type="file" class="upload" id="chooseFile" name="fileImg" style="visibility:hidden"/>
            </div>
            <div class="profile-data">
                <div class="profile-data-name">{{Auth::guard('staff')->user()->name}}</div>
            </div>
            <div class="profile-controls">
            </div>
        </div>
    </li>
    <li class="xn-title">Account</li>
    <li>
        <a href="/staff/update-info"><span class="glyphicon glyphicon-tag"></span><span class="xn-text">Thay đổi thông tin</span></a>
        <a href="/staff/manage-password"><span class="glyphicon glyphicon-tag"></span><span class="xn-text">Quản lý mật khẩu</span></a>
    </li>
    <li class="xn-title">Manage Customers</li>
    <li>
        <a href="/staff/create-customer"><span class="glyphicon glyphicon-tag"></span><span class="xn-text">Thêm khách hàng</span></a>
    </li>
    <li>
        <a href="#"><span class="glyphicon glyphicon-tag"></span><span class="xn-text">Thêm người dùng chung thẻ</span></a>
    </li>
</ul>
<script>
    $(document).ready(function () {
        $( "#chooseFile" ).change(function() {
            var img = new FormData();
            img.append('file', $('#chooseFile')[0].files[0]);
            $.ajax({
                method: "POST",
                url: "/staff/update-avatar",
                processData: false,  // tell jQuery not to process the data
                contentType: false,  // tell jQuery not to set contentType
                data: img,
                success: function (data) {
                    $('#chooseFile').val('');
                    location.reload();
                }
            });
        });
    });
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    @include('Admin.Layout.head')
</head>
<body>
<div class="container-scroller">
    @include('Admin.Layout.sider')
    <div class="container-fluid page-body-wrapper">
        @include('Admin.Layout.navbar')
        @include('Admin.Layout.main-panel')
    </div>
</div>
@include('Admin.Layout.js')
</body>
</html>

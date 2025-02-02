<!doctype html>
<html
    lang="en"
    class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="assets/"
    data-template="vertical-menu-template-no-customizer"
    data-style="light">
<head>
    @include('include.header')
<style>
    .bg-menu-theme.menu-vertical .menu-item.active > .menu-link:not(.menu-toggle) {
        background: linear-gradient(270deg, #058283 0%, #058283 100%) !important;
        box-shadow: 0px 2px 6px 0px #05828357 !important;
        color: #fff !important;
    }
    .bg-primary {
        background-color: #058081 !important;
    }

    a.bg-primary:hover, a.bg-primary:focus {
        background-color: black !important;
    }
    .btn-green{
        color: #fff !important;
        background-color: #058283 !important;
        border-color: #058283 !important;
    }
    .btn-green:hover {
        color: #fff !important;
        background-color: #000000 !important;
        border-color: #000000 !important;
    }
    .page-item.active .page-link, .page-item.active .page-link:hover, .page-item.active .page-link:focus, .pagination li.active > a:not(.page-link), .pagination li.active > a:not(.page-link):hover, .pagination li.active > a:not(.page-link):focus {
        border-color: #058283;
        background-color: #058283;
        color: #fff;
    }
    .light-style div.dataTables_wrapper div.dataTables_info {
        color: #000000;
        font-weight: 600;
    }
</style>
</head>
<body>

@yield('content')
@include('include.footer')
<script>
    window.ASSET_URL="{{config('app.app_url')}}"
</script>
</body>
</html>

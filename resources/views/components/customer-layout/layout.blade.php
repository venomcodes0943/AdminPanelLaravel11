<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Robotech - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Tailwind Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="Mannatthemes" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('/assets/images/favicon.ico') }}" />
    <!-- Css -->
    {{ $head }}
</head>

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical"
    class="bg-[#EEF0FC] dark:bg-gray-900">

    <!-- leftbar-tab-menu -->
    <x-customer-layout.navbar />

    <div class="ltr:flex flex-1 rtl:flex-row-reverse">
        <div class="page-wrapper relative  duration-300 pt-0 w-full">
            <div class="xl:w-full  min-h-[calc(100vh-0px)] relative pb-0">


                {{ $slot }}


                <x-customer-layout.footer />
            </div><!--end main-->
        </div><!--end page-wrapper-->
    </div><!--end div-->


    <!-- JAVASCRIPTS -->
    <!-- <div class="menu-overlay"></div> -->
    {{ $script }}
    <!-- JAVASCRIPTS -->
</body>

</html>

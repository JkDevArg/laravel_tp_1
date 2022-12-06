<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('backend/images/brand/favicon.ico')}}" />

    <!-- TITLE -->
    <title>{{ __('Dashboard') }} # FetuDev </title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{asset('backend/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/css/dark-style.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/css/transparent-style.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/skin-modes.css')}}" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{asset('backend/css/icons.css')}}" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('backend/colors/color1.css')}}" />

</head>

<body class="app sidebar-mini ltr light-mode">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{asset('backend/images/loader.svg')}}" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            @include('backend.layouts.navbar')

            <!--APP-SIDEBAR-->
            @include('backend.layouts.sidebar')

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Dashboard 01</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Total Users</h6>
                                                        <h2 class="mb-0 number-font">44,278</h2>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="chart-wrapper mt-1">
                                                            <canvas id="saleschart"
                                                                class="h-8 w-9 chart-dropshadow"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="text-muted fs-12"><span class="text-secondary"><i
                                                            class="fe fe-arrow-up-circle  text-secondary"></i> 5%</span>
                                                    Last week</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Total Profit</h6>
                                                        <h2 class="mb-0 number-font">67,987</h2>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="chart-wrapper mt-1">
                                                            <canvas id="leadschart"
                                                                class="h-8 w-9 chart-dropshadow"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="text-muted fs-12"><span class="text-pink"><i
                                                            class="fe fe-arrow-down-circle text-pink"></i> 0.75%</span>
                                                    Last 6 days</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Total Expenses</h6>
                                                        <h2 class="mb-0 number-font">$76,965</h2>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="chart-wrapper mt-1">
                                                            <canvas id="profitchart"
                                                                class="h-8 w-9 chart-dropshadow"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="text-muted fs-12"><span class="text-green"><i
                                                            class="fe fe-arrow-up-circle text-green"></i> 0.9%</span>
                                                    Last 9 days</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                        <div class="card overflow-hidden">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="mt-2">
                                                        <h6 class="">Total Cost</h6>
                                                        <h2 class="mb-0 number-font">$59,765</h2>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="chart-wrapper mt-1">
                                                            <canvas id="costchart"
                                                                class="h-8 w-9 chart-dropshadow"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="text-muted fs-12"><span class="text-warning"><i
                                                            class="fe fe-arrow-up-circle text-warning"></i> 0.6%</span>
                                                    Last year</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-1 END -->

                        <!-- ROW-2 -->
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-9">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Sales Analytics</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex mx-auto text-center justify-content-center mb-4">
                                            <div class="d-flex text-center justify-content-center me-3"><span
                                                    class="dot-label bg-primary my-auto"></span>Total Sales</div>
                                            <div class="d-flex text-center justify-content-center"><span
                                                    class="dot-label bg-secondary my-auto"></span>Total Orders</div>
                                        </div>
                                        <div class="chartjs-wrapper-demo">
                                            <canvas id="transactions" class="chart-dropshadow"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
                                <div class="card overflow-hidden">
                                    <div class="card-body pb-0 bg-recentorder">
                                        <h3 class="card-title text-white">Recent Orders</h3>
                                        <div class="chartjs-wrapper-demo">
                                            <canvas id="recentorders" class="chart-dropshadow"></canvas>
                                        </div>
                                    </div>
                                    <div id="flotback-chart" class="flot-background"></div>
                                    <div class="card-body">
                                        <div class="d-flex mb-4 mt-3">
                                            <div
                                                class="avatar avatar-md bg-secondary-transparent text-secondary bradius me-3">
                                                <i class="fe fe-check"></i>
                                            </div>
                                            <div class="">
                                                <h6 class="mb-1 fw-semibold">Delivered Orders</h6>
                                                <p class="fw-normal fs-12"> <span class="text-success">3.5%</span>
                                                    increased </p>
                                            </div>
                                            <div class=" ms-auto my-auto">
                                                <p class="fw-bold fs-20"> 1,768 </p>
                                            </div>
                                        </div>
                                        <div class="d-flex">
                                            <div class="avatar  avatar-md bg-pink-transparent text-pink bradius me-3">
                                                <i class="fe fe-x"></i>
                                            </div>
                                            <div class="">
                                                <h6 class="mb-1 fw-semibold">Cancelled Orders</h6>
                                                <p class="fw-normal fs-12"> <span class="text-success">1.2%</span>
                                                    increased </p>
                                            </div>
                                            <div class=" ms-auto my-auto">
                                                <p class="fw-bold fs-20 mb-0"> 3,675 </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL END -->
                        </div>
                        <!-- ROW-2 END -->

                        <!-- ROW-3 -->
                        <div class="row">
                            <div class="col-xl-4 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title fw-semibold">Daily Activity</h4>
                                    </div>
                                    <div class="card-body pb-0">
                                        <ul class="task-list">
                                            <li class="d-sm-flex">
                                                <div>
                                                    <i class="task-icon bg-primary"></i>
                                                    <h6 class="fw-semibold">Task Finished<span
                                                            class="text-muted fs-11 mx-2 fw-normal">09 July 2021</span>
                                                    </h6>
                                                    <p class="text-muted fs-12">Adam Berry finished task on<a href="javascript:void(0)"
                                                            class="fw-semibold"> Project Management</a></p>
                                                </div>
                                                <div class="ms-auto d-md-flex">
                                                    <a href="javascript:void(0)" class="text-muted me-2" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Edit" aria-label="Edit"><span
                                                            class="fe fe-edit"></span></a>
                                                    <a href="javascript:void(0)" class="text-muted"><span
                                                            class="fe fe-trash-2"></span></a>
                                                </div>
                                            </li>
                                            <li class="d-sm-flex">
                                                <div>
                                                    <i class="task-icon bg-secondary"></i>
                                                    <h6 class="fw-semibold">New Comment<span
                                                            class="text-muted fs-11 mx-2 fw-normal">05 July 2021</span>
                                                    </h6>
                                                    <p class="text-muted fs-12">Victoria commented on Project <a
                                                            href="javascript:void(0)" class="fw-semibold"> AngularJS Template</a></p>
                                                </div>
                                                <div class="ms-auto d-md-flex">
                                                    <a href="javascript:void(0)" class="text-muted me-2" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Edit" aria-label="Edit"><span
                                                            class="fe fe-edit"></span></a>
                                                    <a href="javascript:void(0)" class="text-muted"><span
                                                            class="fe fe-trash-2"></span></a>
                                                </div>
                                            </li>
                                            <li class="d-sm-flex">
                                                <div>
                                                    <i class="task-icon bg-success"></i>
                                                    <h6 class="fw-semibold">New Comment<span
                                                            class="text-muted fs-11 mx-2 fw-normal">25 June 2021</span>
                                                    </h6>
                                                    <p class="text-muted fs-12">Victoria commented on Project <a
                                                            href="javascript:void(0)" class="fw-semibold"> AngularJS Template</a></p>
                                                </div>
                                                <div class="ms-auto d-md-flex">
                                                    <a href="javascript:void(0)" class="text-muted me-2" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Edit" aria-label="Edit"><span
                                                            class="fe fe-edit"></span></a>
                                                    <a href="javascript:void(0)" class="text-muted"><span
                                                            class="fe fe-trash-2"></span></a>
                                                </div>
                                            </li>
                                            <li class="d-sm-flex">
                                                <div>
                                                    <i class="task-icon bg-warning"></i>
                                                    <h6 class="fw-semibold">Task Overdue<span
                                                            class="text-muted fs-11 mx-2 fw-normal">14 June 2021</span>
                                                    </h6>
                                                    <p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a
                                                            href="javascript:void(0)" class="fw-semibold"> Integrated management</a></p>
                                                </div>
                                                <div class="ms-auto d-md-flex">
                                                    <a href="javascript:void(0)" class="text-muted me-2" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Edit" aria-label="Edit"><span
                                                            class="fe fe-edit"></span></a>
                                                    <a href="javascript:void(0)" class="text-muted"><span
                                                            class="fe fe-trash-2"></span></a>
                                                </div>
                                            </li>
                                            <li class="d-sm-flex">
                                                <div>
                                                    <i class="task-icon bg-danger"></i>
                                                    <h6 class="fw-semibold">Task Overdue<span
                                                            class="text-muted fs-11 mx-2 fw-normal">29 June 2021</span>
                                                    </h6>
                                                    <p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a
                                                            href="javascript:void(0)" class="fw-semibold"> Integrated management</a></p>
                                                </div>
                                                <div class="ms-auto d-md-flex">
                                                    <a href="javascript:void(0)" class="text-muted me-2" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Edit" aria-label="Edit"><span
                                                            class="fe fe-edit"></span></a>
                                                    <a href="javascript:void(0)" class="text-muted"><span
                                                            class="fe fe-trash-2"></span></a>
                                                </div>
                                            </li>
                                            <li class="d-sm-flex">
                                                <div>
                                                    <i class="task-icon bg-info"></i>
                                                    <h6 class="fw-semibold">Task Finished<span
                                                            class="text-muted fs-11 mx-2 fw-normal">09 July 2021</span>
                                                    </h6>
                                                    <p class="text-muted fs-12">Adam Berry finished task on<a href="javascript:void(0)"
                                                            class="fw-semibold"> Project Management</a></p>
                                                </div>
                                                <div class="ms-auto d-md-flex">
                                                    <a href="javascript:void(0)" class="text-muted me-2" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Edit" aria-label="Edit"><span
                                                            class="fe fe-edit"></span></a>
                                                    <a href="javascript:void(0)" class="text-muted"><span
                                                            class="fe fe-trash-2"></span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12">
                                <div class="card overflow-hidden">
                                    <div class="card-header">
                                        <div>
                                            <h3 class="card-title">Sales Report by Locations with Devices</h3>
                                        </div>
                                    </div>
                                    <div class="card-body p-0 mt-2">
                                        <div class="">
                                            <div id="world-map-markers1" class="worldh world-map h-250"></div>
                                        </div>
                                        <div class="table-responsive mt-2 text-center">
                                            <table class="table text-nowrap border-dashed mb-0">
                                                <thead>
                                                    <tr>
                                                        <th class="text-start">Device</th>
                                                        <th class="">USA</th>
                                                        <th class="">India</th>
                                                        <th class="">Bahrain</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-start p-4"><span
                                                                class="sales-icon text-primary mx-2 brround bg-primary-transparent p-2"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="18" fill="currentColor" class="bi
                                    bi-phone" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                                                                    <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                                                </svg></span><span class="mobile">Mobiles</span>
                                                        </td>
                                                        <td class="p-4">17%</td>
                                                        <td class="p-4">22%</td>
                                                        <td class="p-4">11%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-start p-4"><span
                                                                class="sales-icon text-secondary mx-2 brround bg-secondary-transparent p-2"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="18" fill="currentColor
                                " class="bi bi-display" viewBox="0 0 16 16">
                                                                    <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2V4zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46
                                    0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757
                                    0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z" />
                                                                </svg></span>Desktops</td>
                                                        <td class="p-4">34%</td>
                                                        <td class="p-4">76%</td>
                                                        <td class="p-4">58%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-start p-4"><span
                                                                class="sales-icon text-danger mx-2 brround bg-danger-transparent p-2"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="18" fill="currentColor" class="bi bi-tablet
                                " viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z" />
                                                                    <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                                                </svg></span>Tablets</td>
                                                        <td class="p-4">56%</td>
                                                        <td class="p-4">83%</td>
                                                        <td class="p-4">66%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--end /table-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title fw-semibold">Browser Usage</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="browser-stats">
                                            <div class="row mb-4">
                                                <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">
                                                    <img src="{{asset('backend/images/browsers/chrome.svg')}}" class="img-fluid"
                                                        alt="img">
                                                </div>
                                                <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">
                                                    <div class="d-flex align-items-end justify-content-between mb-1">
                                                        <h6 class="mb-1">Chrome</h6>
                                                        <h6 class="fw-semibold mb-1">35,502 <span
                                                                class="text-success fs-11">(<i
                                                                    class="fe fe-arrow-up"></i>12.75%)</span></h6>
                                                    </div>
                                                    <div class="progress h-2 mb-3">
                                                        <div class="progress-bar bg-primary" style="width: 70%;"
                                                            role="progressbar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">
                                                    <img src="{{asset('backend/images/browsers/opera.svg')}}" class="img-fluid"
                                                        alt="img">
                                                </div>
                                                <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">
                                                    <div class="d-flex align-items-end justify-content-between mb-1">
                                                        <h6 class="mb-1">Opera</h6>
                                                        <h6 class="fw-semibold mb-1">12,563 <span
                                                                class="text-danger fs-11">(<i
                                                                    class="fe fe-arrow-down"></i>15.12%)</span></h6>
                                                    </div>
                                                    <div class="progress h-2 mb-3">
                                                        <div class="progress-bar bg-secondary" style="width: 40%;"
                                                            role="progressbar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">
                                                    <img src="{{asset('backend/images/browsers/ie.svg')}}" class="img-fluid"
                                                        alt="img">
                                                </div>
                                                <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">
                                                    <div class="d-flex align-items-end justify-content-between mb-1">
                                                        <h6 class="mb-1">IE</h6>
                                                        <h6 class="fw-semibold mb-1">25,364 <span
                                                                class="text-success fs-11">(<i
                                                                    class="fe fe-arrow-down"></i>24.37%)</span></h6>
                                                    </div>
                                                    <div class="progress h-2 mb-3">
                                                        <div class="progress-bar bg-success" style="width: 50%;"
                                                            role="progressbar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">
                                                    <img src="{{asset('backend/images/browsers/firefox.svg')}}" class="img-fluid"
                                                        alt="img">
                                                </div>
                                                <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">
                                                    <div class="d-flex align-items-end justify-content-between mb-1">
                                                        <h6 class="mb-1">Firefox</h6>
                                                        <h6 class="fw-semibold mb-1">14,635 <span
                                                                class="text-success fs-11">(<i
                                                                    class="fe fe-arrow-down"></i>15.63%)</span></h6>
                                                    </div>
                                                    <div class="progress h-2 mb-3">
                                                        <div class="progress-bar bg-danger" style="width: 50%;"
                                                            role="progressbar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">
                                                    <img src="{{asset('backend/images/browsers/edge.svg')}}" class="img-fluid"
                                                        alt="img">
                                                </div>
                                                <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">
                                                    <div class="d-flex align-items-end justify-content-between mb-1">
                                                        <h6 class="mb-1">Edge</h6>
                                                        <h6 class="fw-semibold mb-1">15,453 <span
                                                                class="text-danger fs-11">(<i
                                                                    class="fe fe-arrow-down"></i>23.70%)</span></h6>
                                                    </div>
                                                    <div class="progress h-2 mb-3">
                                                        <div class="progress-bar bg-warning" style="width: 10%;"
                                                            role="progressbar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">
                                                    <img src="{{asset('backend/images/browsers/safari.svg')}}" class="img-fluid"
                                                        alt="img">
                                                </div>
                                                <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">
                                                    <div class="d-flex align-items-end justify-content-between mb-1">
                                                        <h6 class="mb-1">Safari</h6>
                                                        <h6 class="fw-semibold mb-1">10,054 <span
                                                                class="text-success fs-11">(<i
                                                                    class="fe fe-arrow-up"></i>11.04%)</span></h6>
                                                    </div>
                                                    <div class="progress h-2 mb-3">
                                                        <div class="progress-bar bg-info" style="width: 40%;"
                                                            role="progressbar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-2 col-lg-3 col-xl-3 col-xxl-2 mb-sm-0 mb-3">
                                                    <img src="{{asset('backend/images/browsers/netscape.svg')}}" class="img-fluid"
                                                        alt="img">
                                                </div>
                                                <div class="col-sm-10 col-lg-9 col-xl-9 col-xxl-10 ps-sm-0">
                                                    <div class="d-flex align-items-end justify-content-between mb-1">
                                                        <h6 class="mb-1">Netscape</h6>
                                                        <h6 class="fw-semibold mb-1">35,502 <span
                                                                class="text-success fs-11">(<i
                                                                    class="fe fe-arrow-up"></i>12.75%)</span></h6>
                                                    </div>
                                                    <div class="progress h-2 mb-3">
                                                        <div class="progress-bar bg-green" style="width: 30%;"
                                                            role="progressbar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-3 END -->

                        <!-- ROW-4 -->
                        <div class="row">
                            <div class="col-12 col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title mb-0">Product Sales</h3>
                                    </div>
                                    <div class="card-body pt-4">
                                        <div class="grid-margin">
                                            <div class="">
                                                <div class="panel panel-primary">
                                                    <div class="tab-menu-heading border-0 p-0">
                                                        <div class="tabs-menu1">
                                                            <!-- Tabs -->
                                                            <ul class="nav panel-tabs product-sale">
                                                                <li><a href="#tab5" class="active"
                                                                        data-bs-toggle="tab">All products</a></li>
                                                                <li><a href="#tab6" data-bs-toggle="tab"
                                                                        class="text-dark">Shipped</a></li>
                                                                <li><a href="#tab7" data-bs-toggle="tab"
                                                                        class="text-dark">Pending</a></li>
                                                                <li><a href="#tab8" data-bs-toggle="tab"
                                                                        class="text-dark">Cancelled</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body tabs-menu-body border-0 pt-0">
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tab5">
                                                                <div class="table-responsive">
                                                                    <table id="data-table"
                                                                        class="table table-bordered text-nowrap mb-0">
                                                                        <thead class="border-top">
                                                                            <tr>
                                                                                <th class="bg-transparent border-bottom-0"
                                                                                    style="width: 5%;">Tracking Id</th>
                                                                                <th
                                                                                    class="bg-transparent border-bottom-0">
                                                                                    Product</th>
                                                                                <th
                                                                                    class="bg-transparent border-bottom-0">
                                                                                    Customer</th>
                                                                                <th
                                                                                    class="bg-transparent border-bottom-0">
                                                                                    Date</th>
                                                                                <th
                                                                                    class="bg-transparent border-bottom-0">
                                                                                    Amount</th>
                                                                                <th
                                                                                    class="bg-transparent border-bottom-0">
                                                                                    Payment Mode</th>
                                                                                <th class="bg-transparent border-bottom-0"
                                                                                    style="width: 10%;">Status</th>
                                                                                <th class="bg-transparent border-bottom-0"
                                                                                    style="width: 5%;">Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            #98765490</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <span class="avatar bradius"
                                                                                            style="background-image: url({{asset('backend/images/orders/10.jpg')}})"></span>
                                                                                        <div
                                                                                            class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Headsets</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Cherry Blossom</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td><span class="mt-sm-2 d-block">30 Aug
                                                                                        2021</span></td>
                                                                                <td><span
                                                                                        class="fw-semibold mt-sm-2 d-block">$6.721.5</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Online Payment</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="g-2">
                                                                                        <a class="btn text-primary btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Edit"><span
                                                                                                class="fe fe-edit fs-14"></span></a>
                                                                                        <a class="btn text-danger btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Delete"><span
                                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            #76348798</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <span class="avatar bradius"
                                                                                            style="background-image: url({{asset('backend/images/orders/12.jpg')}})"></span>
                                                                                        <div
                                                                                            class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Flower Pot</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Simon Sais</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td><span class="mt-sm-2 d-block">15 Nov
                                                                                        2021</span></td>
                                                                                <td><span
                                                                                        class="fw-semibold mt-sm-2 d-block">$35,7863</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Online Payment</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="g-2">
                                                                                        <a class="btn text-primary btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Edit"><span
                                                                                                class="fe fe-edit fs-14"></span></a>
                                                                                        <a class="btn text-danger btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Delete"><span
                                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            #23986456</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <span class="avatar bradius"
                                                                                            style="background-image: url({{asset('backend/images/orders/4.jpg')}})"></span>
                                                                                        <div
                                                                                            class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Pen Drive</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Manny Jah</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td><span class="mt-sm-2 d-block">27 Jan
                                                                                        2021</span></td>
                                                                                <td><span
                                                                                        class="fw-semibold mt-sm-2 d-block">$5,89,6437</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Cash on Delivery</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="g-2">
                                                                                        <a class="btn text-primary btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Edit"><span
                                                                                                class="fe fe-edit fs-14"></span></a>
                                                                                        <a class="btn text-danger btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Delete"><span
                                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            #87456325</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <span class="avatar bradius"
                                                                                            style="background-image: url({{asset('backend/images/orders/8.jpg')}})"></span>
                                                                                        <div
                                                                                            class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                New Bowl</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Florinda Carasco</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td><span class="mt-sm-2 d-block">19 Sep
                                                                                        2021</span></td>
                                                                                <td><span
                                                                                        class="fw-semibold mt-sm-2 d-block">$17.98</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Online Payment</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="g-2">
                                                                                        <a class="btn text-primary btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Edit"><span
                                                                                                class="fe fe-edit fs-14"></span></a>
                                                                                        <a class="btn text-danger btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Delete"><span
                                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            #65783926</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <span class="avatar bradius"
                                                                                            style="background-image: url({{asset('backend/images/orders/6.jpg')}})"></span>
                                                                                        <div
                                                                                            class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Leather Watch</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Ivan Notheridiya</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td><span class="mt-sm-2 d-block">06 Oct
                                                                                        2021</span></td>
                                                                                <td><span
                                                                                        class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Cash on Delivery</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="g-2">
                                                                                        <a class="btn text-primary btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Edit"><span
                                                                                                class="fe fe-edit fs-14"></span></a>
                                                                                        <a class="btn text-danger btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Delete"><span
                                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            #34654895</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <span class="avatar bradius"
                                                                                            style="background-image: url({{asset('backend/images/orders/1.jpg')}})"></span>
                                                                                        <div
                                                                                            class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Digital Camera</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Willie Findit</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td><span class="mt-sm-2 d-block">10 Jul
                                                                                        2021</span></td>
                                                                                <td><span
                                                                                        class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Cash on Delivery</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="g-2">
                                                                                        <a class="btn text-primary btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Edit"><span
                                                                                                class="fe fe-edit fs-14"></span></a>
                                                                                        <a class="btn text-danger btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Delete"><span
                                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            #98765345</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <span class="avatar bradius"
                                                                                            style="background-image: url({{asset('backend/images/orders/11.jpg')}})"></span>
                                                                                        <div
                                                                                            class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Earphones</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Addie Minstra</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td><span class="mt-sm-2 d-block">25 Jun
                                                                                        2021</span></td>
                                                                                <td><span
                                                                                        class="fw-semibold mt-sm-2 d-block">$7,34,9768</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Online Payment</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="g-2">
                                                                                        <a class="btn text-primary btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Edit"><span
                                                                                                class="fe fe-edit fs-14"></span></a>
                                                                                        <a class="btn text-danger btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Delete"><span
                                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            #67546577</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <span class="avatar bradius"
                                                                                            style="background-image: url({{asset('backend/images/orders/2.jpg')}})"></span>
                                                                                        <div
                                                                                            class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Shoes</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Laura Biding</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td><span class="mt-sm-2 d-block">22 Feb
                                                                                        2021</span></td>
                                                                                <td><span
                                                                                        class="fw-semibold mt-sm-2 d-block">$7.76.654</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Cash on Delivery</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="g-2">
                                                                                        <a class="btn text-primary btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Edit"><span
                                                                                                class="fe fe-edit fs-14"></span></a>
                                                                                        <a class="btn text-danger btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Delete"><span
                                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="tab6">
                                                                <div class="table-responsive">
                                                                    <table
                                                                        class="table table-bordered text-nowrap mb-0">
                                                                        <thead class="border-top">
                                                                            <tr>
                                                                                <th class="bg-transparent border-bottom-0"
                                                                                    style="width: 5%;">Tracking Id</th>
                                                                                <th
                                                                                    class="bg-transparent border-bottom-0">
                                                                                    Product</th>
                                                                                <th
                                                                                    class="bg-transparent border-bottom-0">
                                                                                    Customer</th>
                                                                                <th
                                                                                    class="bg-transparent border-bottom-0">
                                                                                    Date</th>
                                                                                <th
                                                                                    class="bg-transparent border-bottom-0">
                                                                                    Amount</th>
                                                                                <th
                                                                                    class="bg-transparent border-bottom-0">
                                                                                    Payment Mode</th>
                                                                                <th class="bg-transparent border-bottom-0"
                                                                                    style="width: 10%;">Status</th>
                                                                                <th class="bg-transparent border-bottom-0"
                                                                                    style="width: 5%;">Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            #98765490</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <span class="avatar bradius"
                                                                                            style="background-image: url({{asset('backend/images/orders/10.jpg')}})"></span>
                                                                                        <div
                                                                                            class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Headsets</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Cherry Blossom</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td><span class="mt-sm-2 d-block">30 Aug
                                                                                        2021</span></td>
                                                                                <td><span
                                                                                        class="fw-semibold mt-sm-2 d-block">$6.721.5</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Online Payment</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="g-2">
                                                                                        <a class="btn text-primary btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Edit"><span
                                                                                                class="fe fe-edit fs-14"></span></a>
                                                                                        <a class="btn text-danger btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Delete"><span
                                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            #76348798</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <span class="avatar bradius"
                                                                                            style="background-image: url({{asset('backend/images/orders/12.jpg')}})"></span>
                                                                                        <div
                                                                                            class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Flower Pot</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Simon Sais</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td><span class="mt-sm-2 d-block">15 Nov
                                                                                        2021</span></td>
                                                                                <td><span
                                                                                        class="fw-semibold mt-sm-2 d-block">$35,7863</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Online Payment</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="g-2">
                                                                                        <a class="btn text-primary btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Edit"><span
                                                                                                class="fe fe-edit fs-14"></span></a>
                                                                                        <a class="btn text-danger btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Delete"><span
                                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            #23986456</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <span class="avatar bradius"
                                                                                            style="background-image: url({{asset('backend/images/orders/4.jpg')}})"></span>
                                                                                        <div
                                                                                            class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Pen Drive</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Manny Jah</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td><span class="mt-sm-2 d-block">27 Jan
                                                                                        2021</span></td>
                                                                                <td><span
                                                                                        class="fw-semibold mt-sm-2 d-block">$5,89,6437</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Cash on Delivery</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="g-2">
                                                                                        <a class="btn text-primary btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Edit"><span
                                                                                                class="fe fe-edit fs-14"></span></a>
                                                                                        <a class="btn text-danger btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Delete"><span
                                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            #87456325</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <span class="avatar bradius"
                                                                                            style="background-image: url({{asset('backend/images/orders/8.jpg')}})"></span>
                                                                                        <div
                                                                                            class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                New Bowl</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Florinda Carasco</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td><span class="mt-sm-2 d-block">19 Sep
                                                                                        2021</span></td>
                                                                                <td><span
                                                                                        class="fw-semibold mt-sm-2 d-block">$17.98</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Online Payment</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="g-2">
                                                                                        <a class="btn text-primary btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Edit"><span
                                                                                                class="fe fe-edit fs-14"></span></a>
                                                                                        <a class="btn text-danger btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Delete"><span
                                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            #65783926</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <span class="avatar bradius"
                                                                                            style="background-image: url({{asset('backend/images/orders/6.jpg')}})"></span>
                                                                                        <div
                                                                                            class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Leather Watch</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Ivan Notheridiya</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td><span class="mt-sm-2 d-block">06 Oct
                                                                                        2021</span></td>
                                                                                <td><span
                                                                                        class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Cash on Delivery</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="g-2">
                                                                                        <a class="btn text-primary btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Edit"><span
                                                                                                class="fe fe-edit fs-14"></span></a>
                                                                                        <a class="btn text-danger btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Delete"><span
                                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            #34654895</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <span class="avatar bradius"
                                                                                            style="background-image: url({{asset('backend/images/orders/1.jpg')}})"></span>
                                                                                        <div
                                                                                            class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Digital Camera</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Willie Findit</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td><span class="mt-sm-2 d-block">10 Jul
                                                                                        2021</span></td>
                                                                                <td><span
                                                                                        class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Cash on Delivery</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="g-2">
                                                                                        <a class="btn text-primary btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Edit"><span
                                                                                                class="fe fe-edit fs-14"></span></a>
                                                                                        <a class="btn text-danger btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Delete"><span
                                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            #98765345</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <span class="avatar bradius"
                                                                                            style="background-image: url({{asset('backend/images/orders/11.jpg')}})"></span>
                                                                                        <div
                                                                                            class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Earphones</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Addie Minstra</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td><span class="mt-sm-2 d-block">25 Jun
                                                                                        2021</span></td>
                                                                                <td><span
                                                                                        class="fw-semibold mt-sm-2 d-block">$7,34,9768</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Online Payment</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="g-2">
                                                                                        <a class="btn text-primary btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Edit"><span
                                                                                                class="fe fe-edit fs-14"></span></a>
                                                                                        <a class="btn text-danger btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Delete"><span
                                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            #67546577</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <span class="avatar bradius"
                                                                                            style="background-image: url({{asset('backend/images/orders/2.jpg')}})"></span>
                                                                                        <div
                                                                                            class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Shoes</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Laura Biding</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td><span class="mt-sm-2 d-block">22 Feb
                                                                                        2021</span></td>
                                                                                <td><span
                                                                                        class="fw-semibold mt-sm-2 d-block">$7.76.654</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Cash on Delivery</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge bg-success-transparent rounded-pill text-success p-2 px-3">Shipped</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="g-2">
                                                                                        <a class="btn text-primary btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Edit"><span
                                                                                                class="fe fe-edit fs-14"></span></a>
                                                                                        <a class="btn text-danger btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Delete"><span
                                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="tab7">
                                                                <div class="table-responsive">
                                                                    <table
                                                                        class="table table-bordered text-nowrap mb-0">
                                                                        <thead class="border-top">
                                                                            <tr>
                                                                                <th class="bg-transparent border-bottom-0"
                                                                                    style="width: 5%;">Tracking Id</th>
                                                                                <th
                                                                                    class="bg-transparent border-bottom-0">
                                                                                    Product</th>
                                                                                <th
                                                                                    class="bg-transparent border-bottom-0">
                                                                                    Customer</th>
                                                                                <th
                                                                                    class="bg-transparent border-bottom-0">
                                                                                    Date</th>
                                                                                <th
                                                                                    class="bg-transparent border-bottom-0">
                                                                                    Amount</th>
                                                                                <th
                                                                                    class="bg-transparent border-bottom-0">
                                                                                    Payment Mode</th>
                                                                                <th class="bg-transparent border-bottom-0"
                                                                                    style="width: 10%;">Status</th>
                                                                                <th class="bg-transparent border-bottom-0"
                                                                                    style="width: 5%;">Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            #98765490</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <span class="avatar bradius"
                                                                                            style="background-image: url({{asset('backend/images/orders/10.jpg')}})"></span>
                                                                                        <div
                                                                                            class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Headsets</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Cherry Blossom</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td><span class="mt-sm-2 d-block">30 Aug
                                                                                        2021</span></td>
                                                                                <td><span
                                                                                        class="fw-semibold mt-sm-2 d-block">$6.721.5</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Online Payment</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="g-2">
                                                                                        <a class="btn text-primary btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Edit"><span
                                                                                                class="fe fe-edit fs-14"></span></a>
                                                                                        <a class="btn text-danger btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Delete"><span
                                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            #23986456</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <span class="avatar bradius"
                                                                                            style="background-image: url({{asset('backend/images/orders/4.jpg')}})"></span>
                                                                                        <div
                                                                                            class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Pen Drive</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Manny Jah</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td><span class="mt-sm-2 d-block">27 Jan
                                                                                        2021</span></td>
                                                                                <td><span
                                                                                        class="fw-semibold mt-sm-2 d-block">$5,89,6437</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Cash on Delivery</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="g-2">
                                                                                        <a class="btn text-primary btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Edit"><span
                                                                                                class="fe fe-edit fs-14"></span></a>
                                                                                        <a class="btn text-danger btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Delete"><span
                                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            #87456325</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <span class="avatar bradius"
                                                                                            style="background-image: url({{asset('backend/images/orders/8.jpg')}})"></span>
                                                                                        <div
                                                                                            class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                New Bowl</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Florinda Carasco</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td><span class="mt-sm-2 d-block">19 Sep
                                                                                        2021</span></td>
                                                                                <td><span
                                                                                        class="fw-semibold mt-sm-2 d-block">$17.98</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Online Payment</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="g-2">
                                                                                        <a class="btn text-primary btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Edit"><span
                                                                                                class="fe fe-edit fs-14"></span></a>
                                                                                        <a class="btn text-danger btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Delete"><span
                                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            #65783926</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <span class="avatar bradius"
                                                                                            style="background-image: url({{asset('backend/images/orders/6.jpg')}})"></span>
                                                                                        <div
                                                                                            class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Leather Watch</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Ivan Notheridiya</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td><span class="mt-sm-2 d-block">06 Oct
                                                                                        2021</span></td>
                                                                                <td><span
                                                                                        class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Cash on Delivery</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="g-2">
                                                                                        <a class="btn text-primary btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Edit"><span
                                                                                                class="fe fe-edit fs-14"></span></a>
                                                                                        <a class="btn text-danger btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Delete"><span
                                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            #34654895</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <span class="avatar bradius"
                                                                                            style="background-image: url({{asset('backend/images/orders/1.jpg')}})"></span>
                                                                                        <div
                                                                                            class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Digital Camera</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Willie Findit</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td><span class="mt-sm-2 d-block">10 Jul
                                                                                        2021</span></td>
                                                                                <td><span
                                                                                        class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Cash on Delivery</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="g-2">
                                                                                        <a class="btn text-primary btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Edit"><span
                                                                                                class="fe fe-edit fs-14"></span></a>
                                                                                        <a class="btn text-danger btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Delete"><span
                                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            #98765345</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <span class="avatar bradius"
                                                                                            style="background-image: url({{asset('backend/images/orders/11.jpg')}})"></span>
                                                                                        <div
                                                                                            class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Earphones</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Addie Minstra</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td><span class="mt-sm-2 d-block">25 Jun
                                                                                        2021</span></td>
                                                                                <td><span
                                                                                        class="fw-semibold mt-sm-2 d-block">$7,34,9768</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Online Payment</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="g-2">
                                                                                        <a class="btn text-primary btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Edit"><span
                                                                                                class="fe fe-edit fs-14"></span></a>
                                                                                        <a class="btn text-danger btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Delete"><span
                                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            #67546577</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <span class="avatar bradius"
                                                                                            style="background-image: url({{asset('backend/images/orders/2.jpg')}})"></span>
                                                                                        <div
                                                                                            class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Shoes</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Laura Biding</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td><span class="mt-sm-2 d-block">22 Feb
                                                                                        2021</span></td>
                                                                                <td><span
                                                                                        class="fw-semibold mt-sm-2 d-block">$7.76.654</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Cash on Delivery</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge bg-warning-transparent rounded-pill text-warning p-2 px-3">Pending</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="g-2">
                                                                                        <a class="btn text-primary btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Edit"><span
                                                                                                class="fe fe-edit fs-14"></span></a>
                                                                                        <a class="btn text-danger btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Delete"><span
                                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="tab8">
                                                                <div class="table-responsive">
                                                                    <table
                                                                        class="table table-bordered text-nowrap mb-0">
                                                                        <thead class="border-top">
                                                                            <tr>
                                                                                <th class="bg-transparent border-bottom-0"
                                                                                    style="width: 5%;">Tracking Id</th>
                                                                                <th
                                                                                    class="bg-transparent border-bottom-0">
                                                                                    Product</th>
                                                                                <th
                                                                                    class="bg-transparent border-bottom-0">
                                                                                    Customer</th>
                                                                                <th
                                                                                    class="bg-transparent border-bottom-0">
                                                                                    Date</th>
                                                                                <th
                                                                                    class="bg-transparent border-bottom-0">
                                                                                    Amount</th>
                                                                                <th
                                                                                    class="bg-transparent border-bottom-0">
                                                                                    Payment Mode</th>
                                                                                <th class="bg-transparent border-bottom-0"
                                                                                    style="width: 10%;">Status</th>
                                                                                <th class="bg-transparent border-bottom-0"
                                                                                    style="width: 5%;">Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            #98765490</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <span class="avatar bradius"
                                                                                            style="background-image: url({{asset('backend/images/orders/10.jpg')}})"></span>
                                                                                        <div
                                                                                            class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Headsets</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Cherry Blossom</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td><span class="mt-sm-2 d-block">30 Aug
                                                                                        2021</span></td>
                                                                                <td><span
                                                                                        class="fw-semibold mt-sm-2 d-block">$6.721.5</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Online Payment</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="g-2">
                                                                                        <a class="btn text-primary btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Edit"><span
                                                                                                class="fe fe-edit fs-14"></span></a>
                                                                                        <a class="btn text-danger btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Delete"><span
                                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            #76348798</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <span class="avatar bradius"
                                                                                            style="background-image: url({{asset('backend/images/orders/12.jpg')}})"></span>
                                                                                        <div
                                                                                            class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Flower Pot</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Simon Sais</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td><span class="mt-sm-2 d-block">15 Nov
                                                                                        2021</span></td>
                                                                                <td><span
                                                                                        class="fw-semibold mt-sm-2 d-block">$35,7863</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Online Payment</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="g-2">
                                                                                        <a class="btn text-primary btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Edit"><span
                                                                                                class="fe fe-edit fs-14"></span></a>
                                                                                        <a class="btn text-danger btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Delete"><span
                                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            #23986456</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <span class="avatar bradius"
                                                                                            style="background-image: url({{asset('backend/images/orders/4.jpg')}})"></span>
                                                                                        <div
                                                                                            class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Pen Drive</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Manny Jah</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td><span class="mt-sm-2 d-block">27 Jan
                                                                                        2021</span></td>
                                                                                <td><span
                                                                                        class="fw-semibold mt-sm-2 d-block">$5,89,6437</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Cash on Delivery</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="g-2">
                                                                                        <a class="btn text-primary btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Edit"><span
                                                                                                class="fe fe-edit fs-14"></span></a>
                                                                                        <a class="btn text-danger btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Delete"><span
                                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            #87456325</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <span class="avatar bradius"
                                                                                            style="background-image: url({{asset('backend/images/orders/8.jpg')}})"></span>
                                                                                        <div
                                                                                            class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                New Bowl</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Florinda Carasco</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td><span class="mt-sm-2 d-block">19 Sep
                                                                                        2021</span></td>
                                                                                <td><span
                                                                                        class="fw-semibold mt-sm-2 d-block">$17.98</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Online Payment</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="g-2">
                                                                                        <a class="btn text-primary btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Edit"><span
                                                                                                class="fe fe-edit fs-14"></span></a>
                                                                                        <a class="btn text-danger btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Delete"><span
                                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            #65783926</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <span class="avatar bradius"
                                                                                            style="background-image: url({{asset('backend/images/orders/6.jpg')}})"></span>
                                                                                        <div
                                                                                            class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Leather Watch</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Ivan Notheridiya</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td><span class="mt-sm-2 d-block">06 Oct
                                                                                        2021</span></td>
                                                                                <td><span
                                                                                        class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Cash on Delivery</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="g-2">
                                                                                        <a class="btn text-primary btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Edit"><span
                                                                                                class="fe fe-edit fs-14"></span></a>
                                                                                        <a class="btn text-danger btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Delete"><span
                                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="border-bottom">
                                                                                <td class="text-center">
                                                                                    <div class="mt-0 mt-sm-2 d-block">
                                                                                        <h6
                                                                                            class="mb-0 fs-14 fw-semibold">
                                                                                            #34654895</h6>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <span class="avatar bradius"
                                                                                            style="background-image: url({{asset('backend/images/orders/1.jpg')}})"></span>
                                                                                        <div
                                                                                            class="ms-3 mt-0 mt-sm-2 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Digital Camera</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Willie Findit</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td><span class="mt-sm-2 d-block">10 Jul
                                                                                        2021</span></td>
                                                                                <td><span
                                                                                        class="fw-semibold mt-sm-2 d-block">$8.654.4</span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex">
                                                                                        <div
                                                                                            class="mt-0 mt-sm-3 d-block">
                                                                                            <h6
                                                                                                class="mb-0 fs-14 fw-semibold">
                                                                                                Cash on Delivery</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="mt-sm-1 d-block">
                                                                                        <span
                                                                                            class="badge bg-danger-transparent rounded-pill text-danger p-2 px-3">Cancelled</span>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="g-2">
                                                                                        <a class="btn text-primary btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Edit"><span
                                                                                                class="fe fe-edit fs-14"></span></a>
                                                                                        <a class="btn text-danger btn-sm"
                                                                                            data-bs-toggle="tooltip"
                                                                                            data-bs-original-title="Delete"><span
                                                                                                class="fe fe-trash-2 fs-14"></span></a>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-4 END -->
                    </div>
                    <!-- CONTAINER END -->
                </div>
            </div>
            <!--app-content close-->

        </div>

        <!-- Sidebar-right -->
        <div class="sidebar sidebar-right sidebar-animate">
            <div class="panel panel-primary card mb-0 shadow-none border-0">
                <div class="tab-menu-heading border-0 d-flex p-3">
                    <div class="card-title mb-0"><i class="fe fe-bell me-2"></i><span
                            class=" pulse"></span>Notifications</div>
                    <div class="card-options ms-auto">
                        <a href="javascript:void(0);" class="sidebar-icon text-end float-end me-3 mb-1"
                            data-bs-toggle="sidebar-right" data-target=".sidebar-right"><i
                                class="fe fe-x text-white"></i></a>
                    </div>
                </div>
                <div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
                    <div class="tabs-menu border-bottom">
                        <!-- Tabs -->
                        <ul class="nav panel-tabs">
                            <li class=""><a href="#side1" class="active" data-bs-toggle="tab"><i
                                        class="fe fe-settings me-1"></i>Feeds</a></li>
                            <li><a href="#side2" data-bs-toggle="tab"><i class="fe fe-message-circle"></i> Chat</a></li>
                            <li><a href="#side3" data-bs-toggle="tab"><i class="fe fe-anchor me-1"></i>Timeline</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="side1">
                            <div class="p-3 fw-semibold ps-5">Feeds</div>
                            <div class="card-body pt-2">
                                <div class="browser-stats">
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle brround bg-primary-transparent"><i
                                                    class="fe fe-user text-primary"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">New user registered</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                    <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span
                                                class="feeds avatar-circle avatar-circle-secondary brround bg-secondary-transparent"><i
                                                    class="fe fe-shopping-cart text-secondary"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">New order delivered</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                    <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span
                                                class="feeds avatar-circle avatar-circle-danger brround bg-danger-transparent"><i
                                                    class="fe fe-bell text-danger"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">You have pending tasks</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                    <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span
                                                class="feeds avatar-circle avatar-circle-warning brround bg-warning-transparent"><i
                                                    class="fe fe-gitlab text-warning"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">New version arrived</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                    <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span
                                                class="feeds avatar-circle avatar-circle-pink brround bg-pink-transparent"><i
                                                    class="fe fe-database text-pink"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">Server #1 overloaded</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                    <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span
                                                class="feeds avatar-circle avatar-circle-info brround bg-info-transparent"><i
                                                    class="fe fe-check-circle text-info"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">New project launched</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                    <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 fw-semibold ps-5">Settings</div>
                            <div class="card-body pt-2">
                                <div class="browser-stats">
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle brround bg-primary-transparent"><i
                                                    class="fe fe-settings text-primary"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">General Settings</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span
                                                class="feeds avatar-circle avatar-circle-secondary brround bg-secondary-transparent"><i
                                                    class="fe fe-map-pin text-secondary"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">Map Settings</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span
                                                class="feeds avatar-circle avatar-circle-danger brround bg-danger-transparent"><i
                                                    class="fe fe-headphones text-danger"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">Support Settings</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span
                                                class="feeds avatar-circle avatar-circle-warning brround bg-warning-transparent"><i
                                                    class="fe fe-credit-card text-warning"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">Payment Settings</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span
                                                class="feeds avatar-circle avatar-circle-pink brround bg-pink-transparent"><i
                                                    class="fe fe-bell text-pink"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">Notification Settings</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="side2">
                            <div class="list-group list-group-flush">
                                <div class="pt-3 fw-semibold ps-5">Today</div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{asset('backend/images/users/2.jpg')}}"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                                data-target="#chatmodel">Addie Minstra</div>
                                            <p class="mb-0 fs-12 text-muted"> Hey! there I' am available.... </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{asset('backend/images/users/11.jpg')}}"><span
                                                class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                                data-target="#chatmodel">Rose Bush</div>
                                            <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{asset('backend/images/users/10.jpg')}}"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                                data-target="#chatmodel">Claude Strophobia</div>
                                            <p class="mb-0 fs-12 text-muted"> Hi we can explain our new project......
                                            </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{asset('backend/images/users/13.jpg')}}"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                                data-target="#chatmodel">Eileen Dover</div>
                                            <p class="mb-0 fs-12 text-muted"> New product Launching... </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{asset('backend/images/users/12.jpg')}}"><span
                                                class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                                data-target="#chatmodel">Willie Findit</div>
                                            <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{asset('backend/images/users/15.jpg')}}"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                                data-target="#chatmodel">Manny Jah</div>
                                            <p class="mb-0 fs-12 text-muted"> Hi we can explain our new project......
                                            </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{asset('backend/images/users/4.jpg')}}"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                                data-target="#chatmodel">Cherry Blossom</div>
                                            <p class="mb-0 fs-12 text-muted"> Hey! there I' am available....</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="pt-3 fw-semibold ps-5">Yesterday</div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{asset('backend/images/users/7.jpg')}}"><span
                                                class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                                data-target="#chatmodel">Simon Sais</div>
                                            <p class="mb-0 fs-12 text-muted">Schedule Realease...... </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{asset('backend/images/users/9.jpg')}}"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                                data-target="#chatmodel">Laura Biding</div>
                                            <p class="mb-0 fs-12 text-muted"> Hi we can explain our new project......
                                            </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{asset('backend/images/users/2.jpg')}}"><span
                                                class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                                data-target="#chatmodel">Addie Minstra</div>
                                            <p class="mb-0 fs-12 text-muted">Contact me for details....</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{asset('backend/images/users/9.jpg')}}"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                                data-target="#chatmodel">Ivan Notheridiya</div>
                                            <p class="mb-0 fs-12 text-muted"> Hi we can explain our new project......
                                            </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{asset('backend/images/users/14.jpg')}}"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                                data-target="#chatmodel">Dulcie Veeta</div>
                                            <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{asset('backend/images/users/11.jpg')}}"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                                data-target="#chatmodel">Florinda Carasco</div>
                                            <p class="mb-0 fs-12 text-muted">New product Launching...</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image"
                                            data-bs-image-src="{{asset('backend/images/users/4.jpg')}}"><span
                                                class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal"
                                                data-target="#chatmodel">Cherry Blossom</div>
                                            <p class="mb-0 fs-12 text-muted">cherryblossom@gmail.com</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="side3">
                            <ul class="task-list timeline-task">
                                <li class="d-sm-flex mt-4">
                                    <div>
                                        <i class="task-icon1"></i>
                                        <h6 class="fw-semibold">Task Finished<span
                                                class="text-muted fs-11 mx-2 fw-normal">09 July 2021</span></h6>
                                        <p class="text-muted fs-12">Adam Berry finished task on<a href="javascript:void(0)"
                                                class="fw-semibold"> Project Management</a></p>
                                    </div>
                                    <div class="ms-auto d-md-flex me-3">
                                        <a href="javascript:void(0)" class="text-muted me-2"><span class="fe fe-edit"></span></a>
                                        <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                    </div>
                                </li>
                                <li class="d-sm-flex">
                                    <div>
                                        <i class="task-icon1"></i>
                                        <h6 class="fw-semibold">New Comment<span
                                                class="text-muted fs-11 mx-2 fw-normal">05 July 2021</span></h6>
                                        <p class="text-muted fs-12">Victoria commented on Project <a href="javascript:void(0)"
                                                class="fw-semibold"> AngularJS Template</a></p>
                                    </div>
                                    <div class="ms-auto d-md-flex me-3">
                                        <a href="javascript:void(0)" class="text-muted me-2"><span class="fe fe-edit"></span></a>
                                        <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                    </div>
                                </li>
                                <li class="d-sm-flex">
                                    <div>
                                        <i class="task-icon1"></i>
                                        <h6 class="fw-semibold">New Comment<span
                                                class="text-muted fs-11 mx-2 fw-normal">25 June 2021</span></h6>
                                        <p class="text-muted fs-12">Victoria commented on Project <a href="javascript:void(0)"
                                                class="fw-semibold"> AngularJS Template</a></p>
                                    </div>
                                    <div class="ms-auto d-md-flex me-3">
                                        <a href="javascript:void(0)" class="text-muted me-2"><span class="fe fe-edit"></span></a>
                                        <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                    </div>
                                </li>
                                <li class="d-sm-flex">
                                    <div>
                                        <i class="task-icon1"></i>
                                        <h6 class="fw-semibold">Task Overdue<span
                                                class="text-muted fs-11 mx-2 fw-normal">14 June 2021</span></h6>
                                        <p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a href="javascript:void(0)"
                                                class="fw-semibold"> Integrated management</a></p>
                                    </div>
                                    <div class="ms-auto d-md-flex me-3">
                                        <a href="javascript:void(0)" class="text-muted me-2"><span class="fe fe-edit"></span></a>
                                        <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                    </div>
                                </li>
                                <li class="d-sm-flex">
                                    <div>
                                        <i class="task-icon1"></i>
                                        <h6 class="fw-semibold">Task Overdue<span
                                                class="text-muted fs-11 mx-2 fw-normal">29 June 2021</span></h6>
                                        <p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a href="javascript:void(0)"
                                                class="fw-semibold"> Integrated management</a></p>
                                    </div>
                                    <div class="ms-auto d-md-flex me-3">
                                        <a href="javascript:void(0)" class="text-muted me-2"><span class="fe fe-edit"></span></a>
                                        <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                    </div>
                                </li>
                                <li class="d-sm-flex">
                                    <div>
                                        <i class="task-icon1"></i>
                                        <h6 class="fw-semibold">Task Finished<span
                                                class="text-muted fs-11 mx-2 fw-normal">09 July 2021</span></h6>
                                        <p class="text-muted fs-12">Adam Berry finished task on<a href="javascript:void(0)"
                                                class="fw-semibold"> Project Management</a></p>
                                    </div>
                                    <div class="ms-auto d-md-flex me-3">
                                        <a href="javascript:void(0)" class="text-muted me-2"><span class="fe fe-edit"></span></a>
                                        <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/Sidebar-right-->

        <!-- Country-selector modal-->
        <div class="modal fade" id="country-selector">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content country-select-modal">
                    <div class="modal-header">
                        <h6 class="modal-title">Choose Country</h6><button aria-label="Close" class="btn-close"
                            data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <ul class="row p-3">
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block active">
                                    <span class="country-selector"><img alt="" src="{{asset('backend/images/flags/us_flag.jpg')}}"
                                            class="me-3 language"></span>USA
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="{{asset('backend/images/flags/italy_flag.jpg')}}"
                                        class="me-3 language"></span>Italy
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="{{asset('backend/images/flags/spain_flag.jpg')}}"
                                        class="me-3 language"></span>Spain
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="{{asset('backend/images/flags/india_flag.jpg')}}"
                                        class="me-3 language"></span>India
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="{{asset('backend/images/flags/french_flag.jpg')}}"
                                        class="me-3 language"></span>French
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="{{asset('backend/images/flags/russia_flag.jpg')}}"
                                        class="me-3 language"></span>Russia
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="{{asset('backend/images/flags/germany_flag.jpg')}}"
                                        class="me-3 language"></span>Germany
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt=""
                                        src="{{asset('backend/images/flags/argentina.jpg')}}"
                                        class="me-3 language"></span>Argentina
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt="" src="{{asset('backend/images/flags/malaysia.jpg')}}"
                                        class="me-3 language"></span>Malaysia
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0)" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt="" src="{{asset('backend/images/flags/turkey.jpg')}}"
                                        class="me-3 language"></span>Turkey
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Country-selector modal-->

        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Copyright © 2022 <a href="javascript:void(0)">Sash</a>. Designed with <span
                            class="fa fa-heart text-danger"></span> by <a href="javascript:void(0)"> Spruko </a> All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="{{asset('backend/js/jquery.min.js')}}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{asset('backend/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('backend/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- SPARKLINE JS-->
    <script src="{{asset('backend/js/jquery.sparkline.min.js')}}"></script>

    <!-- Sticky js -->
    <script src="{{asset('backend/js/sticky.js')}}"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="{{asset('backend/js/circle-progress.min.js')}}"></script>

    <!-- PIETY CHART JS-->
    <script src="{{asset('backend/plugins/peitychart/jquery.peity.min.js')}}"></script>
    <script src="{{asset('backend/plugins/peitychart/peitychart.init.js')}}"></script>

    <!-- SIDEBAR JS -->
    <script src="{{asset('backend/plugins/sidebar/sidebar.js')}}"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{asset('backend/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('backend/plugins/p-scroll/pscroll.js')}}"></script>
    <script src="{{asset('backend/plugins/p-scroll/pscroll-1.js')}}"></script>

    <!-- INTERNAL CHARTJS CHART JS-->
    <script src="{{asset('backend/plugins/chart/Chart.bundle.js')}}"></script>
    <script src="{{asset('backend/plugins/chart/rounded-barchart.js')}}"></script>
    <script src="{{asset('backend/plugins/chart/utils.js')}}"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{asset('backend/plugins/select2/select2.full.min.js')}}"></script>

    <!-- INTERNAL Data tables js-->
    <script src="{{asset('backend/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
    <script src="{{asset('backend/plugins/datatable/dataTables.responsive.min.js')}}"></script>

    <!-- INTERNAL APEXCHART JS -->
    <script src="{{asset('backend/js/apexcharts.js')}}"></script>
    <script src="{{asset('backend/plugins/apexchart/irregular-data-series.js')}}"></script>

    <!-- C3 CHART JS -->
    <script src="{{asset('backend/plugins/charts-c3/d3.v5.min.js')}}"></script>
    <script src="{{asset('backend/plugins/charts-c3/c3-chart.js')}}"></script>

    <!-- CHART-DONUT JS -->
    <script src="{{asset('backend/js/charts.js')}}"></script>

    <!-- INTERNAL Flot JS -->
    <script src="{{asset('backend/plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('backend/plugins/flot/jquery.flot.fillbetween.js')}}"></script>
    <script src="{{asset('backend/plugins/flot/chart.flot.sampledata.js')}}"></script>
    <script src="{{asset('backend/plugins/flot/dashboard.sampledata.js')}}"></script>

    <!-- INTERNAL Vector js -->
    <script src="{{asset('backend/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

    <!-- SIDE-MENU JS-->
    <script src="{{asset('backend/plugins/sidemenu/sidemenu.js')}}"></script>

    <!-- INTERNAL INDEX JS -->
    <script src="{{asset('backend/js/index1.js')}}"></script>

    <!-- Color Theme js -->
    <script src="{{asset('backend/js/themeColors.js')}}"></script>

    <!-- CUSTOM JS -->
    <script src="{{asset('backend/js/custom.js')}}"></script>

</body>

</html>
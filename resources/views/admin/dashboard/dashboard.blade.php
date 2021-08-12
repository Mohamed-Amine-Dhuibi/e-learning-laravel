@extends('admin.layouts.admin')
@section('content')

<div class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-lg-12">
            <div class="card card-chart">
                <div class="card-header card-header-success">
                <div class="ct-chart" id="dailySalesChart"></div>
                </div>
                <div class="card-body">
                <h4 class="card-title">Sales</h4>
                <p class="card-category">
                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                </div>
                <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">access_time</i> see subscriptions
                </div>
                </div>
            </div>
            </div>
            <div class="col-xl-4 col-lg-12">
            <div class="card card-chart">
                <div class="card-header card-header-warning">
                <div class="ct-chart" id="websiteViewsChart"></div>
                </div>
                <div class="card-body">
                <h4 class="card-title">Accounts</h4>
                <p class="card-category">Last Campaign Performance</p>
                </div>
                <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">access_time</i> campaign sent 2 days ago
                </div>
                </div>
            </div>
            </div>
            <div class="col-xl-4 col-lg-12">
            <div class="card card-chart">
                <div class="card-header card-header-danger">
                <div class="ct-chart" id="completedTasksChart"></div>
                </div>
                <div class="card-body">
                <h4 class="card-title">Enrolments</h4>
                <p class="card-category">Last Campaign Performance</p>
                </div>
                <div class="card-footer">
                <div class="stats">
                    <i class="material-icons">access_time</i> campaign sent 2 days ago
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                </div>
                <p class="card-category">Courses</p>
                <h3 class="card-title">{{ $courses_number }}
                    <small>course</small>
                </h3>
                </div>
                <div class="card-footer">
                <div class="stats">
                    <a href="/myspace/courses" class="warning-link">See courses</a>
                </div>
                </div>
            </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">store</i>
                </div>
                <p class="card-category">Revenue</p>
                <h3 class="card-title">{{ $total }}</h3>
                </div>
                <div class="card-footer">
                <div class="stats">
                <a href="/myspace/enrolments">See subscriptions</a>      
                </div>
                </div>
            </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">person</i>
                </div>
                <p class="card-category">Users</p>
                <h3 class="card-title">{{ $users_count }}</h3>
                </div>
                <div class="card-footer">
                <div class="stats">
                    <a href="/myspace/users">See users</a>
                </div>
                </div>
            </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">list</i>
                </div>
                <p class="card-category">Subscriptions</p>
                <h3 class="card-title">{{ $subs }}</h3>
                </div>
                <div class="card-footer">
                <div class="stats">
                    <a href="/myspace/enrolments">See enrolments</a>
                </div>
                </div>
            </div>
            </div>

        </div>
    <script>
        
        $(document).ready(function() {
  // Javascript method's body can be found in assets/js/demos.js
  md.initDashboardPageCharts({{ $chart1 }},{{ $chart2 }},{{ $chart3 }});

    });
    </script>
    </div>
    </div>
@endsection
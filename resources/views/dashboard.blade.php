@extends('layouts.app2')

@section('content')

    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">

            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-one">
                    <div class="widget-heading">
                        <h6 class="">Resumo das operações em {{$vigencia}}</h6>
                    </div>
                    <div class="w-chart">
                    @foreach ($resumo_operacoes as $item)
                        <div class="w-chart-section">
                            <div class="mb-4 pb-2">
                                <p class="w-title">
                                    @if($item->credito == 1)
                                        Créditos
                                    @else
                                        Débitos
                                    @endif
                                </p>
                                <p class="w-stats">R$ {{number_format($item->valor,2,',','.')}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-card-four">
                    <div class="widget-content">
                        <div class="w-content">
                            <div class="w-info">
                                <h6 class="value">$ 45,141</h6>
                                <p class="">Expenses</p>
                            </div>
                            <div class="">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                </div>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>

{{--            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">--}}
{{--                <div class="widget widget-account-invoice-two">--}}
{{--                    <div class="widget-content">--}}
{{--                        <div class="account-box">--}}
{{--                            <div class="info">--}}
{{--                                <h5 class="">Pro Plan</h5>--}}
{{--                                <p class="inv-balance">$10,344</p>--}}
{{--                            </div>--}}
{{--                            <div class="acc-action">--}}
{{--                                <div class="">--}}
{{--                                    <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></a>--}}
{{--                                    <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg></a>--}}
{{--                                </div>--}}
{{--                                <a href="javascript:void(0);">Upgrade</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-chart-three">
                    <div class="widget-heading">
                        <div class="">
                            <h5 class="">Evolução do caixa</h5>
                        </div>
                    </div>

                    <div class="widget-content">
                        <div id="uniqueVisits"></div>
                    </div>
                </div>
            </div>
            <script>
  var d_1options1 = {
    chart: {
      height: 350,
      type: 'bar',
      toolbar: {
        show: false,
      },
      dropShadow: {
        enabled: true,
        top: 1,
        left: 1,
        blur: 2,
        color: '#acb0c3',
        opacity: 0.7,
      }
    },
    colors: ['#5c1ac3', '#ffbb44'],
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: '55%',
        endingShape: 'rounded'
      },
    },
    dataLabels: {
      enabled: false
    },
    legend: {
      show: false
    },
    stroke: {
      show: true,
      width: 2,
      colors: ['transparent']
    },
    series: [{
      name: 'Créditos',
      data: ['{!!implode("','",($crescimento_operacoes[1]))!!}']
    }, {
      name: 'Débitos',
      data: ['{!!implode("','",($crescimento_operacoes[0]))!!}']
    }],
    xaxis: {
      categories: ['{!!implode("','",array_keys($crescimento_operacoes[0]))!!}'],
    },
    fill: {
      type: 'gradient',
      gradient: {
        shade: 'light',
        type: 'vertical',
        shadeIntensity: 0.3,
        inverseColors: false,
        opacityFrom: 1,
        opacityTo: 0.8,
        stops: [0, 100]
      },
    },
    colors:['#F44336', '#0037ff'],
    tooltip: {
      y: {
        formatter: function (val) {
          var f = val.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
          return f
        }
      }
    }
  }
            </script>

{{--            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">--}}
{{--                <div class="widget widget-activity-three">--}}

{{--                    <div class="widget-heading">--}}
{{--                        <h5 class="">Notifications</h5>--}}
{{--                    </div>--}}

{{--                    <div class="widget-content">--}}

{{--                        <div class="mt-container mx-auto">--}}
{{--                            <div class="timeline-line">--}}

{{--                                <div class="item-timeline timeline-new">--}}
{{--                                    <div class="t-dot">--}}
{{--                                        <div class="t-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></div>--}}
{{--                                    </div>--}}
{{--                                    <div class="t-content">--}}
{{--                                        <div class="t-uppercontent">--}}
{{--                                            <h5>Logs</h5>--}}
{{--                                            <span class="">27 Feb, 2020</span>--}}
{{--                                        </div>--}}
{{--                                        <p><span>Updated</span> Server Logs</p>--}}
{{--                                        <div class="tags">--}}
{{--                                            <div class="badge badge-primary">Logs</div>--}}
{{--                                            <div class="badge badge-success">CPanel</div>--}}
{{--                                            <div class="badge badge-warning">Update</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="item-timeline timeline-new">--}}
{{--                                    <div class="t-dot">--}}
{{--                                        <div class="t-success"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></div>--}}
{{--                                    </div>--}}
{{--                                    <div class="t-content">--}}
{{--                                        <div class="t-uppercontent">--}}
{{--                                            <h5>Mail</h5>--}}
{{--                                            <span class="">28 Feb, 2020</span>--}}
{{--                                        </div>--}}
{{--                                        <p>Send Mail to <a href="javascript:void(0);">HR</a> and <a href="javascript:void(0);">Admin</a></p>--}}
{{--                                        <div class="tags">--}}
{{--                                            <div class="badge badge-primary">Admin</div>--}}
{{--                                            <div class="badge badge-success">HR</div>--}}
{{--                                            <div class="badge badge-warning">Mail</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="item-timeline timeline-new">--}}
{{--                                    <div class="t-dot">--}}
{{--                                        <div class="t-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></div>--}}
{{--                                    </div>--}}
{{--                                    <div class="t-content">--}}
{{--                                        <div class="t-uppercontent">--}}
{{--                                            <h5>Task Completed</h5>--}}
{{--                                            <span class="">01 Mar, 2020</span>--}}
{{--                                        </div>--}}
{{--                                        <p>Backup <span>Files EOD</span></p>--}}
{{--                                        <div class="tags">--}}
{{--                                            <div class="badge badge-primary">Backup</div>--}}
{{--                                            <div class="badge badge-success">EOD</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="item-timeline timeline-new">--}}
{{--                                    <div class="t-dot">--}}
{{--                                        <div class="t-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg></div>--}}
{{--                                    </div>--}}
{{--                                    <div class="t-content">--}}
{{--                                        <div class="t-uppercontent">--}}
{{--                                            <h5>Collect Docs</h5>--}}
{{--                                            <span class="">10 Mar, 2020</span>--}}
{{--                                        </div>--}}
{{--                                        <p>Collected documents from <a href="javascript:void(0);">Sara</a></p>--}}
{{--                                        <div class="tags">--}}
{{--                                            <div class="badge badge-success">Collect</div>--}}
{{--                                            <div class="badge badge-warning">Docs</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="item-timeline timeline-new">--}}
{{--                                    <div class="t-dot">--}}
{{--                                        <div class="t-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6" y2="6"></line><line x1="6" y1="18" x2="6" y2="18"></line></svg></div>--}}
{{--                                    </div>--}}
{{--                                    <div class="t-content">--}}
{{--                                        <div class="t-uppercontent">--}}
{{--                                            <h5>Reboot</h5>--}}
{{--                                            <span class="">06 Apr, 2020</span>--}}
{{--                                        </div>--}}
{{--                                        <p>Server rebooted successfully</p>--}}
{{--                                        <div class="tags">--}}
{{--                                            <div class="badge badge-warning">Reboot</div>--}}
{{--                                            <div class="badge badge-primary">Server</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget-four">
                    <div class="widget-heading">
                        <h5 class="">Associados</h5>
                    </div>
                    <div class="widget-content">
                        <div class="vistorsBrowser">

                        <div class="browser-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>                                </div>
                                <div class="w-browser-details">
                                    <div class="w-browser-info">
                                        <h6>Associados não conveniados</h6>
                                        <p class="browser-count">{{number_format((($ass_nconveniados/$ass_total)*100),1,',')}}%</p>
                                    </div>
                                    <div class="w-browser-stats">
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: {{(($ass_nconveniados/$ass_total)*100)}}%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="browser-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>                                </div>
                                <div class="w-browser-details">
                                    <div class="w-browser-info">
                                        <h6>Associados conveniados</h6>
                                        <p class="browser-count">{{number_format((($ass_conveniados/$ass_total)*100),1,',')}}%</p>
                                    </div>
                                    <div class="w-browser-stats">
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: {{(($ass_conveniados/$ass_total)*100)}}%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>

            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="row widget-statistic">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-followers">
                            <div class="widget-heading mb-5 pb-5">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>                                </div>
                                <p class="w-value">{{$ass_total}}</p>
                                <h5 class="mb-2">Associados</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-referral">
                            <div class="widget-heading mb-5 pb-5">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>                                </div>
                                <p class="w-value">{{$ass_nconveniados}}</p>
                                <h5 class="mb-2">Associados não conveniados</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-engagement">
                            <div class="widget-heading mb-5 pb-5">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>                                </div>
                                <p class="w-value">{{$ass_conveniados}}</p>
                                <h5 class="mb-2">Associados conveniados</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-card-one">
                    <div class="widget-content">

                        <div class="media">
                            <div class="w-img">
                                <img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">
                            </div>
                            <div class="media-body">
                                <h6>Jimmy Turner</h6>
                                <p class="meta-date-time">Monday, Nov 18</p>
                            </div>
                        </div>

                        <p>"Duis aute irure dolor" in reprehenderit in voluptate velit esse cillum "dolore eu fugiat" nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>

                        <div class="w-action">
                            <div class="card-like">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                                <span>551 Likes</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-five">
                    <div class="widget-content">

                        <div class="header">
                            <div class="header-body">
                                <h6>Pending Tasks</h6>
                                <p class="meta-date">Nov 2019</p>
                            </div>
                            <div class="task-action">
                                <div class="dropdown  custom-dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask">
                                        <a class="dropdown-item" href="javascript:void(0);">Add</a>
                                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Update</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Clear All</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="w-content">
                            <div class="">
                                <p class="task-left">8</p>
                                <p class="task-completed"><span>12 Done</span></p>
                                <p class="task-hight-priority"><span>3 Task</span> with High priotity</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-card-two">
                    <div class="widget-content">

                        <div class="media">
                            <div class="w-img">
                                <img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">
                            </div>
                            <div class="media-body">
                                <h6>Dev Summit - New York</h6>
                                <p class="meta-date-time">Bronx, NY</p>
                            </div>
                        </div>

                        <div class="card-bottom-section">
                            <h5>4 Members Going</h5>
                            <div class="img-group">
                                <img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">
                                <img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">
                                <img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">
                                <img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">
                            </div>
                            <a href="javascript:void(0);" class="btn">View Details</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection

@stack('scripts')

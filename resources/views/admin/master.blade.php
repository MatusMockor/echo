@include('admin._inc._header')
<div class="container-scroller" id="app">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo mr-5" href="{{route('dashboard')}}"><img src="images/logo.svg" class="mr-2"
                                                                           alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="{{route('dashboard')}}"><img src="images/logo-mini.svg" alt="logo"/></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                       data-toggle="dropdown">
                        <i class="icon-bell mx-0"></i>
                        <span class="count"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                         aria-labelledby="notificationDropdown">
                        <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-success">
                                    <i class="ti-info-alt mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                <p class="font-weight-light small-text mb-0 text-muted">
                                    Just now
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-info">
                                    <i class="ti-user mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal">New user registration</h6>
                                <p class="font-weight-light small-text mb-0 text-muted">
                                    2 days ago
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                <span class="icon-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div id="right-sidebar" class="settings-panel">
            <i class="settings-close ti-close"></i>
            <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab"
                       aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab"
                       aria-controls="chats-section">CHATS</a>
                </li>
            </ul>
            <div class="tab-content" id="setting-content">
                <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
                     aria-labelledby="todo-section">
                    <div class="add-items d-flex px-3 mb-0">
                        <form class="form w-100">
                            <div class="form-group d-flex">
                                <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="list-wrapper px-3">
                        <ul class="d-flex flex-column-reverse todo-list">
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Team review meeting at 3.00 PM
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Prepare for presentation
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Resolve all the low priority tickets due today
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        Schedule meeting for next week
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        Project review
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                        </ul>
                    </div>
                    <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
                    <div class="events pt-4 px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="ti-control-record text-primary mr-2"></i>
                            <span>Feb 11 2018</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                        <p class="text-gray mb-0">The total number of sessions</p>
                    </div>
                    <div class="events pt-4 px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="ti-control-record text-primary mr-2"></i>
                            <span>Feb 7 2018</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                        <p class="text-gray mb-0 ">Call Sarah Graves</p>
                    </div>
                </div>
                <!-- To do section tab ends -->
                <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                    <div class="d-flex align-items-center justify-content-between border-bottom">
                        <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                        <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See
                            All</small>
                    </div>
                    <ul class="chat-list">
                        <li class="list active">
                            <div class="profile"><img src="" alt="image"><span
                                        class="online"></span></div>
                            <div class="info">
                                <p>Thomas Douglas</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">19 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="" alt="image"><span
                                        class="offline"></span></div>
                            <div class="info">
                                <div class="wrapper d-flex">
                                    <p>Catherine</p>
                                </div>
                                <p>Away</p>
                            </div>
                            <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                            <small class="text-muted my-auto">23 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="" alt="image"><span
                                        class="online"></span></div>
                            <div class="info">
                                <p>Daniel Russell</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">14 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="" alt="image"><span
                                        class="offline"></span></div>
                            <div class="info">
                                <p>James Richardson</p>
                                <p>Away</p>
                            </div>
                            <small class="text-muted my-auto">2 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="" alt="image"><span
                                        class="online"></span></div>
                            <div class="info">
                                <p>Madeline Kennedy</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">5 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="" alt="image"><span
                                        class="online"></span></div>
                            <div class="info">
                                <p>Sarah Graves</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">47 min</small>
                        </li>
                    </ul>
                </div>
                <!-- chat tab ends -->
            </div>
        </div>
        @include('admin._inc._navigation')
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="row">
                            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                <h3 class="font-weight-bold">@yield('title', 'Dashboard')</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-12">
                        @if ($errors->any())
                            <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                                <flash-message-alert
                                        message="{{ $error }}"
                                        type="danger"
                                />
                            @endforeach
                            </ul>
                        @endif
                        <flash-message-alert
                                message="{{ session('flashMessage') }}"
                                type="{{session('flashMessageType')}}"
                        />
                    </div>
                </div>
                <div class="row">
                    @yield('content')
                    {{--                    <div class="col-md-4 stretch-card grid-margin">--}}
                    {{--                        <div class="card">--}}
                    {{--                            <div class="card-body">--}}
                    {{--                                <p class="card-title mb-0">Projects</p>--}}
                    {{--                                <div class="table-responsive">--}}
                    {{--                                    <table class="table table-borderless">--}}
                    {{--                                        <thead>--}}
                    {{--                                        <tr>--}}
                    {{--                                            <th class="pl-0  pb-2 border-bottom">Places</th>--}}
                    {{--                                            <th class="border-bottom pb-2">Orders</th>--}}
                    {{--                                            <th class="border-bottom pb-2">Users</th>--}}
                    {{--                                        </tr>--}}
                    {{--                                        </thead>--}}
                    {{--                                        <tbody>--}}
                    {{--                                        <tr>--}}
                    {{--                                            <td class="pl-0">Kentucky</td>--}}
                    {{--                                            <td><p class="mb-0"><span class="font-weight-bold mr-2">65</span>(2.15%)</p>--}}
                    {{--                                            </td>--}}
                    {{--                                            <td class="text-muted">65</td>--}}
                    {{--                                        </tr>--}}
                    {{--                                        <tr>--}}
                    {{--                                            <td class="pl-0">Ohio</td>--}}
                    {{--                                            <td><p class="mb-0"><span class="font-weight-bold mr-2">54</span>(3.25%)</p>--}}
                    {{--                                            </td>--}}
                    {{--                                            <td class="text-muted">51</td>--}}
                    {{--                                        </tr>--}}
                    {{--                                        <tr>--}}
                    {{--                                            <td class="pl-0">Nevada</td>--}}
                    {{--                                            <td><p class="mb-0"><span class="font-weight-bold mr-2">22</span>(2.22%)</p>--}}
                    {{--                                            </td>--}}
                    {{--                                            <td class="text-muted">32</td>--}}
                    {{--                                        </tr>--}}
                    {{--                                        <tr>--}}
                    {{--                                            <td class="pl-0">North Carolina</td>--}}
                    {{--                                            <td><p class="mb-0"><span class="font-weight-bold mr-2">46</span>(3.27%)</p>--}}
                    {{--                                            </td>--}}
                    {{--                                            <td class="text-muted">15</td>--}}
                    {{--                                        </tr>--}}
                    {{--                                        <tr>--}}
                    {{--                                            <td class="pl-0">Montana</td>--}}
                    {{--                                            <td><p class="mb-0"><span class="font-weight-bold mr-2">17</span>(1.25%)</p>--}}
                    {{--                                            </td>--}}
                    {{--                                            <td class="text-muted">25</td>--}}
                    {{--                                        </tr>--}}
                    {{--                                        <tr>--}}
                    {{--                                            <td class="pl-0">Nevada</td>--}}
                    {{--                                            <td><p class="mb-0"><span class="font-weight-bold mr-2">52</span>(3.11%)</p>--}}
                    {{--                                            </td>--}}
                    {{--                                            <td class="text-muted">71</td>--}}
                    {{--                                        </tr>--}}
                    {{--                                        <tr>--}}
                    {{--                                            <td class="pl-0 pb-0">Louisiana</td>--}}
                    {{--                                            <td class="pb-0"><p class="mb-0"><span--}}
                    {{--                                                            class="font-weight-bold mr-2">25</span>(1.32%)</p></td>--}}
                    {{--                                            <td class="pb-0">14</td>--}}
                    {{--                                        </tr>--}}
                    {{--                                        </tbody>--}}
                    {{--                                    </table>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
            </div>
@include('admin._inc._footer')
@include('layouts.dashboard.main')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-content">
                <h4 class="main-title">Welcome {{auth()->user()->name}}!</h4>
                <div class="row merged20 mb-4">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="d-widget soft-red">
                            <div class="d-widget-title">
                                <h5>Quizzes</h5>
                            </div>
                            <div class="d-widget-content">
                                <span class="realtime-ico pulse"></span>
                                <h6><a href="{{route('quizzes')}}">Take quiz</a></h6>
                                <h5>20</h5>
                                <i class="icofont-light-bulb"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="d-widget soft-blue">
                            <div class="d-widget-title">
                                <h5>Test Questions</h5>
                            </div>
                            <div class="d-widget-content">
                                <span class="realtime-ico pulse"></span>
                                <h6><a href="{{route('show.questions')}}">Get questions</a></h6>
                                <h5>50</h5>
                                <i class="icofont-check-circled"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="d-widget soft-green">
                            <div class="d-widget-title">
                                <h5>Weekly Challenge</h5>
                            </div>
                            <div class="d-widget-content">
                                <span class="realtime-ico pulse"></span>
                                <h6><a href="{{ route('weekly.challenge') }}">Participate</a></h6>
                                <h5>5.3K</h5>
                                <i class="icofont-badge"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row merged20 mb-4">
                    <div class="col-lg-6">
                        <div class="d-widget">
                            <div class="d-widget-title">
                                <h5>Events Schedule</h5>
                            </div>
                            <ul class="upcoming-event">
                                <li>
                                    <div class="event-date soft-red">
                                        <i>24 FEB</i>
                                        <span>2021</span>
                                    </div>
                                    <div class="event-deta">
                                        <h5>digital marketing summit</h5>
                                        <ul>
                                            <li><i class="icofont-user"></i> steve Josef</li>
                                            <li><i class="icofont-map-pins"></i> New York City</li>
                                            <li><i class="icofont-clock-time"></i> 9:00PM-12AM</li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="event-date soft-green">
                                        <i>10 MAR</i>
                                        <span>2021</span>
                                    </div>
                                    <div class="event-deta">
                                        <h5>digital marketing summit</h5>
                                        <ul>
                                            <li><i class="icofont-user"></i> steve Josef</li>
                                            <li><i class="icofont-map-pins"></i> New York City</li>
                                            <li><i class="icofont-clock-time"></i> 9:00PM-12AM</li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="event-date soft-blue">
                                        <i>20 OCT</i>
                                        <span>2021</span>
                                    </div>
                                    <div class="event-deta">
                                        <h5>digital marketing summit</h5>
                                        <ul>
                                            <li><i class="icofont-user"></i> steve Josef</li>
                                            <li><i class="icofont-map-pins"></i> New York City</li>
                                            <li><i class="icofont-clock-time"></i> 9:00PM-12AM</li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-widget">
                            <div class="d-widget-title">
                                <h5>Notice Borad</h5>
                            </div>
                            <div class="d-Notices"> 
                                <ul>
                                    <li>
                                        <p>March 21, 2021</p>
                                        <h6><a href="#" title="">Mr. William</a> <span>5 mint ago</span></h6>
                                        <p>
                                            invited to join the meeting in the conference room at 9.45 am
                                        </p>
                                        <div class="action-btns">
                                            <div class="button soft-danger" title="ignore"><i class="icofont-trash"></i></div>
                                            <div class="button soft-primary" title="save"><i class="icofont-star"></i></div>
                                        </div>	
                                    </li>
                                    <li>
                                        <p>Feb 15, 2021</p>
                                        <h6><a href="#" title="">Andrew </a> <span>35 mint ago</span></h6>
                                        <p>
                                            created a group 'Hencework' in the discussion forum
                                        </p>
                                        <div class="action-btns">
                                            <div class="button soft-danger" title="ignore"><i class="icofont-trash"></i></div>
                                            <div class="button soft-primary" title="save"><i class="icofont-star"></i></div>
                                        </div>
                                    </li>
                                    <li>
                                        <p>Jan 10, 2021</p>
                                        <h6><a href="#" title="">Franklyn J.</a> <span>40 mint ago</span></h6>
                                        <p>
                                            Prepare the conference schedule
                                        </p>
                                        <div class="action-btns">
                                            <div class="button soft-danger" title="ignore"><i class="icofont-trash"></i></div>
                                            <div class="button soft-primary" title="save"><i class="icofont-star"></i></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- main content -->



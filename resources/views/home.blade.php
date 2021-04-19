@include('nav')
<div class="dashboard-main">
        <h3 class="title">Dashboard</h3>
            <div class="row">
                <div class="col-6">
                    <div class="dashboard-content-1">
                        <img src="{{ asset('images/heartbeat.png')}}" alt="heartbeat" class="symbol">
                        <h5 class="info">Heart Beat</h5>
                        <h1 class="readings">
                        @foreach($sensordata as $i)
                          {{$i->heartbeat}}
                        @endforeach
                        </h1>
                        <h5 class="units">Beats per minutes</h5>
                    </div>
                </div>

                <div class="col-6">
                    <div class="dashboard-content-2">
                        <img src="{{ asset('images/Fall detection.png')}}" alt="Sleep" class="symbol">
                        <h5 class="info">Fall Detected</h5>
                        <h1 class="readings">
                          @if($fall == 1)
                            Yes
                          @endif

                          @if($fall == 0)
                            No
                          @endif
                        </h1>
                        <h5 class="units">10:23 PM</h5>
                    </div>                                
                </div>

                <div class="col-6">
                    <div class="dashboard-content-3">
                        <img src="{{ asset('images/temperature.png')}}" alt="Temperature" class="symbol">
                        <h5 class="info">Temperature</h5>
                        <h1 class="readings">
                        @foreach($temperaturedata as $i)
                          {{$i->temperature}}
                        @endforeach
                        </h1>
                        <h5 class="units">°C</h5>
                    </div>
                </div>

                <div class="col-6">
                    <div class="dashboard-content-4">
                        <img src="{{ asset('images/humidity.png')}}" alt="Temperature" class="symbol">
                        <h5 class="info">Humitidy</h5>
                        <h1 class="readings">
                          @foreach($humiditydata as $i)
                            {{$i->humidity}}
                          @endforeach
                        </h1>
                        <h5 class="units">%</h5>
                    </div>
                </div>
            </div>
    </div>


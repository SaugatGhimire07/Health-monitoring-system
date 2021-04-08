@include('nav')
<div class="profile-main">
        <div class="profile-container">
            <div class="wrap-profile">
                <h3 class="title">My Profile</h3>
                <div class="img-details">
                    <img src="images/undraw_profile.svg" alt="user-image" width="12%" class="user-image">
                    <h4 class="user-name">Saugat Ghimire</h4>
                </div>
                <div class="row">
                    <div class="col-lg-12 profile-info">
                        <div class="name-container">
                            <h5 class="name">Name</h5>
                            <div class="name-cont">
                                <p class="user-name-1">{{ Auth::user()->name }}</p>
                                <button class="edit-button">
                                    Edit
                                </button>
                            </div>
                        </div>
                        
                        <div class="email-container">
                            <h5 class="name">Email</h5>
                            <div class="email-cont">
                                <p class="user-name-1">{{ Auth::user()->email }}</p>
                                <button class="edit-button">
                                    Edit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="monthly">
                <h4 class="sub-title">Monthly Overview</h4>
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="dashboard-content-1">
                            <img src="images/heartbeat.png" alt="heartbeat" class="symbol">
                            <h5 class="info-1">Heart Beat</h5>
                            <h3 class="readings-1"> 
                                Min: {{$minheartbeat}}
                            </h3>
                            <h3 class="readings-2">Max: {{$maxheartbeat}}</h3>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-6">
                        <div class="dashboard-content-1">
                            <img src="images/ECG.png" alt="Sleep" class="symbol">
                            <h5 class="info-1">ECG</h5>
                            <h3 class="readings-1">Min: {{$minECG}}</h3>
                            <h3 class="readings-2">Max: {{$maxECG}}</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <div class="dashboard-content-1">
                            <img src="images/humidity.png" alt="Humidity" class="symbol">
                            <h5 class="info-1">Humidity</h5>
                            <h3 class="readings-1">Min: {{$minHumidity}}</h3>
                            <h3 class="readings-2">Max: {{$maxHumidity}}</h3>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <div class="dashboard-content-1">
                            <img src="images/temperature.png" alt="Temperature" class="symbol">
                            <h5 class="info-1">Temperature</h5>
                            <h3 class="readings-1">Min: {{$minTemp}}</h3>
                            <h3 class="readings-2">Max: {{$maxTemp}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
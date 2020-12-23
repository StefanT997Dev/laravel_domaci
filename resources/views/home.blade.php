@extends('layouts.app')

@section('content')

<div class="flex">
        <div class="card">
            <img src="{{URL('/images/mealPlan.jpg')}}" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>Meal plan</b></h4>
                    <p>Your trainer will create a personalized meal plan for you</p>
                    <button id="mealButton" class="btn btn-success">Start</button>
                </div>
        </div>

        <div class="card">
            <img src="{{URL('/images/gym.jpg')}}" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>Workout plan</b></h4>
                    <p>Your trainer will create a personalized workout plan for you</p>
                    <button id="workoutButton" class="btn btn-success">Start</button>
                </div>
        </div>
</div>

<div class="mealPlanForm">
<div class="card">
    <div class="container">
        <form action="" method="POST">
            Desired goal:
            <Input type="text" Name="Name" Size=15 Maxlength=15>
            <br>
            Gender:&nbsp;&nbsp;
            <Input type="radio" Name="Gender">&nbsp;M&nbsp;&nbsp;<Input type="radio" Name="Gender">&nbsp;F
            <br>
            Age:&nbsp;
            <Input type="text" Name="Password">
            <br>
            Body type:<br>
            <Textarea Name="Address" Rows="5" Cols="15"></Textarea>
            <br>
            Activity level:<br>
            <Input type="checkbox" Name="Browsing">&nbsp;Bodyweight workout&nbsp;&nbsp;<Input type="checkbox" Name="Reading">&nbsp;Running<br><Input type="checkbox" name="Gaming">&nbsp;Bike&nbsp;&nbsp;<Input type="checkbox" Name="Trekking">&nbsp;Gym<br>
            <Input class="btn btn-success" type="Submit" Name="Submit" value="Submit">&nbsp;&nbsp;
        </form>
    </div>
</div>
</div>

<script type="text/javascript" src="{{ URL::asset('js/libs/app.js') }}"></script>
@endsection

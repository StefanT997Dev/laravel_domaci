@extends('layouts.app')

@section('content')
<div class="flexContainer">
    <div id="login-container">
    <div class="profile-img"></div>
    <h1>
        Marc Fitt
    </h1>
    <div class="description">
        Marc Fitt is an online personal trainer and a fitness model. He has been training for over 10 years and is a former hokey player.
    </div>
    <div class="social">
        <a>GitHub</a>
        <a>Twitter</a>
        <a>LinkedIn</a>
    </div>
    <button>Hire Me</button>
    <footer>
        <div class="likes">
        <p><i class='fa fa-heart'></i></p>
        <p>1.5K</p>
        </div>
        <div class="projects">
        <p>Clients</p>
        <p>154</p>
        </div>
    </footer>
    </div>

    <div id="login-container">
    <div class="profile-img2"></div>
    <h1>
        Jesse Huston
    </h1>
    <div class="description">
        Jesse Huston is an online personal trainer and a fitness model. She has been training for over 11 years and is a competitive fitness figure. She has a huge social media following.
    </div>
    <div class="social">
        <a>GitHub</a>
        <a>Twitter</a>
        <a>LinkedIn</a>
    </div>
    <button>Hire Me</button>
    <footer>
        <div class="likes">
        <p><i class='fa fa-heart'></i></p>
        <p>1.3K</p>
        </div>
        <div class="projects">
        <p>Clients</p>
        <p>78</p>
        </div>
    </footer>
    </div>
</div>
@endsection

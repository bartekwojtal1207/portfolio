@extends('layouts.app')

@section('content')

    <section class="welcome">
        <div style="position: fixed; z-index: -99; width: 100%; height: 100%; top:0; left: 0;">
            <iframe frameborder="0" height="100%" width="100%"
                    src="https://youtube.com/embed/X-dMOvEOQiM?autoplay=1&controls=0&showinfo=0&autohide=1&disablekb=1&fs=0&iv_load_policy=3&modestbranding=3&rel=0&showinfo=0"  allowfullscreen>
            </iframe>
        </div>
        <div style="position: fixed; z-index: -88; width: 100%; height: 100%; top:0; left: 0;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 welcome-container">
                        <h3 class="js-show-text" id="msg"></h3>
                        <a class="welcome-button">zapraszam</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
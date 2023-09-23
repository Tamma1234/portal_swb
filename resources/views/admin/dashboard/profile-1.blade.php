@extends('admin.layouts.main')
@section('title', 'Create')
@section('content')
    @include('admin.templates.content-header', ['name' => 'Swinburne', 'key' => 'Queries', 'value' => "", 'value2' => ""])
    <div class="outer-container">
        <div id="wizard" class="aiia-wizard" style="display: none;">

            <div class="aiia-wizard-step">
                <h1>Introduction</h1>
                <div class="step-content">
                    <p>
                        Oh... I know you'll probably say..."Why would you make a plugin that already exists?". :) Well, why not? It's true, there are some great plugins out there that do just that. In fact this plugin was inspired by the excellent "jQuery Steps" plugin, created by Rafael Staib. And I am sure that if you Google you'll find more of them...
                    </p>
                    <p>
                        However I decided to do one myself as an experiment and because for some reason Rafael's plugin was mising some things that I needed at the moment and there was also a bug when initializing other jQuery plugins within the Steps plugin. For example the Google maps plugin would not initialize for some reason.
                    </p>
                    <p>
                        With your comments and perhaps your contributions maybe I can make things better and take it to another level, so please, feel free to give your thoughts - positive and negative. I'll be very grateful.
                    </p>
                </div>
            </div>

            <div class="aiia-wizard-step">
                <h1>Responsive</h1>
                <div class="step-content">
                    The aiiaWizard plugin is Twitter Bootstrap 3.x oriented, thus responsive. It takes your input form elements (or any other HTML element for that matter) and breaks them down into as many steps as you set them to. In fact, in some way the result is very similar to the "Twitter Bootstrap tab plugin, but instead of tabs and corresponding content panels, you have progress buttons and steps. Steps are the elements that hold your form / HTML content.
                </div>
            </div>

            <div class="aiia-wizard-step">
                <h1>Not a carousel</h1>
                <div class="step-content">
                    You can also compare this plugin to a carousel, but then again it is not a carousel. Well, maybe I'll update the plugin so that it will have different modes (tabs, slider, carousel...). But right now it serves for one purpose only and that is creating a Wizard with steps, plain and simple. The aiiaPlugin may as well be a hybrid between the Tabs Twitter Bootstrap and the carousel plugin if you like.
                </div>
            </div>

            <div class="aiia-wizard-step">
                <h1>Methods</h1>
                <div class="step-content">
                    This plugin allows you to interract with it or to retrieve some information from. The following methods are available:
                    <ul>
                        <li>isFinalElementShown,</li>
                        <li>previous,</li>
                        <li>next,</li>
                        <li>first,</li>
                        <li>getActiveStep</li>
                    </ul>
                </div>
            </div>

            <div class="aiia-wizard-step">
                <h1>Callbacks</h1>
                <div class="step-content">
                    As any good plugin, this one allows you to run your code when the plugin does something. This is a list of currently available  callbacks:


                    <pre>
$("#wizard").aiiaWizard({
    onInitSuccess: function () {
        //alert("init success");
    },
    onSlideLeftLimitReached: function () {
        //alert("onSlideLeftLimitReached success");
    },
    onSlideLeftFinished: function () {
        //alert("onSlideLeftFinished success");
    },
    onSlideRightLimitReached: function () {
        //alert("onSlideRightLimitReached success");
    },
    onSlideRightFinished: function () {
        //alert("onSlideRightFinished success");
    },
    onButtonPreviousClick: function () {
        // Instead of just sliding to the previous step when clicking the "previous" button, you can override this functionality instead.
        // By doing that you must then explixitly call the "previous" plugin method as shown below if you want to slide to the previous step.
        alert("onButtonPreviousClick");
        $("#wizard").aiiaWizard('previous');
    },
    onButtonNextClick: function () {
        // Instead of just sliding to the next step when clicking the "next" button, you can override this functionality instead.
        // By doing that you must then explixitly call the "next" plugin method as shown below if you want to slide to the next step.
        alert("onButtonNextClick");
        $("#wizard").aiiaWizard('next');
    }
});
                </pre>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('assets/admin/js/wizard/wizard.js')}}" type="text/javascript"></script>

@endsection
@section('css')
    <style>
        .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
            color: #fff;
            background-color: #337ab7;
        }

        .nav>li>a {
            position: relative;
            display: block;
            padding: 10px 15px;
        }

        .nav-pills>li>a {
            border-radius: 4px;
            text-align: center;
        }

        a:focus, a:hover {
            color: #23527c;
        }
        .nav-pills>li {
            display: table-cell;
            width: 20%;
        }
        .nav>li>a:focus, .nav>li>a:hover {
            text-decoration: none;
            background-color: #eee;
        }


        html {
            font-size:10px;
        }

        .outer-container {
            font-family: "Roboto";
            font-size: 1.6rem;
        }

        .outer-container {
            padding:60px;
        }


        .step-content {
            padding:40px 0;
        }

        .glyphicon {
            position: relative;
            top: 1px;
            display: inline-block;
            font-family: 'Glyphicons Halflings';
            font-style: normal;
            font-weight: 400;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .nav-justified {
            width: 100%;
        }
    </style>
@endsection

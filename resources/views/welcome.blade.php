<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        {{--<link href="{{ mix('css/app.css') }}" rel="stylesheet">--}}

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body class="antialiased">

        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="col-8 mx-auto py-5">
                <i class="fas fa-stroopwafel"></i> <!--  <i> 要素を使った例 -->
                <span class="fas fa-stroopwafel"></span> <!-- <span> 要素を使った例 -->
                <h3><i class="fab fa-font-awesome"></i> Font Awesome</h3>
                <p style="color: orange; font-size: 20px;"><i class="fab fa-firefox"></i> Firefox</p>
                <p><i class="fab fa-github"></i> Github</p>
                <p><i class="fab fa-linux sample"></i> sample クラスで調整</p>
                <style>
                    .sample {
                        color: #3962C5;
                        font-size: 30px;
                    }

                </style>
                <p><i class="far fa-laugh-wink"></i> アイコンを表示</p>
                <p><i class="fas fa-laugh-wink"></i> スタイルの違うアイコン</p>
                <p><i class="fas fa-bicycle fa-lg"></i></p>
                <p><i class="fas fa-bicycle fa-2x"></i></p>
                <p><i class="fas fa-bicycle fa-4x"></i></p>
                <p><i class="fas fa-bicycle my_large_icon"></i></p>
                <style>
                    .my_large_icon {
                        font-size: 22px;
                    }
                </style>
                <p><i class="fab fa-apple icon_green"></i></p>
                <style>
                    .icon_green {
                        color: #3FDA10;
                    }
                </style>
                <div style="font-size: 2rem;">
                    <div><i class="fas fa-home fa-fw" style="background:#D0EBF8"></i> Home</div>
                    <div><i class="fas fa-info fa-fw" style="background:#D0EBF8"></i> Info</div>
                    <div><i class="fas fa-book fa-fw" style="background:#D0EBF8"></i> Library</div>
                    <div><i class="fas fa-pencil-alt fa-fw" style="background:#D0EBF8"></i> Applications</div>
                    <div><i class="fas fa-cog fa-fw" style="background:#D0EBF8"></i> Settings</div>
                </div>
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-check-square"></i></span>List icon</li>
                    <li><span class="fa-li"><i class="far fa-check-square"></i></span>List icon</li>
                    <li><span class="fa-li"><i class="fas fa-check-circle"></i></span>List icon</li>
                    <li><span class="fa-li"><i class="far fa-check-circle"></i></span>List icon</li>
                    <li><span class="fa-li"><i class="fas fa-envelope"></i></span>List icon</li>
                </ul>
                <div class="fa-3x">
                    <i class="fas fa-frog"></i>
                    <i class="fas fa-frog fa-rotate-90"></i>
                    <i class="fas fa-frog fa-rotate-180"></i>
                    <i class="fas fa-frog fa-rotate-270"></i>
                    <i class="fas fa-frog fa-flip-horizontal"></i>
                    <i class="fas fa-frog fa-flip-vertical"></i>
                </div>
                <div class="fa-2x">
                    <i class="fas fa-spinner fa-spin"></i>
                    <i class="fas fa-circle-notch fa-spin"></i>
                    <i class="fas fa-sync fa-spin"></i>
                    <i class="fas fa-cog fa-spin"></i>
                    <i class="fas fa-spinner fa-pulse"></i>
                    <i class="fas fa-stroopwafel fa-spin"></i>
                    <i class="far fa-snowflake fa-pulse"></i>
                    <i class="fas fa-frog fa-spin"></i>
                </div>
                <p><i class="fas fa-frog fa-2x faa-wrench animated"></i> </p>
                <p><i class="fas fa-kiwi-bird fa-2x faa-wrench animated-hover"></i></p>
                <p><a href="#" class="faa-parent animated-hover">
                        <i class="fa fa-bell faa-ring"></i> 親要素にマウスオーバー時に実行
                    </a></p>
                <i class="fas fa-bell faa-ring animated"></i>
                <i class="fas fa-envelope faa-horizontal animated"></i>
                <i class="fab fa-android faa-vertical animated"></i>
                <i class="fas fa-bug faa-flash animated"></i>
                <i class="far fa-thumbs-up faa-bounce animated"></i>
                <i class="far fa-compass faa-spin animated"></i>
                <i class="fas fa-rocket faa-float animated"></i>
                <i class="fas fa-heartbeat faa-pulse animated"></i>
                <i class="fas fa-ship faa-shake animated"></i>
                <i class="fas fa-trophy faa-tada animated"></i>
                <i class="fas fa-space-shuttle faa-passing animated"></i>
                <i class="fas fa-fighter-jet faa-passing-reverse animated"></i>
                <i class="fas fa-bomb faa-burst animated"></i>
                <div style="height: 50px;">
                    <i class="far fa-star faa-falling animated"></i>
                </div>
                <p><i class="fas fa-quote-left fa-lg fa-pull-left"></i>Lorem ipsum dolor sit amet, ... quam dicta.Lorem ipsum
                    dolor sit amet, ... quamLorem ipsum dolor sit amet, ... quam dictaLorem ipsum dolor sit amet, ... quam dicta
                    dictaLorem ipsum dolor sit amet, ... quam dicta<i class="fas fa-quote-right fa-lg fa-pull-right"></i></p>
                <span class="fa-stack">
                    <i class="fas fa-square-full fa-stack-2x"></i>
                    <i class="fas fa-dove fa-stack-1x fa-inverse"></i>
                </span>
                <span class="fa-stack fa-2x">
                    <i class="far fa-square fa-stack-2x"></i>
                    <i class="fab fa-firefox fa-stack-1x"></i>
                </span>
                <span class="fa-stack fa-2x" style="color:#F1840A">
                    <i class="fas fa-square fa-stack-2x"></i>
                    <i class="fab fa-firefox fa-stack-1x fa-inverse"></i>
                </span>
                <span class="fa-stack fa-2x">
                    <i class="fas fa-camera fa-stack-1x"></i>
                    <i class="fas fa-ban fa-stack-2x" style="color:Tomato"></i>
                </span>
                <span class="fa-stack fa-3x">
                    <i class="fas fa-circle-notch fa-stack-2x" style="color: #EE7B7D"></i>
                    <i class="fas fa-globe fa-stack-1x" style="color: #4865B6"></i>
                </span>
            </div>
            </div>
            </div>
            {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
    </body>
</html>
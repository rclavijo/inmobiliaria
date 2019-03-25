<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <meta content="width=device-width, initial-scale=1" name="viewport">
                    <meta content="{{ csrf_token() }}" name="csrf-token">
                        <!-- CSRF Token -->
                        <meta content="{{ csrf_token() }}" name="csrf-token">
                            <title>
                                {{ config('app.name', 'Laravel') }}
                            </title>
                            <!-- Styles -->
                            <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" rel="stylesheet">
                                <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" rel="stylesheet">
                                    <link href="https://fonts.googleapis.com/css?family=Montserrat|PT+Sans" rel="stylesheet">
                                        <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" rel="stylesheet">
                                            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
                                                <link href="{{  asset('css/style.css') }}" rel="stylesheet">
                                                    <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" rel="stylesheet">
                                                        <body class="fondo_correo">
                                                            <header>
                                                                @include('header')
                                                            </header>
                                                            <!-- /header -->
                                                            <div id="app">
                                                                @yield('content')
                                                            </div>
                                                            <!-- Scripts -->
                                                            <script src="{{ asset('js/app.js') }}">
                                                            </script>
                                                            {{--
                                                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
                                                            </script>
                                                            --}}
                                                            <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js">
                                                            </script>
                                                            {{--
                                                            <script crossorigin="anonymous" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
                                                            </script>
                                                            <script crossorigin="anonymous" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
                                                            </script>
                                                            --}}
                                                            <script crossorigin="anonymous" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
                                                            </script>
                                                            <script src="{{ asset('js/nav.js') }}" type="text/javascript">
                                                            </script>
                                                            <script>
                                                                $('.carousel').carousel({
  interval: 3000,
  pause: false
})
                                                            </script>
                                                        </body>
                                                    </link>
                                                </link>
                                            </link>
                                        </link>
                                    </link>
                                </link>
                            </link>
                        </meta>
                    </meta>
                </meta>
            </meta>
        </meta>
    </head>
</html>

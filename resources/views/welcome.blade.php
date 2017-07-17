<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link rel="stylesheet" href="css/app.css">

        <title>Sum Of Two</title>

    </head>
    <body>
      <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Sum of Two</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form method="GET" class="navbar-form navbar-left" action="{{ route('sumoftwo') }}">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">#</span>
          <input type="text" class="form-control" id="sum-number" name="number" placeholder="Pick any number" aria-describedby="basic-addon1">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

      <div class="container">
              @isset($errors)
              <div class="row">
                <div class="col-md-12">
                  <div id="errors">
                    @foreach ($errors->all() as $message)
                      {{ $message }}
                    @endforeach
                  </div>
                </div>
              </div>
              @endisset

              <div class="row">
                <div class="col-md-12">
                <div class=" panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">JavaScript sum check</h3>
                  </div>
                  <div class="panel-body" id="sum-js">
                    <noscript>Well, this isn't going to work without JavaScript!</noscript>
                      Checking...
                  </div>
                </div>
              </div>
            </div>

              <div class="row">
                <div class="col-md-12">
                <div class=" panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">PHP sum check</h3>
                  </div>
                  <div class="panel-body" id="sum-php">
                    @isset($php)
                      {{ $php ? 'True' : 'False' }}
                    @else
                      Please submit a number for PHP calculation.
                    @endisset
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
              <div class=" panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">MongoDB sum check</h3>
                </div>
                <div class="panel-body" id="sum-mongo">
                  @isset($mongos)
                  <ul>
                    @foreach ($mongos as $mongo)
                    <li>{{ $mongo->number }} : {{ $mongo->result ? 'True' : 'False' }}</li>
                    @endforeach
                  </ul>
                  @else
                    Please submit a number for MongoDB calculation.
                  @endisset
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
            <div class=" panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">MySQL sum check</h3>
              </div>
              <div class="panel-body" id="sum-mysql">
                  @isset($mysql)
                    {{ $mysql ? 'True' : 'False' }}
                  @else
                    Please submit a number for MySQL calculation.
                  @endisset
                </div>
              </div>
            </div>
          </div>

        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>window.jQuery.fn.modal || document.write('<script src="/js/bootstrap.min.js"><\/script>')</script>
        <script>
          (function($) {
            $(function() {
              if($('body').css('color') != 'rgb(51, 51, 51)'){
                $('head').prepend('<link rel="stylesheet" href="/css/bootstrap.min.css">')
              }
            });
          })(window.jQuery);
        </script>
        <script src="js/app.js"></script>
    </body>
</html>

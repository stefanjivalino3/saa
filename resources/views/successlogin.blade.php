<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" href="/css/header.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
      <li class="active"><a href="#">aaaaa</a></li>
      <li><a href="#">aaa</a></li>
      <li><a href="#">RAM</a></li>
      <li><a href="#">Motherboard</a></li>
      <li><a href="#">HDD</a></li>
      <li><a href="#">Casing</a></li>
    </ul>
      <ul class="nav navbar-nav navbar-right">
        @if(isset(Auth::user()->email))
        <li><a class="isDisabled" >Welcome {{Auth::user()->name}}</a></li>
        <li><a href="{{ url('/main/logout')}}"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        @else
            <script type="text/javascript">window.location = "/main";</script>
        @endif
      </ul>
    </div>
  </nav>

          </tbody>
        </table>

    <!-- <div class="container box">

      <br />

      @if(isset(Auth::user()->email))
        <div class="alert alert-danger success-block">
          <strong>Welcome {{Auth::user()->name}}</strong>
          <br/>
          <a href="{{ url('/main/logout')}}"> Logout </a>
        </div>


      @else
          <script type="text/javascript">window.location = "/main";</script>
      @endif
    </div> -->
</body>
</html>

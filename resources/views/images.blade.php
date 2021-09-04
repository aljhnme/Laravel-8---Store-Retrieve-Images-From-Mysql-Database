<html>
<head>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css'>
</head>
<body>
<div class="container">
 <div class="row">
  @foreach($data as $row)
 <div class="col-md-4">
   <div class="card baseBlock">
  <img class="card-img-top" src="{{asset('images')}}/{{$row['name_img']}}" style="height: 180px; width: 100%; display: block;">
  <div class="card-body">
    <h4 class="card-title">Text around the photo</h4>
    <p class="card-text">{{ $row['text_img'] }}</p>
  </div>
  </div>
  </div>
  @endforeach
 </div>
</div>
</body>
</html>

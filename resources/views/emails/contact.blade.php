<?php
 $name = $data['name'];
 $email = $data['email'];
 $phone = isset($data['phone']) ? $data['phone'] : "";
 $msg = $data['msg'];
 ?>
<center><img src="https://mobilebuzzonline.co.uk/images/youtube_profile_image.png" width="150" height="150"/></center>
<h3 style="background: #ff9bbc; color: #fff; padding: 10px 15px;">New message from: {{$name}}</h3>
<p>Email address: {{$email}}</p><br>
<p>Message: <em>{{$msg}}</em></p><br><br>

<!DOCTYPE html>
<html>
<head>
	<title>New Contact Mail - Guyana localcontent</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

	<h4>{{$contactus->full_name}} sent you an email </h4>
	<br/>
		<p>Name: {{$contactus->phone}}</p>
		<p>Email: {{$contactus->email}}</p>
		<p>Subject: {{$contactus->message_subject}}</p>
		<p>Message: {{$contactus->message}}</p>
		<p>Date: {{$contactus->created_at}}</p>
</body>
</html>

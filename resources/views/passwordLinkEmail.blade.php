

Hello, {{ $email_data['name'] }}
<br><br>
Welcome to the website.
<br>
Please click the link below to reset your password.
<br><br>
<a 
	href="{{route("phonebook.resetlink")}}?code={{$email_data['verification_code']}}">Verify
</a>
<br><br>
Thank you!
<br>
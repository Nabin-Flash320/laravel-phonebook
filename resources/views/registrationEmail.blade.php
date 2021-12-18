

Hello {{ $email_data['name'] }}
<br><br>
Welcome to the website.
<br>
Please click the link below to verify the registered email.
<br><br>
<a 
	href="{{route("phonebook.verify.register")}}?code={{$email_data['verification_code']}}">Verify
</a>
<br><br>
Thank you!
<br>
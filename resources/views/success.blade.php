@extends('master')
@section('contents')
@if(session()->has('success'))
<div class="center container">
 <div class="card">
  <h4>Please check your email for confirmation</h4>
  <p>We have sent an email to you. Please check your mailbox to verify <br><br> your email address and view your position.
  </p>
  <button class="backbtn"><a href="{{ route('home')}}">
    Go back <a></button>
        <p class="small">Did not receive the email? Check your spam folder. 
            If you can't find it there,<br><br> click here to send again.</p>
 </div>
</div>
@endif
@endsection
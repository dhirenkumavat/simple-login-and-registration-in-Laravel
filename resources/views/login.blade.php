@extends('layouts.app')

@section('title', 'login Page')
@section('content')
   <form name="loginForm" method="post" action="loginsub">
<table width="20%" bgcolor="0099CC" align="center">
<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

<tr>
<td colspan=2><center><font size=4><b>HTML Login Page</b></font></center></td>
</tr>

<tr>
<td>email:</td>
<td><input type="text"  size=25 name="email"></td>
</tr>

<tr>
<td>Password:</td>
<td><input type="Password"  size=25 name="pwd"></td>
</tr>

<tr>
<td ><input type="Reset"></td>
<td><input type="submit"  name="submit" value="Login"></td>
</tr>

</table>
</form>
@endsection
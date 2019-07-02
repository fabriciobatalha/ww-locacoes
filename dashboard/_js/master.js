/* Show Password */

jQuery(document).ready(function($) 
{
	$('#show-password').click(function(e) 
	{
    	e.preventDefault();
    	if($('#password').attr('type') == 'password') 
		{
      		$('#password').attr('type', 'text');
      		$('#show-password').attr('class', 'fa fa-eye');
    	} 
			else 
			{
        		$('#password').attr('type', 'password');
        		$('#show-password').attr('class', 'fa fa-eye-slash');
    		}
  	});
});
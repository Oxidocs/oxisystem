var i = 0; 
$(function(){
		    var current = location.pathname;
			
		    $('#nav li a').each(function(){
		        var $this = $(this);
		        console.log(current);
		        current = recuperaPath(current);
		        console.log(current);
		        // if the current path is like this link, make it active
		        if (current == " ") 
		        {
		        	current = "index.php";
		        	if($this.attr('href').indexOf(current) !== -1)
		        	{
		            	$this.parent().addClass('active');
		        	}
		        }
		        else
		        {   
		        	console.log(i);
		        	if($this.attr('href').indexOf(current) !== -1 && i == 0)
		        	{
		            	$this.parent().addClass('active');
		            	i++;
		        	}
		        }
		        
		    })
})
//recupera nombre de archivo
function recuperaPath(url)
{
	try {
		var result = url.match(/[-_\w]+[.][\w]+$/i)[0];
	}
	catch(err) {
		//console.log(err);
		var result = " ";
	}
	return result;
}
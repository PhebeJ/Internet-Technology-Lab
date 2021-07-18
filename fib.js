function fibanocci()
{
	var x=document.getElementById("fib_input").value;
	for(var i=1;i<=x;i++)
		document.write(fib(i)+"<br />");
	function fib(n)
	{
		if(n==1)
			return 0;
		else if(n==2)
			return 1;
		else
			return fib(n-1)+fib(n-2);
	}
}

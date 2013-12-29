<!DOCTYPE html>
<html>
    <head>
        <title>Git Demo First Project</title>
    </head>
    <body>
    
<?php
    
    class Human
    {
        protected $name;
	protected $age;
	
	protected oneMoreYear()
	{
	    return $age++;
	}
    }
    
    class Woman extends Human
    {
        public giveBirth()
	{
	    return TRUE;
	}
	public getGender()
	{
	    return "FEMALE";
	}


    }
    
    class Automobile
    {
    }

    

    class Man extends Human
    {
        
    }

    echo "<h2>this is my first Git demo project</h2>";
    echo "this is my test for branching and merging";:
?>
    </body>
</html>












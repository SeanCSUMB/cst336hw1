<!DOCTYPE html>
<html lang=en>
    <head>
        <title>Subnet Facts - Sean Wilson HW 1</title>
        <meta charset="utf-8">
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=Turret+Road&display=swap" rel="stylesheet">
    </head>
    <body>
        
        <header>
            <h1>Subnet Facts</h1><br>
            <h2>Static routes show the way out to various subnets!</h2>
        </header>
        <hr>
        
        <nav>
            <a href="index.php">Home</a>
            <a href="ip.php">IP Addresses</a>
            <a href="routes.php"><b>Physical Routes</b></a>
            <a href="switch.php">Role of a Switch</a>
        </nav>
        
        <main>
            
            <figure>
                <img src="img/staticroute.jpg" width="500" alt="A diagram showing an example of a static route.">
            </figure>
            
            <div>
                <br>Welcome to the Static Routing page!<br>
                <p>When a subnet needs to access something outside of itself, such as another subnet, how does it find out how to do so? Static routes!</p>
                <p>A subnet is able to find out how to access other subnets by means of static routes. For example, if subnet <samp>1.0.0.0</samp> wants to access subnet <samp>1.1.0.0</samp>,
                a static route can be assigned to indicate where data needs to be sent. For example, if there is router <samp>1.2.0.0</samp> in between the two subnets, a route should be
                established that states that all data being sent to subnet <samp>1.1.0.0</samp> should be directed to <samp>1.2.0.0</samp>; <samp>1.2.0.0</samp> can then send the data on its way. If there is no established route
                for the data, the subnet will instead sent it to whatever its Default Gateway is set to; this is useful for sending data to the Internet, for example.</p>
                <br>
            </div>
            
        </main>
        
        <footer>
            <hr>
            CST336 Internet Programming. 2020&copy; Wilson<br>
            <br>Source and image source: <a href="https://www.learncisco.net/courses/icnd-1/ip-routing-technologies/static-routing.html">https://www.learncisco.net/courses/icnd-1/ip-routing-technologies/static-routing.html</a><br>
            <a href="http://www.csumb.edu"><img src="img/csumb.png" width="200" alt="The CSUMB logo."></a>
        </footer>
        

    </body>
</html>
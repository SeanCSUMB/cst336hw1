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
            <h2>IP addresses help identify the hosts and routers!</h2>
        </header>
        <hr>
        
        <nav>
            <a href="index.php">Home</a>
            <a href="ip.php"><b>IP Addresses</b></a>
            <a href="routes.php">Physical Routes</a>
            <a href="switch.php">Role of a Switch</a>
        </nav>
        
        <main>
            
            <figure>
                <img src="img/subnetmask.gif" width="500" alt="A diagram explaining how subnet masks work.">
            </figure>
            
            <div>
                <br>Welcome to the IP Addressing page!<br>
                <p>Each host in a network, including in a subnet, needs an IP address. However, each subnet needs its own IP address as well.</p>
                <p>This division is accounted for by the use of a subnet mask. An IPv4 address consists of 32 bits, so a subnet mask determines how many bits are used for the subnet and
                how many are used for the individual hosts. This is formatted like <samp>#.#.#.#/#</samp>, with the last number being the mask; this is the number of bits used for the subnet. Thus,
                32 - the mask is the number of bits used for the hosts. The mask should be picked based on the number of hosts that the network is expected to contain; a higher mask
                means fewer hosts.</p>
                <br>
            </div>
            
        </main>
        
        <footer>
            <hr>
            CST336 Internet Programming. 2020&copy; Wilson<br>
            <br>Source and image source: <a href="https://www.cisco.com/c/en/us/support/docs/ip/routing-information-protocol-rip/13788-3.html">https://www.cisco.com/c/en/us/support/docs/ip/routing-information-protocol-rip/13788-3.html</a><br>
            <a href="http://www.csumb.edu"><img src="img/csumb.png" width="200" alt="The CSUMB logo."></a>
        </footer>
        

    </body>
</html>
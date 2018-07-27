<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
    
    <link href="app.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    
    <style>
        body
        {
            background:url('background1.jpg') 0 0 repeat-y scroll transparent;background-size:100% auto;
        }
        .picture {
            width: 100%;
            max-width:600px;
            height: auto;
            text-align: center; 
            margin:0 auto;
        }
        
        #carouselExampleIndicators {
            background-color: black;
             text-align: center; 
        }
        #content
        {
            text-align: left;
            padding:10px;
            max-width:100%;
           
        }
        #footer
        {
             text-align: center; 
        }
       
    </style>
    

</head>
<body>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="picture" src="map.jpeg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="picture" src="nation.jpeg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="picture" src="culture.jpeg" alt="Third slide">
            </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
    
    
    <div class="ui-widget pageWidget" id="content">
<p>
China is a big country which has long history and extensive territory. In the long history, many ethnics used to live on this land. They once affected, fight, and assimilated each other to compose the magnificent Chinese history. Nowadays, there are 56 ethnics living in China. Different ethnics have different culture, language and tradition, but they all have a same name called Chinese ethnic. I will introduce three ethnics which are most representative. 
</p>


       <iframe src="//player.bilibili.com/player.html?aid=5822142&cid=9454587&page=1" scrolling="no" border="0" frameborder="no" framespacing="0" allowfullscreen="true"> </iframe>
    
        <br><br>
        <div class="ui-widget-content" id="footer">           
            <p><a href='page.php'>Learn Chinese Nation</a></p>
        </div>
    </div>
</body>
</html>

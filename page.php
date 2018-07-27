<!DOCTYPE html>
<html>
<head>
	<title>Chinese Nation</title>
    <link href="app.css" rel="stylesheet" type="text/css">
    <link href="../jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    
    <style>
         body
        {
            background:url('background2.jpg') 0 0 repeat-y scroll transparent;
            background-size:100% auto;
        }
        #result {
            width: 100%;
            max-width:800px;
            height: auto;
            padding:10px;
            border: 1px solid rgb(193, 193, 193);
            text-align: center; 
            margin:0 auto;
            float: none;
        }
        #myVideo{
            width: 100%;
            height: auto;
        }
        #myTitle{
        		line-height: 50px;
        }
        #nav
        {
        		text-align: center;
        		padding-top: 40px;
        		padding-bottom: 10px;
        	}
        #nav span
        {
        		margin: 0px;
        		line-height: 40px;
        }
        #nav .dropdown-item
        {
        		line-height: 20px;
        }
        #myInfo
        {
            text-align: left;
        }
        #selectionText,h1{
            text-align: center;
        }
        #selection{
            text-align: center;
        }
        h1{
            font-family: Georgia, serif;
        }
        #footer
        {
             text-align: center; 
        }
    </style>
    
    
    
    
    <script>
    function TransferString(content)    
    {    
        var string = content;    
        try{    
            string=string.replace(/\r\n/g,"<br/>")    
            string=string.replace(/\r/g,"<br/>")    
            string=string.replace(/\n/g,"<br/>");    
        }catch(e) {    
           
        }    
        return string;    
    }   
        function introduction(a){
        	 	document.getElementById("myTitle").innerHTML=$(a).parent().attr("title")+" Introduction";
                $("#myVideo").hide();
                 $("#myInfo").show();
                  document.getElementById("myVideo").pause();
        	 	var url=$(a).attr("file");
            $.get(url, function(data){
                $("#myInfo").html(TransferString(data));
            });
        }
    
        function culture(a){
	        	document.getElementById("myTitle").innerHTML=$(a).parent().attr("title")+" Culture";
                $("#myVideo").hide();
                $("#myInfo").show();
                document.getElementById("myVideo").pause();
	    	 	var url=$(a).attr("file");

	        $.post(url,{}, function(data){
	           $("#myInfo").html(TransferString(data));
	        });
        }
        
        function playVideo(a){
            $("#myVideo").show();
            $("#myInfo").hide();
            var MV=document.getElementById("myVideo");
            MV.src=$(a).attr("file");
            MV.play();
            document.getElementById("myTitle").innerHTML=$(a).parent().attr("title");
        }
        $(function(){
    	   introduction(document.getElementById("Han"));
       });
    </script>
    
    
</head>
<body>
   
   <div id="nav">
    <span class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Han
        </button>
    <span class="dropdown-menu" aria-labelledby="dropdownMenu2" title="Han">
        <button class="dropdown-item" type="button" onclick="introduction(this)" file="HanIntroduction.txt" id="Han">Introduction</button>
        <button class="dropdown-item" type="button" onclick="culture(this)" file="HanCulture.txt">Culture</button>
        <button class="dropdown-item"  onclick="playVideo(this)" file="MaPoDouFu.mp4"  >Video</button>
    </span>
    </span>
    
      <span class="dropdown" >
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Manchu
        </button>
    <span class="dropdown-menu" aria-labelledby="dropdownMenu2" title="Manchu">
        <button class="dropdown-item" type="button" onclick="introduction(this)" file="ManchuIntroduction.txt">Introduction</button>
        <button class="dropdown-item" type="button" onclick="culture(this)" file="ManchuCulture.txt">Culture</button>
        <button class="dropdown-item" type="button" onclick="playVideo(this)" file="Fish-flavouredPorkVideo.mp4" >Video</button>
    </span>
    </span>
    
       <span class="dropdown" >
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Mongols
        </button>
    <span class="dropdown-menu" aria-labelledby="dropdownMenu2" title="Mongols">
        <button class="dropdown-item" type="button" onclick="introduction(this)" file="MongolsIntroduction.txt">Introduction</button>
        <button class="dropdown-item" type="button" onclick="culture(this)" file="MongolsCulture.txt">Culture</button>
        <button class="dropdown-item" type="button" onclick="playVideo(this)" file="PorkwithSaltedVegetableVideo.mp4" >Video</button>
    </span>
    </span>
   </div>
  
    <div id = "result">
        <h3 id="myTitle" ></h3>
         <video id="myVideo" loop="loop" controls="controls"></video>
         <div id="myInfo"></div>
    </div>
    
    
    
    <br><br>
        <div class="ui-widget-content" id="footer">           
            <p><a href='home.php'>Home Page</a></p>
        </div>
</body>
</html>

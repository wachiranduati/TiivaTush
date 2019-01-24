<?php
if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_FILES["userfile"])){
    //move_uploaded_file()
}
?>
<html>
    <head>
        <title>File Upload Progress Bar</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <style type="text/css">
            #bar_blank {
                border: solid 1px #000;
                height: 20px;
                width: 300px;
            }
            #bar_color {
                background-color: #006666;
                height: 20px;
                width: 0px;
            }
            #bar_blank, #hidden_iframe {
                display: none;
            }
        </style>
    </head>
    <body>
        <div id="bar_blank">
            <div id="bar_color"></div>
        </div>
        <div id="status"></div>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" id="myForm" enctype="multipart/form-data" target="hidden_iframe">
            <input type="hidden" value="myForm" name="<?php echo ini_get("session.upload_progress.name"); ?>">
            <input type="file" name="userfile"><br>
            <input type="submit" value="Start upload">
            
        </form>
        <iframe id="hidden_iframe" name="hidden_iframe" src="about:blank"></iframe>
            <script type="text/javascript">
                function toggleBarVisibility(){
                    var e = document.getElementById("bar_blank");
                    e.style.display = (e.style.display == "block") ? "none" : "block";
                }
                
                function createRequestObject(){
                    var http;
                    if(navigator.appName == "Microsoft Internet Explorer"){
                        http = new ActiveXObject("Microsoft.XMLHTTP");
                        
                    }
                    else{
                        http = new XMLHttpRequest();
                    }
                    return http;
                }
                function sendRequest(){
                    var http = createRequestObject();
                    http.open("GET", "progress.php");
                    http.onreadystatechange = function () { handleResponse(http); };
                    http.send(null );
                }
                function handleResponse(http){
                    var response;
                    if(http.readyState == 4){
                        response = http.responseText;
                        document.getElementById("bar_color").style.width = response + "%";
                        document.getElementById("status").innerHTML = response + "%";
                        
                        if(response < 100){
                            setTimeout("SendRequest()", 1000);
                        }
                        else {
                            toggleBarVisibility();
                            document.getElementById("status").innerHTML = "Done.";
                        }
                    }
                }
                function startUpload(){
                    toggleBarVisibility();
                    setTimeout("sendRequest()", 1000);
                }
                (function (){
                    document.getElementById("myForm").onsubmit = startUpload;
                })();
            
            </script>
    </body>
</html>
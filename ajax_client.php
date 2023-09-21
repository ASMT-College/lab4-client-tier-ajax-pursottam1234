<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Search for list of gods:
        <input type="text" name="god" id="god" oninput="get_data_using_ajax()">
        <div id="god_results"></div>
    <script>
        // get_data_using_ajax();
        function get_data_using_ajax(search_string){
            var search_string = document.getElementById('god').value
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    // console.log(this.responseText);
                    document.getElementById("god_results").innerHTML = this.responseText;
                    // alert('search access');
                }
            };
            xmlhttp.open("GET", "ajax_server.php?search=" + search_string, true);
            xmlhttp.send();
        }
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Google Book Search</title>
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="https://www.w3schools.com/lib/w3.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<style>
	          body,h2,h3,h4,h5,h6 {font-family: "Merriweather", serif}
	          h1 {font-family: "Open+Sans", sans-serif}
	</style>
	<script src="https://code.jquery.com/jquery-2.1.4.min.js">
	</script>
</head>
<body>
	<a href="milestone2.html">Return to Milestone 2 files</a>
	<form>
		<p>Enter Search Parameters:</p><input name="q" type="text" value="">
		<p>Choose a Page Number and Click Submit:</p>
		<p>1: <input checked name="page" type="radio" value="1"> 2: <input name="page" type="radio" value="2"> 3: <input name="page" type="radio" value="3"></p><input type="submit" value="Search">
	</form>
	<h1 id="title"></h1>
	<h2>Search results: <span id="total"></span></h2>
	<div id="results" style="display: flex; flex-wrap: wrap;"></div>
	<script>
	      $(function(){
	          var json = ;
	          console.log(json);
	          var total=json.totalItems;
	          $("#total").text(total);

	          var resultHTML="";
	          for (i in json.items)
	          {
	              var booktitle=json.items[i].volumeInfo.title;
	              var bookid=json.items[i].id;
	              var cover="";
	              if (json.items[i].volumeInfo.imageLinks != null)
	                  cover=json.items[i].volumeInfo.imageLinks.smallThumbnail;

	              resultHTML+="<div class='bookdiv'>";
	              resultHTML+="<img src='"+cover+"' style='float: left' />";
	              resultHTML+="<a href='bookinfo.php?id="+bookid+"'>"+booktitle+"<\/a>";
	              resultHTML+="<\/div>";;
	          }
	          $("#results").html(resultHTML);
	          $(".bookdiv").css("width", "300px");

	      });
	</script>
</body>
</html>

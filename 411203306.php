<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>陳妤欣簡介</title>

	<style type="text/css">
		* { font-family:"標楷體"; margin-left:auto; margin-right:auto;}
		h1 {color:#FFFFBB; font-size:35px;}
		h2 {color:#FFFFBB; font-size:30px;}

	</style>

	<script>
		function change1() {
  			document.getElementById("pic").src = "mountain.jpg";
  			document.getElementById("h2text").innerText = "靜宜資管";
		}

		function change2() {
  			document.getElementById("pic").src = "cliff.jpg";
  			document.getElementById("h2text").innerText = "Chen-Yi Xin";
		}
	</script>


</head>
<body>
	<table width="70%">

		<tr>

		   <td>
		 	   <img src="cliff.jpg" width="110%"id="pic" onmouseover="change1()" onmouseout="change2()"></img>
		   </td>


		 <td>

		 	<h1>陳妤欣</h1>
		    <h2 id="h2text">Yi-Xin Chen</h2>

         </td>

        </td>

       </tr>

	</table>

	
  
	<table width="70%" border="1">
		<tr>
			<td>
	           個人網頁：<a href="https://csim.pu.edu.tw/">https://csim.pu.edu.twa</a><br>
	           IG：<a href="https://www.instagram.com/1emonayu/"target="_blank">https://www.instagram.com/1emonayu/</a><br>
	           Tel:<a href=" 0968366237">0968366237</a><br>
	           G-Mail:<a href=" 1emonayu2521@gmail.com">1emonayu2521@gmail.com</a><br>
	        </td>

            <td>
	           大象席地而坐電影配樂<br>
	           <audio controls>
		       <source src="elephant.mp3" type="audio/mP3">
	           </audio><br>
	        </td>

            <td>
	           不要去臺灣<br>
	           <iframe src="https://www.youtube.com/embed/pW88QFpHXa8" allowfullscreen></iframe>
            </td>
		</tr>
	</table>	
<table width="70%" border="1">
    	<tr>

		   <td>
		   	聊天機器人<br>

	  <iframe
      allow="microphone;"
      width="350"
      height="430"
      src="https://console.dialogflow.com/api-client/demo/embedded/662097c6-776d-4a70-b368-08e42a7af5b9">
    </iframe>
       </td>


		 </tr>

		 	</table>
		 	
		 	<?php echo date("Y-m-d") ?>


</body>
</html>
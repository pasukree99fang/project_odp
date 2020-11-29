<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- <script> 
    $(document).ready(function(e) {
        increaseNotify();
        setInterval(increaseNotify, 3000);
        $("#btn1").click(function(){
            decreaseNotify()
        })
    });
 
    function increaseNotify() { 
        $.ajax({
            url: "increase.php",
            type: 'GET',
            success: function(obj) {
                var obj = JSON.parse(obj);
                $(".badge_number").text(obj.badge_number);
            }
        });
    }

    function decreaseNotify(){ 
	$.ajax({
		url: "decrease.php",
		type: 'GET',
		success: function(obj) {
			
		}
	});
}
</script>

<body>

    <p class="badge_number">0</p>แจ้งเตือน<span class="caret"></span>
    <button id="btn1">clear</button>
</body> -->

</html>
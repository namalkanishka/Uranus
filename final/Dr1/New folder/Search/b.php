<html>
<body>
<?php
$p=$_GET['name'];
echo($_GET['name']);

?>

	<form id="test">
	<input type="hidden" name="name" value="<?php echo $p; ?>">
	</form >
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>

window.onload = function() {
  search();
};
  function search() {

        $.ajax({
            type: "POST",
            url: "http://localhost:3000/search_drones",
            data: $('#test').serialize(),
            success: function (data2) {
                 console.log('serachdata');
                 var name="hbvjkb";
                if (data2)
                    var c = data2;
                    // console.log(a);
                    
                    $.each(c, function (bb) {
                    console.log(bb);
                    console.log("hh");
                    console.log(c[bb]);
                     console.log(c[bb].name);
                     name=(c[bb].name);

                });
                      // location.href = "./b.php";
                      
                      // window.location.replace("http://localhost/b.php?name="+name);

               
            },
            error: function () {
                alert("something went wrong");
            }
        });

    }

</script>
</html>


<script>
           $(document).ready(function(){
  $("button").click(function(){
                 //location.reload();
                $.ajax({
                    type: "post",
                    url: "/includes/randomFunction.php",
                    data: {'random': true},
                    dataType: "HTML",
                    success: function (data) {
                        document.getElementById('randomComic').innerHTML = data;
                    },
                    error: function (result) {
                        alert("Error");
                    }
                });
                return false;
            });
           });
        </script>
<div style="margin-right: 0px; margin-left: 0px; text-align: center;">
<button  id="change">New Comic</button>
<div class="d-flex justify-content-center">
<br>
<div id="randomComic">
<div> <?php getRandCom(); ?> </div>
</div>
</div>
</div>

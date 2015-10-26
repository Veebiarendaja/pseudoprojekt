<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js"></script>
<input type='text' id='txtEmail'/>                                              <!--text field id-->
<input type='submit' name='submit' onclick='Javascript:checkEmail();'/>         <!--button javascript-->
<script type="text/javascript">                                                 /*Javascript*/
    function checkEmail() {

        var email = document.getElementById('txtEmail');
        /*Value from id */
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (!filter.test(email.value)) {
            alert('Please provide a valid email address');
            email.focus;
            return false;
        } else {
            alert('Email valid');
            $.get("api.php?command=emailvalidation&email=" + $('#txtEmail').val(), function (value) {   // api.php
                if (value == 1) {
                    alert('Domeen olemas');
                } else if (value == 0) {
                    alert('Domeen puudub');
                } else {
                    alert('Viga:' + value);
                }
            });
        }
    }
</script>
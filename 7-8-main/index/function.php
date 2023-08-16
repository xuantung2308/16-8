
    <script>
    function showhidden($pass, $icon){
        pass="";
        icon="";
        var eyeicon = document.getElementById($icon);
        var password = document.getElementById($pass);
        if(password.type == "password"){
            password.type = "text";
            eyeicon.src = "../img/eye-open.png";
        }else{
            password.type = "password";
            eyeicon.src = "../img/eye-close.png";
        }
    }
    </script>
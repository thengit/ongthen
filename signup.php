<body>
        <?php
            if(isset($_POST["surname"])&&
              isset($_POST["name"])&&
              isset($_POST["password"])
              ){
                if($_POST["surname"]=="" ||
                $_POST["name"]=="" ||
                $_POST["password"]==""){
                    echo "Please type";
                }else
                echo "Something Right.";
            }
        
        ?>
    <form method="post" action="index.php">
        ត្រកូល : <input type="text" name="surname"><br>
       ឈ្មោះ : <input type="text" name="name"><br>
        លេខសម្ងាត់ : <input type="password" name="password"><br>
        លេខសម្ងាត់ : <input  type="password" name="password">
            <input type="submit"><br>
    </form>
</body>
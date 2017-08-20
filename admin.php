<?php
    session_start();
    include 'security.php';
    include 'connect.php';
    
        $error="";
        if(isset($_SESSION['error'])){
            $error=$_SESSION['error'];
        }
    
    ?>
<html>
    <header>

        <title>


        </title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        

    </header>

    <body>


    <div class="form-upload">
        <form action="do_upload.php" method="post" enctype="multipart/form-data" id="form1" runat="server">

            <input type="text" name="title" placeholder="title" />
            <input type="text" name="caption" placeholder="caption" />
            <input type='file' id="upload" name="upload" />
            <input type="submit">
            <img alt="Image Display Here" id="image" />

        </form>

    </div>
    <script type="text/javascript">
        
        document.getElementById("upload").onchange = function () {
            var reader = new FileReader();
        
            reader.onload = function (e) {
                // get loaded data and render thumbnail.
                document.getElementById("image").src = e.target.result;
            };
        
            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        };
        
    </script>
    
    <?php
        $q = "SELECT * FROM upload";
        $enter = mysqli_query($con,$q);
    ?>
    <table class="table table-bordered table-hover">
        <tr class="info">
            <th>ID</th>
            <th>Nama</th>
            <th>Preview</th>
            <th>Title</th>
            <th>Caption</th>
            <th>Action</th>
        </tr>
        <?php
        while($sql=mysqli_fetch_array($enter)){
            $id=$sql[0];
            $upload=$sql[1];
            $title=$sql[2];
            $caption=$sql[3];
        
        ?>
        <tr>
            <td><?php echo $id;?></td>
            <td><?php echo $upload;?></td>
            <td><img src="<?php echo $upload; ?>"></td>
            <td><?php echo $title; ?></td>
            <td><?php echo $caption; ?></td>
            <td><a href="do_delete.php?id=<?php echo $id; ?>">Delete</a></td>
        </tr>
        <?php } ?>
    </table>

    <div class="logout"><a href="do_logout.php">logout </a></div>

    </body>
</html>
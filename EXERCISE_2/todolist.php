<?php




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
</head>
<body>
    <div>
       <form action="" method="post">
            <input type="text" name="task" placeholder="Add your task...">
            <button type="submit" name="addtask">Add task</button>
       </form>
    </div>
    <div>
        <h1>My Tasks</h1>
        <button>Delete all Tasks</button>
        <br><br>

        <ul>
            <?php
                $mytask = $_POST["task"];

                if(isset($_POST["addtask"])){

                    echo"<li>$mytask</li>"."<button>delete</button>";
                }
            
            
            
            ?>
        </ul>

            
        
    </table>
    </div>
</body>
</html>
<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login']) {
//    var_dump($_SESSION);
} else {
    header('Location:http://localhost/lab3/login.php');
}

 require_once 'header.php'; ?>

<!--<h3><a href="add.php">Add New</a></h3>-->

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>






<div class="row">
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div ><h2 style="text-align: center;">List of Appoinments</h2></div>
        <div></div>
        <?php
//        echo '<pre>';
        require_once 'list.php';
        ?>
       <div>
        <!-- Table -->
        <table class="table table-bordered">
            <tr> 
                <th>#</th> 
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Appointment Date</th>
                <th>Engine</th>
                <th>Car No</th>
                <th>Mechanic</th>
                <th>Action</th>
            </tr>
            <?php
            $counter_list = 1;
            foreach ($data as $value):
                ?>
                <tr>
                    <td><?php echo $counter_list; ?></td>
                    <td><?php echo $value['name']; ?></td>
                    <td><?php echo $value['address']; ?></td>
                     <td><?php echo $value['phone']; ?></td>
                    <td><?php echo $value['email']; ?></td>
                    <td><?php echo $value['appdate']; ?></td>
                     <td><?php echo $value['engine']; ?></td>
                      <td><?php echo $value['carno']; ?></td>
                    <td><?php echo $value['mechanic']; ?></td>
                    <td>
                        <a href="edit.php\?id=<?php echo $value['id']; ?>"> <input type="button" value="EDIT" />   </a>
                        <a href="delete.php\?id=<?php echo $value['id']; ?>">
                            <input type="button" value="DELETE" />
                        </a>  
                    </td>

                </tr>

                <?php
                $counter_list++;
            endforeach;
            ?>

        </table>
        </div>
    </div>
</div>

<?php require_once 'footer.php'; ?>


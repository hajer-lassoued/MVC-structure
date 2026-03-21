<?php if(isset($_SESSION["employee"])) {  ?>
<p class="message <?php isset($error) ? 'error' : '' ?>"><?php echo $_SESSION["employee"]; ?></p>

<?php unset($_SESSION["employee"]);  } ?>


<div class="employee">
    <a class="button" href="/employee/add"><i class="fa fa-plus"></i> Add Employee</a>
    <table class="data">
        <thead>
        <tr>
            <th>name</th>
            <th>age</th>
            <th>address</th>
            <th>salary</th>
            <th>tax</th>
            <th>Control</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if(!empty($employees)) {
            foreach ($employees as $employee) {
                ?>
                <tr>
                    <td><?= $employee->name ?></td>
                    <td><?= $employee->age ?></td>
                    <td><?= $employee->address ?></td>
                    <td><?= $employee->salary ?></td>
                    <td><?= $employee->tax ?></td>
                    <td>
                        <a href="/employee/edit/<?= $employee->id ?>">Edit</a>
                        <a href="/employee/delete/<?= $employee->id ?>" onclick="if(!confirm('<?= $text_delete_confirm ?>')) return false;">delete</a>
                    </td>
                </tr>
                <?php
            }
        }
        ?>
        </tbody>
    </table>
</div>
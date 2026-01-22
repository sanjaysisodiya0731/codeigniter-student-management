
<h2 class="mb-4">Students List</h2>
<a href="<?php echo base_url('index.php/student/create');?>" class="btn btn-primary mb-3">Add New</a>

<?php
if ($this->session->flashdata('success')) {
?>
    <div class="alert alert-success">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
<?php
}

if ($this->session->flashdata('error')) {
?>
    <div class="alert alert-danger">
        <?php echo $this->session->flashdata('error'); ?>
    </div>
<?php
}
?>

<table class="table table-bordered table-striped">
    <thead class="thead-dark">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($students as $student) { ?>
            <tr>
                <td><?php echo $student->first_name; ?></td>
                <td><?php echo $student->last_name; ?></td>
                <td><?php echo $student->email; ?></td>
                <td><?php echo $student->phone; ?></td>
                <td>
                    <a href="<?php echo base_url('index.php/student/delete/'.$student->id);?>" class="btn btn-danger btn-sm">Delete</a>
                    <a href="<?php echo base_url('index.php/student/edit/'.$student->id);?>" class="btn btn-warning btn-sm">Edit</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
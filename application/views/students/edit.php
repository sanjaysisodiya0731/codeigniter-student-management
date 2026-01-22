
<h2 class="mb-4">Edit Student</h2>
<form method="post" action="<?= base_url('index.php/student/update'); ?>">
    <input type="hidden" id="student_id" name="student_id" value="<?php echo $student->id; ?>" />
    <div class="form-group">
        <label for="first_name">First Name:</label>
        <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $student->first_name; ?>">
    </div>
    <div class="form-group">
        <label for="last_name">Last Name:</label>
        <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $student->last_name; ?>">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo $student->email; ?>">
    </div>
    <div class="form-group">
        <label for="phone">Contact:</label>
        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $student->phone; ?>">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
<a href="<?php echo base_url('index.php/student'); ?>" class="btn btn-secondary">Cancle</a>
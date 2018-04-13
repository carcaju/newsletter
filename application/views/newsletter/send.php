<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php $attributes = array('name'=>'form1', 'onsubmit'=>'return ValidateEmail(document.form1.email)'); ?>

<?php echo form_open('newsletter/send',$attributes); ?>

    <label for="text">Email</label>
    <input type="input" name="email" /><br />


<?php foreach ($marks as $mark): ?>
    <input type="hidden" name="mark[]" value="<?php echo $mark; ?>" /><br />
<?php endforeach; ?>

    <input type="submit" name="submit" value="Enviar" />

</form>
<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('xml/send'); ?>

    <label for="text">Email</label>
    <input type="input" name="email" /><br />


    <input type="submit" name="submit" value="Enviar" />

</form>
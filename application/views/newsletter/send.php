<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('newsletter/send'); ?>

    <label for="text">Email</label>
    <input type="input" name="email" /><br />
    <input type="hidden" name="id_news" value="<?php echo $id_news; ?>" /><br />


    <input type="submit" name="submit" value="Enviar" />

</form>
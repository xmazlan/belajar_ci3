<div class="container">
	<?php echo $error; ?>

	<?= $this->session->flashdata('upload_message'); ?>

	<?php echo form_open_multipart('upload/do_upload'); ?>

	<input type="file" name="userfile" size="20" />

	<br /><br />

	<input type="submit" value="upload" />

	</form>

	<br /><br />

	<ol>
		<?php foreach ($list_file as $lf) { ?>
			<li>
				<a href="<?= base_url('uploads/' . $lf->path) ?>">
					<?= $lf->path; ?>
				</a>
			</li>
		<?php } ?>
	</ol>
</div>

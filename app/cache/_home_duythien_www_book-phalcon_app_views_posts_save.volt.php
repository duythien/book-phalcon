<?php echo $this->getContent(); ?>
<div align="center">
	<?php echo $this->tag->form(array('class' => 'form-search')); ?>
		<div align="left">
			<h2>Sign Up</h2>
		</div>
		<table class="signup">
			<tr>
				<td align="right">Title</td>
				<td>
					<?php echo $this->tag->textField(array('title')); ?>
				</td>
			</tr>
			<tr>
				<td align="right">Content</td>
				<td>
					<?php echo $this->tag->textArea(array('content')); ?>
				</td>
			</tr>
			

			
			<tr class="form-actions">
				<td align="right"></td>
				<td> <?php echo $this->tag->submitButton(array('Save', 'class' => 'btn btn-primary btn-large')); ?></td>
			</tr>
		</table>

	
		<hr>

	</form>

</div>
<?php var_dump($this->session->get('user'));?>
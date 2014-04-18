{{ content() }}
<div align="center">
	{{ form('class': 'form-search') }}
		<div align="left">
			<h2>Sign Up</h2>
		</div>
		<table class="signup">
			<tr>
				<td align="right">Title</td>
				<td>
					{{ text_field("title") }}
				</td>
			</tr>
			<tr>
				<td align="right">Content</td>
				<td>
					{{ text_area("content") }}
				</td>
			</tr>
			

			
			<tr class="form-actions">
				<td align="right"></td>
				<td> {{ submit_button('Save','class':'btn btn-primary btn-large') }}</td>
			</tr>
		</table>

	
		<hr>

	</form>

</div>
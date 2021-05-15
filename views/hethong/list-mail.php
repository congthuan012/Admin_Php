<div class="row">
	<!-- page content -->
	<div class="col-md-12">
		<div class="x_panel">
			<div class="x_title row">
				<div class="col-8">
					<h2>QUẢN LÝ MAIL</h2>
				</div>
				<div class="col-4 d-flex align-items-center justify-content-end">
					<!-- <h2 onclick="ShowTrash()" class="btn btn-outline-danger" style="cursor: pointer;">Thùng rác</h2> -->
				</div>
			</div>
			<?php 
				if(isset($_SESSION['redirect_msg']) && $_SESSION['redirect_msg'] != null)
				{
					if(isset($_SESSION['redirect_status']))
					{
						echo msg($_SESSION['redirect_msg'],$_SESSION['redirect_status']);
						unset($_SESSION['redirect_status']);
					}else{
						echo msg($_SESSION['redirect_msg']);
					}
					unset( $_SESSION['redirect_msg']);
				}
			?>
			<div id="list">
				<div class="x_content">
					<hr>
					<div class="row">
						<div class="col-sm-3 mail_list_column border-right">
							<?php
							foreach ($mails as $mail) {
							?>
								<div>
									<div data-id="<?= $mail->id ?>" class="my-mail-block mail_list">
										<div class="left">
											<?php
											
											if (!((new traloilienhe)->getRepMail($mail->id)))
												echo '<i class="fa fa-circle text-danger"></i>';
											?>
										</div>
										<div class="right">
											<h6><?= ((new khachhang)->find($mail->nguoi_tao))->ten ?> <small><?= date_format(date_create($mail->created_at), "H:i") ?></small></h6>
											<p><?= $mail->chu_de ?></p>
										</div>
									</div>
								</div>
							<?php
							}
							?>
						</div>
						<!-- /MAIL LIST -->

						<!-- CONTENT MAIL -->
						<div class="col-sm-9 my_mail_view">
							<div id="my-mail-content" class="inbox-body">

							</div>
							<div class="row justify-content-end mt-2" onclick="HideMail('my_mail_view')">
								<div class="btn btn-outline-secondary">Thoát</div>
								<div>
								</div>
								<!-- /CONTENT MAIL -->
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- /page content -->
		</div>
	</div>
</div>

<script>
	$(function() {
		$('.my-mail-block').click(function() {
			$.ajax({
				url: '<?= href('mail', 'maildetail') ?>',
				data: {'id': $(this).data('id')},
				type: 'get',
				dataType: 'JSON',
				success: function(res) {
					console.log(res);
                    var repMail = res.repMail;
                    var mail = res.data;
					$('#my-mail-content').html(resultHtml(mail,repMail));
					$('.my_mail_view').show();
				},
				error: function(error) {
					swal({
						title: "Server Error!",
						icon: "error",
						button:false,
						showConfirmButton: false,
						timer: 1500
					});
					console.log(error.responseText);
				}
			});
		});
	});
	function resultHtml(mail,repMail)
	{
		var html = `
		<div class="mail_heading row">`;
		if(repMail)
		{
			html+=`<div class="col-md-8">
			<a href="http://localhost/mvc/index.php?controller=mail&action=reply&id=`;
			html+=mail.id;
			html+=`" class="btn btn-sm btn-primary" type="button"><i class="fa fa-reply"></i> Reply</a>

			</div>
			<div class="col-md-4 text-right row justify-content-end">
			<p class="date mr-3"> `;
			html+= mail.created_at;
			html+= `</p>
            <a type="button" data-toggle="tooltip" data-placement="left" title="Chuyển vào thùng rác" onclick="return confirm('Bạn chắc có muốn xóa dòng đã chọn?')" href="http://localhost/mvc/index.php?controller=mail&action=delete&id=`;
            html+=mail.id;
            html+=`"><i style="font-size: 20px; margin-left:10%" class="fa fa-trash text-danger"></i></a>`;
			html+=`</div>`;
		}

		html+=`<div class="col-md-12">
		<h4> `;
		html+=mail.chu_de;
		html+=`</h4>
		</div>
		</div>
		<div class="sender-info">
		<div class="row">
		<div class="col-md-12">
		<strong>`;
		html+= mail.nguoi_tao.ten==null?'':mail.nguoi_tao.ten;
		html+=`</strong>
		<span>(`;
		html+=mail.nguoi_tao.email==null?'không xác định':mail.nguoi_tao.email;
		html+=`)
		</div>
		</div>
		</div>
		<div class="view-mail mb-5">`;
		html+=mail.noi_dung;
		html+=`</div>`;
		if(repMail)
		{
            repMail.forEach(value => {
                html+=`<div class="p-3 mt-2" style="background:#f1e9e9">`;
                html+=resultHtml2(value);
                html+=`</div>`;
            });
		}
		return html;
	}

    function resultHtml2(repMail)
	{
		var html = `
        <div class="col-md-12 p-0 d-flex justify-content-between">
		    <h4> `;
		    html+=repMail.tieu_de;
		    html+=`</h4><p>`;
            html+= repMail.created_at;
            html+= `</p>
		</div>
		<div class="sender-info">
		    <div class="row">
		        <div class="col-md-12">
		            <strong>`;
                        html+= repMail.nguoi_tao.ten==null?'':repMail.nguoi_tao.ten;
                        html+=`
                    </strong>
                    <span>(`;
                        html+=repMail.nguoi_tao.email==null?'không xác định':repMail.nguoi_tao.email;
                        html+=`)
                    </span>
                </div>
		    </div>
		</div>
		<div class="view-mail mb-5">`;
		    html+=repMail.noi_dung;
		    html+=`
        </div>`;
		return html;
	}

	function HideMail(_class)
	{
		$('.'+_class).hide();
	}
</script>
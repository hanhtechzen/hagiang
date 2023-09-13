<?php 
include "ajax_config.php";
$data = $_POST['data'];
if(isset($_POST['datvengay'])){
    $responseCaptcha = $_POST['recaptcha_response_datvengay'];
    $resultCaptcha = $func->checkRecaptcha($responseCaptcha);
    if(($resultCaptcha['score'] >= 0.5 && $resultCaptcha['action'] == 'recaptchaResponseDatVeNgay') || $resultCaptcha['test'])
    {
        $data = (isset($_POST['data'])) ? $_POST['data']:null;
        if(!empty($data)) { foreach($data as $column => $value) $data[$column] = htmlspecialchars($value); }
        $data['ngaytao'] = time();
		
        if($d->insert('newsletter',$data))
        {
        	$emailer->setEmail('tennguoigui',$data['ten']);
		    $emailer->setEmail('emailnguoigui',$data['email']);
		    $emailer->setEmail('dienthoainguoigui',$data['dienthoai']);
		    $emailer->setEmail('diachinguoigui',$data['diachi']);
		    $emailer->setEmail('tieudelienhe','Yêu cầu đặt vé từ: '.$data['ten']);
		    $emailer->setEmail('noidunglienhe',$data['noidung']);
		    if($emailer->getEmail('tennguoigui'))
		    {
		    	$strThongtin .= '<p><strong>Họ tên: </strong> '.$emailer->getEmail('tennguoigui').'</p>';
		    }
		    if($emailer->getEmail('emailnguoigui'))
		    {
		    	$strThongtin .= '<p><strong>Email liên hệ: </strong> '.$emailer->getEmail('emailnguoigui').'</p>';
		    }
		    if($emailer->getEmail('diachinguoigui'))
		    {
		    	$strThongtin .= '<p><strong>Địa chỉ liên hệ: </strong> '.$emailer->getEmail('diachinguoigui').'</p>';
		    }
		    if($emailer->getEmail('dienthoainguoigui'))
		    {
		    	$strThongtin .= '<p><strong>Điên thoại liên hệ: </strong> '.$emailer->getEmail('dienthoainguoigui').'</p>';
		    }
		    if(!empty($data['ngaysudung']))
		    {
		    	$strThongtin .= '<p><strong>Thời gian dự kiến: </strong> '.$data['ngaysudung'].'</p>';
		    }
		    if(!empty($data['time_dukien']))
		    {
		    	$strThongtin .= '<p><strong>Thời gian dự kiến: </strong> '.$data['time_dukien'].'</p>';
		    }
		    if(!empty($data['time_uoctinh']))
		    {
		    	$strThongtin .= '<p><strong>Thời gian ước tính ở lại: </strong> '.$data['time_uoctinh'].'</p>';
		    }
		    if(!empty($data['name_tour']))
		    {
		    	$strThongtin .= '<p><strong>Tour đã chọn: </strong> '.$data['name_tour'].'</p>';
		    }
		    if(!empty($data['name_khachsan']))
		    {
		    	$strThongtin .= '<p><strong>Khách sạn đã chọn: </strong> '.$data['name_khachsan'].'</p>';
		    }
		    if(!empty($data['name_nhahang']))
		    {
		    	$strThongtin .= '<p><strong>Nhà hàng đã chọn: </strong> '.$data['name_nhahang'].'</p>';
		    }
		    if(!empty($data['nguoilon']))
		    {
		    	$strThongtin .= '<p><strong>Số người lớn > 12 tuổi: </strong> '.$data['nguoilon'].'</p>';
		    }
		    if(!empty($data['treem']))
		    {
		    	$strThongtin .= '<p><strong>Số trẻ em (từ 5 - 11 tuổi): </strong> '.$data['treem'].'</p>';
		    }
		    if(!empty($data['treem2']))
		    {
		    	$strThongtin .= '<p><strong>Số trẻ em miễn vé < 5 tuổi: </strong> '.$data['treem2'].'</p>';
		    }
		    

		    $emailer->setEmail('thongtin',$strThongtin);
		    $contentAdmin = '
			<table align="center" bgcolor="#dcf0f8" border="0" cellpadding="0" cellspacing="0" style="margin:0;padding:0;background-color:#f2f2f2;width:100%!important;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px" width="100%">
				<tbody>
					<tr>
						<td align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal" valign="top">
							<table border="0" cellpadding="0" cellspacing="0" style="margin-top:15px" width="600">
								<tbody>
									<tr>
										<td align="center" id="m_-6357629121201466163headerImage" valign="bottom">
											<table cellpadding="0" cellspacing="0" style="border-bottom:3px solid '.$emailer->getEmail('color').';padding:10px 0;background-color:#fff" width="100%">
												<tbody>
													<tr>
														<td bgcolor="#FFFFFF" style="padding:0" valign="top" width="100%">
															<div style="color:#fff;background-color:#fff;font-size:11px">&nbsp;</div>
															<table style="width:100%;">
																<tbody>
																	<tr>
																		<td>
																			<a href="'.$emailer->getEmail('home').'" style="border:medium none;text-decoration:none;color:#007ed3;margin:0px 0px 0px 20px" target="_blank">'.$emailer->getEmail('logo').'</a>
																		</td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
									<tr style="background:#fff">
										<td align="left" height="auto" style="padding:15px" width="600">
											<table>
												<tbody>
													<tr>
														<td>
															<h1 style="font-size:17px;font-weight:bold;color:#444;padding:0 0 5px 0;margin:0">Kính chào</h1>
															<p style="margin:4px 0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal">Bạn nhận được thư liên hệ từ khách hàng <span style="text-transform:capitalize">'.$emailer->getEmail('tennguoigui').'</span> tại website '.$emailer->getEmail('company:website').'.</p>
															<h3 style="font-size:13px;font-weight:bold;color:'.$emailer->getEmail('color').';text-transform:uppercase;margin:20px 0 0 0;padding: 0 0 5px;border-bottom:1px solid #ddd">Thông tin liên hệ <span style="font-size:12px;color:#777;text-transform:none;font-weight:normal">(Ngày '.date('d',$emailer->getEmail('datesend')).' tháng '.date('m',$emailer->getEmail('datesend')).' năm '.date('Y H:i:s',$emailer->getEmail('datesend')).')</span></h3>
														</td>
													</tr>
												<tr>
												<td style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px">
												<table border="0" cellpadding="0" cellspacing="0" width="100%">
													<tbody>
														<tr>
															<td style="padding:3px 0px;border-top:0;border-left:0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal" valign="top">'.$emailer->getEmail('thongtin').'</td>
														</tr>
														
													</tbody>
												</table>
												</td>
											</tr>
											<tr>
												<td>
												<p style="margin:4px 0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal"><i>'.$emailer->getEmail('noidunglienhe').'</i></p>
												</td>
											</tr>
											<tr>
												<td>&nbsp;
													<p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal;border:1px '.$emailer->getEmail('color').' dashed;padding:10px;list-style-type:none">Bạn cần được hỗ trợ ngay? Chỉ cần gửi mail về <a href="mailto:'.$emailer->getEmail('company:email').'" style="color:'.$emailer->getEmail('color').';text-decoration:none" target="_blank"> <strong>'.$emailer->getEmail('company:email').'</strong> </a>, hoặc gọi về hotline <strong style="color:'.$emailer->getEmail('color').'">'.$emailer->getEmail('company:hotline').'</strong> . '.$emailer->getEmail('company:website').' luôn sẵn sàng hỗ trợ bạn bất kì lúc nào.</p>
												</td>
											</tr>
											<tr>
												<td>&nbsp;
												<p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;margin:0;padding:0;line-height:18px;color:#444;font-weight:bold">Một lần nữa '.$emailer->getEmail('company:website').' cảm ơn quý khách.</p>
												<p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal;text-align:right"><strong><a href="'.$emailer->getEmail('home').'" style="color:'.$emailer->getEmail('color').';text-decoration:none;font-size:14px" target="_blank">'.$emailer->getEmail('company').'</a> </strong></p>
												</td>
											</tr>
										</tbody>
									</table>
									</td>
								</tr>
							</tbody>
						</table>
						</td>
					</tr>
					<tr>
						<td align="center">
						<table width="600">
							<tbody>
								<tr>
									<td>
									<p align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:11px;line-height:18px;color:#4b8da5;padding:10px 0;margin:0px;font-weight:normal">Quý khách nhận được email này vì đã liên hệ tại '.$emailer->getEmail('company:website').'.<br>
									Để chắc chắn luôn nhận được email thông báo, phản hồi từ '.$emailer->getEmail('company:website').', quý khách vui lòng thêm địa chỉ <strong><a href="mailto:'.$emailer->getEmail('email').'" target="_blank">'.$emailer->getEmail('email').'</a></strong> vào số địa chỉ (Address Book, Contacts) của hộp email.<br>
									<b>Địa chỉ:</b> '.$emailer->getEmail('company:address').'</p>
									</td>
								</tr>
							</tbody>
						</table>
						</td>
					</tr>
				</tbody>
			</table>';
			
			$subject = "Thông báo đặt dịch vụ từ ".$data['ten'];
			$message = $contentAdmin;
			$file = 'file';
			$emailer->sendEmail("admin", $arrayEmail, $subject, $message, $file);
			echo json_encode(array('error'=>0,'title'=>'Gửi yêu cầu đặt vé thành công.','mess'=>'Thông tin đặt vé đã được gửi, chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất.'));
        }
        else
        {
            echo json_encode(array('error'=>1,'title'=>'Gửi yêu cầu đặt vé thất bại.','mess'=>'Hệ thống đang gián đoạn. Vui lòng thử lại sau.'));
        }
    }
    else
    {
        echo json_encode(array('error'=>1,'title'=>'Gửi yêu cầu đặt vé thất bại.','mess'=>'Hệ thống đang gián đoạn. Vui lòng thử lại sau.'));
    }
}

if(isset($_POST['dattourindex'])){
    $responseCaptcha = $_POST['recaptcha_response_dattourindex'];
    $resultCaptcha = $func->checkRecaptcha($responseCaptcha);
    if(($resultCaptcha['score'] >= 0.5 && $resultCaptcha['action'] == 'recaptchaResponseDatTourIndex') || $resultCaptcha['test'])
    {
        $data = (isset($_POST['data'])) ? $_POST['data']:null;
        if(!empty($data)) { foreach($data as $column => $value) $data[$column] = htmlspecialchars($value); }
        $data['ngaytao'] = time();
        if($d->insert('newsletter',$data))
        {
        	$emailer->setEmail('tennguoigui',$data['ten']);
		    $emailer->setEmail('emailnguoigui',$data['email']);
		    $emailer->setEmail('dienthoainguoigui',$data['dienthoai']);
		    $emailer->setEmail('diachinguoigui',$data['diachi']);
		    $emailer->setEmail('tieudelienhe','Yêu cầu đặt vé từ: '.$data['ten']);
		    $emailer->setEmail('noidunglienhe',$data['noidung']);
		    if($emailer->getEmail('tennguoigui'))
		    {
		    	$strThongtin .= '<p><strong>Họ tên: </strong> '.$emailer->getEmail('tennguoigui').'</p>';
		    }
		    if($emailer->getEmail('emailnguoigui'))
		    {
		    	$strThongtin .= '<p><strong>Email liên hệ: </strong> '.$emailer->getEmail('emailnguoigui').'</p>';
		    }
		    if($emailer->getEmail('diachinguoigui'))
		    {
		    	$strThongtin .= '<p><strong>Địa chỉ liên hệ: </strong> '.$emailer->getEmail('diachinguoigui').'</p>';
		    }
		    if($emailer->getEmail('dienthoainguoigui'))
		    {
		    	$strThongtin .= '<p><strong>Điên thoại liên hệ: </strong> '.$emailer->getEmail('dienthoainguoigui').'</p>';
		    }
		    if(!empty($data['ngaysudung']))
		    {
		    	$strThongtin .= '<p><strong>Thời gian dự kiến: </strong> '.$data['ngaysudung'].'</p>';
		    }
		    if(!empty($data['time_dukien']))
		    {
		    	$strThongtin .= '<p><strong>Thời gian dự kiến: </strong> '.$data['time_dukien'].'</p>';
		    }
		    if(!empty($data['time_uoctinh']))
		    {
		    	$strThongtin .= '<p><strong>Thời gian ước tính ở lại: </strong> '.$data['time_uoctinh'].'</p>';
		    }
		    if(!empty($data['name_tour']))
		    {
		    	$strThongtin .= '<p><strong>Tour đã chọn: </strong> '.$data['name_tour'].'</p>';
		    }
		    if(!empty($data['name_khachsan']))
		    {
		    	$strThongtin .= '<p><strong>Khách sạn đã chọn: </strong> '.$data['name_khachsan'].'</p>';
		    }
		    if(!empty($data['name_nhahang']))
		    {
		    	$strThongtin .= '<p><strong>Nhà hàng đã chọn: </strong> '.$data['name_nhahang'].'</p>';
		    }
		    if(!empty($data['nguoilon']))
		    {
		    	$strThongtin .= '<p><strong>Số người lớn > 12 tuổi: </strong> '.$data['nguoilon'].'</p>';
		    }
		    if(!empty($data['treem']))
		    {
		    	$strThongtin .= '<p><strong>Số trẻ em (từ 5 - 11 tuổi): </strong> '.$data['treem'].'</p>';
		    }
		    if(!empty($data['treem2']))
		    {
		    	$strThongtin .= '<p><strong>Số trẻ em miễn vé < 5 tuổi: </strong> '.$data['treem2'].'</p>';
		    }
		    

		    $emailer->setEmail('thongtin',$strThongtin);
		    $contentAdmin = '
			<table align="center" bgcolor="#dcf0f8" border="0" cellpadding="0" cellspacing="0" style="margin:0;padding:0;background-color:#f2f2f2;width:100%!important;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px" width="100%">
				<tbody>
					<tr>
						<td align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal" valign="top">
							<table border="0" cellpadding="0" cellspacing="0" style="margin-top:15px" width="600">
								<tbody>
									<tr>
										<td align="center" id="m_-6357629121201466163headerImage" valign="bottom">
											<table cellpadding="0" cellspacing="0" style="border-bottom:3px solid '.$emailer->getEmail('color').';padding:10px 0;background-color:#fff" width="100%">
												<tbody>
													<tr>
														<td bgcolor="#FFFFFF" style="padding:0" valign="top" width="100%">
															<div style="color:#fff;background-color:#fff;font-size:11px">&nbsp;</div>
															<table style="width:100%;">
																<tbody>
																	<tr>
																		<td>
																			<a href="'.$emailer->getEmail('home').'" style="border:medium none;text-decoration:none;color:#007ed3;margin:0px 0px 0px 20px" target="_blank">'.$emailer->getEmail('logo').'</a>
																		</td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
									<tr style="background:#fff">
										<td align="left" height="auto" style="padding:15px" width="600">
											<table>
												<tbody>
													<tr>
														<td>
															<h1 style="font-size:17px;font-weight:bold;color:#444;padding:0 0 5px 0;margin:0">Kính chào</h1>
															<p style="margin:4px 0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal">Bạn nhận được thư liên hệ từ khách hàng <span style="text-transform:capitalize">'.$emailer->getEmail('tennguoigui').'</span> tại website '.$emailer->getEmail('company:website').'.</p>
															<h3 style="font-size:13px;font-weight:bold;color:'.$emailer->getEmail('color').';text-transform:uppercase;margin:20px 0 0 0;padding: 0 0 5px;border-bottom:1px solid #ddd">Thông tin liên hệ <span style="font-size:12px;color:#777;text-transform:none;font-weight:normal">(Ngày '.date('d',$emailer->getEmail('datesend')).' tháng '.date('m',$emailer->getEmail('datesend')).' năm '.date('Y H:i:s',$emailer->getEmail('datesend')).')</span></h3>
														</td>
													</tr>
												<tr>
												<td style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px">
												<table border="0" cellpadding="0" cellspacing="0" width="100%">
													<tbody>
														<tr>
															<td style="padding:3px 0px;border-top:0;border-left:0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal" valign="top">'.$emailer->getEmail('thongtin').'</td>
														</tr>
														
													</tbody>
												</table>
												</td>
											</tr>
											<tr>
												<td>
												<p style="margin:4px 0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal"><i>'.$emailer->getEmail('noidunglienhe').'</i></p>
												</td>
											</tr>
											<tr>
												<td>&nbsp;
													<p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal;border:1px '.$emailer->getEmail('color').' dashed;padding:10px;list-style-type:none">Bạn cần được hỗ trợ ngay? Chỉ cần gửi mail về <a href="mailto:'.$emailer->getEmail('company:email').'" style="color:'.$emailer->getEmail('color').';text-decoration:none" target="_blank"> <strong>'.$emailer->getEmail('company:email').'</strong> </a>, hoặc gọi về hotline <strong style="color:'.$emailer->getEmail('color').'">'.$emailer->getEmail('company:hotline').'</strong> . '.$emailer->getEmail('company:website').' luôn sẵn sàng hỗ trợ bạn bất kì lúc nào.</p>
												</td>
											</tr>
											<tr>
												<td>&nbsp;
												<p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;margin:0;padding:0;line-height:18px;color:#444;font-weight:bold">Một lần nữa '.$emailer->getEmail('company:website').' cảm ơn quý khách.</p>
												<p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal;text-align:right"><strong><a href="'.$emailer->getEmail('home').'" style="color:'.$emailer->getEmail('color').';text-decoration:none;font-size:14px" target="_blank">'.$emailer->getEmail('company').'</a> </strong></p>
												</td>
											</tr>
										</tbody>
									</table>
									</td>
								</tr>
							</tbody>
						</table>
						</td>
					</tr>
					<tr>
						<td align="center">
						<table width="600">
							<tbody>
								<tr>
									<td>
									<p align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:11px;line-height:18px;color:#4b8da5;padding:10px 0;margin:0px;font-weight:normal">Quý khách nhận được email này vì đã liên hệ tại '.$emailer->getEmail('company:website').'.<br>
									Để chắc chắn luôn nhận được email thông báo, phản hồi từ '.$emailer->getEmail('company:website').', quý khách vui lòng thêm địa chỉ <strong><a href="mailto:'.$emailer->getEmail('email').'" target="_blank">'.$emailer->getEmail('email').'</a></strong> vào số địa chỉ (Address Book, Contacts) của hộp email.<br>
									<b>Địa chỉ:</b> '.$emailer->getEmail('company:address').'</p>
									</td>
								</tr>
							</tbody>
						</table>
						</td>
					</tr>
				</tbody>
			</table>';
			
			$subject = "Thông báo đặt dịch vụ từ ".$data['ten'];
			$message = $contentAdmin;
			$file = 'file';
			$emailer->sendEmail("admin", $arrayEmail, $subject, $message, $file);
			echo json_encode(array('error'=>0,'title'=>'Gửi yêu cầu đặt vé thành công.','mess'=>'Thông tin đặt vé đã được gửi, chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất.'));
        }
        else
        {
            echo json_encode(array('error'=>1,'title'=>'Gửi yêu cầu đặt vé thất bại.','mess'=>'Hệ thống đang gián đoạn. Vui lòng thử lại sau.'));
        }
    }
    else
    {
        echo json_encode(array('error'=>1,'title'=>'Gửi yêu cầu đặt vé thất bại.','mess'=>'Hệ thống đang gián đoạn. Vui lòng thử lại sau.'));
    }
}

if(isset($_POST['datvexe']))
{
    $responseCaptcha = $_POST['recaptcha_response_datvexe'];
    $resultCaptcha = $func->checkRecaptcha($responseCaptcha);

    if(($resultCaptcha['score'] >= 0.5 && $resultCaptcha['action'] == 'recaptchaResponseDatvexe') || $resultCaptcha['test'])
    {
        $data = (isset($_POST['data'])) ? $_POST['data']:null;
        if(!empty($data)) { foreach($data as $column => $value) $data[$column] = htmlspecialchars($value); }
        $data['ngaytao'] = time();

        if($d->insert('newsletter',$data))
        {
            $emailer->setEmail('tennguoigui',$data['ten']);
		    $emailer->setEmail('emailnguoigui',$data['email']);
		    $emailer->setEmail('dienthoainguoigui',$data['dienthoai']);
		    $emailer->setEmail('diachinguoigui',$data['diachi']);
		    $emailer->setEmail('tieudelienhe','Yêu cầu đặt vé từ: '.$data['ten']);
		    $emailer->setEmail('noidunglienhe',$data['noidung']);
		    if($emailer->getEmail('tennguoigui'))
		    {
		    	$strThongtin .= '<p><strong>Họ tên: </strong> '.$emailer->getEmail('tennguoigui').'</p>';
		    }
		    if($emailer->getEmail('emailnguoigui'))
		    {
		    	$strThongtin .= '<p><strong>Email liên hệ: </strong> '.$emailer->getEmail('emailnguoigui').'</p>';
		    }
		    if($emailer->getEmail('diachinguoigui'))
		    {
		    	$strThongtin .= '<p><strong>Địa chỉ liên hệ: </strong> '.$emailer->getEmail('diachinguoigui').'</p>';
		    }
		    if($emailer->getEmail('dienthoainguoigui'))
		    {
		    	$strThongtin .= '<p><strong>Điên thoại liên hệ: </strong> '.$emailer->getEmail('dienthoainguoigui').'</p>';
		    }
		    if(!empty($data['diemdi']))
		    {
		    	$strThongtin .= '<p><strong>Điểm đi: </strong> '.$data['diemdi'].'</p>';
		    }
		    if(!empty($data['diemden']))
		    {
		    	$strThongtin .= '<p><strong>Điểm đến: </strong> '.$data['diemden'].'</p>';
		    }
		    if(!empty($data['ngaysudung']))
		    {
		    	$strThongtin .= '<p><strong>Ngày khởi hành: </strong> '.$data['ngaysudung'].'</p>';
		    }
		    if(!empty($data['nguoilon']))
		    {
		    	$strThongtin .= '<p><strong>Số người lớn > 12 tuổi: </strong> '.$data['nguoilon'].'</p>';
		    }
		    if(!empty($data['treem']))
		    {
		    	$strThongtin .= '<p><strong>Số trẻ em (từ 5 - 11 tuổi): </strong> '.$data['treem'].'</p>';
		    }
		    if(!empty($data['treem2']))
		    {
		    	$strThongtin .= '<p><strong>Số trẻ em miễn vé < 5 tuổi: </strong> '.$data['treem2'].'</p>';
		    }
		    

		    $emailer->setEmail('thongtin',$strThongtin);
		    $contentAdmin = '
			<table align="center" bgcolor="#dcf0f8" border="0" cellpadding="0" cellspacing="0" style="margin:0;padding:0;background-color:#f2f2f2;width:100%!important;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px" width="100%">
				<tbody>
					<tr>
						<td align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal" valign="top">
							<table border="0" cellpadding="0" cellspacing="0" style="margin-top:15px" width="600">
								<tbody>
									<tr>
										<td align="center" id="m_-6357629121201466163headerImage" valign="bottom">
											<table cellpadding="0" cellspacing="0" style="border-bottom:3px solid '.$emailer->getEmail('color').';padding:10px 0;background-color:#fff" width="100%">
												<tbody>
													<tr>
														<td bgcolor="#FFFFFF" style="padding:0" valign="top" width="100%">
															<div style="color:#fff;background-color:#fff;font-size:11px">&nbsp;</div>
															<table style="width:100%;">
																<tbody>
																	<tr>
																		<td>
																			<a href="'.$emailer->getEmail('home').'" style="border:medium none;text-decoration:none;color:#007ed3;margin:0px 0px 0px 20px" target="_blank">'.$emailer->getEmail('logo').'</a>
																		</td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
									<tr style="background:#fff">
										<td align="left" height="auto" style="padding:15px" width="600">
											<table>
												<tbody>
													<tr>
														<td>
															<h1 style="font-size:17px;font-weight:bold;color:#444;padding:0 0 5px 0;margin:0">Kính chào</h1>
															<p style="margin:4px 0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal">Bạn nhận được thư liên hệ từ khách hàng <span style="text-transform:capitalize">'.$emailer->getEmail('tennguoigui').'</span> tại website '.$emailer->getEmail('company:website').'.</p>
															<h3 style="font-size:13px;font-weight:bold;color:'.$emailer->getEmail('color').';text-transform:uppercase;margin:20px 0 0 0;padding: 0 0 5px;border-bottom:1px solid #ddd">Thông tin liên hệ <span style="font-size:12px;color:#777;text-transform:none;font-weight:normal">(Ngày '.date('d',$emailer->getEmail('datesend')).' tháng '.date('m',$emailer->getEmail('datesend')).' năm '.date('Y H:i:s',$emailer->getEmail('datesend')).')</span></h3>
														</td>
													</tr>
												<tr>
												<td style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px">
												<table border="0" cellpadding="0" cellspacing="0" width="100%">
													<tbody>
														<tr>
															<td style="padding:3px 0px;border-top:0;border-left:0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal" valign="top">'.$emailer->getEmail('thongtin').'</td>
														</tr>
														
													</tbody>
												</table>
												</td>
											</tr>
											<tr>
												<td>
												<p style="margin:4px 0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal"><i>'.$emailer->getEmail('noidunglienhe').'</i></p>
												</td>
											</tr>
											<tr>
												<td>&nbsp;
													<p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal;border:1px '.$emailer->getEmail('color').' dashed;padding:10px;list-style-type:none">Bạn cần được hỗ trợ ngay? Chỉ cần gửi mail về <a href="mailto:'.$emailer->getEmail('company:email').'" style="color:'.$emailer->getEmail('color').';text-decoration:none" target="_blank"> <strong>'.$emailer->getEmail('company:email').'</strong> </a>, hoặc gọi về hotline <strong style="color:'.$emailer->getEmail('color').'">'.$emailer->getEmail('company:hotline').'</strong> . '.$emailer->getEmail('company:website').' luôn sẵn sàng hỗ trợ bạn bất kì lúc nào.</p>
												</td>
											</tr>
											<tr>
												<td>&nbsp;
												<p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;margin:0;padding:0;line-height:18px;color:#444;font-weight:bold">Một lần nữa '.$emailer->getEmail('company:website').' cảm ơn quý khách.</p>
												<p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal;text-align:right"><strong><a href="'.$emailer->getEmail('home').'" style="color:'.$emailer->getEmail('color').';text-decoration:none;font-size:14px" target="_blank">'.$emailer->getEmail('company').'</a> </strong></p>
												</td>
											</tr>
										</tbody>
									</table>
									</td>
								</tr>
							</tbody>
						</table>
						</td>
					</tr>
					<tr>
						<td align="center">
						<table width="600">
							<tbody>
								<tr>
									<td>
									<p align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:11px;line-height:18px;color:#4b8da5;padding:10px 0;margin:0px;font-weight:normal">Quý khách nhận được email này vì đã liên hệ tại '.$emailer->getEmail('company:website').'.<br>
									Để chắc chắn luôn nhận được email thông báo, phản hồi từ '.$emailer->getEmail('company:website').', quý khách vui lòng thêm địa chỉ <strong><a href="mailto:'.$emailer->getEmail('email').'" target="_blank">'.$emailer->getEmail('email').'</a></strong> vào số địa chỉ (Address Book, Contacts) của hộp email.<br>
									<b>Địa chỉ:</b> '.$emailer->getEmail('company:address').'</p>
									</td>
								</tr>
							</tbody>
						</table>
						</td>
					</tr>
				</tbody>
			</table>';
			
			$subject = "Thông báo đặt xe từ ".$data['ten'];
			$message = $contentAdmin;
			$file = 'file';
			
			$emailer->sendEmail("admin", $arrayEmail, $subject, $message, $file);
			echo json_encode(array('error'=>0,'title'=>'Gửi yêu cầu đặt vé thành công.','mess'=>'Thông tin đặt vé đã được gửi, chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất.'));
        }
        else
        {
            echo json_encode(array('error'=>1,'title'=>'Gửi yêu cầu đặt vé thất bại.','mess'=>'Hệ thống đang gián đoạn. Vui lòng thử lại sau.'));
        }
    }
    else
    {
       echo json_encode(array('error'=>1,'title'=>'Gửi yêu cầu đặt vé thất bại.','mess'=>'Hệ thống đang gián đoạn. Vui lòng thử lại sau.'));
    }
}


if(isset($_POST['submitdatban']))
{
    $responseCaptcha = $_POST['recaptcha_response_datban'];
    $resultCaptcha = $func->checkRecaptcha($responseCaptcha);

    if(($resultCaptcha['score'] >= 0.5 && $resultCaptcha['action'] == 'recaptchaResponseDatban') || $resultCaptcha['test'])
    {
        $data = (isset($_POST['data'])) ? $_POST['data']:null;
        if(!empty($data)) { foreach($data as $column => $value) $data[$column] = htmlspecialchars($value); }
        $data['ngaytao'] = time();
        if($d->insert('newsletter',$data))
        {
            $emailer->setEmail('tennguoigui',$data['ten']);
		    $emailer->setEmail('emailnguoigui',$data['email']);
		    $emailer->setEmail('dienthoainguoigui',$data['dienthoai']);
		    $emailer->setEmail('diachinguoigui',$data['diachi']);
		    $emailer->setEmail('tieudelienhe','Yêu cầu đặt vé từ: '.$data['ten']);
		    $emailer->setEmail('noidunglienhe',$data['noidung']);
		    if($emailer->getEmail('tennguoigui'))
		    {
		    	$strThongtin .= '<p><strong>Họ tên: </strong> '.$emailer->getEmail('tennguoigui').'</p>';
		    }
		    if($emailer->getEmail('emailnguoigui'))
		    {
		    	$strThongtin .= '<p><strong>Email liên hệ: </strong> '.$emailer->getEmail('emailnguoigui').'</p>';
		    }
		    if($emailer->getEmail('diachinguoigui'))
		    {
		    	$strThongtin .= '<p><strong>Địa chỉ liên hệ: </strong> '.$emailer->getEmail('diachinguoigui').'</p>';
		    }
		    if($emailer->getEmail('dienthoainguoigui'))
		    {
		    	$strThongtin .= '<p><strong>Điên thoại liên hệ: </strong> '.$emailer->getEmail('dienthoainguoigui').'</p>';
		    }
		    if(!empty($data['ngaysudung']))
		    {
		    	$strThongtin .= '<p><strong>Thời gian dự kiến: </strong> '.$data['ngaysudung'].'</p>';
		    }
		    if(!empty($data['time_dukien']))
		    {
		    	$strThongtin .= '<p><strong>Thời gian dự kiến: </strong> '.$data['time_dukien'].'</p>';
		    }
		    if(!empty($data['time_uoctinh']))
		    {
		    	$strThongtin .= '<p><strong>Thời gian ước tính ở lại: </strong> '.$data['time_uoctinh'].'</p>';
		    }
		    if(!empty($data['name_tour']))
		    {
		    	$strThongtin .= '<p><strong>Tour đã chọn: </strong> '.$data['name_tour'].'</p>';
		    }
		    if(!empty($data['name_khachsan']))
		    {
		    	$strThongtin .= '<p><strong>Khách sạn đã chọn: </strong> '.$data['name_khachsan'].'</p>';
		    }
		    if(!empty($data['name_nhahang']))
		    {
		    	$strThongtin .= '<p><strong>Nhà hàng đã chọn: </strong> '.$data['name_nhahang'].'</p>';
		    }
		    if(!empty($data['nguoilon']))
		    {
		    	$strThongtin .= '<p><strong>Số người lớn > 12 tuổi: </strong> '.$data['nguoilon'].'</p>';
		    }
		    if(!empty($data['treem']))
		    {
		    	$strThongtin .= '<p><strong>Số trẻ em (từ 5 - 11 tuổi): </strong> '.$data['treem'].'</p>';
		    }
		    if(!empty($data['treem2']))
		    {
		    	$strThongtin .= '<p><strong>Số trẻ em miễn vé < 5 tuổi: </strong> '.$data['treem2'].'</p>';
		    }
		    

		    $emailer->setEmail('thongtin',$strThongtin);
		    $contentAdmin = '
			<table align="center" bgcolor="#dcf0f8" border="0" cellpadding="0" cellspacing="0" style="margin:0;padding:0;background-color:#f2f2f2;width:100%!important;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px" width="100%">
				<tbody>
					<tr>
						<td align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal" valign="top">
							<table border="0" cellpadding="0" cellspacing="0" style="margin-top:15px" width="600">
								<tbody>
									<tr>
										<td align="center" id="m_-6357629121201466163headerImage" valign="bottom">
											<table cellpadding="0" cellspacing="0" style="border-bottom:3px solid '.$emailer->getEmail('color').';padding:10px 0;background-color:#fff" width="100%">
												<tbody>
													<tr>
														<td bgcolor="#FFFFFF" style="padding:0" valign="top" width="100%">
															<div style="color:#fff;background-color:#fff;font-size:11px">&nbsp;</div>
															<table style="width:100%;">
																<tbody>
																	<tr>
																		<td>
																			<a href="'.$emailer->getEmail('home').'" style="border:medium none;text-decoration:none;color:#007ed3;margin:0px 0px 0px 20px" target="_blank">'.$emailer->getEmail('logo').'</a>
																		</td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
									<tr style="background:#fff">
										<td align="left" height="auto" style="padding:15px" width="600">
											<table>
												<tbody>
													<tr>
														<td>
															<h1 style="font-size:17px;font-weight:bold;color:#444;padding:0 0 5px 0;margin:0">Kính chào</h1>
															<p style="margin:4px 0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal">Bạn nhận được thư liên hệ từ khách hàng <span style="text-transform:capitalize">'.$emailer->getEmail('tennguoigui').'</span> tại website '.$emailer->getEmail('company:website').'.</p>
															<h3 style="font-size:13px;font-weight:bold;color:'.$emailer->getEmail('color').';text-transform:uppercase;margin:20px 0 0 0;padding: 0 0 5px;border-bottom:1px solid #ddd">Thông tin liên hệ <span style="font-size:12px;color:#777;text-transform:none;font-weight:normal">(Ngày '.date('d',$emailer->getEmail('datesend')).' tháng '.date('m',$emailer->getEmail('datesend')).' năm '.date('Y H:i:s',$emailer->getEmail('datesend')).')</span></h3>
														</td>
													</tr>
												<tr>
												<td style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px">
												<table border="0" cellpadding="0" cellspacing="0" width="100%">
													<tbody>
														<tr>
															<td style="padding:3px 0px;border-top:0;border-left:0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal" valign="top">'.$emailer->getEmail('thongtin').'</td>
														</tr>
														
													</tbody>
												</table>
												</td>
											</tr>
											<tr>
												<td>
												<p style="margin:4px 0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal"><i>'.$emailer->getEmail('noidunglienhe').'</i></p>
												</td>
											</tr>
											<tr>
												<td>&nbsp;
													<p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal;border:1px '.$emailer->getEmail('color').' dashed;padding:10px;list-style-type:none">Bạn cần được hỗ trợ ngay? Chỉ cần gửi mail về <a href="mailto:'.$emailer->getEmail('company:email').'" style="color:'.$emailer->getEmail('color').';text-decoration:none" target="_blank"> <strong>'.$emailer->getEmail('company:email').'</strong> </a>, hoặc gọi về hotline <strong style="color:'.$emailer->getEmail('color').'">'.$emailer->getEmail('company:hotline').'</strong> . '.$emailer->getEmail('company:website').' luôn sẵn sàng hỗ trợ bạn bất kì lúc nào.</p>
												</td>
											</tr>
											<tr>
												<td>&nbsp;
												<p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;margin:0;padding:0;line-height:18px;color:#444;font-weight:bold">Một lần nữa '.$emailer->getEmail('company:website').' cảm ơn quý khách.</p>
												<p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal;text-align:right"><strong><a href="'.$emailer->getEmail('home').'" style="color:'.$emailer->getEmail('color').';text-decoration:none;font-size:14px" target="_blank">'.$emailer->getEmail('company').'</a> </strong></p>
												</td>
											</tr>
										</tbody>
									</table>
									</td>
								</tr>
							</tbody>
						</table>
						</td>
					</tr>
					<tr>
						<td align="center">
						<table width="600">
							<tbody>
								<tr>
									<td>
									<p align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:11px;line-height:18px;color:#4b8da5;padding:10px 0;margin:0px;font-weight:normal">Quý khách nhận được email này vì đã liên hệ tại '.$emailer->getEmail('company:website').'.<br>
									Để chắc chắn luôn nhận được email thông báo, phản hồi từ '.$emailer->getEmail('company:website').', quý khách vui lòng thêm địa chỉ <strong><a href="mailto:'.$emailer->getEmail('email').'" target="_blank">'.$emailer->getEmail('email').'</a></strong> vào số địa chỉ (Address Book, Contacts) của hộp email.<br>
									<b>Địa chỉ:</b> '.$emailer->getEmail('company:address').'</p>
									</td>
								</tr>
							</tbody>
						</table>
						</td>
					</tr>
				</tbody>
			</table>';
			
			$subject = "Thông báo đặt bàn từ ".$data['ten'];
			$message = $contentAdmin;
			$file = 'file';
			$emailer->sendEmail("admin", $arrayEmail, $subject, $message, $file);
			echo json_encode(array('error'=>0,'title'=>'Gửi yêu cầu đặt vé thành công.','mess'=>'Thông tin đặt vé đã được gửi, chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất.'));
        }
        else
        {
            echo json_encode(array('error'=>1,'title'=>'Gửi yêu cầu đặt vé thất bại.','mess'=>'Hệ thống đang gián đoạn. Vui lòng thử lại sau.'));
        }
    }
    else
    {
        echo json_encode(array('error'=>1,'title'=>'Gửi yêu cầu đặt vé thất bại.','mess'=>'Hệ thống đang gián đoạn. Vui lòng thử lại sau.'));
    }
}


if(isset($_POST['submitdatphong']))
{
    $responseCaptcha = $_POST['recaptcha_response_datphong'];
    $resultCaptcha = $func->checkRecaptcha($responseCaptcha);

    if(($resultCaptcha['score'] >= 0.5 && $resultCaptcha['action'] == 'recaptchaResponseDatphong') || $resultCaptcha['test'])
    {
        $data = (isset($_POST['data'])) ? $_POST['data']:null;
        if(!empty($data)) { foreach($data as $column => $value) $data[$column] = htmlspecialchars($value); }
        $data['ngaytao'] = time();

        if($d->insert('newsletter',$data))
        {
            $emailer->setEmail('tennguoigui',$data['ten']);
		    $emailer->setEmail('emailnguoigui',$data['email']);
		    $emailer->setEmail('dienthoainguoigui',$data['dienthoai']);
		    $emailer->setEmail('diachinguoigui',$data['diachi']);
		    $emailer->setEmail('tieudelienhe','Yêu cầu đặt vé từ: '.$data['ten']);
		    $emailer->setEmail('noidunglienhe',$data['noidung']);
		    if($emailer->getEmail('tennguoigui'))
		    {
		    	$strThongtin .= '<p><strong>Họ tên: </strong> '.$emailer->getEmail('tennguoigui').'</p>';
		    }
		    if($emailer->getEmail('emailnguoigui'))
		    {
		    	$strThongtin .= '<p><strong>Email liên hệ: </strong> '.$emailer->getEmail('emailnguoigui').'</p>';
		    }
		    if($emailer->getEmail('diachinguoigui'))
		    {
		    	$strThongtin .= '<p><strong>Địa chỉ liên hệ: </strong> '.$emailer->getEmail('diachinguoigui').'</p>';
		    }
		    if($emailer->getEmail('dienthoainguoigui'))
		    {
		    	$strThongtin .= '<p><strong>Điên thoại liên hệ: </strong> '.$emailer->getEmail('dienthoainguoigui').'</p>';
		    }
		    if(!empty($data['ngaysudung']))
		    {
		    	$strThongtin .= '<p><strong>Thời gian dự kiến: </strong> '.$data['ngaysudung'].'</p>';
		    }
		    if(!empty($data['time_dukien']))
		    {
		    	$strThongtin .= '<p><strong>Thời gian dự kiến: </strong> '.$data['time_dukien'].'</p>';
		    }
		    if(!empty($data['time_uoctinh']))
		    {
		    	$strThongtin .= '<p><strong>Thời gian ước tính ở lại: </strong> '.$data['time_uoctinh'].'</p>';
		    }
		    if(!empty($data['name_tour']))
		    {
		    	$strThongtin .= '<p><strong>Tour đã chọn: </strong> '.$data['name_tour'].'</p>';
		    }
		    if(!empty($data['name_khachsan']))
		    {
		    	$strThongtin .= '<p><strong>Khách sạn đã chọn: </strong> '.$data['name_khachsan'].'</p>';
		    }
		    if(!empty($data['name_nhahang']))
		    {
		    	$strThongtin .= '<p><strong>Nhà hàng đã chọn: </strong> '.$data['name_nhahang'].'</p>';
		    }
		    if(!empty($data['nguoilon']))
		    {
		    	$strThongtin .= '<p><strong>Số người lớn > 12 tuổi: </strong> '.$data['nguoilon'].'</p>';
		    }
		    if(!empty($data['treem']))
		    {
		    	$strThongtin .= '<p><strong>Số trẻ em (từ 5 - 11 tuổi): </strong> '.$data['treem'].'</p>';
		    }
		    if(!empty($data['treem2']))
		    {
		    	$strThongtin .= '<p><strong>Số trẻ em miễn vé < 5 tuổi: </strong> '.$data['treem2'].'</p>';
		    }
		    

		    $emailer->setEmail('thongtin',$strThongtin);
		    $contentAdmin = '
			<table align="center" bgcolor="#dcf0f8" border="0" cellpadding="0" cellspacing="0" style="margin:0;padding:0;background-color:#f2f2f2;width:100%!important;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px" width="100%">
				<tbody>
					<tr>
						<td align="center" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal" valign="top">
							<table border="0" cellpadding="0" cellspacing="0" style="margin-top:15px" width="600">
								<tbody>
									<tr>
										<td align="center" id="m_-6357629121201466163headerImage" valign="bottom">
											<table cellpadding="0" cellspacing="0" style="border-bottom:3px solid '.$emailer->getEmail('color').';padding:10px 0;background-color:#fff" width="100%">
												<tbody>
													<tr>
														<td bgcolor="#FFFFFF" style="padding:0" valign="top" width="100%">
															<div style="color:#fff;background-color:#fff;font-size:11px">&nbsp;</div>
															<table style="width:100%;">
																<tbody>
																	<tr>
																		<td>
																			<a href="'.$emailer->getEmail('home').'" style="border:medium none;text-decoration:none;color:#007ed3;margin:0px 0px 0px 20px" target="_blank">'.$emailer->getEmail('logo').'</a>
																		</td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
									<tr style="background:#fff">
										<td align="left" height="auto" style="padding:15px" width="600">
											<table>
												<tbody>
													<tr>
														<td>
															<h1 style="font-size:17px;font-weight:bold;color:#444;padding:0 0 5px 0;margin:0">Kính chào</h1>
															<p style="margin:4px 0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal">Bạn nhận được thư liên hệ từ khách hàng <span style="text-transform:capitalize">'.$emailer->getEmail('tennguoigui').'</span> tại website '.$emailer->getEmail('company:website').'.</p>
															<h3 style="font-size:13px;font-weight:bold;color:'.$emailer->getEmail('color').';text-transform:uppercase;margin:20px 0 0 0;padding: 0 0 5px;border-bottom:1px solid #ddd">Thông tin liên hệ <span style="font-size:12px;color:#777;text-transform:none;font-weight:normal">(Ngày '.date('d',$emailer->getEmail('datesend')).' tháng '.date('m',$emailer->getEmail('datesend')).' năm '.date('Y H:i:s',$emailer->getEmail('datesend')).')</span></h3>
														</td>
													</tr>
												<tr>
												<td style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px">
												<table border="0" cellpadding="0" cellspacing="0" width="100%">
													<tbody>
														<tr>
															<td style="padding:3px 0px;border-top:0;border-left:0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal" valign="top">'.$emailer->getEmail('thongtin').'</td>
														</tr>
														
													</tbody>
												</table>
												</td>
											</tr>
											<tr>
												<td>
												<p style="margin:4px 0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal"><i>'.$emailer->getEmail('noidunglienhe').'</i></p>
												</td>
											</tr>
											<tr>
												<td>&nbsp;
													<p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal;border:1px '.$emailer->getEmail('color').' dashed;padding:10px;list-style-type:none">Bạn cần được hỗ trợ ngay? Chỉ cần gửi mail về <a href="mailto:'.$emailer->getEmail('company:email').'" style="color:'.$emailer->getEmail('color').';text-decoration:none" target="_blank"> <strong>'.$emailer->getEmail('company:email').'</strong> </a>, hoặc gọi về hotline <strong style="color:'.$emailer->getEmail('color').'">'.$emailer->getEmail('company:hotline').'</strong> . '.$emailer->getEmail('company:website').' luôn sẵn sàng hỗ trợ bạn bất kì lúc nào.</p>
												</td>
											</tr>
											<tr>
												<td>&nbsp;
												<p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;margin:0;padding:0;line-height:18px;color:#444;font-weight:bold">Một lần nữa '.$emailer->getEmail('company:website').' cảm ơn quý khách.</p>
												<p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal;text-align:right"><strong><a href="'.$emailer->getEmail('home').'" style="color:'.$emailer->getEmail('color').';text-decoration:none;font-size:14px" target="_blank">'.$emailer->getEmail('company').'</a> </strong></p>
												</td>
											</tr>
										</tbody>
									</table>
									</td>
								</tr>
							</tbody>
						</table>
						</td>
					</tr>
					<tr>
						<td align="center">
						<table width="600">
							<tbody>
								<tr>
									<td>
									<p align="left" style="font-family:Arial,Helvetica,sans-serif;font-size:11px;line-height:18px;color:#4b8da5;padding:10px 0;margin:0px;font-weight:normal">Quý khách nhận được email này vì đã liên hệ tại '.$emailer->getEmail('company:website').'.<br>
									Để chắc chắn luôn nhận được email thông báo, phản hồi từ '.$emailer->getEmail('company:website').', quý khách vui lòng thêm địa chỉ <strong><a href="mailto:'.$emailer->getEmail('email').'" target="_blank">'.$emailer->getEmail('email').'</a></strong> vào số địa chỉ (Address Book, Contacts) của hộp email.<br>
									<b>Địa chỉ:</b> '.$emailer->getEmail('company:address').'</p>
									</td>
								</tr>
							</tbody>
						</table>
						</td>
					</tr>
				</tbody>
			</table>';
			
			$subject = "Thông báo đặt bàn từ ".$data['ten'];
			$message = $contentAdmin;
			$file = 'file';
			$emailer->sendEmail("admin", $arrayEmail, $subject, $message, $file);
			echo json_encode(array('error'=>0,'title'=>'Gửi yêu cầu đặt vé thành công.','mess'=>'Thông tin đặt vé đã được gửi, chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất.'));
        }
        else
        {
            echo json_encode(array('error'=>1,'title'=>'Gửi yêu cầu đặt vé thất bại.','mess'=>'Hệ thống đang gián đoạn. Vui lòng thử lại sau.'));
        }
    }
    else
    {
        echo json_encode(array('error'=>1,'title'=>'Gửi yêu cầu đặt vé thất bại.','mess'=>'Hệ thống đang gián đoạn. Vui lòng thử lại sau.'));
    }
}

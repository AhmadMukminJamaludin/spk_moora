
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Cetak Laporan Hasil Perhitungan</title>
<link rel="stylesheet" href="images/style.css" type="text/css" />
</head>
<body><br /> 

<table width="90%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td width="85%"><table width="90%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="20%"><img src="<?php echo $base_url; ?>asset/img/Logo_Kabupaten_Rembang.jpg" width="80" height="100" /></td>
        <td width="80%">
            <b>
                <font size="2"><center></center></font>
                <font size="4"><center>Kantor Balai Desa Karangharjo</center></font>
                <font size="3"><center></center></font></b>
          <font size="1"><center>Alamat: Desa Karangharjo RT 02 RW 01 Kecamatan Sulang Kabupaten Rembang
          Kode Pos : 59254</center></font></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><hr color="#000000" /></td>
  </tr>
  <tr>
  <td><p align='center'><b><font size='4'>LAPORAN HASIL PERHITUNGAN</font><b></p><br></td>
  </tr>
  <tr>
    <td align="center">
      <table border="1" width="100%" cellpadding="0" cellspacing="0" id="product-table">
        <tr>
            <th width="6%" class="table-header-repeat"><b>Nomor</b>	</th>
            <th width="25%" class="table-header-repeat"><b>Nama Calon Perangkat Desa</b></th>
            <th width="11%" class="table-header-repeat"><b>Nilai</b></th>
            <th width="18%" class="table-header-repeat"><b>Keterangan</b></th>
        </tr>
        
  <?php
  $tahun= $_GET["thn"];
		$query = $this->db->query("SELECT * from rangking inner join calon_perangkat_desa on rangking.user_id=calon_perangkat_desa.user_id join user on user.id_user=rangking.user_id where rangking.tahun='$tahun' order by rangking.nilai DESC")->result();
  		$no=0;
		
		foreach($query as $row){
			$no++;
		?>
		<tr>
            <td><?php echo $no=$no;?></td>
            <td><?php echo $row->nama_user;?></td>
            <td><?php echo $row->nilai;?></td>
            <td><?php if($no == 1){ echo "Terpilih sebagai perangkat desa"; } ?></td>
         </tr>
        <?php  } ?>
      </table>
</td>
  </tr>
  <tr>
    <td><table width="200" border="0" cellspacing="0" cellpadding="0" align="right">
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Karangharjo, <?=date("d-m-Y"); ?></td>
      </tr>
      <tr>
        <td>Kepala Desa </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><u>ROHMAD, SKM</u></td>
      </tr>
      <tr>
        <td></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>

<script language='JavaScript' type='text/javascript'>
		window.print();
		</script>
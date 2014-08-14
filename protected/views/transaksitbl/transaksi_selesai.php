<table width="100%" border="0" cellpadding="0" cellspacing="0" class="Area_Informasi">
    <tr>
      <th width="25" align="left" valign="top" class="Teks_Transaksi" scope="col"><img src="Gambar/Transaksi Selesai.gif" width="25" height="25" /></th>
      <th width="350" align="left" valign="middle" class="Teks_Transaksi" scope="col">Terima kasih untuk pesanan Anda,</th>
    </tr>
    <tr>
      <th colspan="2" align="left" valign="top" class="Teks_Testi" scope="col"><hr /></th>
    </tr>
    <tr>
      <td colspan="2" align="center" valign="top">
  </td>
</tr>
    <tr>
      <th colspan="2" align="left" valign="top">Faktur :<?php include "faktur_selesai.php"; echo '<font color="#0000FF" size="-">'.$faktur.''; ?></th>
    </tr>
    <tr>
      <th colspan="2" align="left" valign="top">&nbsp;</th>
    </tr>
    <tr>
      <th colspan="2" align="left" valign="top">Mohon konfirmasi via sms ke nomor ( 0711 )  733 6565 setelah Anda melakukan pembayaran, dengan <br />
        <br />
        format: <strong class="Teks_Peringatan">(NOMOR_ORDER),(BANK_TUJUAN),(JUMLAH)</strong><br />
        contohnya: <strong class="Teks_Peringatan">250805,BCA,215.000</strong></th>
    </tr>
    <tr>
      <th colspan="2" align="left" valign="top">&nbsp;</th>
    </tr>
    <tr>
      <th colspan="2" align="left" valign="top">Total pesanan yang harus dibayar adalah <em class="Teks_Total">Rp <?php include "kerantang_total_selesai.php" ?></em>. </th>
    </tr>
    <tr>
      <th colspan="2" align="left" valign="top">&nbsp;</th>
    </tr>
    <tr>
      <th colspan="2" align="left" valign="top"><strong>Pesanan akan kami cancel apabila dalam 2x24 jam belum kami terima pembayarannya.</strong><br />
        <br />
        Pembayaran dapat ditujukan ke salah satu rekening di bawah ini:<br />
        <br />
        <strong>Nama Pemilik Rekening: <span class="Teks_Transaksi">Maxi Boutique</span></strong><br />
        <br />
        <strong>BCA</strong><br />
        Norek: <span class="Teks_Bank">1150325788</span><br />
        Cabang: Palembang<br />
        <br />
        <strong>Bank Mandiri</strong><br />
        Norek: by request<br />
        Cabang: Palembang<br />
        <br />
        <strong>CIMB NIAGA</strong><br />
        Norek: by request<br />
        Cabang: Palembang<br />
        <br /></th>
    </tr>
    <tr>
      <th colspan="2" align="left" valign="top"><hr /></th>
    </tr>
    <tr>
      <th colspan="2" align="left" valign="top" class="Teks_Menu"><span class="Teks_Peringatan">Pesanan sudah kami terima, barang akan dikirim 1 hari setelah penerimaan pembayaran.</span></th>
    </tr>
  </table>
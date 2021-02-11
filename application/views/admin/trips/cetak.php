<html>

<head>
  <title></title>
  <!--========= PROTEKSI KONTEN =================-->
  <!-- Kode menampilkan peringatan untuk mengaktifkan javascript-->

  <!--Kode untuk mencegah seleksi teks, block teks dll.-->
  <script type="text/javascript">
    function disableSelection(e) {
      if (typeof e.onselectstart != "undefined") e.onselectstart = function() {
        return false
      };
      else if (typeof e.style.MozUserSelect != "undefined") e.style.MozUserSelect = "none";
      else e.onmousedown = function() {
        return false
      };
      e.style.cursor = "default"
    }
    window.onload = function() {
      disableSelection(document.body)
    }
  </script>
  <!--Kode untuk mematikan fungsi klik kanan di blog-->
  <!-- <script type="text/javascript">
    function mousedwn(e) {
      try {
        if (event.button == 2 || event.button == 3) return false
      } catch (e) {
        if (e.which == 3) return false
      }
    }
    document.oncontextmenu = function() {
      return false
    };
    document.ondragstart = function() {
      return false
    };
    document.onmousedown = mousedwn
  </script> -->
  <style type="text/css">
    
  </style>
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <style type="text/css">
    img {
      -webkit-touch-callout: none;
      -webkit-user-select: none;
    }
  </style>
  <!--Kode untuk mencegah shorcut keyboard, view source dll.-->
  <!-- <script type="text/javascript">
    window.addEventListener("keydown", function(e) {
      if (e.ctrlKey && (e.which == 65 || e.which == 66 || e.which == 67 || e.which == 73 || e.which == 80 || e.which == 83 || e.which == 85 || e.which == 86)) {
        e.preventDefault()
      }
    });
    document.keypress = function(e) {
      if (e.ctrlKey && (e.which == 65 || e.which == 66 || e.which == 67 || e.which == 73 || e.which == 80 || e.which == 83 || e.which == 85 || e.which == 86)) {}
      return false
    }
  </script>
  <script type="text/javascript">
    document.onkeydown = function(e) {
      e = e || window.event;
      if (e.keyCode == 123 || e.keyCode == 18) {
        return false
      }
    }
  </script> -->
  <!--========= PROTEKSI KONTEN =================-->
</head>

<body>
  <link href="<?= base_url('public') ?>/assets/css/style_SJ.css" rel="stylesheet" type="text/css" />
  <table width='80%' border='0'>
    <tr>
      <th width='596' align='center'>
        <h2>SURAT JALAN</h2>
      </th>
      <th width='200' rowspan='2' scope='col'>
        <img src='assets/img/logo.png' width='180' height='80' />
      </th>
    </tr>
    <tr>
      <th width='596' align='center'>
        <h5><?= $trip->t_id ?>/SJ-WEB/2021</h5>
      </th>
    </tr>
  </table>
  <table width='80%' border='0'>
    <tr>
      <th width='78' align='left'>Ship to</th>
      <th width='2' scope='col'>:</th>
      <th width='690' align='left'><?= $trip->t_customer_id ?></th>
    </tr>
    <tr>
      <th align='left'>Alamat</th>
      <th width='2' scope='col'>:</th>
      <th width='690' align='left'><?= $trip->t_trip_fromlocation ?></th>
    </tr>
    </tr>
  </table>
  <br />
  <table width='80%' border='0' bgcolor='#000000'>
    <tr bgcolor='#FFFFFF' height='40'>
      <th width='1%' scope='col'>No</th>
      <th width='3%' scope='col'>Kode Barang</th>
      <th width='10%' scope='col'>Nama Barang</th>
      <th width='4%' scope='col'>Batch</th>
      <th width='4%' scope='col'>Quantity</th>
      <th width='3%' scope='col'>Unit</th>
      <th width='10%' scope='col'>Keterangan</th>
    </tr>
    <?php $i = 0;
    foreach ($barang as $key) { ?>
      <tr bgcolor=white>
        <td align=center><?= ++$i ?></td>
        <td align=center><?= $key->e_expense_desc ?></td>
        <td align=center><?= $key->e_expense_type ?></td>
        <td align=center></td>
        <td align=center></td>
        <td align=center><?= $key->e_expense_amount ?></td>
        <td align=center></td>
      </tr>
    <?php } ?>
  </table>
  <br />
  <table width='80%' border='1'>
    <tr>
      <th width='201' scope='col'>Issued by</th>
      <th width='202' scope='col'>Aproved by</th>
      <th width='218' scope='col'>Delivered by</th>
      <th width='208' scope='col'>Received by</th>
    </tr>
    <tr>
      <th height='83' scope='row'>&nbsp;</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th align='left'>Name :</th>
      <th align='left'>Name :</th>
      <th align='left'>Name :</th>
      <th align='left'>Name :</th>
    </tr>
    <tr>
      <th align='left'>Date :</th>
      <th align='left'>Date :</th>
      <th align='left'>Date :</th>
      <th align='left'>Date :</th>
    </tr>
  </table>
  <label>
    <h5><?= $trip->t_id ?>/SJ-WEB/2021</h5>
  </label>
</body>
</html>

<script>
 window.print();
</script>
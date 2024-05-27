<h1>Data Kontak</h1>
<hr>

<div class="blog">
    <table border=1 cellpadding=5 cellspacing=0 style="background-color:white;">

        <thead>
            <tr>
                <th width="150px">Id</th>
                <th width="150px">Username</th>
                <th width="150px">Email</th>
                <th width="150px">Komentar</th>
                <th width="50px" >Edit</th>
            </tr>
            <?php
            $sql ="SELECT * FROM kontak";
            $data=$koneksi->query($sql);
            if($data->num_rows> 0 ){
                    foreach($data as $h){
                        
              ?>
              <tr>
                <th><?=$h['id_kontak']?> </th>
                <th><?=$h['username']?> </th>
                <th><?=$h['email']?> </th>
                <th><?=$h['komentar']?> </th>
                <th bgcolor="red">  <a href="hapus_kontak.php?id=<?= $h['id_kontak']?>"><input type="button" value="Delete"
                    style="background-color:red;color:white;border-radius:3px;width:50px;height:25px;margin-auto;" 
                    onclick="return confirm('yakin akan hapus data ini?')"></a> </th>
              </tr>
            

               <?php
                }
            }
               ?>

        </thead>

    </table>
</div>
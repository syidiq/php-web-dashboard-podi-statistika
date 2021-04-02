</form>
<?php


$stat = substr($page, 4);
$data1 = query("SELECT * FROM matkul WHERE status='$stat' ORDER BY AA");


?>
<div class="panel panel-warning" style=top:0;bottom:0;left:0;right:0;>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        	<th>No</th>
                                            <th>Nama</th>
                                            <th>Jumlah Terisi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $n = 1; ?>
                                    <?php foreach ($data1 as $dat ) : ?>
                                    	<tr>
                                    	<td> <?= $n; ?> </td>
                                    	<td> <?= $dat['nama']; ?> </td>
                                        <td> <?= jm($page,$dat['nama']); ?> </td>

                                    	</tr>
                                    <?php $n++  ?>
									<?php endforeach; ?>
									</tbody>

                                </table>
                            </div>
                        </div>
</div>
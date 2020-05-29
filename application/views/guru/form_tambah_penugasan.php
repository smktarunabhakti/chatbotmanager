<div class="container">

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Form Input Info Penugasan Siswa Melalui Telegram</h6>
		</div>
		<div class="card-body">

			<form action="<?php echo base_url('guru/proses_simpan_penugasan'); ?>" method="post">
				<table class="table table-bordered">

					<tr>
                        <?php foreach($namagr as $g): ?>
						<td>Nama Guru <input type="hidden" name="idguruajar" value="<?=$g->idguru?>"> </td>
						<td><input type="text" name="namaguru" disabled="disabled" value="<?=$g->nama_lengkap?>"
                                class="form-control col-md-8" id="nm"> </td>
                        <?php endforeach; ?>
					</tr>
					<tr>
                        <td>Mata Pelajaran </td>
                        <?php foreach($pelajaran as $p):
                           
                            ?>
						<td><input type="hidden" name="idmapel" value="<?=$idmapel?>"/> <input type="text" class="form-control col-md-8" disabled="disabled" name="nama" value="<?php echo $p->nama_mapel; ?>" id="">  </td><?php endforeach; ?>
                    </tr>
                    <tr>
						<td>Nomor dan Nama Kompetensi Dasar <input type="hidden" name="idmateri" value="<?=$idmateri?>"> </td>
						<td><input class="form-control col-md-10" type="text" value="<?php echo $materi; ?>" name="namakd" id="kd" /> </td>
                    </tr>
                    <tr>
						<td>Jenis Penugasan /Penilaian  </td>
						<td> <select class="form-control col-md-8" name="jenistugas" id="jenis">
                        <option value="Projek">Projek</option>
                        <option value="Portofolio">Portofolio</option>
                            <option value="UH">Ulangan Harian</option>
                            <option value="PTS">Penilaian Tengah Semester (PTS)</option>
                            <option value="PAS">Penilaian Akhir Semester (PAS)</option>
                        </select> </td>
                    </tr>
                    <tr>
						<td>Nama Tugas </td>
						<td><input class="form-control col-md-10" type="text" name="namatugas" id="nm" /> </td>
                    </tr>
                    <tr>
						<td>Deskripsi Tugas </td>
						<td><textarea col="30" row="4" class="form-control col-md-10" type="text" name="deskripsi" id="desk" ></textarea> </td>
                    </tr>
                    <tr>
						<td>Tanggal Tugas </td>
						<td><div class="form-inline">&nbsp;Tgl. Mulai : &nbsp;<input class="form-control col-md-3" type="date" name="tgl_mulai" id="ml" />&nbsp;Tgl. Selesai : &nbsp;<input class="form-control col-md-3" type="date" name="tgl_selesai" id="sl" /> </div></td>
                    </tr>
                    <tr>
						<td>Waktu  </td>
						<td><div class="form-inline">&nbsp;Jam Buka : &nbsp;<input class="form-control col-md-3" type="time" name="jam_buka" id="jb" />&nbsp;Jam Tutup : &nbsp;<input class="form-control col-md-3" type="time" name="jam_tutup" id="jt" /> </div></td>
					</tr>
                    <tr>
						<td>Tahun Pelajaran</td>
						<td><select class="form-control col-md-10" name="tapel" id="tapel">
								<?php for($i=2019;$i<=2022;$i++){
                                $i2=$i+1;
                                ?>
								<option value="<?=$i."/".$i2?>"><?php echo $i."/".$i2; ?></option>
								<?php } ?>
							</select></td>
					</tr>
                    

				</table>

				<table width="100%">
					<tr>
						<td><input type="submit" class="btn btn-primary" value="Simpan"> <a class="btn btn-success"
								href="<?php echo base_url('guru/daftar_penugasan_guru'); ?>">Kembali ke Daftar Materi
								dan Tugas</a></td>

					</tr>
				</table>


				<hr>

		</div>

		</form>

	</div>
</div>
</div>

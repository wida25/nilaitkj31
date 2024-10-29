<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Data Instruktur</div>
                <div class="col-4">
                    <a href="?m=instruktur&s=add" class="btn btn-lg btn-primary float-end"> Tambah</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nis</th>
                            <th>Nama Instruktur</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat lahir</th>
                            <th>Tanggal lahir</th>
                            <th>Jurusan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        include_once('config.php');
                        $sql = "SELECT teachers.id AS ids, teachers.nis, teachers.name AS names, teachers.gender, teachers.pob, teachers.dob, majors.name AS namem FROM teachers JOIN majors ON majors.id=teachers.major_id";
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result)) {
                            $no=1;
                            while ($r = mysqli_fetch_assoc($result)) {
                            echo '<tr>
                                <td>'.$no.'</td>
                                <td>'.$r['nis'].'</td>
                                <td>'.$r['names'].'</td>
                                <td>'.$r['gender'].'</td>
                                <td>'.$r['pob'].'</td>
                                <td>'.$r['dob'].'</td>
                                <td>'.$r['namem'].'</td>
                                <td>
                                    <a href="?m=instruktur&s=edit&id='.$r['ids'].'" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="?m=instruktur&s=delete&id='.$r['ids'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin instruktur akan dihapus? Menghapus instruktur akan menghilangkan semua data instruktur pada instruktur tersebut\')">Hapus</a>
                                </td>
                            </tr>';
                            $no++;
                        }
                        } else {
                            echo '<tr>
                            <td colspan="8" align="center">Data Kosong</td>
                            </tr>';
                        }
                        
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

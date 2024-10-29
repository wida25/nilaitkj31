<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">MataDiklat</div>
                <div class="col-4">
                    <a href="?m=matadiklat&s=add" class="btn btn-lg btn-primary float-end"> Tambah</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Guru</th>
                            <th>Mata Pelajaran</th>
                            <th>Jam Masuk</th>
                            <th>Jam Istirahat</th>
                            <th>Jam Pulang</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        include_once('config.php');
                        $sql = "SELECT students.id AS ids, students.nis, students.name AS names, students.gender, students.pob, students.dob, majors.id, majors.name AS namem FROM students JOIN majors ON students.major_id=majors.id";
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result)) {
                            $no=1;
                            while ($r = mysqli_fetch_assoc($result)) {
                            echo '<tr>
                                <td>'.$no.'</td>
                                <td>'.$r['Teachers Name'].'</td>
                                <td>'.$r['eh'].'</td>
                                <td>'.$r['Recess'].'</td>
                                <td>'.$r['tm'].'</td>
                                <td>
                                    <a href="?m=matadiklat&s=edit&id='.$r['id'].'" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="?m=matadiklat&s=delete&id='.$r['id'].'" class="btn btn-danger btn-sm" onclick="return confirm (\'Yakin matadiklat akan dihapus?, Menghapus matadiklat akan menghilangkan semua data matadiklat pada matadiklat tersebut\')">Hapus</a>
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

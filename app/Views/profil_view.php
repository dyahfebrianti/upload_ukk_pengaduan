<?=$this->extend('layouts/admin')?>
<?=$this->section('title')?>
    Edit profil
<?=$this->endsection()?>
<?=$this->section('content')?>
    <div class="col-md-6">
        <?php
        if (!empty(session()->getFlashdata("sukses"))):
        ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata("sukses")?>
    </div>
    <?php endif?>
    <div class="card">
        <div class="card-header">
            <h3>Edit profil</h3>
        </div>
        <form action="/editprofil" method="post">
            <div class="card-body">
                <?php
                    if(session('level')=='masyarakat'){

                        $id = $user[0]['id_masyarakat'];
                        $nama = $user[0]['nama'];
                        $username = $user[0]['username'];
                        $telp = $user[0]['telp'];
                    }else{
                        $id = $user[0]['id_petugas'];
                        $nama = $user[0]['nama_petugas'];
                        $username = $user[0]['username'];
                        $telp = $user[0]['telp'];
                    }
                    ?>
                    <input type="hidden" name='id' value="<?=$id?>">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" value="<?=$nama?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" value="<?=$username?>" class="form-control">  
                    </div>
                    <div class="form-group">
                        <label for="">Telepon</label>
                        <input type="text" name="telp" value="<?=$telp?>" class="form-control"> 
                    </div>
                    <div class="form-group">
                    <label for="">password lama<span class="text-danger">Kosongkan jika tidak ingin diganti</span></label>
                    <input type="password" name="password_old" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Password baru <span class="text-danger">Kosongkan jika tidak ingin diganti</span.></label>
                    <input type="password" name="password_new" class="form-control">
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update Profil</button>
                </div>
            </form>
        </div>
    </div>
<?=$this->endSection()?>    
    

        